<?php
namespace Admin\Controller;
use Think\Controller;
class CodeController extends Controller {
    public function index(){

    	//配置验证码
    	$config = array(
    	'length' => 4,
    	'useNoise' => false,
    		);

    	//实例化模型
    	$Verify = new\Think\Verify($config);

    	//调用验证码
    	$Verify -> entry();
    	
    }
}