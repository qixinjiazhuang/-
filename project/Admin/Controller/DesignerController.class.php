<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class DesignerController extends Controller {

	//index 列表页面
	public function index(){

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

        $res = $stu->join('__DESIGNER__ ON __USERS__.id = __DESIGNER__.uid')->field('uid,city,truename,qq,phone,status,delete,photo,school,concept,gid,audit,status')->where($data)->where($u)->select();

        //遍历然后查询出公司
        foreach ($res as $key => $value) {
            
            //实例化
            $name = M('company');

            $res[$key]['c_name'] = $name->where('id='.$value['gid'])->find()['c_name'];
            
        }

        $count = $stu->join('__DESIGNER__ ON __USERS__.id = __DESIGNER__.uid')->field('uid,city,truename,qq,phone,status,delete,photo,school,concept,gid,audit,status')->where($data)->where($u)->count();
        
        //实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $sta = ['1'=>'正常','2'=>'禁言','3'=>'锁定'];

        $concept = ['1'=>'中式','2'=>'欧式','3'=>'美式','4'=>'简约','5'=>'现代'];

        $audit = ['1'=>'未通过','2'=>'已通过','3'=>'拒绝'];

        $this->assign('sta',$sta);

        $this->assign('audit',$audit);

        $this->assign('concept',$concept);

        $this->assign('res',$res);

        $this->assign('show',$show);

		$this->display();
	}

	public function add(){

        //查询所有公司
        $model = M('company');

        //查询公司id 名称
        $res = $model->field('id,c_name')->select();

        //发送数据到模板
        $this->assign('res',$res);

        //加载模板
		$this->display();

	}

	public function insert(){

		//判断
        if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

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

        //随机函数
        function getRandChar($length){
           $str = null;
           $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
           $max = strlen($strPol)-1;

           for($i=0;$i<$length;$i++){
            $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
           }

           return $str;
        }

        // 处理token
        $data['remember_token'] = getRandChar(50);
		$data['name'] = I('post.name');
		$data['password'] = md5(I('post.password'));
		$data['email'] = I('post.email');
		$data['truename'] = I('post.truename');
        $data['audit'] = 1;
        //准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
        $data['regtime'] = time();
        $data['type'] = 3;
        $data['phone'] = I('post.phone');

        //执行上传
        $num = $model->add($data);

        $res['uid'] = $num;
        $res['tid'] = 3;
        $res['school'] = I('post.school');
        $res['gid'] = I('post.gid');
        $res['concept'] = I('post.concept');
        $res['qq'] = I('post.qq');
        $res['introduce'] = I('post.introduce');
        $res['server'] = I('post.server');

        //实例化文件上传类
        $file = new \Think\Upload();

        //设置上传配置信息
        $file->savePath  =  '/designer/'; // 设置附件上传根目录

        $filename = $file->saveName = time().mt_rand(00000000,99999999);

        //执行上传
        $info = $file->upload();

        $path = $info['pic']['savepath'].$info['pic']['savename'];

        //判断
        if(!$info){
            $this->error($file->getError());
        }
        
        $res['photo'] = $path;

        //实例化模型
        $designer = M('designer');

        $uu = $designer->add($res);

        if($uu && $num){
        	$this->success('添加成功','/admin/designer/index');
        }else{
        	$this->error('添加失败',$_SERVER['HTTP_REFERER']);
        }

	}

	public function edit(){

		//判断
        if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

		//获取id
		$id = I('get.id');

		$stu = M('users');

		$res = $stu->join('__DESIGNER__ ON __USERS__.id = __DESIGNER__.uid')->field('uid,name,email,truename,qq,phone,status,delete,photo,school,gid,concept,audit,status,server,introduce')->where('uid='.$id)->find();
    	
        //实例化
        $company = M('company');

        $com = $company->where('id='.$res['gid'])->field('id,c_name')->find();

        $data = $company->field('id,c_name')->select();

        $this->assign('com',$com);

        $this->assign('data',$data);

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

         //实例化模型
        $designer = M('designer');

        if(!empty($_FILES['pic']['name'])){

            //实例化文件上传类
            $file = new \Think\Upload();

            //设置上传配置信息
            $file->savePath  =  '/designer/'; // 设置附件上传根目录
            $filename = $file->saveName = time().mt_rand(00000000,99999999);

            //执行上传
            $info = $file->upload();

            $oldname = $designer->where('uid='.$id)->find()['photo'];

            @unlink('./Uploads/'.$oldname);

            //拼接路径
            $num['photo'] = $info['pic']['savepath'].$info['pic']['savename'];
        }
        
			$data['name'] = I('post.name');
			$data['email'] = I('post.email');
			$data['truename'] = I('post.truename');
			$data['phone'] = I('post.phone');

            //准备城市数组
            $city = [];
            $city['province'] = I('post.province');//省
            $city['city'] = I('post.city');//市
            $city['county'] = I('post.county');//区
            $data['city'] = implode(',',$city);//数组拼接字符串

            $model = M('users');
            $res = $model->where('id='.$id)->save($data);

            $num['school'] = I('post.school');
            $num['company'] = I('post.company');
            $num['concept'] = I('post.concept');
            $num['gid'] = I('post.gid');
            $num['qq'] = I('post.qq');
            $num['introduce'] = I('post.introduce');
            $num['server'] = I('post.server');
            $result = $designer->where('uid='.$id)->save($num);

            if($res || $result){
            	$this->success('修改成功','/admin/designer/index');
            }else{
            	$this->error('修改失败',$_SERVER['HTTP_REFERER']);
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
            $this->success('删除成功，已放入回收站','/admin/designer/index',1);
        }else{
            $this->error('删除失败','/admin/designer/index',1);
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

        $res = $model->join('__APPOINTMENT__ ON __USERS__.id = __APPOINTMENT__.uid')->where('tid=3')->where($data)->select();
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
        $data['gid'] = $model->where('phone='.$gphone)->where('type=5')->field('id')->find()['id'];
        $data['tid'] = 3;
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
            $this -> success('成功添加预约','/admin/designer/appointment');
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
        $res = $model->where('type=3')->where($data)->find();
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
        $data['gid'] = $model->where('phone='.$gphone)->where('type=3')->field('id')->find()['id'];
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
            $this -> success('成功修改预约','/admin/designer/appointment');
        }else{
            $this -> error('修改失败',$_SERVER['HTTP_REFERER']);
        }
    }

    public function deleteapp(){

        //获取id
        $id = I('get.id');

        $model = M('appointment');

        $res = $model->where('id='.$id)->delete();

        //判断
        if($res){
            $this->success('删除成功','/admin/designer/appointment',1);
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