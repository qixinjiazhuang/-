<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload; 
class ZtzController extends controller {

	//index
	public function index(){

		//实例化
		$model = M('renovation');

		//查询
		$data = $model->field('id,title,bpic,page,num')->order('num desc')->select();

		//发送数据
		$this->assign('data',$data);

		//加载模板
		$this->display();
	}

	//detail
	public function detail(){
		
		//获取id
		$id = I('get.id');

		//实例化
		$model = M('renovation');

		 //查询
		$data = $model->where('id='.$id)->find();

		//发送数据
		$this->assign('data',$data);

		//加载页面
		$this->display();
	}
}