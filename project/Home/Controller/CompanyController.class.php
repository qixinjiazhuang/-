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

		$res = $model->join('__VCOMPANY__ ON __COMPANY__.id = __VCOMPANY__.gid')->join('__USERS__ ON __COMPANY__.uid = __USERS__.id')->field('company.id,audit,banner,c_name,introduce,m_value,praise')->order('m_value desc,praise desc')->select();

		$count = $model->join('__VCOMPANY__ ON __COMPANY__.id = __VCOMPANY__.gid')->join('__USERS__ ON __COMPANY__.uid = __USERS__.id')->field('company.id,audit,banner,c_name,introduce,m_value,praise')->count();

		//实例化分页模型
        $fors = new \Think\Page($count,10);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

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

		$vcompany = $vcompany->where('gid='.$id)->find();
	
		$b_case = M('b_case');

		$case = $b_case->where('gid='.$id)->select();

		$type = ['1'=>'小户型','2'=>'二居','3'=>'三居','4'=>'四居','5'=>'复式','6'=>'别墅'];

		$this->assign('type',$type);

		$this->assign('case',$case);
		
		//发送数据到模板
		$this->assign('vcompany',$vcompany);
		
		$this->assign('res',$res);
		dump($res);
		$this->display();
	}
}