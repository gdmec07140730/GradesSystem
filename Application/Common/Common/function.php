<?php


function getClassName($class_id)
{
	$where = array('id' => $class_id );
	$classInfo=M('class')->where($where)->find();
	return $classInfo['name'];
}


function getSex($sex)
{
	switch ($sex) {
		case 1:
			return "男";
			break;
		case 0:
			return "女";
			break;
		default:
			return "未知";
			break;
	}
}

function getUserName($uid)
{
	$where['id']=$uid;
	$userInfo=M('users')->where($where)->find();
	return $userInfo['username'];
}

function getTrueName($uid)
{
	$where['id']=$uid;
	$userInfo=M('users')->where($where)->find();
	return $userInfo['truename'];
}


function gettermName($term_id)
{
	$where['id']=$term_id;
	$info=M('term')->where($where)->find();
	return $info['name'];
}
function getsubjectName($subject_id)
{
	$where['id']=$subject_id;
	$info=M('subject')->where($where)->find();
	return $info['name'];
}


?>