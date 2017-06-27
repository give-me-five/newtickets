-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-27 13:39:20
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `account` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT '2',
  `addtime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `admin_role`
--

CREATE TABLE `admin_role` (
  `uid` int(11) NOT NULL COMMENT '管理员id',
  `rid` int(11) NOT NULL COMMENT '角色id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `film`
--

CREATE TABLE `film` (
  `id` int(10) UNSIGNED NOT NULL,
  `fid` int(11) DEFAULT NULL COMMENT '影片类型',
  `title` varchar(36) DEFAULT NULL,
  `picname` varchar(36) DEFAULT NULL,
  `firsttime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '首映时间',
  `duration` varchar(255) DEFAULT NULL COMMENT '时长',
  `director` varchar(16) DEFAULT NULL COMMENT '导演',
  `actor` varchar(100) DEFAULT NULL COMMENT '主演',
  `region` varchar(10) DEFAULT NULL COMMENT '地区',
  `introduction` mediumtext,
  `language` varchar(15) DEFAULT NULL,
  `score` float DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `hall`
--

CREATE TABLE `hall` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `layout` varchar(255) DEFAULT NULL COMMENT '座位布局'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `node`
--

CREATE TABLE `node` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL COMMENT '操作名称',
  `method` varchar(20) DEFAULT NULL COMMENT '方法名称',
  `url` varchar(100) DEFAULT NULL COMMENT '操作地址',
  `created_at` int(20) DEFAULT NULL COMMENT '创建时间',
  `update_at` int(20) DEFAULT NULL COMMENT '修改时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `totalprice` decimal(8,2) DEFAULT NULL,
  `seat` varchar(255) DEFAULT NULL,
  `playtime` datetime DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `ispay` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `projection`
--

CREATE TABLE `projection` (
  `id` int(10) UNSIGNED NOT NULL,
  `fid` int(11) DEFAULT NULL COMMENT '影片信息id',
  `hid` int(11) DEFAULT NULL COMMENT '影厅信息',
  `datetime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '放映时间',
  `price` decimal(10,0) DEFAULT NULL COMMENT '价格',
  `seatinfo` varchar(20) DEFAULT NULL COMMENT '座位信息'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rel_orders`
--

CREATE TABLE `rel_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(11) DEFAULT NULL COMMENT '用户id',
  `pid` int(11) DEFAULT NULL COMMENT '放映信息id',
  `sid` int(11) DEFAULT NULL COMMENT '商家id',
  `oid` int(11) DEFAULT NULL COMMENT '订单id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rel_shop`
--

CREATE TABLE `rel_shop` (
  `id` int(10) UNSIGNED NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL COMMENT '商家详情id',
  `hid` int(10) UNSIGNED NOT NULL COMMENT '影厅id',
  `fid` int(11) NOT NULL COMMENT '影片id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `role_node`
--

CREATE TABLE `role_node` (
  `rid` int(11) NOT NULL COMMENT '角色id',
  `nid` int(11) NOT NULL COMMENT '节点id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `shop_detail`
--

CREATE TABLE `shop_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL COMMENT '账号',
  `password` varchar(20) NOT NULL COMMENT '密码',
  `shopname` varchar(255) NOT NULL COMMENT '商家名称',
  `phone` int(11) UNSIGNED NOT NULL COMMENT '手机',
  `legal` varchar(16) NOT NULL COMMENT '法人代表',
  `id_card` int(18) NOT NULL COMMENT '身份证号',
  `city` varchar(255) NOT NULL COMMENT '城市',
  `region` varchar(255) NOT NULL COMMENT '区，县',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `licence` varchar(255) NOT NULL,
  `status` int(3) UNSIGNED NOT NULL COMMENT '1,通过审核2，未通过',
  `addtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `shop_region`
--

CREATE TABLE `shop_region` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) NOT NULL COMMENT '城市',
  `level` int(3) UNSIGNED NOT NULL,
  `upid` mediumint(8) UNSIGNED NOT NULL COMMENT '父id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shop_region`
--

INSERT INTO `shop_region` (`id`, `city`, `level`, `upid`) VALUES
(1, '北京', 1, 0),
(2, '天津', 1, 0),
(3, '东城区', 2, 1),
(4, '西城区', 2, 1),
(5, '崇文区', 2, 1),
(6, '宣武区', 2, 1),
(7, '朝阳区', 2, 1),
(8, '丰台区', 2, 1),
(9, '石景山区', 2, 1),
(10, '海淀区', 2, 1),
(11, '门头沟区', 2, 1),
(12, '房山区', 2, 1),
(13, '通州区', 2, 1),
(14, '顺义区', 2, 1),
(15, '昌平区', 2, 1),
(16, '大兴区', 2, 1),
(17, '怀柔区', 2, 1),
(18, '平谷区', 2, 1),
(19, '密云县', 2, 1),
(20, '延庆县', 2, 1),
(21, '和平区', 2, 2),
(22, '河东区', 2, 2),
(23, '河西区', 2, 2),
(24, '南开区', 2, 2),
(25, '河北区', 2, 2),
(26, '红桥区', 2, 2),
(27, '塘沽区', 2, 2),
(28, '汉沽区', 2, 2),
(29, '大港区', 2, 2),
(30, '蓟县', 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_ip` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `users_detail`
--

CREATE TABLE `users_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firsttime` datetime DEFAULT NULL,
  `lasttime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique` (`account`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `node`
--
ALTER TABLE `node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projection`
--
ALTER TABLE `projection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel_orders`
--
ALTER TABLE `rel_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel_shop`
--
ALTER TABLE `rel_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique` (`name`);

--
-- Indexes for table `shop_detail`
--
ALTER TABLE `shop_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_region`
--
ALTER TABLE `shop_region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unique` (`nickname`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `film`
--
ALTER TABLE `film`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `hall`
--
ALTER TABLE `hall`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `node`
--
ALTER TABLE `node`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `projection`
--
ALTER TABLE `projection`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `rel_orders`
--
ALTER TABLE `rel_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `rel_shop`
--
ALTER TABLE `rel_shop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `shop_detail`
--
ALTER TABLE `shop_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `shop_region`
--
ALTER TABLE `shop_region`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
