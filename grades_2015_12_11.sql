-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2015-12-11 08:40:37
-- 服务器版本： 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `grades`
--

-- --------------------------------------------------------

--
-- 表的结构 `gs_agent`
--

CREATE TABLE `gs_agent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL COMMENT '城市',
  `company` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `url` varchar(255) DEFAULT NULL COMMENT '公司网址',
  `introduct` varchar(255) DEFAULT NULL COMMENT '公司简介'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gs_agent`
--

INSERT INTO `gs_agent` (`id`, `name`, `telephone`, `qq`, `email`, `city`, `company`, `url`, `introduct`) VALUES
(3, '9y', '13512345678', '123456789', '9y@0hi.org.com', '广州', '成都猿团科技', 'http://www.0hi.cn/', '成都猿团科技有限公司，专注于移动互联网开发者生态服务');

-- --------------------------------------------------------

--
-- 表的结构 `gs_cast`
--

CREATE TABLE `gs_cast` (
  `id` int(11) NOT NULL COMMENT '自增ID',
  `sitename` varchar(255) DEFAULT NULL COMMENT '站点名称',
  `siteurl` varchar(255) DEFAULT NULL COMMENT '站点网址',
  `siteimg` text COMMENT '站点图片',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gs_cast`
--

INSERT INTO `gs_cast` (`id`, `sitename`, `siteurl`, `siteimg`, `status`) VALUES
(1, '美国Bellevue市政府', 'http://bellevuecn.com', 'images/case/case1.png', 1),
(3, 'IT桔子', 'http://itjuzi.com/', 'images/case/case3.png', 1),
(4, '中关村管委会', 'http://www.zgc.gov.cn/', 'images/case/case4.png', 1),
(5, '易观智库', 'http://www.enfodesk.com/', 'images/case/case5.png', 0),
(6, '纷享销客', 'http://www.fxiaoke.com/', 'images/case/case6.png', 0),
(7, '中国企业家', 'http://www.iceo.com.cn/', 'images/case/case7.png', 0),
(8, 'CSDN', 'http://csdn.net', 'images/case/case8.png', 0),
(9, '51CTO技术博客', 'http://blog.51cto.com/', 'images/case/case9.png', 0),
(10, '快鲤鱼', 'http://kuailiyu.cyzone.cn/', 'images/case/case10.png', 0),
(11, '中青在线', 'http://www.cyol.net/', 'images/case/case11.png', 1),
(20, 'testZ', 'http://www.baidu.com/', '2015-08-09/55c70b013013f.png', 1);

-- --------------------------------------------------------

--
-- 表的结构 `gs_class`
--

CREATE TABLE `gs_class` (
  `id` int(11) NOT NULL COMMENT '班级ID',
  `name` varchar(45) DEFAULT NULL COMMENT '班级名称'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='班级表';

--
-- 转存表中的数据 `gs_class`
--

INSERT INTO `gs_class` (`id`, `name`) VALUES
(1, '软件1405班'),
(2, '网工1401班');

-- --------------------------------------------------------

--
-- 表的结构 `gs_friendlink`
--

CREATE TABLE `gs_friendlink` (
  `id` int(11) NOT NULL,
  `linkname` varchar(255) DEFAULT NULL COMMENT '链接名称',
  `url` varchar(255) DEFAULT NULL COMMENT '链接地址',
  `status` int(11) DEFAULT '1' COMMENT '链接状态'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='友情链接表';

--
-- 转存表中的数据 `gs_friendlink`
--

INSERT INTO `gs_friendlink` (`id`, `linkname`, `url`, `status`) VALUES
(1, 'Egret社区', 'http://bbs.egret-labs.org/dsfd', 1),
(3, 'Egret社区', 'http://bbs.egret-labs.org/d', 1),
(4, 'Egret社区', 'http://bbs.egret-labs.org/d', 1),
(5, 'Egret社区', 'http://bbs.egret-labs.org/d', 1),
(8, 'Egret社区', 'http://bbs.egret-labs.org/d', 1);

-- --------------------------------------------------------

--
-- 表的结构 `gs_grades`
--

CREATE TABLE `gs_grades` (
  `id` int(11) NOT NULL COMMENT '无关业务ID ',
  `score` varchar(45) DEFAULT NULL COMMENT '分数',
  `uid` int(11) NOT NULL COMMENT '用户关联外键',
  `subject_id` int(11) NOT NULL COMMENT '科目关联外键',
  `term_id` int(11) NOT NULL COMMENT '学期关联外键'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COMMENT='成绩表';

--
-- 转存表中的数据 `gs_grades`
--

INSERT INTO `gs_grades` (`id`, `score`, `uid`, `subject_id`, `term_id`) VALUES
(1, '57', 3, 1, 3),
(2, '12', 3, 1, 2),
(3, '78', 3, 2, 2),
(4, '57', 3, 1, 3),
(5, '78', 2, 3, 2),
(6, '57', 3, 1, 2),
(7, '98', 3, 2, 2),
(8, '57', 2, 1, 1),
(9, '56', 3, 2, 1),
(10, '57', 2, 2, 3),
(11, '34', 2, 1, 3),
(12, '12', 3, 1, 2),
(13, '57', 3, 1, 3),
(14, '57', 3, 1, 3);

-- --------------------------------------------------------

--
-- 表的结构 `gs_siteconfig`
--

CREATE TABLE `gs_siteconfig` (
  `id` int(11) NOT NULL,
  `sitename` varchar(255) DEFAULT NULL COMMENT '站点名称',
  `discript` text COMMENT '站点描述',
  `keywords` text COMMENT '站点关键字',
  `title` varchar(255) DEFAULT NULL COMMENT '网站标题',
  `copyright` varchar(255) DEFAULT NULL COMMENT '网站版权',
  `icp` varchar(255) DEFAULT NULL COMMENT '网站备案号'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='站点信息表';

--
-- 转存表中的数据 `gs_siteconfig`
--

INSERT INTO `gs_siteconfig` (`id`, `sitename`, `discript`, `keywords`, `title`, `copyright`, `icp`) VALUES
(1, '广东机电动物园成绩管理系统', '广东机电动物园成绩管理系统', '广东机电动物园成绩管理系统', '', '2015 广东机电动物园　马清婷 出品', '京ICP证XXXXXX123号-1');

-- --------------------------------------------------------

--
-- 表的结构 `gs_subject`
--

CREATE TABLE `gs_subject` (
  `id` int(11) NOT NULL COMMENT '科目ID',
  `name` varchar(45) DEFAULT NULL COMMENT '科目名称'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='科目表';

--
-- 转存表中的数据 `gs_subject`
--

INSERT INTO `gs_subject` (`id`, `name`) VALUES
(1, '语文'),
(2, '英语'),
(3, '数学');

-- --------------------------------------------------------

--
-- 表的结构 `gs_term`
--

CREATE TABLE `gs_term` (
  `id` int(11) NOT NULL COMMENT '学期ID',
  `name` varchar(45) DEFAULT NULL COMMENT '学期名称'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='学期表';

--
-- 转存表中的数据 `gs_term`
--

INSERT INTO `gs_term` (`id`, `name`) VALUES
(1, '2014年第一学期2'),
(2, '2015年第二学期'),
(3, '2015年第一学期');

-- --------------------------------------------------------

--
-- 表的结构 `gs_users`
--

CREATE TABLE `gs_users` (
  `id` int(11) NOT NULL COMMENT '无关业务ID',
  `username` varchar(45) DEFAULT NULL COMMENT '用户名',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `truename` varchar(45) DEFAULT NULL COMMENT '真实姓名',
  `sex` tinyint(1) DEFAULT NULL COMMENT '性别：1男 0女',
  `class_id` int(11) NOT NULL COMMENT '班级关联外键',
  `role` int(11) DEFAULT NULL COMMENT '用户角色'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='用户表';

--
-- 转存表中的数据 `gs_users`
--

INSERT INTO `gs_users` (`id`, `username`, `password`, `truename`, `sex`, `class_id`, `role`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70', '管理员', 0, 1, 1),
(3, '07140512', NULL, '山本五十六', 0, 1, 1),
(4, '07140501', NULL, '马清婷', 0, 1, 0),
(5, '07140503', NULL, '猫猫', 0, 1, 0),
(6, '07140101', NULL, '张三', 1, 2, 0),
(7, '07140106', NULL, '王大锤', 1, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_agent`
--
ALTER TABLE `gs_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_cast`
--
ALTER TABLE `gs_cast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_class`
--
ALTER TABLE `gs_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_friendlink`
--
ALTER TABLE `gs_friendlink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_grades`
--
ALTER TABLE `gs_grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gs_grades_gs_users_idx` (`uid`),
  ADD KEY `fk_gs_grades_gs_subject1_idx` (`subject_id`),
  ADD KEY `fk_gs_grades_gs_term1_idx` (`term_id`);

--
-- Indexes for table `gs_siteconfig`
--
ALTER TABLE `gs_siteconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_subject`
--
ALTER TABLE `gs_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_term`
--
ALTER TABLE `gs_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_users`
--
ALTER TABLE `gs_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gs_users_gs_class1_idx` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_agent`
--
ALTER TABLE `gs_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gs_cast`
--
ALTER TABLE `gs_cast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `gs_class`
--
ALTER TABLE `gs_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '班级ID',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gs_friendlink`
--
ALTER TABLE `gs_friendlink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gs_grades`
--
ALTER TABLE `gs_grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '无关业务ID ',AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gs_siteconfig`
--
ALTER TABLE `gs_siteconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gs_subject`
--
ALTER TABLE `gs_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '科目ID',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gs_term`
--
ALTER TABLE `gs_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学期ID',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gs_users`
--
ALTER TABLE `gs_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '无关业务ID',AUTO_INCREMENT=8;
--
-- 限制导出的表
--

--
-- 限制表 `gs_grades`
--
ALTER TABLE `gs_grades`
  ADD CONSTRAINT `fk_gs_grades_gs_subject1` FOREIGN KEY (`subject_id`) REFERENCES `gs_subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gs_grades_gs_term1` FOREIGN KEY (`term_id`) REFERENCES `gs_term` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gs_grades_gs_users` FOREIGN KEY (`uid`) REFERENCES `gs_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 限制表 `gs_users`
--
ALTER TABLE `gs_users`
  ADD CONSTRAINT `fk_gs_users_gs_class1` FOREIGN KEY (`class_id`) REFERENCES `gs_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
