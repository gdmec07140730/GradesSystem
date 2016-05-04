<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize()
	{
		if (isset($_SESSION['username'])) {
			// 已经登陆，跳过
			// 读取站点配置
			$siteInfo=M('siteconfig')->select();
			C('sitename',$siteInfo['0']['sitename']);
			C('discript',$siteInfo['0']['discript']);
			C('keywords',$siteInfo['0']['keywords']);
			C('title',$siteInfo['0']['title']);
			C('copyright',$siteInfo['0']['copyright']);
			C('icp',$siteInfo['0']['icp']);
		}else{
			// 未登录，强制转到登陆
			$this->redirect('Public/login');
		}
	}
}