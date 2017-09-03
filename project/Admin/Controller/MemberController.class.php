<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends Controller {

	//列表
	public function index(){

		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
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

    	//执行查询
    	$res = $stu->where($data)->where($u)->select();

    	//算出数据总条数
        $count = $stu->where($data)->where($u)->count();
       	
       	//实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

    	$arr = ['1'=>'业主','2'=>'公司','3'=>'设计师','4'=>'商家','5'=>'技工','6'=>'工长'];	

    	$sta = ['1'=>'正常','2'=>'禁言','3'=>'锁定'];

        $this->assign('show',$show);

        //发送数据
    	$this->assign('res',$res);

    	$this->assign('arr',$arr);

    	$this->assign('sta',$sta);
        
    	//实例化数据库
    	$this->display();
	}

	//加载添加用户页面
	public function add(){
		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
		}

		$this->display();
	}

	//执行添加
	public function insert(){

		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
		}

		//表单验证  分别验证账号 密码 邮箱 手机号码
		$rule=array(
            array('password','checkPwd','密码格式不正确',0,'function'),
            array('name','unique','帐号名称已经存在！',0,'unique',1),
            array('email','unique','该邮箱已经存在！',0,'unique',1),
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),          
        );

		//实例化模型
		$model = M('users');

		 if(!$model->field('name,password,email,phone')->validate($rule)->create()){
		 	$this->error($model->getError());
		 }
		
		$data = $model->create();

		//拼接生日字段数据
		$data['birth'] = $_POST['year']."-".$_POST['month']."-".$_POST['day'];

		//生成注册时间
		$data['regtime'] = time();

		//密码加密
		$data['password'] = md5($data['password']);

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
		//执行添加
		$res = $model->add($data);
		dump($res);

		//判断用户类型，对用户表进行两两关联 
		//1.业主
		if($data['type'] == 1){

			$mem = D('member');

			//准备数据
			$a['uid'] = $res;
			$a['tid'] = $data['type'];

			//执行添加
			$result = $mem->add($a);
		}

		//2.公司
		if($data['type'] == 2){

			//实例化模型
			$compang = D('company');

			//写入数据
			$b['uid'] = $res;

			$b['tid'] = $data['type'];

			$com = $compang->add($b);
		}

		//3.设计师
		if($data['type'] == 3){

			//实例化模型
			$des = D('designer');

			//写入数据
			$c['uid'] = $res;

			$c['tid'] = $data['type'];

			$deser = $des->add($c);
		}

		//4.商家
		if($data['type'] == 4){

			//实例化模型
			$bus = M('business');

			//写入数据
			$d['uid'] = $res;

			$d['tid'] = $data['type'];
	
			$busin = $bus->add($d);
		}

		//5.技工
		if($data['type'] == 5){

			//实例化模型
			$work = M('mechanic');

			//写入数据
			$e['uid'] = $res;

			$e['tid'] = $data['type'];

			$worker = $work->add($e);
		}

		//6.工长
		if($data['type'] == 6){

			//实例化模型
			$for = M('foreman');

			//写入数据
			$f['uid'] = $res;

			$f['tid'] = $data['type'];

			$fore = $for->add($f);
		}
		//判断
		if($res){
			$this->success('添加会员成功','/admin/member/index',1);
		}else{
			$this->error('添加会员失败',$_SERVER['HTTP_REFERER'],1);
		}
		          
	}

	//加载修改页面
	public function edit(){

		//判断是否登陆
		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
		}
		
		//获取ID
		if($_GET['id']){
			$id = $_GET['id'];
		}
		
		//根据id查询该条数据
		$model = M('users');

		$data = $model->where('id='.$id)->find();

		//拆分生日
		$uu = explode('-',$data['birth']);

		//写入数组
		$data['year'] = $uu[0];

		$data['month'] = $uu[1];

		$data['day'] = $uu[2];
		
		//发送数据到模板页面
		$this->assign('data',$data);
		
		//加载模板
		$this->display();
	}

	//执行修改
	public function update(){

		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
		}

		$rule=array(
            array('phone','/^1[3|4|5|8][0-9]\d{4,8}$/','手机号格式不正确',0,'regex',1),          
        );

		//实例化模型
		$model = D('users');

		 if(!$model->field('email,phone')->validate($rule)->create()){
		 	$this->error($model->getError());
		 }

		$id = I('get.id');

		$data = $model->create();

		$data['birth'] = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
		//执行修改
		$res = $model->where('id='.$id)->save($data);

		//判断
		if($res){
			$this->success('修改成功','/admin/member/index');
		}else{
			$this->error('修改失败,请重新检查',$_SERVER['HTTP_REFERER']);
		}
	}

	//删除
	public function delete(){

		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
		}

		//获取id
		$id = I('get.id');

		//实例化模型
		$model = M('users');

		$res = $model->where('id='.$id)->save(['delete'=>2]);

		//判断
		if($res){
			$this->success('删除成功，已放入回收站','/admin/member/index');
		}else{
			$this->error('删除失败',$_SERVER['HTTP_REFERER']);
		}
	}

	//回收站列表
	public function recycle(){

		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
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
        
        $data['name'] = array('like', "%$con%");
    
        $u = [];

        $u['delete'] = 2;

    	//执行查询
    	$res = $stu->page($_GET['p'],5)->where($data)->where($u)->select();

    	//算出数据总条数
        $count = $stu->page($_GET['p'],5)->where($data)->where($u)->count();

        //计算页码数
        $pages = ceil($count/5);
       	
       	//实例化分页模型
        $fors = new \Think\Page($count,5);

        //分页展示
        $show = $fors->show();

    	$arr = ['1'=>'业主','2'=>'公司','3'=>'设计师','4'=>'商家','5'=>'技工','6'=>'工长'];	

    	$sta = ['1'=>'正常','2'=>'禁言','3'=>'锁定'];

        $this->assign('show',$show);

        //发送数据
    	$this->assign('res',$res);

    	$this->assign('arr',$arr);

    	$this->assign('sta',$sta);
        
    	//实例化数据库
    	$this->display();

	}

	//恢复会员
	public function recovery(){

		if(!session('user')){
			$this->redirect('请先登录','/admin/login/index');
		}

		//获取id
		$id = I('get.id');

		//实例化模型
		$model = M('users');

		//执行恢复
		$res = $model->where('id='.$id)->save(['delete'=>1]);

		//判断
		if($res){
			$this->success('恢复成功',$_SERVER['HTTP_REFERER']);
		}else{
			$this->error('恢复失败',$_SERVER['HTTP_REFERER']);
		}

	}
}