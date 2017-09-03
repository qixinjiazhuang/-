<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {

	//index
	public function index(){

		//加载模板
		$this->display();
	}

	//register
	public function register(){

		//获取get传递过来的type值
		$type = I('get.type');

		//发送数据到模板
		$this->assign('type',$type);

		//加载模板
		$this->display();
	}

	public function doreg(){

		//获取当前类型号
		$type = I('get.type');

		$model = M('users');

		//密码加密
		$data['password'] = md5(I('post.pwd'));

		$data['phone'] = I('post.phone');

		$data['type'] = $type;

		//随机函数
		function getRandChar($length){
		   $str = null;
		   $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
		   $max = strlen($strPol)-1;

		   for($i=0;$i<$length;$i++){
		    $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
		   }

		   return $str;
		}

		// 处理token
        $data['remember_token'] = getRandChar(50);

        $res = $model->add($data);

        $num = $model->where('id='.$res)->find();

        //存入session
        session('home_user',$num);

        if($num && $res){
        	$this->success('登录成功','/home/index');
        }else{
        	$this->error('登录失败',$_SERVER['HTTP_REFERER']);
        }
	}	

	public function pajax(){

		//获取ajax传递过来的值
		$phone = I('post.phone');

		//手机号正则
		$reg = '/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/';

		//正则匹配验证是否合法
		$res = preg_match_all($reg,$phone);

		//判断是否合法
		if($res){

			$model = M('users');

			//查询数据库中的电话号码是否存在
			$data =	$model->where('phone='.$phone)->find();
		}else{
			//输入的手机号不合法，请重新输入
			return $this->ajaxReturn(1);
		}

		//进行判断
		if($data){
			//该手机已经注册
			return $this->ajaxReturn(2);
		}else{
			//该手机号可以使用
			return $this->ajaxReturn(3);
		}

	}

	public function code(){

		$accessKeyId = "LTAIippyPkZuz8b5"; //阿里云申请的 Access Key ID
		$accessKeySecret = 'EEjwIqYbEALdptQIadNeE1LxgoRzL5'; //阿里云申请的 Access Key Secret
		$alisms = new \Common\Model\Alisms($accessKeyId,$accessKeySecret);
		$mobile = '13126991105'; //目标手机号，多个手机号可以逗号分隔
		$code = 'SMS_36225243'; //短信模板的模板CODE
		$paramString = '{"code":"344556"}'; //短信模板中的变量；,参数格式{"no": "123456"}
		$re = $alisms->smsend($mobile,$code,$paramString);
		print_r($re);

	}

}