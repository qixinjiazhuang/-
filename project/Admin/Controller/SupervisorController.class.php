<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class SupervisorController extends Controller {

	//index列表页面
	public function index(){

		  //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        $con = $_GET['keywords'];
        
        $data['phone'] = array('like', "%$con%");
    
		//查询
		$model = M('supervisor');

		//查询
		$res = $model->where($data)->select();

		//统计条数
		$count = count($res);

		//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $sta = ['1'=>'已审核','2'=>'未审核'];

        $this->assign('sta',$sta);

        //发送数据
        $this->assign('res',$res);

        //发送分页
        $this->assign('show',$show);

        //加载模板
		$this->display();
	}

	//add 加载添加模板
	public function add(){

		$this->display();
	}

	//执行添加方法
	public function insert(){

		//表单验证 手机号码
		$rule = array(
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),          
        );

		//实例化模型
		$model = M('supervisor');

		if(!$model->field('phone')->validate($rule)->create()){
		 	$this->error($model->getError());
		 }

		//数据打包，处理数据(二维数组)
		$data = $model->create();
		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串

       	//执行添加
        $res = $model->add($data);

        //判断
        if($res){
        	$this->success('添加成功','/admin/supervisor/index',1);
        }else{
        	$this->error('添加失败',$_SERVER['HTTP_REFERER'],1);
        }
	}

	//加载修改页面
	public function edit(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('supervisor');

		//查询
		$res = $model->where('id='.$id)->find();

		//发送
		$this->assign('res',$res);

		//加载模板
		$this->display();
	}		

	//执行修改方法
	public function update(){

		//获取id
		$id = I('post.id');

		//实例化
		$model = M('supervisor');

		$data['name'] = I('post.name');

		$data['phone'] = I('post.phone');

		$data['status'] = I('post.status');

		$data['introduce'] = I('post.introduce');

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串

		//执行修改
		$res = $model->where('id='.$id)->save($data);

		//判断
		if($res){
			$this->success('修改成功','/admin/supervisor/index');
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}
	}

	//执行删除
	public function delete(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('supervisor');

		//删除
		$res = $model->where('id='.$id)->delete();

		//判断
		if($res){
			$this->success('删除成功',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('删除失败',$_SERVER['HTTP_REFERER']);
		}
	}
}