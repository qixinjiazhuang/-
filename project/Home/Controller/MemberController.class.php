<?php
namespace Home\Controller;
use Think\Controller;
class  MemberController extends Controller {

	//index
	public function index(){

		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}

		//获取session数据
		$user = session('home_user');

		$arr = ['1'=>'业主','2'=>'公司','3'=>'设计师','4'=>'商家','5'=>'技工','6'=>'工长'];

		//获取用户类型
		$type = $user['type'];

		//判断用户类型  1为业主 
		if($type == 1){

			//实例化member表
			$member = M('member');

			//查询
			$member = $member->where('uid='.$user['id'])->find();
			
			//判断member是否存在
			if($member){
				session('home_type',$member);
			}
			
		}

		//2.公司
		if($type == 2){

			//实例化company
			$company = M('company');

			//查询
			$company = $company->where('uid='.$user['id'])->find();

			//判断
			if($company){
				session('home_type',$company);
			}
		}

		//3.设计师
		if($type == 3){

			//实例化designer
			$designer = M('designer');

			//查询
			$designer = $designer->where('uid='.$user['id'])->find();

			//判断
			if($designer){
				session('home_type',$designer);
			}

		}

		//4,商家business
		if($type == 4){

			//实例化
			$business = M('business');

			//查询
			$business = $business->where('uid='.$user['id'])->find();

			//判断
			if($business){
				session('home_type',$business);
			}
		}

		//5.技工
		if($type == 5){

			//实例化
			$mechanic = M('mechanic');

			//查询
			$mechanic = $mechanic->where('uid='.$user['id'])->find();

			//判断
			if($mechanic){
				session('home_type',$mechanic);
			}
		}

		//6.工长
		if($type == 6){

			//实例化
			$foreman = M('foreman');

			//查询
			$foreman = $foreman->where('uid='.$user['id'])->find();

			//判断
			if($foreman){
				session('home_type',$foreman);
			}
		}

		//发送到模板
		$this->assign('user',$user);

		$this->assign('arr',$arr);

		//加载模板
		$this->display();
	}

	//加载修改个人信息页面
	public function info(){

		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}

		$id = session('home_user')['id'];

		//实例化
		$model = M('users');

		//查询
		$user = $model->where('id='.$id)->find();

		$this->assign('user',$user);

		//加载模板
		$this->display();
	}

	//执行修改个人信息方法
	public function doinfo(){
		
		//获取用户id
		$id = I('get.id');
		
		//实例化
		$model = M('users');

		//处理数据
		$data = $model->create();

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
		
		//执行修改
		$res = $model->where('id='.$id)->save($data);

		//判断是否修改成功
		if($res){
			$this->success('修改成功',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}

	}

	public function passwd(){

		//获取session中的id
		$id = session('home_user')['id'];

		//实例化users表
		$model = M('users');

		//查询数据
		$user = $model->where('id='.$id)->find();

		//发送数据到模板
		$this->assign('user',$user);

		//加载模板
		$this->display();
	}

	//执行修改密码
	public function dopwd(){
	dump($_POST);
	die;
		$rule=array(
            array('password','checkPwd','密码格式不正确',0,'function'),
            array('name','unique','帐号名称已经存在！',0,'unique',1),
            array('email','unique','该邮箱已经存在！',0,'unique',1),
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),          
        );

		//实例化模型
		$model = M('users');

		 if(!$model->field('name,password,email,phone')->validate($rule)->create()){
		 	$this->error($model->getError());
		 }
		
	}

	public function myzx(){
		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}
		$this->display();
	}

	public function myzxb(){
		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}
		$this->display();
	}

	public function face(){
		
		$this->display();
	}

	public function myface(){
		dump($_FILES);
	}
}