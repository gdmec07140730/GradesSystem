<?php
namespace Admin\Controller;
use Think\Controller;
class TeacherController extends BaseController {

	public function index(){
		$limit['role']="1";
		$linkList=M('users')->where($limit)->select();
		$this->assign('linklist',$linkList);
		$this->display();
	}



	public function del()
	{
		$where['id']=I('get.id');
		$result=M('users')->where($where)->delete();
		if ($result) {
			$this->success('删除成功',U('index'));
		}else{
			$this->success('删除失败',U('index'));
		}
	}


	public function add()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data=$_POST;
			$data['password']=md5($data['password']);
			// 添加数据
			$save=M('users')->add($data);
			if ($save) {
				$this->success('添加成功',U('index'));
			}else{
				$this->error('添加失败',U('index'));
			}
		}else{
			$classlist=M('class')->select();
			$this->assign('classlist',$classlist);
			// dump($classlist);
			// die();
			$this->display();
		}
	}


	public function edit()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data=$_POST;
			$where['id']=I('get.id');
			$save=M('users')->where($where)->save($data);
			if ($save) {
				$this->success('修改成功',U('index'));
			}else{
				$this->error('修改失败',U('index'));
			}
		}else{
			$where['id']=I('get.id');
			$site=M('users')->where($where)->find();
			if ($site) {
				$this->assign('site',$site);
				$this->display();
			}else{
				$this->error('不存在该记录');
			}
		}
	}
}