<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class CaseController extends Controller {

	//index
	public function index(){

		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

        //查询所有用户,实例化model
        $stu = M('b_case');

         //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //获取搜索关键字
        $con = $_GET['keywords'];

        //关联查询所有数据
        $res = $stu->join('__COMPANY__ ON __B_CASE__.gid = __COMPANY__.id')->field('COMPANY.c_name,B_CASE.*')->order('audit asc')->select();

        $count = count($res);
        
        //实例化分页模型
        $fors = new \Think\Page($count,5);

        //配置分页样式
        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        $type = ['1'=>'小户型','2'=>'二居','3'=>'三居','4'=>'四居','5'=>'复式','6'=>'别墅'];

        $audit = ['1'=>'未通过','2'=>'已通过','3'=>'拒绝'];

        //分页展示
        $show = $fors->show();

        //发送数据
        $this->assign('res',$res);

        $this->assign('audit',$audit);

        $this->assign('type',$type);

        $this->assign('show',$show);
        
		$this->display();
	}

	public function add(){

		//查询所有装修公司
		$model = M('company');

        //查询公司的id和名称
		$res = $model->field('id,c_name')->select();

        //发送数据到模板
		$this->assign('res',$res);

        //加载模板
		$this->display();
	}

	public function insert(){

        //获取用户名
		$name = I('post.member');

		$dd['name'] = $name;

        //实例化
		$model = M('users');

        //根据用户名查看该用户id，下面存储使用
		$data['uid'] = $model->field('id')->where($dd)->find()['id'];

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串

        //准备数据
        $data['title'] = I('post.title'); //标题

        $data['cellname'] = I('post.cellname');//小区名

        $data['type'] = I('post.type');//户型

        $data['idea'] = I('post.idea');//设计思路

        $data['gid'] = I('post.gid');//公司id\
        
        $data['fid'] = I('post.fid');//工长

        $data['did'] = I('post.did');//设计师

        //实例化文件上传类
        $file = new \Think\Upload();

        //设置上传配置信息
        $file->savePath  =  '/case/'; // 设置附件上传根目录

        //执行上传
        $info = $file->upload($_FILES);
        
        //遍历图片
        foreach ($info as $key => $value) {

            //判断图片的字段是logo还是pic  如果是pic 做以下拼接处理
            if($value['key'] == 'pic'){

                $res[] = $value['savepath'].$value['savename'];
                $data['pic'] = implode(',', $res);
            }

            //如果是logo直接取值
            if($value['key'] == 'logo'){

                $data['logo'] = $value['savepath'].$value['savename'];
            }
            
        }

        //实例化
        $num = M('b_case');

        //执行添加
        $res = $num->add($data);

        //判断
        if($res){
        	$this->success('添加成功','/admin/case/index');
        }else{
        	$this->error('添加失败',$_SERVER['HTTP_REFERER']);
        }

	}

	public function edit(){

		//获取id
		$id = I('get.id');
	
		//根据id查询该条数据
		$model = M('b_case');

		//实例化company表
		$dd = M('company');

		//查询所有的公司名称和id
		$com = $dd->field('id,c_name')->select();

		$res = $model->where('id='.$id)->find();

		$this->assign('res',$res);

		$this->assign('com',$com);

		$this->display();
	}

	public function update(){

        //获取id
        $id = I('get.id');

        $data['title'] = I('post.title');

        $data['cellname'] = I('post.cellname');

        $data['gid'] = I('post.gid');

        $data['type'] = I('post.type');

        $data['audit'] = I('post.audit');

        $data['idea'] = I('post.idea');

        $data['did'] = I('post.did');

        $data['fid'] = I('post.fid');

        $model = M('b_case');
        
        //实例化文件上传类
        $file = new \Think\Upload();

        //设置上传配置信息
        $file->savePath  =  '/case/'; // 设置附件上传根目录

        //执行上传
        $info = $file->upload($_FILES);


        //遍历图片
        foreach ($info as $key => $value) {

            //判断图片的字段是logo还是pic  如果是pic 做以下拼接处理
            if($value['key'] == 'pic'){

                $res[] = $value['savepath'].$value['savename'];
                $a = implode(',', $res); 
            }

            if($value['key'] == 'logo'){
                $b = $value['savepath'].$value['savename'];
            }

        }

        //判断pic名字不为空执行删除 pic名字不为空代表上传了图片，才可以删除原图片
        if($a!=null){

            //拼接准备数据
            $data['pic'] = $a;

            //
            $oldname = $model->where('id='.$id)->find()['pic'];

            $dd = explode(',', $oldname);
        
            foreach ($dd as $key => $value) {
                @unlink('./Uploads/'.$value);
            }
        }

        if($b!=null){

            $data['logo'] = $b;

            $oname = $model->where('id='.$id)->find()['logo'];

            @unlink('./Uploads/'.$oname);

        } 
       
        //执行修改
        $res = $model->where('id='.$id)->save($data);

        //判断
        if($res){
            $this->success('修改成功','/admin/case/index');
        }else{
            $this->error('修改失败',$_SERVER['HTTP_REFERER']);
        }
	}

	public function delete(){

        //获取id
        $id = I('get.id');

        //实例化
        $model = M('b_case');

        //执行删除
        $res = $model->where('id='.$id)->delete();

        //判断
        if($res){
            $this->success('删除成功','/admin/case/index');
        }else{
            $this->error('删除失败',$_SERVER['HTTP_REFERER']);
        }
	}

	public function ajax(){

		//接收ajax
		$member = I('post.name');

		$model = M('users');

		$data['name'] = $member;

		//查询该条数据
		$res = $model->field('id')->where($data)->find();

		//判断
		if($res){
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn(2);
		}

	}

    //myajax
    public function myajax(){

        //获取id
        $gid = I('get.gid');

        //实例化
        $model = M('users');

        $data = $model->join('__FOREMAN__ ON __USERS__.id = __FOREMAN__.uid')->field('truename,users.id')->where('gid='.$gid)->select();

        $this->ajaxReturn($data);
    }

    public function desajax(){

        //获取id
        $id = I('get.gid');

        //实例化
        $model = M('users');

        $data = $model->join('__DESIGNER__ ON __USERS__.id = __DESIGNER__.uid')->field('users.truename,users.id')->where('gid='.$id)->select();

        $this->ajaxReturn($data);
    }

    public function v_case(){

        //获取id
        $id = I('get.id');

        //发送数据到模板
        $this->assign('id',$id);

        //加载模板
        $this->display();
    }

    public function addcase(){

        //获取id
        $cid = I('post.cid');

        //实例化v_case
        $model = M('v_case');

        //查询
        $over = $model->where('cid='.$cid)->find();

        //判断
        if($over){
            $this->error('该案例已添加属性',$_SERVER['HTTP_REFERER']);
        }

        //数据打包
        $data = $model->create();

        //添加数据库
        $res = $model->add($data);

        //判断
        if($res){
            $this->success('属性添加成功','/admin/case/index');
        }else{
            $this->error('属性添加失败',$_SERVER['HTTP_REFERER']);
        }
    }   

    public function e_case(){

        //获取id
        $id = I('get.id');

        //实例化
        $model = M('v_case');

        //查询,
        $data = $model->where('cid='.$id)->find();

        //发送数据到模板
        $this->assign('data',$data);

        //加载模板
        $this->display();
    }

    public function updatecase(){

        //获取id
        $id = I('get.id');

        //实例化
        $model = M('v_case');

        //数据打包
        $data = $model->create();

        //执行修改
        $res = $model->where('id='.$id)->save($data);

        //判断
        if($res){
            $this->success('属性修改成功','/admin/case/index');
        }else{
            $this->error('属性修改失败',$_SERVER['HTTP_REFERER']);
        }
    }


}