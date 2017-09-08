<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class TenderController extends controller {

	public function index(){

		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

    	//查询所有用户,实例化model
    	$stu = M('tender');

    	 //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        $con = $_GET['keywords'];
        
        $data['phone'] = array('like', "%$con%");

        $u = [];
        $u['delete'] = 1;

    	$res = $stu->where($data)->select();
    
       	$count = $stu->where($data)->count();

       	//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        //装修方式
        $method = ['1'=>'全包','2'=>'半包'];

        //装修类型
        $type = ['1'=>'家装','2'=>'公装'];

        //风格
        $style = ['1'=>'中式','2'=>'欧式','3'=>'美式','4'=>'简约','5'=>'现代'];

        //状态
        $status = ['1'=>'未处理','2'=>'意向','3'=>'已签','4'=>'无效'];

        //审核
        $examine= ['1'=>'发布','2'=>'待审'];

        //预算
        $budget = ['1'=>'三万以下','2'=>'三万——五万','3'=>'五万——八万','4'=>'八万——十二万','5'=>'十二万以上'];

        //发送下列数据到模板
        $this->assign('method',$method);

        $this->assign('type',$type);

        $this->assign('style',$style);

        $this->assign('status',$status);

        $this->assign('budget',$budget);

        $this->assign('res',$res);

        $this->assign('show',$show);

        $this->assign('examine',$examine);

        //加载模板页面
		$this->display();
	}

	//add
	public function add(){

		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

    	//查询公司信息
    	$model = M('company');

    	//查询id 名称
    	$res = $model->field('id,c_name')->select();

    	$this->assign('res',$res);

		$this->display();
	}

	//执行添加动作方法
	public function insert(){	

		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

        //实例化模型
        $tender = M('tender');
		
		//获取member
		$member = I('post.member');

		//根据会员名查询该会员id
		$model = M('users');

		$dd['name'] = $member;

		//数据打包
		$data = $tender->create();
		
		//查询uid
		$data['uid'] = $model->where($dd)->find()['id'];

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
		
		//实例化文件上传类
    	$file = new \Think\Upload();

    	//设置上传配置信息
	    $file->savePath  =  '/tender/'; // 设置附件上传根目录

	    $filename = $file->saveName = time().mt_rand(00000000,99999999);

    	//执行上传
    	$info = $file->upload();

    	//判断
    	if(!$info){
    		$this->error($file->getError());
    	}
    	
    	$data['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
	
    	//执行添加
    	$res = $tender->add($data);
    
    	//判断
    	if($res){
    		$this->success('添加成功','/admin/tender/index');
    	}else{
    		$this->error('添加失败',$_SERVER['HTTP_REFERER']);
    	}
    	
	}

	//修改页面方法
	public function edit(){

		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

		//获取id
		$id = I('get.id');

		//实例化模型
		$model = M('tender');

		//查询出该条数据
		$res = $model->where('id='.$id)->find();
		
		//发送数据到模板
		$this->assign('res',$res);

		//加载模板
		$this->display();
	}

	//执行修改update
	public function update(){

		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('tender');

		//数据打包
		$data = $model->create();

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串

        if(!empty($_FILES['pic']['name'])){

        	//实例化文件上传类
	    	$file = new \Think\Upload();

	    	//设置上传配置信息
		    $file->savePath  =  '/tender/'; // 设置附件上传根目录
		    $filename = $file->saveName = time().mt_rand(00000000,99999999);

	    	//执行上传
	    	$info = $file->upload();

			//根据id查询出该条数据的图片路径信息
			$oldname = $model->where('id='.$id)->find()['photo'];

			//删除原图片以便于节省资源
			@unlink('./Uploads/'.$oldname);

			//拼接图片路径信息并压入数组
			$data['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
        }
        

		//修改数据库中的内容
		$res = $model->where('id='.$id)->save($data);

		//判断
		if($res){
			$this->success('修改成功','/admin/tender/index');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}

	}

	//执行删除动作
	public function delete(){

		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

		//获取id
		$id = I('get.id');
		dump($id);
		//实例化
		$model = M('tender');

		$res = $model->where('id='.$id)->delete();
			
		//判断
		if($res){
			$this->success('删除成功','/admin/tender/index');
		}else{
			$this->error('删除失败','/admin/tender/index');
		}
	}

	//ajax
	public function ajax(){

		$name = I('post.name');

		//根据用户名查询该条数据的用户
		$model = M('users');

		$data['name'] = $name;

		//执行查询
		$res = $model->where($data)->find();
		
		//判断
        if($res){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
	}

	public function small(){

		//判断
		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

    	//实例化
    	$model = M('small_tender');

    	 //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        //搜索
        $con = $_GET['keywords'];
        
        $data['phone'] = array('like', "%$con%");

		//查询所有small_tender表信息
		$res = $model->where($data)->order('status desc')->select();

		//统计条数
		$count = count($res);

		//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $sta = ['1'=>'未联系','2'=>'考虑中','3'=>'同意','4'=>'拒绝'];

        //发送数据
        $this->assign('res',$res);

        $this->assign('show',$show);

        $this->assign('sta',$sta);

        $this->display();
	}

	//同意
	public function agree(){

		//获取id
		$id = I('get.id');

		//实例化
		$small = M('small_tender');

		//执行修改
		$res = $small->where('id='.$id)->save(['status'=>3]);

		//判断
		if($res){
			$this->success('修改成功','/admin/tender/small');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}
	}

	//拒绝
	public function refuse(){

		//获取id
		$id = I('get.id');

		//实例化
		$small = M('small_tender');

		//执行修改
		$res = $small->where('id='.$id)->save(['status'=>4]);

		//判断
		if($res){
			$this->success('修改成功','/admin/tender/small');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}
	}

	public function think(){

		//获取id
		$id = I('get.id');

		//实例化
		$small = M('small_tender');

		//执行修改
		$res = $small->where('id='.$id)->save(['status'=>2]);

		//判断
		if($res){
			$this->success('修改成功','/admin/tender/small');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}
	}
}