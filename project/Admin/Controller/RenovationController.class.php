<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class RenovationController extends Controller {

	//index
	public function index(){

		//实例化
		$model = M('renovation');

		//查询数据
		$res = $model->field('id,title,city,page,bpic,num,time')->select();

		//发送数据到模板
		$this->assign('res',$res);
		//加载模板
		$this->display();
	}

	public function add(){

		$material = M('material');

		//查询地板下的主材
		$floor = $material->field('name')->where('pid=8')->select();

		//瓷砖
		$ceramic = $material->field('name')->where('pid=1')->select();

		//橱柜
		$cupboard = $material->field('name')->where('pid=2')->select();

		//内门
		$door = $material->field('name')->where('pid=7')->select();

		//卫浴
		$batn = $material->field('name')->where('pid=11')->select();

		//吊顶
		$ceiling = $material->field('name')->where('pid=12')->select();

		//开关
		$switch = $material->field('name')->where('pid=13')->select();

		//油漆
		$paint = $material->field('name')->where('pid=14')->select();

		$this->assign('floor',$floor);

		$this->assign('ceramic',$ceramic);

		$this->assign('cupboard',$cupboard);

		$this->assign('door',$door);

		$this->assign('batn',$batn);

		$this->assign('ceiling',$ceiling);

		$this->assign('switch',$switch);

		$this->assign('paint',$paint);

		$this->display();
	}

	public function insert(){

		//设置上传配置信息
        $upload=new Upload();

        // 设置附件上传根目录
        $upload->savePath  =  '/renovation/'; 
        $info=$upload->upload($_FILES);
        foreach($info as $k=>$v){
      
            $filename[$k] = $v['savename'];
            
        }

        //上传图片
        $path = $info['bpic']['savepath'];

        $data['bpic'] = $path.$filename['bpic'];

        $data['rest_pic'] = $path.$filename['rest_pic'];

        $data['study_pic'] = $path.$filename['study_pic'];

        $data['living_pic'] = $path.$filename['living_pic'];

        $data['bed_pic'] = $path.$filename['bed_pic'];

        $data['sleep_pic'] = $path.$filename['sleep_pic'];

        $data['kitchen_pic'] = $path.$filename['kitchen_pic'];

        $data['bath_pic'] = $path.$filename['bath_pic'];

        $data['title'] = I('post.title');

        $data['page'] = I('post.page');

        $data['introduction'] = I('post.introduction');

        $data['ceramic'] = I('post.ceramic');

        $data['cupboard'] = I('post.cupboard');

        $data['door'] = I('post.door');

        $data['floor'] = I('post.floor');

        $data['bath'] = I('post.bath');

        $data['ceiling'] = I('post.ceiling');

        $data['switch'] = I('post.switch');

        $data['paint'] = I('post.paint');

        //准备城市数组
        $city = [];
        $city['province'] = I('post.province');//省
        $city['city'] = I('post.city');//市
        $city['county'] = I('post.county');//区
        $data['city'] = implode(',',$city);//数组拼接字符串

        $data['time'] = time();
        dump($data);
        //实例化
        $model = M('renovation');

        //执行添加
        $res = $model->add($data);

        //判断
        if($res){

        	//执行成功重定向
        	$this->success('添加成功','/admin/renovation/index');
        }else{

        	//执行失败重定向
        	$this->error('添加失败',$_SERVER['HTTP_REFERER']);
        }
	}

	public function edit(){

		//获取id
		$id = I('get.id');

		$material = M('material');

		//查询地板下的主材
		$floor = $material->field('name')->where('pid=8')->select();

		//瓷砖
		$ceramic = $material->field('name')->where('pid=1')->select();

		//橱柜
		$cupboard = $material->field('name')->where('pid=2')->select();

		//内门
		$door = $material->field('name')->where('pid=7')->select();

		//卫浴
		$batn = $material->field('name')->where('pid=11')->select();

		//吊顶
		$ceiling = $material->field('name')->where('pid=12')->select();

		//开关
		$switch = $material->field('name')->where('pid=13')->select();

		//油漆
		$paint = $material->field('name')->where('pid=14')->select();

		//查询该条id 的数据（实例化）
		$model = M('renovation');

		//执行查询
		$res = $model->where('id='.$id)->find();

		$this->assign('floor',$floor);

		$this->assign('ceramic',$ceramic);

		$this->assign('cupboard',$cupboard);

		$this->assign('door',$door);

		$this->assign('batn',$batn);

		$this->assign('ceiling',$ceiling);

		$this->assign('switch',$switch);

		$this->assign('paint',$paint);

		$this->assign('res',$res);

		$this->display();
	}

	public function update(){

		//获取id
		
	}

	public function delete(){

		//获取id
		$id = I('get.id');

		//实例化
		$model = M('renovation');

		//删除
		$res = $model->where('id='.$id)->delete();

		//判断
		if($res){
			$this->success('删除成功','/admin/renovation/index');
		}else{
			$this->errir('删除失败',$_SERVER['HTTP_REFERER']);
		}
	}
}