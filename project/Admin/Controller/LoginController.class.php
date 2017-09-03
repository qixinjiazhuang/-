<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	//展示页面
    public function index(){
    	
    	//加载模板
    	$this->display();
    }

    //执行登陆
    public function dologin(){
    	
    	//实例化模型
    	$model = D('admin_user');

    	//数据打包
    	$data = $model -> create();

    	//这是提取页面上打字输入的code即验证码
    	$code= I('post.code');   

    	//生命校验验证码函数
  		function check_code($code, $id = ""){  
  			$verify = new \Think\Verify();  
  			return $verify->check($code, $id);  
  		}  

    	//给function.php中定义的函数check_code，然后它返回真假
        if(check_code($code) === false){       
        	$this->error('验证码错误',$_SERVER['HTTP_REFERER'],1);
        }

    	//校验密码
    	$data['password'] = md5($data['password']);

    	//定义空数组
       	$arr = [];

       	//重新处理数据
    	$arr['name'] = $data['name'];

    	//查询密码
    	$pass = $model->where($arr)->find();
   	
   		//判断密码是否相等
   		if($data['password'] != $pass['password']){
   			$this->error('用户名或密码错误',$_SERVER['HTTP_REFERER'],1);
   		}else{
   			session('user',$pass);
   			$this->success('登陆成功','/admin/index',1);
   		}
    }

    //退出登陆
    public function logout(){
    	//判断
    	if(session('user')){
    		session('user',null);
    		$this->success('退出成功','/admin/login/index',1);
    	}

    }

}