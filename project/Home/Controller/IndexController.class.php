<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	
    	//查询公司
    	$company = M('company');

    	//查询6条数据
    	$company = $company->field('id,c_name,introduce,banner')->limit('6')->select();

    	//发送数据
    	$this->assign('company',$company);

    	//加载模板
    	$this->display();
    }
}