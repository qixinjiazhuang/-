<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	if(!session('user')){
    		$this->error('请先登录','/admin/login/index',1);
    	}
    	$this->display();
    }
}