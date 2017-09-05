<?php
namespace Home\Controller;
use Think\Controller;
class DesignerController extends Controller {

	//index
	public function index(){

		//查询所有设计师
		$model = M('designer');

		if(!$_GET['p']){
            $_GET['p'] = 1;
        }

		$res = $model->join('__USERS__ ON __USERS__.id = __DESIGNER__.uid')->select();

		$count = count($res);
		//实例化分页模型
        $fors = new \Think\Page($count,10);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();
		// ->field('users.id,audit,photo,school,truename,concept')
		$concept = ['1'=>'中式','2'=>'欧式','3'=>'美式','4'=>'简约','5'=>'现代'];

		$this->assign('concept',$concept);

		$this->assign('res',$res);
		//查询
		$this->display();
	}

	//详情
	public function detail(){

		$this->display();
	}
}