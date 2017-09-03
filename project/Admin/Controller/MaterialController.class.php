<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class MaterialController extends Controller {
	
	//index
	public function index(){

		//实例化
		$model = M('material');

		$data = $model->field("id,name,pid,path,concat(path,'-',id) as newpath")->order('newpath')->select();

		foreach($data as $key=>$val){

			$num = substr_count($val['path'], '-');
			
            $data[$key]['name'] = str_repeat('|---', $num).$data[$key]['name'];
		}

		
		//发送数据到模板
		$this->assign('data',$data);

		$this->display();
	}	

	//添加
	public function add(){

		$model = M('material');

		$data = $model->field("id,name,pid,path,concat(path,'-',id) as newpath")->order('newpath')->select();

		foreach($data as $key=>$val){

			$num = substr_count($val['path'], '-');
			
            $data[$key]['name'] = str_repeat('|---', $num).$data[$key]['name'];
   
       
		}
		
		$this->assign('data',$data);

		$this->display();
	}

	//执行添加
	public function insert(){

		//接收post传递过来的内容
		$data['name'] = I('post.name');
		$data['pid'] = I('post.pid');

		//实例化模型
		$model = M('material');

		//判断
		if($data['pid'] == 0){
			//如果传递过来的是0 说明正在执行添加父分类动作，所以path为0
			$data['path'] = 0;
			
		}else{
			
			//根据pid查询出该条子分类的父类，然后和pid进行拼接
			$path = $model->where('id='.$data['pid'])->find()['path'];
			$data['path'] = $path.'-'.$data['pid'];
		}

		$res = $model->add($data);

		//判断
		if($res){
			//执行成功,定向提示内容
			$this->success('添加成功','/admin/material/index');
		}else{
			$this->error('添加失败',$_SERVER['HTTP_REFERER']);
		}

	}

	//加载修改页面
	public function edit(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('material');

		//查询所有分类
		$alldata = $model->field("id,name,pid,path,concat(path,'-',id) as newpath")->order('newpath')->select();

		foreach($alldata as $key=>$val){

			$num = substr_count($val['path'], '-');
			
            $alldata[$key]['name'] = str_repeat('|---', $num).$alldata[$key]['name'];
   
       
		}

		//查询当前分类
		$data = $model->where('id='.$id)->find();
		
		//发送数据到模板
		$this->assign('data',$data);

		$this->assign('alldata',$alldata);

		//加载模板
		$this->display();
	}

	//执行修改动作
	public function update(){
		$id = I('get.id');

		//接收post传递过来的内容
		$data['name'] = I('post.name');
		$data['pid'] = I('post.pid');

		//实例化模型
		$model = M('material');

		//判断
		if($data['pid'] == 0){
			//如果传递过来的是0 说明正在执行添加父分类动作，所以path为0
			$data['path'] = 0;
			
		}else{
			
			//根据pid查询出该条子分类的父类，然后和pid进行拼接
			$path = $model->where('id='.$data['pid'])->find()['path'];
			$data['path'] = $path.'-'.$data['pid'];
		}

		$res = $model->where('id='.$id)->save($data);

		//判断
		if($res){
			//执行成功,定向提示内容
			$this->success('修改成功','/admin/material/index');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}

	}

	//删除分类
	public function delete(){

		//获取id
		$id = I('get.id');
		//根据id查询该条分类是否有父分类
		$model = M('material');

		$res = $model->where('pid='.$id)->find();

		if($res){
			$this->error('该分类下面有子分类，不可以删除，请优先删除子分类','/admin/cate/index');
		}else{

			$data = $model->where('id='.$id)->delete();

			if($data){
				$this->success('删除成功','/admin/material/index');
			}else{
				$this->error('删除失败','/admin/cate/index');
			}
		}
	}
}