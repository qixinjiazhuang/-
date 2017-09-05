<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends Controller {

	//index
	public function index(){

		//实例化case表
		$case = M('b_case');

		 //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

		$res = $case->join('__COMPANY__ ON __COMPANY__.id = __B_CASE__.gid')->field('b_case.id,title,logo,type,c_name')->select();

		//计算数据条数
		$count = count($res);

		//实例化分页模型
        $fors = new \Think\Page($count,10);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

		//设置类型数组	
		$type = ['1'=>'小户型','2'=>'二居','3'=>'三居','4'=>'四居','5'=>'复式','6'=>'别墅'];

		//发送数据
		$this->assign('res',$res);

		$this->assign('type',$type);

		$this->assign('show',$show);
		
		$this->display();
	}

	public function detail(){

		//获取id
		$id = I('get.id');

		//实例化b_case表
		$case = M('b_case');

		//查询该条id的数据
		$res = $case->where('id='.$id)->find();
		
		$res['pic'] = explode(',', $res['pic']);
		
		//发送数据
		$this->assign('res',$res);

		//加载模板 
		$this->display();
	}

}