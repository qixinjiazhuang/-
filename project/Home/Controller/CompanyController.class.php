<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;

class CompanyController extends Controller {

	//index
	public function index(){

		//实例化
		$model = M('company');

		if(!$_GET['p']){
            $_GET['p'] = 1;
        }

		$res = $model->join('__VCOMPANY__ ON __COMPANY__.id = __VCOMPANY__.gid')->join('__USERS__ ON __COMPANY__.uid = __USERS__.id')->field('company.id,audit,banner,c_name,introduce,m_value,praise,delete,audit')->where('users.delete=1 AND users.audit=2')->order('m_value desc,praise desc')->select();
	
		// $count = count($res);

		// //实例化分页模型
  //       $fors = new \Think\Page($count,10);

  //       $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

  //       $res = array_slice($res, $fors->firstRow,$fors->listRows);

  //       //分页展示
  //       $show = $fors->show();

		$this->assign('res',$res);

		$this->assign('show',$show);

		$this->display();
	}

	public function detail(){

		//获取id 根据公司id查询设计师表 ，案例表 ， 装修公司表
		$id = I('get.id');

		//实例化
		$company = M('company');

		$res = $company->where('id='.$id)->find();

		//公司属性表
		$vcompany = M('vcompany');

		//查询属于该公司的属性信息
		$vcompany = $vcompany->where('gid='.$id)->find();
		
		//查询属于该公司的案例  实例化
		$b_case = M('b_case'); 

		//进行查询
		$case = $b_case->where('gid='.$id)->select();

		//当前公司案例条数
		$case_count = $b_case->where('gid='.$id)->count();
	
		//查询属于该公司的设计师
		$des = M('designer');

		$designer = $des->join('__USERS__ ON __USERS__.id = __DESIGNER__.uid')->field('users.id,truename,photo')->where('gid='.$id)->limit('5')->select();
		
		//该公司旗下的所有设计师总数
		$des_count = $des->join('__USERS__ ON __USERS__.id = __DESIGNER__.uid')->field('users.id,truename,photo')->where('gid='.$id)->limit('5')->count();

		//发送数据 1. 准备户型数组
		$type = ['1'=>'小户型','2'=>'二居','3'=>'三居','4'=>'四居','5'=>'复式','6'=>'别墅'];

		//实例化工长表
		$foreman = M('foreman');

		//查询该公司旗下工长
		$foreman = $foreman->join('__USERS__ ON __USERS__.id = __FOREMAN__.uid')->field('users.id,photo,truename')->where('gid='.$id)->select();
		
		$for_count = count($foreman);

		//发送户型信息
		$this->assign('type',$type);

		//发送案例信息
		$this->assign('case',$case);

		//查询该公司案例条数
		$this->assign('case_count',$case_count);
		
		//发送数据到模板
		$this->assign('vcompany',$vcompany);

		//发送设计师信息
		$this->assign('designer',$designer);

		//发送该公司旗下的所有设计师总数
		$this->assign('des_count',$des_count);

		//发送该公司旗下工长
		$this->assign('foreman',$foreman);

		//发送该公司旗下工长总数
		$this->assign('for_count',$for_count);
		
		//发送公司信息
		$this->assign('res',$res);
		
		$this->display();
	}

	public function add(){

		//表单验证 手机号码
		$rule = array(
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),          
        );

		//实例化模型
		$model = M('small_tender');

		if(!$model->field('phone')->validate($rule)->create()){
		 	$this->error($model->getError());
		 }
		
		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串

        //电话号码
        $data['phone'] = I('post.phone');

        //真实姓名
        $data['truename'] = I('post.truename');

    	//实例化
    	$model = M('small_tender');

    	//执行添加
    	$res = $model->add($data);
    	
    	//判断是否添加成功
    	if($res){
    		$this->success('恭喜您, 申请成功',$SERVER['HTTP_REFERER']);
    	}else{
    		$this->error('抱歉, 申请失败',$SERVER['HTTP_REFERER']);
    	}
	}

	//tender
	public function tender(){

		//获取type类型
		$type = I('get.type');

		//表单验证 手机号码
		$rule = array(
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),
        );

		//实例化模型
		$model = M('small_tender');

		if(!$model->field('phone')->validate($rule)->create()){
		 	$this->error($model->getError());
		 }

		if($type == 1){

			//数据打包
			$data = $model->create();

			//添加
			$res = $model->add($data);

			//判断
			if($res){
				$this->success('预约成功','/home/index/index');
			}else{
				$this->error('预约失败','/home/index/index');
			}
		}else if($type == 2){

			//数据打包
			$data = $model->create();

			//添加
			$res = $model->add($data);

			//判断
			if($res){
				$this->success('预约成功','/home/index/index');
			}else{
				$this->error('预约失败','/home/index/index');
			}
		}	


	}
}