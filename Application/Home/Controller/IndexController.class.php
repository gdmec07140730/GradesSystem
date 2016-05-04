<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		if (condition) {
			# code...
		}
		if (I('post.username')) {
			$limit['username']=I('post.username');
			$limit['truename']=I('post.truename');
			$limit['role']="0";

			$grades=M('grades')->where($limit)->select();
			$this->assign('grades',$grades);
		}else{

		}
		
		$siteInfo=M('siteconfig')->select();
		C('sitename',$siteInfo['0']['sitename']);
		C('title',$siteInfo['0']['title']);
		C('copyright',$siteInfo['0']['copyright']);
		C('icp',$siteInfo['0']['icp']);
		$this->display();
	}



}