-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-10 06:15:44
-- 服务器版本： 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weixin`
--

-- --------------------------------------------------------

--
-- 表的结构 `wx_admin`
--

CREATE TABLE `wx_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  `pid` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `pseudonym` varchar(50) DEFAULT NULL COMMENT '笔名',
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_admin`
--

INSERT INTO `wx_admin` (`admin_id`, `username`, `password`, `realname`, `group_id`, `pid`, `city_id`, `pseudonym`, `email`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '超级管理员', 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `wx_column`
--

CREATE TABLE `wx_column` (
  `column_id` int(11) NOT NULL,
  `column_name` varchar(50) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `keyword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_column`
--

INSERT INTO `wx_column` (`column_id`, `column_name`, `sort_order`, `pid`, `keyword`) VALUES
(1, '后台首页', 0, 0, 'index/index'),
(14, '微信子系统', 0, 0, 'weixin/index'),
(15, '公司信息', 0, 14, 'weixin/company'),
(16, '信息管理', 0, 14, ''),
(80, '栏目管理', 0, 16, 'weixin/lanmu'),
(81, '文章管理', 0, 16, 'weixin/article'),
(644, '银行卡', 0, 14, 'weixin/card'),
(645, '微信会员', 0, 14, 'weixin/vip'),
(646, '微信设置', 0, 14, 'weixin/set'),
(647, '行业类别', 0, 15, 'weixin/company_filed'),
(648, '信息列表', 0, 15, 'weixin/company_list'),
(649, '会员列表', 0, 645, 'weixin/vip_list'),
(650, '导出', 0, 645, 'weixin/out_list'),
(651, '微信绑定设置', 0, 646, 'weixin/set_bangding'),
(652, '关注自动回复', 0, 646, 'weixin/set_reply'),
(653, '消息自动回复', 0, 646, 'weixin/set_zidong'),
(654, '关键词自动回复', 0, 646, 'weixin/set_guanjian'),
(655, '自定义菜单管理', 0, 646, 'weixin/set_menu'),
(656, '关注会员列表', 0, 646, 'weixin/set_man');

-- --------------------------------------------------------

--
-- 表的结构 `wx_member`
--

CREATE TABLE `wx_member` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sex` enum('男','女') CHARACTER SET gbk NOT NULL DEFAULT '男' COMMENT '性别-个人学员',
  `age` varchar(15) NOT NULL COMMENT '年龄',
  `tel` varchar(30) CHARACTER SET gbk NOT NULL DEFAULT '' COMMENT '固话',
  `qq` char(12) CHARACTER SET gbk NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `photo` varchar(250) CHARACTER SET gbk NOT NULL COMMENT '用户头像',
  `createtime` int(10) UNSIGNED NOT NULL COMMENT '注册时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_member`
--

