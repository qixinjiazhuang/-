<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class MechanicController extends controller {

	//index 列表页面
	public function index(){

		//实例化
		$model = M('mechanic');

		//查询
		$data = $model->select();

		// dump($data);
		$this->display();
	}	

	public function detail(){

		$this->display();
	}
}