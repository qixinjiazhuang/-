<?php
namespace Home\Controller;
use Think\Controller;
class UcenterController extends Controller {
	public function mechanicInfo(){
		$this->display('mechanic-info');
	}
	public function mechanicAttr(){
		$this->display('mechanic-attr');
	}
	public function Yuyue(){
		$this->display('yuyue');
	}
	public function TenderIndex(){
		$this->display('tenders-index');
	}
	public function TenderDetail(){
		$this->display('tenders-detail');
	}
	public function TenderLook(){
		$this->display('tenders-looked');
	}


	public function blogIndex(){
		$this->display('blog-index');
	}
	public function blogCreate(){
		$this->display('blog-create');
	}
	public function foremanIndex(){
		$this->display('foreman-index');
	}
	public function companyIndex(){
		$this->display('company-index');
	}
}