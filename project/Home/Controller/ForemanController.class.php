<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class ForemanController extends controller {

	//index
	public function index(){	

		//实例化
		$model = M('users');

		$data = $model->join('__FOREMAN__ ON __USERS__.id = __FOREMAN__.uid')->field('users.id,photo,truename,idea')->select();
		
		foreach($data as $key=>$v){

			//实例化
			$case = M('b_case');

			//查询案例数
			$data[$key]['count'] = $case->where('fid='.$v['id'])->count();
		}
				
		// $count = count($data);

		// //实例化分页模型
  //       $fors = new \Think\Page($count,5);

  //       //配置分页样式
  //       $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

  //       $data = array_slice($data, $fors->firstRow,$fors->listRows);

  //        //分页展示
  //       $show = $fors->show();

        //发送分页
        $this->assign('show',$show);

        $this->assign('data',$data);

		//加载模板
		$this->display();
	}

	//detail
	public function detail(){
		//获取id
		$id = I('get.id');

		//实例化‘
		$model = M('users');

		//查询数据
		$data = $model->join('__FOREMAN__ ON __USERS__.id = __FOREMAN__.uid')->field('truename,age,photo,idea')->where('users.id='.$id)->find();
		
		//发送数据
		$this->assign('data',$data);

		//加载模板
		$this->display();
	}
}