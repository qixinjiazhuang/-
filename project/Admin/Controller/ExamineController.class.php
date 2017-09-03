<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ExamineController extends Controller {

	public function index(){
		
		//判断
		if(!session('user')){
			$this->error('请先登录','/admin/login/index',1);
		}

		$model = M('users');

		//限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        $con = $_GET['keywords'];
        
        $data['e_phone'] = array('like', "%$con%");

		$res = $model->join('__EXAMINE__ ON __USERS__.id = __EXAMINE__.uid')->field('type,uid,e_name,number,e_phone,ltime,ttime,e_photo,audit')->where($data)->where('audit=2')->select();
	
		$count = $model->join('__EXAMINE__ ON __USERS__.id = __EXAMINE__.uid')->field('type,uid,e_name,number,e_phone,ltime,ttime,e_photo,audit')->where($data)->where('audit=2')->count();

		//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        $sta = ['1'=>'未通过','2'=>'已通过','3'=>'拒绝'];

        $arr = ['1'=>'业主','2'=>'公司','3'=>'设计师','4'=>'商家','5'=>'技工','6'=>'工长'];

        //分页展示
        $show = $fors->show();

        $this->assign('show',$show);

        $this->assign('res',$res);

        $this->assign('sta',$sta);

        $this->assign('arr',$arr);

		$this->display();
	}

	public function edit(){

		//获取id
		$id = I('get.id');

		//实例化模型
		$model = M('users');

		$res = $model->join('__EXAMINE__ ON __USERS__.id = __EXAMINE__.uid')->field('uid,e_name,number,e_phone,ltime,ttime,e_photo,audit')->where('uid='.$id)->find();

		$this->assign('res',$res);

		$this->display();
	}

	public function update(){
	
		//获取id
		$id = I('get.id');

		//实例化文件上传类
    	$file = new \Think\Upload();

    	//设置上传配置信息
	    $file->savePath  =  '/examine/'; // 设置附件上传根目录
	    $filename = $file->saveName = time().mt_rand(00000000,99999999);

    	//执行上传
    	$info = $file->upload();

    	//判断
    	if(!$info){
    		$this->error($file->getError());
    		die;
    	}else{

    		$audit = I('post.audit');

    		$dd = M('users');

    		$dd->where('id='.$id)->save(['audit'=>$audit]);

			//实例化模型
			$examine = M('examine');

			//数据打包
			$data = $examine->create();

			//生成时间
			$data['ttime'] = time();

			//查询旧的头像并删除
			$oldname = $examine->where('uid='.$id)->find()['e_photo'];

			//执行删除
	    	@unlink('./Uploads/'.$oldname);

    		//拼接路径
    		$path = $info['pic']['savepath'].$info['pic']['savename'];

    		$data['e_photo'] = $path;

    		//执行修改
    		$dd = $examine->where('uid='.$id)->save($data);

    		//判断
    		if($dd){
    			$this->success('修改成功','/admin/examine/index');
    		}else{
    			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
    		}
    	}

	}

	public function gogo(){

		//获取id
		$id = I('get.id');

		//实例化模型
		$model = M('users');

		//根据id查询该条数据
		$data = $model->where('id='.$id)->find()['audit'];

		if($data == 2){
			$this->success('该用户已经实名认证，请勿重复操作','/admin/examine/index');
			die;
		}

		//执行修改
		$res = $model->where('id='.$id)->save(['audit'=>2]);

		$dd = M('examine');
		$dd->where('uid='.$id)->save(['ttime'=>time()]);

		//判断
		if($res){
			$this->success('已通过',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('操作失败',$_SERVER['HTTP_REFERER']);
		}
	}

	public function back(){

		//获取id
		$id = I('get.id');

		// //实力化
		$model = M('users');

		// //执行修改
		$dd = $model->where('id='.$id)->save(['audit'=>3]);

		if($dd){
			$this->success('已拒绝','/admin/examine/index');
		}else{
			$this->error('操作失败','/admin/examine/index');
		}

	}

	public function staindex(){

		//判断
		if(!session('user')){
			$this->error('请先登录','/admin/login/index',1);
		}

		$model = M('users');

		//限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        $con = $_GET['e_phone'];
        
        $data['truename'] = array('like', "%$con%");

		$res = $model->join('__EXAMINE__ ON __USERS__.id = __EXAMINE__.uid')->field('type,uid,e_name,number,e_phone,ltime,ttime,e_photo,audit')->where($data)->where('audit!=2')->select();
		
		$count = $model->join('__EXAMINE__ ON __USERS__.id = __EXAMINE__.uid')->field('type,uid,e_name,number,e_phone,ltime,ttime,e_photo,audit')->where($data)->where('audit!=2')->count();

		//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        $sta = ['1'=>'未通过','2'=>'已通过','3'=>'拒绝'];

        $arr = ['1'=>'业主','2'=>'公司','3'=>'设计师','4'=>'商家','5'=>'技工','6'=>'工长'];

        //分页展示
        $show = $fors->show();

        $this->assign('show',$show);

        $this->assign('res',$res);

        $this->assign('sta',$sta);

        $this->assign('arr',$arr);

		$this->display();

	}
}