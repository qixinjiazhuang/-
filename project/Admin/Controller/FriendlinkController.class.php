<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class FriendlinkController extends Controller {

	//首页
	public function index(){

		if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

    	//查询所有用户,实例化model
    	$stu = M('friendlink');

    	 //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        $con = $_GET['keywords'];
        
        $data['linkname'] = array('like', "%$con%");

        //查询所有数据
    	$res = $stu->where($data)->select();

    	//计算数据总条数
    	$count = $stu->where($data)->count();

    	//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        $sta = ['1'=>'正常','2'=>'隐藏'];

        $this->assign('sta',$sta);

        //分页展示
        $show = $fors->show();

        $this->assign('res',$res);

        $this->assign('show',$show);

		$this->display();
	}

	//添加页面模板
	public function add(){

		$this->display();
	}

	//执行添加
	public function insert(){

		//实例化文件上传类
    	$file = new \Think\Upload();

    	//设置上传配置信息
	    $file->savePath  =  '/friendlink/'; // 设置附件上传根目录

	    //生成新的图片名
	    $filename = $file->saveName = time().mt_rand(00000000,99999999);

    	//执行上传
    	$info = $file->upload();

    	//判断
    	if(!$info){
    		$this->error($file->getError());
    	}
    		
    	//拼接图片路径
    	$path = $info['logo']['savepath'].$info['logo']['savename'];

    	//实例化
    	$model = M('friendlink');

    	//数据打包
    	$data = $model->create();

    	//图片路径
    	$data['logo'] = $path;

    	//执行添加
    	$res = $model->add($data);
    	
    	//判断
    	if($res){
    		$this->success('添加成功','/admin/friendlink/index');
    	}else{
    		$this->error('添加失败',$_SERVER['HTTP_REFERER']);
    	}
	}
 
	public function edit(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('friendlink');

		//查询该条数据
		$res = $model->where('id='.$id)->find();

		$this->assign('res',$res);

		//加载模板
		$this->display();
	}

	//执行修改方法
	public function update(){

		$id = I('get.id');

		$model = M('friendlink');

		$data = $model->create();

		if(!empty($_FILES['logo']['name'])){
            
            //实例化文件上传类
            $file = new \Think\Upload();

            //设置上传配置信息
            $file->savePath  =  '/friendlink/'; // 设置附件上传根目录

            $filename = $file->saveName = time().mt_rand(00000000,99999999);

            //执行上传
            $info = $file->upload();

            $data['logo'] = $info['logo']['savepath'].$info['logo']['savename'];

            $oldname = $model->where('id='.$id)->find()['logo'];

            @unlink('./Uploads/'.$oldname);
        }

        //执行修改
       	$res = $model->where('id='.$id)->save($data);

       	//判断
       	if($res){
       		$this->success('修改成功','/admin/friendlink/index');
       	}else{
       		$this->error('修改失败',$_SERVER['HTTP_REFERER']);
       	}
	}

	//删除
	public function delete(){

		//获取get传递的id
		$id = I('get.id');

		//实例化
		$model = M('friendlink');

		//执行删除
		$res = $model->where('id='.$id)->delete();

		//判断
		if($res){
			$this->success('删除成功','/admin/friendlink/index');
		}else{
			$this->error('删除失败','/admin/friendlink/index');
		}
	}
}