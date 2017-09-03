<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class AboutusController extends Controller {

	public function index(){

		//查询
		$model = M('aboutus');

		$res = $model->select();

		$sta = ['1'=>'显示','2'=>'隐藏'];

		$this->assign('sta',$sta);

		$this->assign('res',$res);

		$this->display();
	}

	public function add(){

		$this->display();
	}

	public function insert(){

		//实例化
		$model = M('aboutus');

		//数据打包
		$data = $model->create();

		//添加时间
		$data['time'] = time();

		//执行添加
		$res = $model->add($data);

		//判断
		if($res){
			$this->success('添加成功','/admin/aboutus/index');
		}else{
			$this->error('添加失败',$_SERVER['HTTP_REFERER']);
		}
	}

	public function edit(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('aboutus');

		$res = $model->where('id='.$id)->find();

		$this->assign('res',$res);
		//加载模板
		$this->display();
	}

	public function update(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('aboutus');

		$data = $model->create();

		$res = $model->where('id='.$id)->save($data);

		if($res){
			$this->success('修改成功','/admin/aboutus/index');
		}else{
			$this->error('添加失败',$_SERVER['HTTP_REFERER']);
		}
	}

	public function delete(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('aboutus');

		//执行删除
		$res = $model->where('id='.$id)->delete();

		if($res){
			$this->success('删除成功','/admin/aboutus/index');
		}else{
			$this->error('删除失败',$_SERVER['HTTP_REFERER
				 ']);
		}
	}

}