INSERT INTO `wx_member` (`id`, `username`, `password`, `sex`, `age`, `tel`, `qq`, `email`, `photo`, `createtime`) VALUES
(1, 'zhaojing20s', 's9878589', '男', '', '', '', '904678672@qq.com', '', 0),
(2, 'admin', '123456', '男', '', '', '', '', '', 0),
(3, 'ad', '123456', '男', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wx_weixin`
--

CREATE TABLE `wx_weixin` (
  `id` int(11) NOT NULL,
  `wxid` varchar(100) DEFAULT NULL,
  `wxname` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `appid` varchar(100) DEFAULT NULL,
  `appsecret` varchar(100) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `userid` tinyint(1) DEFAULT NULL,
  `token_time` int(10) DEFAULT NULL COMMENT 'token加入时间',
  `key` varchar(200) DEFAULT NULL,
  `bangding` tinyint(1) DEFAULT '0' COMMENT '1已经绑定',
  `next_openid` varchar(200) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `service` text COMMENT '服务条款',
  `privacy` text COMMENT '隐私条款'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_weixin`
--

INSERT INTO `wx_weixin` (`id`, `wxid`, `wxname`, `url`, `token`, `appid`, `appsecret`, `access_token`, `userid`, `token_time`, `key`, `bangding`, `next_openid`, `tel`, `email`, `service`, `privacy`) VALUES
(3, 'gh_a1eda0686354', '银图时尚', 'http://lgx.meixingkong.com/home/index.html', 'yintushishang', 'wxe76a2af49bd7e833', 'b424c798115ab05010a68fd1dfca395b', 'aAEbw5rI_MHmpz_L3ZuaocHSkBlpuoBp2tdmoygVhfmkSR6ngWehJ-fg76JMk0XCSBR8HKDW0xfv8Ii8Q5qDY6OfqdMGWf8EHdGetbE1xwmdPnPMMI7GAe-4tkBxtAy3UBRjAGACJZ', 1, 1490165592, 'YgRw6YVyThymHqJFrz2E6jmMx16cySTI688nxJNZVU3', 0, NULL, NULL, NULL, NULL, NULL),
(4, 'gh_a1eda0686354', '银图时尚', 'http://lgx.meixingkong.com/home/index.html', 'yintushishang', 'wxe76a2af49bd7e833', 'b424c798115ab05010a68fd1dfca395b', 'lBvHqFF9Q8sBVF9YpWOuXh6mGb_ywDKtRU6J79f0olos6fuKo2-rxCVDZghXvLao1f8USM0JAzgsMOMWTbDnTugcOraIeu7HtUNCQmr6b64u-2iw319v-dQFlbvUBPpZRXPaAFAMSK', 4, 1502162516, 'YgRw6YVyThymHqJFrz2E6jmMx16cySTI688nxJNZVU3', 0, 'ooz98wbmpxXUqjjAPWjC5zbI9fW8', '9878589', '904678672@qq.com', '我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，', '我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，我们可是好人啊，');

-- --------------------------------------------------------

--
-- 表的结构 `wx_weixink`
--

CREATE TABLE `wx_weixink` (
  `id` int(11) NOT NULL,
  `style` tinyint(1) DEFAULT '0' COMMENT '0文本 1图文',
  `content` text,
  `addtime` int(10) DEFAULT NULL,
  `userid` int(11) DEFAULT '0',
  `qy` tinyint(1) DEFAULT '0' COMMENT '0未保存 1保存',
  `title` varchar(100) DEFAULT NULL,
  `order` tinyint(1) DEFAULT NULL COMMENT '排序',
  `url` varchar(100) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0' COMMENT '1关注自动回复 2消息自动回复'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_weixink`
--

INSERT INTO `wx_weixink` (`id`, `style`, `content`, `addtime`, `userid`, `qy`, `title`, `order`, `url`, `type`) VALUES
(45, 0, '啊啊', NULL, 1, 0, NULL, 1, NULL, 2),
(46, 1, 'Uploads/weixin/images/2017-03-22/58d21ff2bad57.jpg', NULL, 1, 0, 'halou', 1, 'haha ', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wx_weixinkey`
--

CREATE TABLE `wx_weixinkey` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `style` tinyint(1) DEFAULT '0' COMMENT '0文本 1图文',
  `content` text,
  `addtime` int(10) DEFAULT NULL,
  `userid` int(11) DEFAULT '0',
  `passed` tinyint(1) DEFAULT '0' COMMENT '0禁用 1启用',
  `order` tinyint(1) DEFAULT NULL COMMENT '排序',
  `url` varchar(100) DEFAULT NULL,
  `image_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_weixinkey`
--

INSERT INTO `wx_weixinkey` (`id`, `title`, `style`, `content`, `addtime`, `userid`, `passed`, `order`, `url`, `image_name`) VALUES
(8, '11111', 0, '123', NULL, 1, 0, 1, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `wx_weixinmenu`
--

CREATE TABLE `wx_weixinmenu` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT '0',
  `style` tinyint(3) DEFAULT '0' COMMENT '0文本 1图文 2链接',
  `content` text,
  `addtime` int(10) DEFAULT NULL,
  `userid` int(11) DEFAULT '0',
  `orderid` int(11) DEFAULT '0' COMMENT '排序',
  `order` int(11) DEFAULT '0' COMMENT '图片排序',
  `image_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0可更改 1不可更改'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_weixinmenu`
--

INSERT INTO `wx_weixinmenu` (`id`, `pid`, `style`, `content`, `addtime`, `userid`, `orderid`, `order`, `image_name`, `title`, `url`, `type`) VALUES
(1, 0, 0, '', NULL, 0, 3, 0, '', '本地生活', '', 0),
(2, 0, 2, 'http://lgx.meixingkong.com/member/index', NULL, 0, 1, 0, '', '电视台', '', 0),
(3, 0, 0, '', NULL, 0, 2, 0, '', '生活圈', '', 1),
(4, 2, 0, '', NULL, 0, 1, 0, '', '视频', '', 0),
(5, 2, 0, '', NULL, 0, 2, 0, '', '电视直播', '', 0),
(6, 2, 0, '', NULL, 0, 3, 0, '', '本地新闻', '', 0),
(7, 3, 0, '', NULL, 0, 1, 0, '', '微商城', 'http://www.vvsvip.com', 1),
(8, 3, 0, '', NULL, 0, 2, 0, '', '在线早教', '', 1),
(9, 3, 0, '', NULL, 0, 3, 0, '', '寻医问药', 'http://m.800pharm.com', 1),
(10, 3, 0, '', NULL, 0, 3, 0, '', '金融理财', '', 1),
(11, 1, 0, '', NULL, 0, 1, 0, '', '便民服务', '', 1),
(12, 1, 0, '', NULL, 0, 2, 0, '', '论坛', '', 1),
(13, 1, 0, '', NULL, 0, 3, 0, '', '活动比赛', '', 0),
(35, 0, 0, NULL, NULL, 1, 1, 0, NULL, '我的商城', NULL, 0),
(36, 0, 0, NULL, NULL, 1, 22, 0, NULL, '我的菜单', NULL, 0),
(37, 0, 0, NULL, NULL, 1, 33, 0, NULL, '我的账户', NULL, 0),
(38, 35, 1, 'Uploads/weixin/images/2017-03-22/58d21e22ec828.jpg', NULL, 1, 12, 1, '1231', '列表', '1', 0),
(39, 35, 0, NULL, NULL, 1, 12, 0, NULL, '1231', NULL, 0),
(41, 0, 0, '', NULL, 2, 3, 0, '', '本地生活', '', 0),
(42, 0, 2, 'http://lgx.meixingkong.com/member/index', NULL, 2, 1, 0, '', '电视台', '', 0),
(43, 0, 0, NULL, NULL, 2, 2, 0, NULL, '生活圈', NULL, 0),
(44, 42, 0, NULL, NULL, 2, 1, 0, NULL, '视频', NULL, 0),
(45, 42, 0, NULL, NULL, 2, 2, 0, NULL, '电视直播', NULL, 0),
(46, 42, 0, '', NULL, 2, 3, 0, '', '本地新闻', '', 0),
(47, 43, 0, NULL, NULL, 2, 1, 0, NULL, '微商城', NULL, 0),
(48, 43, 0, NULL, NULL, 2, 2, 0, NULL, '在线早教', NULL, 0),
(49, 43, 0, NULL, NULL, 2, 3, 0, NULL, '寻医问药', NULL, 0),
(50, 43, 0, NULL, NULL, 2, 3, 0, NULL, '金融理财', NULL, 0),
(51, 41, 0, NULL, NULL, 2, 1, 0, NULL, '便民服务', NULL, 0),
(52, 41, 0, NULL, NULL, 2, 2, 0, NULL, '论坛', NULL, 0),
(53, 41, 0, NULL, NULL, 2, 3, 0, NULL, '活动比赛', NULL, 0),
(88, 0, 0, NULL, NULL, 3, 3, 0, NULL, '本地生活', NULL, 0),
(89, 88, 0, NULL, NULL, 3, 1, 0, NULL, '便民服务', NULL, 1),
(90, 88, 0, NULL, NULL, 3, 2, 0, NULL, '论坛', NULL, 1),
(91, 88, 0, NULL, NULL, 3, 3, 0, NULL, '活动比赛', NULL, 0),
(92, 0, 0, NULL, NULL, 3, 1, 0, NULL, '电视台', NULL, 0),
(93, 92, 0, NULL, NULL, 3, 1, 0, NULL, '视频', NULL, 0),
(94, 92, 0, NULL, NULL, 3, 2, 0, NULL, '电视直播', NULL, 0),
(95, 92, 0, NULL, NULL, 3, 3, 0, NULL, '本地新闻', NULL, 0),
(96, 0, 0, NULL, NULL, 3, 2, 0, NULL, '生活圈', NULL, 1),
(97, 96, 0, NULL, NULL, 3, 1, 0, NULL, '微商城', NULL, 1),
(98, 96, 0, NULL, NULL, 3, 2, 0, NULL, '在线早教', NULL, 1),
(99, 96, 0, NULL, NULL, 3, 3, 0, NULL, '寻医问药', NULL, 1),
(100, 96, 0, NULL, NULL, 3, 3, 0, NULL, '金融理财', NULL, 1),
(101, 0, 0, NULL, NULL, 4, 3, 0, NULL, '本地生活', NULL, 0),
(102, 101, 0, NULL, NULL, 4, 1, 0, NULL, '便民服务', '', 1),
(103, 101, 0, NULL, NULL, 4, 2, 0, NULL, '论坛', '', 1),
(104, 101, 0, NULL, NULL, 4, 3, 0, NULL, '活动比赛', '', 0),
(105, 0, 0, NULL, NULL, 4, 1, 0, NULL, '电视台', NULL, 0),
(106, 105, 0, NULL, NULL, 4, 1, 0, NULL, '视频', '', 0),
(107, 105, 0, NULL, NULL, 4, 2, 0, NULL, '电视直播', '', 0),
(108, 105, 0, NULL, NULL, 4, 3, 0, NULL, '本地新闻', '', 0),
(109, 0, 0, NULL, NULL, 4, 2, 0, NULL, '生活圈', NULL, 1),
(110, 109, 0, NULL, NULL, 4, 1, 0, NULL, '微商城', 'http://www.vvsvip.com', 1),
(111, 109, 0, NULL, NULL, 4, 2, 0, NULL, '在线早教', '', 1),
(112, 109, 0, NULL, NULL, 4, 3, 0, NULL, '寻医问药', 'http://m.800pharm.com', 1),
(113, 109, 0, NULL, NULL, 4, 3, 0, NULL, '金融理财', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wx_weixin_info`
--

CREATE TABLE `wx_weixin_info` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `banner_text` text CHARACTER SET utf8,
  `share_image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `share_title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `share_desc` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `max_money` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `fee` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `kefu` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `wx_weixin_info`
--

INSERT INTO `wx_weixin_info` (`id`, `banner_image`, `banner_text`, `share_image`, `share_title`, `share_desc`, `max_money`, `fee`, `kefu`) VALUES
(1, '/images/icon_banner.jpg', '---得益于我国消费金融市场的蓬勃发展，个人消费信贷！得益于我国消费金融市场的蓬勃发展，个人消费信贷！', '/images/icon_banner.jpg', '后台设置|分享标题', '后台设置|分享描述', '20000', '5.14', '[{"id":"12345678901","image":"http:\\/\\/qimai.kxcms.com\\/upload\\/201709\\/30\\/0ced49328befcc208c421dc36e4cd58c.jpeg"}]');

-- --------------------------------------------------------

--
-- 表的结构 `wx_weixin_man`
--

CREATE TABLE `wx_weixin_man` (
  `id` int(11) NOT NULL,
  `openid` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL COMMENT '值为1时是男性，值为2时是女性，值为0时是未知',
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `headimgurl` varchar(150) DEFAULT NULL,
  `subscribe_time` int(10) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL COMMENT '公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注',
  `groupid` varchar(30) DEFAULT NULL COMMENT '用户所在的分组ID（兼容旧的用户分组接口）',
  `tagid_list` varchar(100) DEFAULT NULL COMMENT '用户被打上的标签ID列表',
  `tel` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `linshi` tinyint(1) DEFAULT '0' COMMENT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wx_weixin_man`
--

INSERT INTO `wx_weixin_man` (`id`, `openid`, `nickname`, `userid`, `sex`, `city`, `country`, `province`, `headimgurl`, `subscribe_time`, `remark`, `groupid`, `tagid_list`, `tel`, `password`, `linshi`) VALUES
(9, 'ooz98wefVJU4BAsvQZyqFeJbzjPI', '流星星1～', 2, 1, '', '冰岛', '', 'http://wx.qlogo.cn/mmopen/vv8lLNoNRezEBGbR0EuSzvL0quvquX4Bwu6NKico0Av2QPvx68MFXs5DxibEXmX6JoDXM6vpTGdib3yfzP5fDPiaaEzcia7Xeiblp3/0', 1491562617, '', '0', NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wx_admin`
--
ALTER TABLE `wx_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `wx_column`
--
ALTER TABLE `wx_column`
  ADD PRIMARY KEY (`column_id`);

--
-- Indexes for table `wx_member`
--
ALTER TABLE `wx_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wx_weixin`
--
ALTER TABLE `wx_weixin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wx_weixink`
--
ALTER TABLE `wx_weixink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wx_weixinkey`
--
ALTER TABLE `wx_weixinkey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wx_weixinmenu`
--
ALTER TABLE `wx_weixinmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wx_weixin_info`
--
ALTER TABLE `wx_weixin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wx_weixin_man`
--
ALTER TABLE `wx_weixin_man`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wx_admin`
--
ALTER TABLE `wx_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `wx_column`
--
ALTER TABLE `wx_column`
  MODIFY `column_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=657;
--
-- AUTO_INCREMENT for table `wx_member`
--
ALTER TABLE `wx_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wx_weixin`
--
ALTER TABLE `wx_weixin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `wx_weixink`
--
ALTER TABLE `wx_weixink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `wx_weixinkey`
--
ALTER TABLE `wx_weixinkey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wx_weixinmenu`
--
ALTER TABLE `wx_weixinmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `wx_weixin_info`
--
ALTER TABLE `wx_weixin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wx_weixin_man`
--
ALTER TABLE `wx_weixin_man`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
