<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;

class TenderController extends controller {

	//index
	public function index(){

		//实例化
		$model = M("province");

		//查询
		$province = $model->select();

		//发送数据到模板
		$this->assign('province',$province);

		//加载模板
		$this->display();
	}

	//add
	public function add(){

		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}

		$rule=array(
            array('province','require','请填写所在省份'),
            array('name','require','请填写您的姓名'),
            array('city','require','请填写所在市'),
            array('area','require','请填写所在区域'),
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),          
        );

        //实例化模型
        $model = M('users');

         if(!$model->field('name,phone,province,city,area')->validate($rule)->create()){
            $this->error($model->getError());
         }

		//获取id
		$id = session('home_user')['id'];

		//实例化
		$model = M('tender');

		$data = $model->create();
		
		if(I('post.province')){

			//查询城市
			$province = M('province');

			//省
			$a = $province->field('name')->where('code='.I('post.province'))->find()['name'];
		}
		
		if(I('post.city')){

			$city = M('city');

			//市
			$b = $city->field('name')->where('code='.I('post.city'))->find()['name'];
		}

		if(I('post.area')){

			//区
			$area = M('area');

			$c = $area->field('name')->where('code='.I('post.area'))->find()['name'];
		}
		
		

		$city = [];
		$city['province'] = $a;
		$city['city'] = $b;
		$city['area'] = $c;
		$data['city'] = implode(',', $city);
		$data['uid'] = $id;

		//实例化文件上传类
        $file = new \Think\Upload();

        //设置上传配置信息();
        $file->savePath  =  '/tender/'; // 设置附件上传根目录

        $filename = $file->saveName = time().mt_rand(00000000,99999999);

        $info = $file->upload();
  
        $data['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
    		
    	//执行上传
		$res = $model->add($data);

		//判断
		if($res){
			$this->success('预约成功我们会在三个工作日内联系你，请保持电话畅通',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('抱歉，预约失败，请稍候再试',$_SERVER['HTTP_REFERER']);
		}
	}	

	public function city(){

		$code = I('get.code');
		
		$city = M('city');

		$city = $city->where('provincecode='.$code)->select();

		$this->ajaxReturn($city);
	}

	public function area(){

		$code = I('get.code');

		$area = M('area');

		$area = $area->where('citycode='.$code)->select();

		$this->ajaxReturn($area);
	}
}
