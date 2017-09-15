<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	
    	//查询公司
    	$company = M('company');

    	//查询装修公司6条数据
    	$company = $company->field('id,c_name,introduce,banner')->limit('6')->select();

        //查询
        $case = M('b_case');

        $case = $case->join('__COMPANY__ ON __COMPANY__.id = __B_CASE__.gid')->field('b_case.id,title,logo,type,c_name,audit')->where(['audit'=>2])->order('id desc')->limit('6')->select();

        //查询轮播图
        $images = M('images'); 

        $images2 = $images->where(['status'=>1])->where(['type'=>2])->select();

        $images1 = $images->where(['status'=>1])->where(['type'=>1])->select();

    	//发送数据
    	$this->assign('company',$company);

        $this->assign('case',$case);

        $this->assign('images1',$images1);

        $this->assign('images2',$images2);

    	//加载模板
    	$this->display();
    }

    //serch
    public function serch(){

        //判断
        if(!$_GET['keywords']){
            $_GET['keywords'] = '';
        }

        //获取搜索类型
        $type = I('get.sel');

        //判断
        if($type == 1){

            $con = $_GET['keywords'];

            $data['c_name'] = array('like', "%$con%");

            //实例化
            $company = M('company');

            $res = $company ->join('__VCOMPANY__ ON __COMPANY__.id = __VCOMPANY__.gid')
                            ->join('__USERS__ ON __COMPANY__.uid = __USERS__.id')
                            ->field('company.id,audit,banner,c_name,introduce,m_value,praise,delete,audit')
                            ->where('delete=1 AND audit=2')
                            ->where($data)
                            ->order('m_value desc,praise desc')
                            ->select();
            
            $this->assign('res',$res);

            $this->display('company/index');
        }

        if($type == 2){

        }

        if($type == 3){

            $con = $_GET['keywords'];

            $data['truename'] = array('like', "%$con%");

            //实例化
            $model = M('users');

            $data = $model->join('__FOREMAN__ ON __USERS__.id = __FOREMAN__.uid')->field('users.id,photo,truename,idea')->select();
            
            foreach($data as $key=>$v){

                //实例化
                $case = M('b_case');

                //查询案例数
                $data[$key]['count'] = $case->where('fid='.$v['id'])->count();
            }

            $this->assign('data',$data);

            $this->display('foreman/index');
        }

        if($type == 4){

            $con = $_GET['keywords'];

            $data['truename'] = array('like', "%$con%");

            //实例化
            $designer = M('designer');

            $res = $designer->join('__USERS__ ON __USERS__.id = __DESIGNER__.uid')->where($data)->select();

            $this->assign('res',$res);

            $this->display('designer/index');

        }

        if($type == 5){

        }

        if($type == 6){

        }
    }
}