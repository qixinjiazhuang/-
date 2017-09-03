<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class ForemanController extends Controller {

	//列表
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

        $con = $_GET['keywords'];
        
        $data['phone'] = array('like', "%$con%");

        $u = [];
        $u['delete'] = 1;

    	$res = $stu->join('__FOREMAN__ ON __USERS__.id = __FOREMAN__.uid')->field('uid,city,truename,qq,phone,status,delete,level,age,photo')->where($data)->where($u)->select();
    
       	$count = $stu->join('__FOREMAN__ ON __USERS__.id = __FOREMAN__.uid')->field('uid,city,truename,qq,phone,status,delete,level,age')->where($data)->where($u)->count();

       	//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $sta = ['1'=>'正常','2'=>'禁言','3'=>'锁定'];

        $level = ['1'=>'普通工长','2'=>'优秀工长'];

        $age = ['1'=>'1——3年','2'=>'3——8年','3'=>'8年以上'];

        $this->assign('show',$show);

        $this->assign('res',$res);

        $this->assign('sta',$sta);

        $this->assign('level',$level);

        $this->assign('age',$age);
      
    	$this->display();
    }

    public function add(){

    	if(!session('user')){

    		$this->error('请先登录','/admin/login/index',1);
    	}

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

    	//实例化模型
    	$data['name'] = I('post.name');//用户名
    	$data['password'] = md5(I('post.password'));//密码
    	$data['email'] = I('post.email');//邮箱
    	$data['truename'] = I('post.truename');//真实姓名
    	$data['phone'] = I('post.phone');//电话
    	$data['type'] = 6;	

    	//准备城市数组
    	$city = [];
    	$city['province'] = I('post.province');//省
    	$city['city'] = I('post.city');//市
    	$city['county'] = I('post.county');//区
    	$data['city'] = implode(',',$city);//数组拼接字符串

    	$res = $model->add($data);//执行添加

    	//实例化文件上传类
    	$file = new \Think\Upload();

    	//设置上传配置信息
	    $file->savePath  =  '/foreman/'; // 设置附件上传根目录

	    $filename = $file->saveName = time().mt_rand(00000000,99999999);

    	//执行上传
    	$info = $file->upload();

    	//判断
    	if(!$info){
    		$this->error($file->getError());
    	}
    	
    	$path = $info['pic']['savepath'].$info['pic']['savename'];

    	$for['level'] = I('post.level');//等级
    	$for['tid'] = 6;//类型id
    	$for['uid'] = $res;//用户id
    	$for['qq'] = I('post.qq');//qq
    	$for['idea'] = I('post.idea');//服务理念
    	$for['age'] = I('post.age');//工龄
    	$for['photo'] = $path;
    	
    	//实例化
    	$foreman = M('foreman');

    	$dd = $foreman->add($for);

    	//判断
    	if($res && $dd){
    		$this->success('添加成功','/admin/foreman/index',1);
    	}else{
    		$this->error('添加失败，请检查',$_SERVER['HTTP_REFERER']);
    	}
    }

    public function edit(){

    	//获取id
    	$id = I('get.id');

    	//根据id查询两表数据
    	$model = M('users');

    	$res = $model->join('__FOREMAN__ ON __USERS__.id = __FOREMAN__.uid')->field('uid,name,email,truename,level,qq,phone,idea,age')->where('uid='.$id)->find();
    	
    	dump($res);

    	$this->assign('res',$res);

    	$this->display();
    }

    public function update(){

    	//获取id
    	$id = I('get.id');

    	//实例化文件上传类
    	$file = new \Think\Upload();

    	//设置上传配置信息
	    $file->savePath  =  '/foreman/'; // 设置附件上传根目录
	    $filename = $file->saveName = time().mt_rand(00000000,99999999);

    	//执行上传
    	$info = $file->upload();

    	//判断
    	if(!$info){
    		$this->error($file->getError());
    		die;
    	}else{

			//实例化模型
			$foreman = M('foreman');

			$oldname = $foreman->where('id='.$id)->find()['photo'];

	    	@unlink('./Uploads/'.$oldname);

	    	// if($b==false){
	    	// 	$this->error('请先去添加一张头像照片');
	    	// }

    		//拼接路径
    		$path = $info['pic']['savepath'].$info['pic']['savename'];

    		//实例化模型
	    	$model =  M('users');
	    	$data['name'] = I('post.name');//用户名
	    	$data['email'] = I('post.email');//邮箱
	    	$data['truename'] = I('post.truename');//真是姓名
	    	$data['phone'] = I('post.phone');//电话

	    	//拼接城市
	    	$city['province'] = I('post.province');//省
	    	$city['city'] = I('post.city');//市
	    	$city['county'] = I('post.county');//区
	    	$data['city'] = implode(',',$city);//数组拼接字符串
	    	
	    	//修改users表
	    	$result = $model->where('id='.$id)->save($data);

	    	$res['level'] = I('post.level');//等级
	    	$res['qq'] = I('post.qq');//qq
	    	$res['idea'] = I('post.idea');//服务理念
	    	$res['age'] = I('post.age');//工龄
	    	$res['photo'] = $path;
	    		
	    	$num = $foreman->where('uid='.$id)->save($res);
	    	
	    	//判断 修改成功跳转列表页面，失败back回去
	    	if($result || $num){
	    		$this->success('修改成功','/admin/foreman/index',1);
	    	}else{
	    		$this->error('修改失败,请联系管理员',$_SERVER['HTTP_REFERER'],1);
	    	}
    	}

    }

    public function delete(){

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
            $this->success('删除成功，已放入回收站','/admin/foreman/index',1);
        }else{
            $this->error('删除失败','/admin/foreman/index',1);
        }
    }

    public function appointment(){

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

        $data['a_phone'] = array('like', "%$con%");

        $u = [];

        $u['delete'] = 1;

        $res = $model->join('__APPOINTMENT__ ON __USERS__.id = __APPOINTMENT__.uid')->where('tid=6')->where($data)->select();
            foreach ($res as $key => $value) {
                $did = $model->join('__APPOINTMENT__ ON __USERS__.id = __APPOINTMENT__.gid')->where('gid='.$value['gid'])->where($u)->find();
                $res[$key]['gname'] = $did['truename'];
            }

        $count = count($res);

        //实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $sta = ['1'=>'未处理','2'=>'已处理'];

        $this->assign('sta',$sta);

        $this->assign('res',$res);

        $this->assign('show',$show);

        $this->display();
    }

    public function addapp(){
        $this->display();
    }

    public function appinsert(){

        if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }
        
        //接收业主和技工的手机号码
        $uphone = I('post.uphone');
        $gphone = I('post.gphone');

        //实例化
        $model = M('users');

        //获取业主id
        $data['uid'] = $model->where('phone='.$uphone)->where('type=1')->field('id')->find()['id'];

        //获取技工id
        $data['gid'] = $model->where('phone='.$gphone)->where('type=6')->field('id')->find()['id'];
        $data['tid'] = 6;
        $data['content'] = I('post.content');
        $data['a_name'] = I('post.name');
        $data['a_phone'] = I('post.phone');
        //准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
        $data['time'] = time();
     
        $num = M('appointment');
        $result = $num->add($data);

        //判断
        if($result){
            $this -> success('成功添加预约','/admin/foreman/appointment');
        }else{
            $this -> error('添加失败，请检查',$_SERVER['HTTP_REFERER']);
        }
    }
    public function ajax(){

        //接受提交过来的name
        $phone = I('post.phone');

        //根据发送过来的用户名查询业主  业主type为1
        $model = M('users');
        $data['phone'] = $phone;
        $res = $model->where('type=1')->where($data)->find();
        //判断
        if($res){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function ajax1(){

        $phone = I('post.phone');

        //查询
        $model = M('users');
        $data['phone'] = $phone;
        $res = $model->where('type=6')->where($data)->find();
        //判断
        if($res){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function editapp(){
        //获取id
        $id = I('get.id');

        //根据id查询该条数据
        $model = M('appointment');
        $data = $model->where('id='.$id)->find();
        
        $user = M('users');

        //查询业主电话号码
        $data['uphone'] = $user->where('id='.$data['uid'])->find()['phone'];

        //查询技工手机号码
        $data['gphone'] = $user->where('id='.$data['gid'])->find()['phone'];

        $this->assign('data',$data);

        $this->display();       
    }

    public function appupdate(){

        //获取id
        $id = I('post.id');

        //业主电话号码
        $uphone = I('post.uphone');

        //据I工电话号码
        $gphone = I('post.gphone');

        $model = M('users');

        //获取业主id
        $data['uid'] = $model->where('phone='.$uphone)->where('type=1')->field('id')->find()['id'];
        //获取技工id
        $data['gid'] = $model->where('phone='.$gphone)->where('type=6')->field('id')->find()['id'];
        $data['a_name'] = I('post.name');
        $data['a_phone'] = I('post.phone');
        //准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
        $data['content'] = I('post.content');

        $num = M('appointment');

        $res = $num->where('id='.$id)->save($data);

        if($res){
            $this -> success('成功修改预约','/admin/foreman/appointment');
        }else{
            $this -> error('修改失败',$_SERVER['HTTP_REFERER']);
        }
    }

    public function deleteapp(){

        //获取id
        $id = I('get.id');

        //实例化
        $model = M('appointment');

        $res = $model->where('id='.$id)->delete();

        //判断
        if($res){
            $this->success('删除成功',$_SERVER['HTTP_REFERER']);
        }else{
            $this->error('删除失败',$_SERVER['HTTP_REFERER']);
        }
    }

    public function chuli(){

        //获取id
        $id = I('get.id');

        //实例化
        $model = M('appointment');

        $res = $model->where('id='.$id)->save(['a_status'=>2]);

        if($res){
            $this->success('预约成功',$_SERVER['HTTP_REFERER']);
        }else{
            $this->error('预约失败',$_SERVER['HTTP_REFERER']);
        }

    }

    public function quxiao(){

        //获取id
        $id = I('get.id');

        //实例化
        $model = M('appointment');

        $res = $model->where('id='.$id)->save(['a_status'=>1]);

        if($res){
            $this->success('取消预约成功',$_SERVER['HTTP_REFERER']);
        }else{
            $this->error('取消失败',$_SERVER['HTTP_REFERER']);
        }
    }
}