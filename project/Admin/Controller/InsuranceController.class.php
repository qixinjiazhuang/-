<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class InsuranceController extends Controller {

	//index
	public function index(){

		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

        //查询所有用户,实例化model
        $stu = M('users');

         //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        //获取搜索关键字
        $con = $_GET['keywords'];

        $data['i_phone'] = array('like', "%$con%");

         //关联查询所有数据
        $res = $stu->join('__INSURANCE__ ON __USERS__.id = __INSURANCE__.uid')->join('__COMPANY__ ON __INSURANCE__.gid = __COMPANY__.id')->where($data)->select();

        $count = $stu->join('__INSURANCE__ ON __USERS__.id = __INSURANCE__.uid')->where($data)->count();

        //实例化分页模型
        $fors = new \Think\Page($count,5);

        //配置分页样式
        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $this->assign('res',$res);

        $this->assign('show',$show);
        
		$this->display();
	}

	//加载添加页面
	public function add(){

		$model = M('company');

		$res = $model->field('id,c_name')->select();

		$this->assign('res',$res);

		$this->display();
	}

	//添加信息动作方法
	public function insert(){

		//获取member
		$member = I('post.member');

		$data['name'] = $member;

		//实例化insurance表
		$insurance = M('insurance');

		$res = $insurance->create();

		//实例化users
		$model = M('users');

		//查询该条数据id
		$id = $model->field('id')->where($data)->find()['id'];

		$res['uid'] = $id;

		$tender = M('tender');
	
		$dd['name'] = I('post.i_name');
	
		$res['bid'] = $tender->where('uid='.$id)->where($dd)->find()['id'];

		//创建时间
		$res['time'] = time();
			
		//执行添加
		$uu = $insurance->add($res);

		//判断
		if($uu){
			$this->success('添加成功','/admin/insurance/index');
		}else{
			$this->error('添加失败',$_SERVER['HTTP_REFERER']);
		}
	}	

	//加载修改页面
	public function edit(){

		//获取id
		$id = I('get.id');
			
		//实例化
		$model = M('insurance');

		//查询该条数据
		$res = $model->where('id='.$id)->find();

		//实例化company表
		$dd = M('company');

		//查询所有的公司名称和id
		$com = $dd->field('id,c_name')->select();

		//发送数据到模板
		$this->assign('com',$com);

		$this->assign('res',$res);

		$this->display();
	}	

	//执行修改动作
	public function update(){

		//获取id
		$id = I('get.id');

		//实例化insurance表
		$model = M('insurance');

		//数据处理
		$res = $model->create();

		//执行修改
		$data = $model->where('id='.$id)->save($res);

		//判断
		if($data){
			$this->success('修改成功','/admin/insurance/index');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}
	}	

	//删除
	public function delete(){

		//获取id
		$id = I('get.id');

		//实例化模型 
		$model = M('insurance');

		//执行删除
		$res = $model->where('id='.$id)->delete();

		//判断
		if($res){
			$this->success('删除成功',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('删除失败',$_SERVER['HTTP_REFERER']);
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

	public function see(){

		$id = I('get.id');
		
		$model = M('tender');

		$res = $model->where('id='.$id)->find();

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

        $this->assign('method',$method);

        $this->assign('type',$type);

        $this->assign('style',$style);

        $this->assign('status',$status);

        $this->assign('examine',$examine);

        $this->assign('budget',$budget);

		$this->assign('res',$res);
		
		$this->display();
	}
}