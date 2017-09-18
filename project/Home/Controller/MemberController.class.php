<?php
namespace Home\Controller;
use Think\Controller;
class  MemberController extends Controller {

	//index
	public function index(){

		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}

		//获取session数据
		$id = session('home_user')['id'];

		//查询
		$model = M('users');

		//查询用户信息
		$user = $model->where('id='.$id)->find();

		//获取用户类型
		$type = $user['type'];

		$arr = ['1'=>'业主','2'=>'公司','3'=>'设计师','4'=>'商家','5'=>'技工','6'=>'工长'];

		//判断用户类型  1为业主 
		if($type == 1){

			//实例化member表
			$member = M('member');

			//查询
			$member = $member->where('uid='.$id)->find();

			//判断member是否存在
			if($member){
				session('home_type',$member);
			}
			
		}

		//2.公司
		if($type == 2){

			//实例化company
			$company = M('company');

			//查询
			$company = $company->where('uid='.$id)->find();

			//判断
			if($company){
				session('home_type',$company);
			}
		}

		//3.设计师
		if($type == 3){

			//实例化designer
			$designer = M('designer');

			//查询
			$designer = $designer->where('uid='.$id)->find();

			//判断
			if($designer){
				session('home_type',$designer);
			}

		}

		//4,商家business
		if($type == 4){

			//实例化
			$business = M('business');

			//查询
			$business = $business->where('uid='.$id)->find();

			//判断
			if($business){
				session('home_type',$business);
			}
		}

		//5.技工
		if($type == 5){

			//实例化
			$mechanic = M('mechanic');

			//查询
			$mechanic = $mechanic->where('uid='.$id)->find();

			//判断
			if($mechanic){
				session('home_type',$mechanic);
			}
		}

		//6.工长
		if($type == 6){

			//实例化
			$foreman = M('foreman');

			//查询
			$foreman = $foreman->where('uid='.$user['id'])->find();

			//判断
			if($foreman){
				session('home_type',$foreman);
			}
		}

		//发送到模板
		$this->assign('user',$user);

		$this->assign('arr',$arr);

		//加载模板
		$this->display();
	}

	//加载修改个人信息页面
	public function info(){

		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}

		$id = session('home_user')['id'];

		//实例化
		$model = M('users');

		//查询
		$user = $model->where('id='.$id)->find();

		$this->assign('user',$user);

		//加载模板
		$this->display();
	}

	//执行修改个人信息方法
	public function doinfo(){
		
		//获取用户id
		$id = I('get.id');
		
		//实例化
		$model = M('users');

		//处理数据
		$data = $model->create();

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
		
		//执行修改
		$res = $model->where('id='.$id)->save($data);

		//判断是否修改成功
		if($res){
			$this->success('修改成功',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}

	}

	public function passwd(){
		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}

		//获取session中的id
		$id = session('home_user')['id'];

		//实例化users表
		$model = M('users');

		//查询数据
		$user = $model->where('id='.$id)->find();

		//发送数据到模板
		$this->assign('user',$user);

		//加载模板
		$this->display();
	}

	//执行修改密码
	public function dopwd(){
		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}
	
		//实例化模型
		$model = M('users');

		//根据用户查询该用户密码
		$data = $model->where('id='.session('home_user')['id'])->find();
		
		$oldpassword = md5(I('post.oldpassword'));

		if($data['password']!=$oldpassword){
			$this->error('旧密码输入错误',$_SERVER['HTTP_REFERER']);
			die;
		}

		//获取新密码
		$res['password'] = md5(I('post.newpassword'));
		
		//执行修改
		$sta = $model->where('id='.$data['id'])->save($res);

		//判断是否修改成功
		if($sta){

			//销毁session
			session('home_user',null);

			//重新登录
			$this->success('恭喜，修改成功,请重新登录','/home/login/index');
		}else{
			$this->error('抱歉，修改失败',$_SERVER['HTTP_REFERER']);
		}
	}

	//加载邮箱页面
	public function mail(){

		//获取session
		$user = session('home_user');
		
		//获取id
		$id = $user['id'];

		//实例化
		$model = M('users');

		//查询数据
		$mail = $model->where('id='.$id)->find()['email'];

		//发送数据到模板
		$this->assign('mail',$mail);

		$this->assign('id',$id);

		//加载模板
		$this->display();
	}

	//执行修改
	public function domail(){

		//获取输入的密码
		$password = I('post.password');

		//获取邮箱
		$email = I('post.email');

		//获取id
		$id = session('home_user')['id'];

		//实例化users
		$model = M('users');

		//查询原密码
		$user_password = $model->field('password')->where('id='.$id)->find()['password'];


		$password = md5($password);

		//判断
		if($user_password!=$password){
			$this->error('密码输入错误,请重新输入',$_SERVER['HTTP_REFERER']);
			die();
		}

		//修改邮箱
		$res = $model->where('id='.$id)->save(['email'=>$email]);

		//判断是否修改成功
		if($res){
			$this->success('修改成功',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('修改失败',$_SERVER['HTTP_REFERER']);
		}

	}

	public function myzx(){
		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}
		$this->display();
	}

	public function myzxb(){
		//判断用户是否登录
		if(!session('home_user')){
			$this->error('请前去登录','/home/login/index');
		}
		$this->display();
	}

	public function face(){
		
		$this->display();
	}

	public function pic(){

		//实例化文件上传类
        $file = new \Think\Upload();

        //设置上传配置信息
        $file->savePath  =  '/member/'; // 设置附件上传根目录

        $filename = $file->saveName = time().mt_rand(00000000,99999999).'.jpg';

        //执行上传
        $info = $file->upload();
      
        $data['photo'] = $info['__avatar1']['savepath'].$info['__avatar1']['savename'];

        //获取session
        $id = session('home_user')['id'];

        //根据id查询type
        $model = M('users');

        //查询
        $type = $model->field('type')->where('id='.$id)->find()['type'];
        
        //判断 1.业主
        if($type == 1){

        	//实例化member
        	$member = M('member');

        	//查询原图片路径
        	$photo = $member->field('photo')->where('uid='.$id)->find()['photo'];

        	//删除图片
        	@unlink('./Uploads/'.$photo);

        	//修改图片
        	$member->where('uid='.$id)->save($data);
        }


        //3. 设计师
        if($type == 3){

        	//实例化company
        	$designer = M('designer');

        	//查询原图片路径
        	$photo = $designer->field('photo')->where('uid='.$id)->find()['photo'];

        	//删除图片
        	@unlink('./Uploads/'.$photo);

        	$designer->where('uid='.$id)->save($data);
        }

        //5. 技工mechanic
        if($type == 5){

        	//实例化 mechanic
        	$mechanic = M('mechanic');

        	//查询原图片路径
        	$photo = $mechanic->field('photo')->where('uid='.$id)->find()['photo'];

        	//删除图片
        	@unlink('./Uploads/'.$photo);

        	$mechanic->where('uid='.$id)->save($data);
        }

        //6 .工长 foreman
        if($type == 6){

        	//实例化 foreman
        	$foreman = M('foreman');

        	//查询原图片路径
        	$photo = $foreman->field('photo')->where('uid='.$id)->find()['photo'];

        	//删除图片
        	@unlink('./Uploads/'.$photo);

        	$foreman->where('uid='.$id)->save($data);

        }

        if($member || $designer || $mechanic || $foreman){
        	
        	$this->ajaxReturn(0);
        }else{
        	$this->ajaxReturn(1);
        }
	}
}