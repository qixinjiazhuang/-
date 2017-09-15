<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ImagesController extends Controller {

	public function index(){

		//实例化
		$model = M('images');

		$res = $model->select();

		$count = count($data);

		//实例化分页模型
        $fors = new \Think\Page($count,10);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $sta = ['1'=>'显示','2'=>'隐藏'];

        $type = ['1'=>'顶部轮播图','2'=>'案例轮播图'];

        $this->assign('sta',$sta);

        $this->assign('type',$type);
        //发送数据
        $this->assign('res',$res);

        $this->assign('show',$show);

		$this->display();
	}

	public function add(){

		$this->display();
	}

	public function insert(){

		//实例化文件上传类
        $file = new \Think\Upload();

        //设置上传配置信息
        $file->savePath  =  '/images/'; // 设置附件上传根目录

 		$filename = $file->saveName = time().mt_rand(00000000,99999999);

    	//执行上传
    	$info = $file->upload();

    	 //实例化
        $model = M('images');

        //数据打包
        $data = $model->create();

        $data['logo'] = $info['logo']['savepath'].$info['logo']['savename'];

        //执行添加
        $result = $model->add($data);

        //判断
        if($result){
        	$this->success('添加成功','/admin/images/index');
        }else{
        	$this->error('添加失败',$_SERVER['HTTP_REFERER']);
        }
	}

	//加载=修改页面
	public function edit(){

		//获取id
		$id = I('get.id');

		//实例化model
		$model = M('images');

		//查询该条id的数据
		$data = $model->where('id='.$id)->find();

		//发送
		$this->assign('data',$data);

		//加载模板
		$this->display();
	}

	//执行修改
	public function update(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('images');

		$data = $model->create();

		if(!empty($_FILES['logo']['name'])){

        	
        	//实例化文件上传类
	        $file = new \Think\Upload();

	        //设置上传配置信息
	        $file->savePath  =  '/images/'; // 设置附件上传根目录

			//执行上传
	    	$info = $file->upload();


    		$oldname = $model->where('id='.$id)->find()['logo'];

        	@unlink('./Uploads/'.$oldname);

    		//拼接路径
    		$data['logo'] = $info['logo']['savepath'].$info['logo']['savename'];
        }    
        //执行修改
        $res = $model->where('id='.$id)->save($data);
		
		//判断
		if($res){
			$this->success('修改成功','/admin/images/index');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}
	}

	public function delete(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('images');

		//执行删除
		$res = $model->where('id='.$id)->delete();

		 //判断
        if($res){
        	$this->success('删除成功',$_SERVER['HTTP_REFERER']);
        }else{
        	$this->error('删除失败',$_SERVER['HTTP_REFERER']);
        }
	}
}