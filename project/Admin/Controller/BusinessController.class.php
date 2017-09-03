<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class BusinessController extends Controller {

	public function index(){
		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

        //查询所有用户,实例化model
        $stu = M('users');

         //限制分页
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }

        //限制搜索
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        //获取搜索关键字
        $con = $_GET['keywords'];

        $data['b_phone'] = array('like', "%$con%");

        $u = [];

        $u['delete'] = 1;	

        //关联查询所有数据
        $res = $stu->join('__BUSINESS__ ON __USERS__.id = __BUSINESS__.uid')->field('uid,city,fax,b_type,email,title,b_name,qq,b_phone,level,b_phone,status,delete,audit,bushour')->where($data)->where($u)->select();

        //查询数据条数
        $count = $stu->join('__BUSINESS__ ON __USERS__.id = __BUSINESS__.uid')->field('uid,city,fax,b_type,email,title,b_name,qq,b_phone,level,b_phone,status,delete,audit,bushour')->where($data)->where($u)->count();
        
        //实例化分页模型
        $fors = new \Think\Page($count,5);

        //配置分页样式
        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $audit = ['1'=>'未通过','2'=>'已通过','3'=>'拒绝'];

        $level = ['1'=>'普通级别','2'=>'钻石级别'];

        $sta = ['1'=>'正常','2'=>'禁言','3'=>'锁定'];

        $type = ['1'=>'基础建材','2'=>' 家具','3'=>'家电','4'=>'软装配饰','5'=>'其他'];

        //发送数据
        $this->assign('audit',$audit);

        $this->assign('level',$level);

        $this->assign('sta',$sta);

        $this->assign('res',$res);

        $this->assign('show',$show);

        $this->assign('type',$type);

        //加载模板
		$this->display();

	}

	public function add(){

		$this->display();
	}

	public function insert(){

		$rule=array(
            array('password','checkPwd','密码格式不正确',0,'function'),
            array('name','unique','帐号名称已经存在！',0,'unique',1),
            array('email','unique','该邮箱已经存在！',0,'unique',1),
            array('name','unique','该用户名已经存在！',0,'unique',1),
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),          
        );

        //实例化模型
        $model = M('users');

         if(!$model->field('name,password,email,phone')->validate($rule)->create()){
            $this->error($model->getError());
         }

        $upload=new Upload();
        $upload->savePath  =  '/business/'; // 设置附件上传根目录
        $info=$upload->upload($_FILES);
        foreach($info as $k=>$v){
      
            $filename[$k] = $v['savename'];
            
        }
        $path = $info['pic1']['savepath'];
        $res['banner'] = $path.$filename['pic1'];
        $res['clogo'] = $path.$filename['pic2'];
        $res['zlogo'] = $path.$filename['pic3'];

        $data['name'] = I('post.name');
        $data['password'] = md5(I('post.password'));
        $data['audit'] = I('post.audit');
		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
        $data['regtime'] = time();
        $data['type'] = 4;
        $data['email'] = I('post.email');
        //执行添加
        $id = $model->add($data);

        $res['uid'] = $id;
        $res['tid'] = 4;
        $res['b_name'] = I('post.b_name');
        $res['b_type'] = I('post.type');
        $res['b_phone'] = I('post.b_phone');
        $res['qq'] = I('post.qq');
        $res['fax'] = I('post.fax');
        $res['bushour'] = I('post.bushour');
        $res['notice'] = I('post.notice');
        $res['level'] = I('post.level');
        $res['introduce'] = I('post.introduce');
        $res['title'] = I('post.title');

        //实例化模型
        $num = M('business');

        $result = $num->add($res);

        //判断
        if($id && $result){
        	$this->success('添加成功','/admin/business/index');
        }else{
        	$this->error('添加失败',$_SERVER['HTTP_REFERER']);
        }
	}

	public function edit(){	

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('users');

		$res = $model->join('__BUSINESS__ ON __USERS__.id = __BUSINESS__.uid')->field('uid,city,fax,b_type,email,title,b_name,qq,b_phone,level,b_phone,status,audit,bushour,notice,introduce,b_type')->where('uid='.$id)->find();

		//发送数据到模板
		$this->assign('res',$res);

		$this->display();
	}

	public function update(){

		//判断
        if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

		//获取id
		$id = I('post.id');

        //实例化文件上传类
        $upload = new Upload();

        //设置上传配置信息
        $upload->savePath  =  '/business/'; // 设置附件上传根目录

        $info=$upload->upload($_FILES);

        foreach($info as $k=>$v){
      
            $filename[$k] = $v['savename'];
            
        }

        //实例化模型
        $business = M('business');

        //查询该条数据信息
        $oldname = $business->where('uid='.$id)->find();

        //获取banner clogo zlogo 三条数据
        $banner = $oldname['banner'];
        $clogo = $oldname['clogo'];
        $zlogo = $oldname['zlogo'];

        //删除原来图片
        @unlink('./Uploads/'.$banner);
        @unlink('./Uploads/'.$clogo);
        @unlink('./Uploads/'.$zlogo);

        //准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
        $data['email'] = I('post.email');

        $model = M('users');
        $dd = $model->where('id='.$id)->save($data);

        $res['title'] = I('post.title');
        $res['b_name'] = I('post.b_name');
        $res['fax'] = I('post.fax');
        $res['qq'] = I('post.qq');
        $res['b_phone'] = I('post.b_phone');
        $res['bushour'] = I('post.bushour');
        $res['notice'] = I('post.notice');
        $res['introduce'] = I('post.introduce');
        $res['b_type'] = I('post.type');
        $res['level'] = I('post.level');

        $bb = $business->where('uid='.$id)->save($res);

        //判断
        if($bb || $dd){
        	$this->success('修改成功','/admin/business/index');
        }else{
        	$this->error('修改失败',$_SERVER['HTTP_REFERER']);
        }
	}

	public function delete(){

		//判断
		if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

        //获取id 
        $id = I('get.id');

        //根据id修改其delete
        $model = M('users');

        $res = $model->where('id='.$id)->save(['delete'=>2]);
        
        //判断 重定向
        if($res){
            $this->success('删除成功，已放入回收站','/admin/company/index',1);
        }else{
            $this->error('删除失败','/admin/company/index',1);
        }
	}
}