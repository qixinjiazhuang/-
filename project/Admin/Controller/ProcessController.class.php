<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ProcessController extends controller {

	//index
	public function index(){

		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

        //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //实例化模型progress
        $stu = M('progress');

        //执行查询
        $res = $stu->select();

        //统计数据条数
        $count = count($res);

        //实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        //发送数据
        $this->assign('res',$res);

        $this->assign('show',$show);

		//加载模板
		$this->display();
	}

	public function add(){

		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

		//查询所有招标
		$model = M('tender');

		//查询id和标题
		$data = $model->field('id,title')->select();

		//发送数据
		$this->assign('data',$data);

		$this->display();
	}

	public function insert(){

		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

		//获取uid
		$model = M('users');

		//用户名
		$dd['name'] = I('post.member');

		$data['uid'] = $model->field('id')->where($dd)->find()['id'];

		//招标id
		$data['gid'] = I('post.gid');

		//价格
		$data['money'] = I('post.money');

		//开始时间
		$data['starttime'] = I('post.starttime');

		//结束时间
		$data['endtime'] = I('post.endtime');

		//实例化
		$progress = M('progress');

		//执行添加返回id
		$pid = $progress->add($data);

		//实例化jindu
		$jindu = M('jindu');

		//添加
		$res = $jindu->add(['pid'=>$pid]);

		//判断
		if($pid && $res){
			$this->success('添加成功','/admin/process/index');
		}else{
			$this->error('添加失败',$_SERVER['HTTP_REFERER']);
		}

	}

	//加载修改页面
	public function edit(){

		//判断用户是否登录
		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('progress');

		//查询该条数据
		$res = $model->where('id='.$id)->find();

		//查询所有tender招标
        $tender = M('tender');

        $tender = $tender->field('id,title')->select();

        dump($res);
        //发送数据
        $this->assign('tender',$tender);

		//发送数据
		$this->assign('res',$res);
		
		$this->display();
	}

	//执行修改
	public function update(){

		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

        $id = I('get.id');

        //实例化
        $model = M('progress');

        $data = $model->create();

        //执行修改
        $res = $model->where('id='.$id)->save($data);

        //判断
        if($res){
        	$this->success('修改成功','/admin/process/index');
        }else{
        	$this->error('修改失败',$_SERVER['HTTP_REFERER']);
        }
	}

	//delete
	public function delete(){

		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

        //获取id
        $id = I('get.id');

        //实例化
        $model = M('progress');

        //执行删除
        $res = $model->where('id='.$id)->delete();

        //判断
        if($res){
        	$this->success('删除成功','/admin/process/index');
        }else{
        	$this->error('删除失败','/admin/process/index');
        }
	}

	public function ajax(){

		//获取内容
		$name = I('post.name');

		//实例化users表
		$model = M('users');

		$data['name'] = $name;

		//执行查询
		$res = $model->where($data)->find();

		//判断
		if($res){

			$this->ajaxReturn(1);
		}else{

			$this->ajaxReturn(2);
		}
	}

	public function tender(){

		//实例化tender表
		$model = M('tender');

		//获取id
		$id = I('get.gid');

		//查询
		$res = $model->where('id='.$id)->find();

		//装修方式
        $method = ['1'=>'全包','2'=>'半包'];

        //装修类型
        $type = ['1'=>'家装','2'=>'公装'];

        //风格
        $style = ['1'=>'中式','2'=>'欧式','3'=>'美式','4'=>'简约','5'=>'现代'];

        //状态
        $status = ['1'=>'未处理','2'=>'意向','3'=>'已签','4'=>'无效'];

        //审核
        $examine= ['1'=>'发布','2'=>'待审'];

        //预算
        $budget = ['1'=>'三万以下','2'=>'三万——五万','3'=>'五万——八万','4'=>'八万——十二万','5'=>'十二万以上'];

        $this->assign('method',$method);

        $this->assign('type',$type);

        $this->assign('style',$style);

        $this->assign('status',$status);

        $this->assign('examine',$examine);

        $this->assign('budget',$budget);

		//发送数据到模板
		$this->assign('res',$res);

		//加载模板
		$this->display();
	}

	public function jindu(){

		//获取id
		$id = I('get.id');

		//发送id
		$this->assign('pid',$id);

		//加载模板
		$this->display();
	}

	public function see(){

		//获取pid 和 process
		$pid = I('get.pid');

		$process = I('get.process');

		//实例化jindu表
		$model = M('jindu');

		//查询
		$res = $model->where('pid='.$pid)->where('process='.$process)->find();

		//判断
		if($res){
			$this->assign('res',$res);
		}else{
			$this->error('您还没有添加当前进度，请前去添加');
		}

		$this->display();
	}

	//添加进度
	public function addjindu(){

		//获取id和process
		$pid = I('get.pid');

		$process = I('get.process');

		//发送数据
		$this->assign('pid',$pid);

		$this->assign('process',$process);

		$this->display();
	}

	//执行添加进度
	public function doprocess(){

		//获取id
		$pid = I('get.pid');

		//获取process
		$process = I('get.process');

		//实例化
		$model = M('jindu');

		$data = $model->create();

		$data['pid'] = $pid;

		$data['process'] = $process;

		//执行添加
		$res = $model->add($data);

		//判断
		if($res){
			$this->success('添加成功','/admin/process/jindu');
		}else{
			$this->error('添加失败',$_SERVER['HTTP_REFERER']);
		}
	}	

	//修改
	public function editjindu(){

		//获取id
		$id = I('get.id');

		//查询 实例化
		$model = M('jindu');

		//执行查询
		$res = $model->where('id='.$id)->find();

		//发送数据到模板
		$this->assign('res',$res);

		//加载页面
		$this->display();
	}

	public function updatejindu(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('jindu');

		//数据打包
		$data = $model->create();

		//执行修改
		$res = $model->where('id='.$id)->save($data);

		//判断
		if($res){
			$this->success('修改成功','/admin/process/jindu');	
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}
	}

	//删除方法
	public function deletejindu(){

		//获取id
		$id = I('get.id');

		//实例化jindu表
		$model = M('jindu');

		//执行删除
		$res = $model->where('id='.$id)->delete();

		//判断
		if($res){
			$this->success('删除成功','/admin/process/jindu');
		}else{
			$this->error('删除失败',$_SERVER['HTTP_REFERER']);
		}
	}
}