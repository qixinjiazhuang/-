<?php
namespace Home\Controller;
use Think\Controller;
class DesignerController extends Controller {

	//index
	public function index(){

		//查询所有设计师
		$model = M('designer');

		if(!$_GET['p']){
            $_GET['p'] = 1;
        }

		$res = $model->join('__USERS__ ON __USERS__.id = __DESIGNER__.uid')->field('designer.id,uid,audit,photo,school,truename,concept,server,num')->where('audit=2')->order('num desc')->select();

		foreach($res as $key=>$v){

			//实例化
			$case = M('b_case');

			//查询案例数
			$res[$key]['count'] = $case->where('did='.$v['uid'])->count();
		}

		$count = count($res);
		 
		//实例化分页模型
        $fors = new \Think\Page($count,10);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();
		// 
		$concept = ['1'=>'中式','2'=>'欧式','3'=>'美式','4'=>'简约','5'=>'现代'];

		$this->assign('concept',$concept);

		$this->assign('res',$res);

		$this->assign('show',$show);

		//查询
		$this->display();
	}

	//详情
	public function detail(){

		//实例化
		$model = M('designer');

		//获取id
		$id = I('get.id');
		
		$num = 0;

		$num = $num + 1;

		//根据designer。id查询数据
		$data = $model->join('__USERS__ ON __DESIGNER__.uid = __USERS__.id')->where('designer.id='.$id)->find();

		//实例化case
		$case = M('b_case');

		$case = $case->where('did='.$data['uid'])->where(['audit'=>2])->limit('4')->select();

		$count = count($case);

		//原浏览数加1
		$ff = $data['num'] + $num;

		//保存浏览数
		$model->where('id='.$id)->save(['num'=>$ff]);

		//风格
		$concept = ['1'=>'中式','2'=>'欧式','3'=>'美式','4'=>'简约','5'=>'现代'];

		//风格
		$this->assign('concept',$concept);

		//发送数据到模板
		$this->assign('data',$data);

		//案例总数
		$this->assign('count',$count);

		//案例数据
		$this->assign('case',$case);

		$this->display();
	}

}