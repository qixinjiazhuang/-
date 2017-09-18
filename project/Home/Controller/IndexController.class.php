<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){

        //调用定位城市接口
        $file_contents = file_get_contents('https://api.map.baidu.com/location/ip?ak=KMiDLdbwDqRBLsftnATxq71Zr4DkM1g9&coor=gcj02');

        //Unicode转换成数据码
        $name = json_decode($file_contents);

        //获取城市数据
        $value = $name->content->address_detail->city;
    	
        //存入session
        session('city',$value);

    	//查询公司
    	$company = M('company');

    	//查询装修公司6条数据
    	$company = $company->join('__VCOMPANY__ ON __COMPANY__.id = __VCOMPANY__.gid')->join('__USERS__ ON __COMPANY__.uid = __USERS__.id')->field('company.id,audit,banner,c_name,introduce,m_value,praise,delete,audit')->where('users.delete=1 AND users.audit=2')->limit('6')->order('m_value desc,praise desc')->select();

        //查询
        $case = M('b_case');

        $case = $case->join('__COMPANY__ ON __COMPANY__.id = __B_CASE__.gid')->field('b_case.id,title,logo,type,c_name,audit')->where(['audit'=>2])->order('id desc')->limit('8')->select();
        //查询轮播图
        $images = M('images'); 

        $images2 = $images->where(['status'=>1])->where(['type'=>2])->select();

        $images1 = $images->where(['status'=>1])->where(['type'=>1])->select();

        $designer = M('designer');

        //查询设计师
        $designer = $designer->join('__USERS__ ON __USERS__.id = __DESIGNER__.uid')->field('designer.id,uid,audit,photo,school,truename,concept,server,num')->where('audit=2')->limit('6')->order('num desc')->select();
  
    	//发送数据
    	$this->assign('company',$company);

        $this->assign('case',$case);

        $this->assign('images1',$images1);

        $this->assign('images2',$images2);

        $this->assign('designer',$designer);

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
                            ->where('users.delete=1 AND users.audit=2')
                            ->where($data)
                            ->order('m_value desc,praise desc')
                            ->select();

            $this->assign('res',$res);

            session('type',$type);

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

            session('type',$type);

            $this->display('foreman/index');
        }

        if($type == 4){

            $con = $_GET['keywords'];

            $data['truename'] = array('like', "%$con%");

            //实例化
            $designer = M('designer');

            $res = $designer->join('__USERS__ ON __USERS__.id = __DESIGNER__.uid')->where($data)->select();

            $this->assign('res',$res);

            session('type',$type);

            $this->display('designer/index');

        }

        if($type == 5){

        }

        if($type == 6){

            $con = $_GET['keywords'];

            $data['title'] = array('like', "%$con%");

            // 实例化
            $model = M('b_case');

            //查询
            $res = $model->join('__COMPANY__ ON __COMPANY__.id = __B_CASE__.gid')->field('b_case.id,title,logo,type,c_name,audit')->where($data)->where(['audit'=>2])->select();
            
            $this->assign('res',$res);

            session('type',$type);

            $this->display('case/index');
        }
    }

    public function exe(){

        //获取type
        $type = I('get.type');

        //获取value
        $value = I('get.value');

        //查询
        $model = M('company');

        $res = $model->join('__VCOMPANY__ ON __COMPANY__.id = __VCOMPANY__.gid')->where($type.'='.$value)->select();

        $count = count($res);

        //实例化分页模型
        $fors = new \Think\Page($count,10);

        $fors->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE%  %DOWN_PAGE% %END% %HEADER%');

        $res = array_slice($res, $fors->firstRow,$fors->listRows);

        //分页展示
        $show = $fors->show();

        $this->assign('show',$show);

        $this->assign('res',$res);

        $this->display('company/index');
    }
}