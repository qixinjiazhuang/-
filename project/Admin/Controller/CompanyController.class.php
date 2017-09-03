<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class CompanyController extends Controller {

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

        $data['c_phone'] = array('like', "%$con%");

        $u = [];

        $u['delete'] = 1;	

        //关联查询所有数据
        $res = $stu->join('__COMPANY__ ON __USERS__.id = __COMPANY__.uid')->field('uid,city,qq,c_phone,level,c_name,status,delete,audit,contacts')->where($data)->where($u)->select();

        //查询数据条数
        $count = $stu->join('__COMPANY__ ON __USERS__.id = __COMPANY__.uid')->field('uid,city,qq,c_phone,level,c_name,status,delete,audit,contacts')->where($data)->where($u)->count();
        
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

        //发送数据
        $this->assign('audit',$audit);

        $this->assign('level',$level);

        $this->assign('sta',$sta);

        $this->assign('res',$res);

        $this->assign('show',$show);

        //加载模板
		$this->display();
	}

	public function add(){

		//判断
        if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }

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
        );

        //实例化模型
        $model = M('users');

         if(!$model->field('name,password,email,phone')->validate($rule)->create()){
            $this->error($model->getError());
         }

        //设置上传配置信息
        $upload=new Upload();
        $upload->savePath  =  '/company/'; // 设置附件上传根目录
        $info=$upload->upload($_FILES);
        foreach($info as $k=>$v){
      
            $filename[$k] = $v['savename'];
            
        }
        $path = $info['pic1']['savepath'];
        $date['banner'] = $path.$filename['pic1'];
        $date['clogo'] = $path.$filename['pic2'];
        $date['zlogo'] = $path.$filename['pic3'];
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

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串
        $data['regtime'] = time();
        $data['type'] = 2;

        //实例化
        $model = M('users');
        $id = $model->add($data);

        $date['contacts'] = I('post.contacts');
        $date['introduce'] = I('post.introduce');
        $date['qq'] = I('post.qq');
        $date['c_phone'] = I('post.phone');
        $date['tid'] = 2;
        $date['uid'] = $id;
        $date['c_name'] = I('post.c_name');

        //实例化 
        $res = M('company');

        $result = $res->add($date);

        //判断
        if($result && $id){
        	$this->success('添加成功','/admin/company/index');
        }else{
        	$this->error('添加失败',$_SERVER['HTTP_REFERER']);
        }
	}

	public function edit(){

		//判断
        if(!session('user')){

            $this->error('请先登录','/admin/login/index',1);
        }
		
		//获取用户id
		$id = I('get.id');

		//实例化
		$model = M('users');

		//查询该条数据
		$res = $model->join('__COMPANY__ ON __USERS__.id = __COMPANY__.uid')->field('uid,name,introduce,level,qq,c_phone,level,c_name,audit,contacts,status')->where('uid='.$id)->find();

		//发送数据
		$this->assign('res',$res);

		//加载模板
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
        $upload->savePath  =  '/company/'; // 设置附件上传根目录

        $info=$upload->upload($_FILES);

        foreach($info as $k=>$v){
      
            $filename[$k] = $v['savename'];
            
        }

        //实例化模型
        $company = M('company');

        //查询该条数据信息
        $oldname = $company->where('uid='.$id)->find();

        //获取banner clogo zlogo 三条数据
        $banner = $oldname['banner'];
        $clogo = $oldname['clogo'];
        $zlogo = $oldname['zlogo'];

        //删除原来图片
        @unlink('./Uploads/'.$banner);
        @unlink('./Uploads/'.$clogo);
        @unlink('./Uploads/'.$zlogo);
      	
		$date['name'] = I('post.name');//用户名

		//准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $date['city'] = implode(',',$city);//数组拼接字符串
		$date['audit'] = I('post.audit');
		$date['status'] = I('post.status');

		//实例化
		$model = M('users');

		//执行修改
		$dd = $model->where('id='.$id)->save($date);
		$path = $info['pic1']['savepath'];
		$data['banner'] = $path.$filename['pic1'];//banner
		$data['clogo'] = $path.$filename['pic2'];//长方形logo
		$data['zlogo'] = $path.$filename['pic3'];//正方形logo
		$data['c_name'] = I('post.c_name');//公司企业名称
		$data['introduce'] = I('post.introduce');//公司简介
		$data['contacts'] = I('post.contacts');//联系人
		$data['qq'] = I('post.qq');//qq
		$data['c_phone'] = I('post.c_phone');//联系电话
		$data['level'] = I('post.level');//等级
		$res = M('company');
		$ee = $res->where('uid='.$id)->save($data);

		//判断
		if($dd && $ee){
			$this->success('修改成功','/admin/company/index');
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
            $this->success('删除成功，已放入回收站','/admin/company/index',1);
        }else{
            $this->error('删除失败','/admin/company/index',1);
        }
	}

	public function staindex(){

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

        $data['c_phone'] = array('like', "%$con%");

        $u = [];

        $u['delete'] = 1;	

        //关联查询所有数据
        $res = $stu->join('__COMPANY__ ON __USERS__.id = __COMPANY__.uid')->field('uid,city,qq,c_phone,level,c_name,status,delete,audit,contacts')->where($data)->where($u)->where('audit=1')->select();

        //查询数据条数
        $count = $stu->join('__COMPANY__ ON __USERS__.id = __COMPANY__.uid')->field('uid,city,qq,c_phone,level,c_name,status,delete,audit,contacts')->where($data)->where($u)->where('audit=1')->count();
        
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

        //发送数据
        $this->assign('audit',$audit);

        $this->assign('level',$level);

        $this->assign('sta',$sta);

        $this->assign('res',$res);

        $this->assign('show',$show);

        //加载模板
		$this->display();

	}

	public function gogo(){

		//获取id
		$id = I('get.id');

		$model = M('users');

		$res = $model->where('id='.$id)->save(['audit'=>2]);

		if($res){
			$this->success('已通过','/admin/company/staindex',1);
		}else{
			$this->success('操作失败,请联系管理员','/admin/company/staindex',1);
		}
	}

	public function jujue(){

		//获取id
		$id = I('get.id');

		$model = M('users');

		$res = $model->where('id='.$id)->save(['audit'=>3]);

		if($res){
			$this->success('已拒绝','/admin/company/staindex',1);
		}else{
			$this->success('操作失败,请联系管理员','/admin/company/staindex',1);
		}
	}

    //添加公司属性页面
    public function vcompany(){

        //获取公司id
        $uid = I('get.id');

        $company = M('company');

        $id = $company->field('id')->where('uid='.$uid)->find()['id'];

        //实力化
        $model = M('vcompany');

        $res = $model->field('id')->where('gid='.$id)->find();

        if($res){
            $this->error('该公司已经添加过属性','/admin/company/index');
        }
        //发送数据到模板
        $this->assign('id',$id);

        //加载模板
        $this->display();
    }

    //执行添加公司属性
    public function docom(){

        //实例化
        $model = M('vcompany');

        //数据打包
        $data = $model->create();

        //执行添加
        $res = $model->add($data);
            
        //判断
        if($res){
            $this->success('添加成功','/admin/company/index');
        }else{
            $this->error('添加失败',$_SERVER['HTTP_REFERER']);
        }
    }

    //加载修改公司属性页面
    public function e_vcompany(){

        //获取id
        $uid = I('get.id');

        $company = M('company');

        $id = $company->field('id')->where('uid='.$uid)->find()['id'];

        $model = M('vcompany');

        $res = $model->where('gid='.$id)->find();

        $this->assign('res',$res);

        //发送数据
        $this->assign('id',$id);

        //加载模板
        $this->display();
    }

    //修改公司属性
    public function dovcom(){

        //获取id
        $id = I('post.gid');
 
        //实例化
        $model = M('vcompany');

        //数据打包
        $data = $model->create();

        //执行修改
        $res = $model->where('gid='.$id)->save($data);

        //判断
        if($res){
            $this->success('修改成功','/admin/company/index');
        }else{
            $this->error('修改失败',$_SERVER['HTTP_REFERER']);
        }
    }
}