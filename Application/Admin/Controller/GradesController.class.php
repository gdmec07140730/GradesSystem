<?php
namespace Admin\Controller;
use Think\Controller;
class GradesController extends BaseController {

	public function index(){
		if (I('post.subject_id')) {
			$limit['subject_id']=I('post.subject_id');
		}
		if (I('post.term_id')) {
			$limit['term_id']=I('post.term_id');
		}
		$GradeMess=M('grades')->where($limit)->select();
		$this->assign('GradeMess',$GradeMess);
		// 学期查询
		$termlist=M('term')->select();
		$this->assign('termlist',$termlist);
		// 科目查询
		$subjectlist=M('subject')->select();
		$this->assign('subjectlist',$subjectlist);
		$this->display();
	}



	// 查询单个学生成绩
	public function singleQuery()
	{
		$where['uid']=I('get.id');
		$GradeMess=M('grades')->where($where)->select();
		
	}


	// 







	public function del()
	{
		$where['id']=I('get.id');
		$result=M('grades')->where($where)->delete();
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
			// 添加数据
			$save=M('grades')->add($data);
			if ($save) {
				$this->success('添加成功',U('index'));
			}else{
				$this->error('添加失败',U('index'));
			}
		}else{
			$classlist=M('class')->select();
			$this->assign('classlist',$classlist);
			$this->display();
		}
	}


	public function edit()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data=$_POST;
			$where['id']=I('get.id');
			$save=M('grades')->where($where)->save($data);
			if ($save) {
				$this->success('修改成功',U('index'));
			}else{
				$this->error('修改失败',U('index'));
			}
		}else{
			$where['id']=I('get.id');
			$site=M('grades')->where($where)->find();
			if ($site) {
				$classlist=M('class')->select();
				$this->assign('classlist',$classlist);
				// dump($classlist);
				// die();
				$this->assign('site',$site);
				$this->display();
			}else{
				$this->error('不存在该记录');
			}
		}
	}
}