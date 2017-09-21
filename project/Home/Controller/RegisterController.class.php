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

        //如果type=1 用户类型为业主
        if($type == 1){

        	//实例化member表
        	$member = M('member');

        	//获取uid
        	$mm['uid'] = $res;

        	//分类id
        	$mm['tid'] = $type;

        	//执行添加
        	$member->add($mm);
        }

        //如果type=2 用户类型为装修公司
        if($type == 2){

        	//实例化company表
        	$company = M('company');

        	//获取uid
        	$cc['uid'] = $res;

        	//获取分类id
        	$cc['tid'] = $type;

        	$company->add($cc);
        }

        //如果type=3 用户类型为设计师designer
        if($type == 3){

        	//实例化desigber表
        	$designer = M('designer');

        	//获取uid
        	$dd['uid'] = $res;

        	//获取tid
        	$dd['tid'] = $type;

        	//执行添加
        	$designer->add($dd);
        }

        //如果type=4 用户类型为商家
        if($type == 4){

        	//实例化business
        	$business = M('business');

        	//获取uid
        	$bb['uid'] = $res;

        	//获取tid 
        	$bb['tid'] = $type;

        	$business->add($bb);
        }

        //如果type=5 用户类型为技工
        if($type == 5){

        	//实例化
        	$mechanic = M('mechanic');

        	//获取uid
        	$mm['uid'] = $res;

        	//获取tid
        	$mm['tid'] = $type;

        	//执行添加
        	$mechanic->add($mm);
        }

        //如果type=6 用户类型工长
        if($type == 6){

        	//实例化
        	$foreman = M('foreman');

        	//获取uid
        	$ff['uid'] = $res;

        	//获取tid
        	$ff['tid'] = $type;

        	//执行添加
        	$foreman->add($ff);
        }


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

        //获取验证码
	public function code(){        

                $phone = I('post.phone');


                $code = mt_rand('000000','999999');

                function do_get($app_key, $app_secret, $request_host, $request_uri, $request_method, $request_paras, &$info) {
                    ksort($request_paras);
                    $request_header_accept = "application/json;charset=utf-8";
                    $content_type = "";
                    $headers = array(
                            'X-Ca-Key' => $app_key,
                            'Accept' => $request_header_accept
                            );
                    ksort($headers);
                    $header_str = "";
                    $header_ignore_list = array('X-CA-SIGNATURE', 'X-CA-SIGNATURE-HEADERS', 'ACCEPT', 'CONTENT-MD5', 'CONTENT-TYPE', 'DATE');
                    $sig_header = array();
                    foreach($headers as $k => $v) {
                        if(in_array(strtoupper($k), $header_ignore_list)) {
                            continue;
                        }
                        $header_str .= $k . ':' . $v . "\n";
                        array_push($sig_header, $k);
                    }
                    $url_str = $request_uri;
                    $para_array = array();
                    foreach($request_paras as $k => $v) {
                        array_push($para_array, $k .'='. $v);
                    }
                    if(!empty($para_array)) {
                        $url_str .= '?' . join('&', $para_array);
                    }
                    $content_md5 = "";
                    $date = "";
                    $sign_str = "";
                    $sign_str .= $request_method ."\n";
                    $sign_str .= $request_header_accept."\n";
                    $sign_str .= $content_md5."\n";
                    $sign_str .= "\n";
                    $sign_str .= $date."\n";
                    $sign_str .= $header_str;
                    $sign_str .= $url_str;

                    $sign = base64_encode(hash_hmac('sha256', $sign_str, $app_secret, true));
                    $headers['X-Ca-Signature'] = $sign;
                    $headers['X-Ca-Signature-Headers'] = join(',', $sig_header);
                    $request_header = array();
                    foreach($headers as $k => $v) {
                        array_push($request_header, $k .': ' . $v);
                    }

                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, $request_host . $url_str);
                    //curl_setopt($ch, CURLOPT_HEADER, true);
                    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
                    curl_setopt($ch, CURLOPT_VERBOSE, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $request_header);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $ret = curl_exec($ch);
                    $info = curl_getinfo($ch);
                    curl_close($ch);
                    return $ret;


                }

                $app_key = "24627886";
                $app_secret = "f4b044bc5f7d987584fa730dbec56ef3";
                $request_paras = array(
                        'ParamString' => "{'name':'".$code."'}",
                        'RecNum' => $phone,
                        'SignName' =>'恋家家装', 
                        'TemplateCode' => 'SMS_97085020'
                        );

                $request_host = "http://sms.market.alicloudapi.com";
                $request_uri = "/singleSendSms";
                $request_method = "GET";
                $info = "";
                $content = do_get($app_key, $app_secret, $request_host, $request_uri, $request_method, $request_paras, $info);
                
                $this->ajaxReturn($code);
                # print_r($info);  // 系统请求返回信息
        }

}