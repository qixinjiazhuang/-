<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index(){

		if(session('home_user')){

			$this->error('请不要重复登录','/home/index/index');
		}
		$this->display();
	}

	//执行登录
	public function dologin(){

		//实例化
		$model = M('users');

		$remember_token = cookie('remember_token');

		if($remember_token){

			$dd = $model->where('remember_token',$remember_token)->find();

			$model->where('id='.$dd['id'])->save(['lastlogin'=>time()]);

			session('home_user',$dd);

			$this->success('登录成功','/home/index/index');
			die;
		}

		//获取用户名
		$name = I('post.name');

		//定义数组
		$map['users.name|users.phone|users.email'] = array('eq', (string)$name);

		$res = $model->where($map)->find();

		//获取密码
		$password = md5(I('post.password'));

		//判断两次密码是否相等
		if($password!=$res['password']){

			$this->error('用户名或密码不正确',$_SERVER['HTTP_REFERER']);

		}else{

			//存储session
			session('home_user',$res);

			//判断是否记住
			if(I('post.remember_me')){
				cookie('remember_token',$res['remember_token'],3600);
			}

			//修改最后登录时间
			$model->where('id='.$res['id'])->save(['lastlogin'=>time()]);
			
			$this->success('登录成功','/home/index/index');

		}
	}

	public function ajax(){

		//获取ajax传递过来的name
		$name = I('post.name');
		
		$model = M('users');

		//定义数组
		$map['users.name|users.phone|users.email'] = array('eq', (string)$name);

		//查询数据 
		$res = $model->where($map)->find();

		//判断
		if($res){
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn(2);
		}
	}	

	//退出
	public function logout(){

		if(session('home_user')){

			session('home_user',null);

			
		}
		
		$this->success('退出成功','/home/index/index',1); 	
		
	}
}