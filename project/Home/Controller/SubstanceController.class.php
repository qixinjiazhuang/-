<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class SubstanceController extends controller {

	//我的装修
	public function index(){

		//获取sessionid
		$id = session('home_user')['id'];

		$model = M('tender');

		//查询数据
		$res = $model->join('__PROGRESS__ ON __TENDER__.id = __PROGRESS__.gid')->join('__COMPANY__ ON __TENDER__.cid = __COMPANY__.id')->field('progress.id,cellname,address,acreage,money,starttime,endtime,progress.status,c_name')->where('tender.uid='.$id)->select();

		//统计数据条数
        $count = count($res);

        //实例化分页模型
        $fors = new \Think\Page($count,5);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $sta = ['1'=>'装修中','2'=>'已完工'];

        //发送数据到模板
        $this->assign('show',$show);
        
        $this->assign('sta',$sta);

		$this->assign('res',$res);

		//加载模板
		$this->display();
	}

	//我得装修保障
	public function myzxb(){

		//加载模板
		$this->display();
	}
}