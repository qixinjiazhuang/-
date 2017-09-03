/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : project

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-08-30 10:46:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aboutus
-- ----------------------------
DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE `aboutus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `content` text NOT NULL,
  `time` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aboutus
-- ----------------------------
INSERT INTO `aboutus` VALUES ('1', '关于我们', '1', '啊啊啊啊嗄', '1503737153');

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'user', 'e10adc3949ba59abbe56e057f20f883e', '0');

-- ----------------------------
-- Table structure for appointment
-- ----------------------------
DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `a_status` tinyint(4) NOT NULL DEFAULT '1',
  `a_phone` int(11) NOT NULL,
  `a_name` varchar(32) NOT NULL,
  `city` varchar(100) NOT NULL DEFAULT '北京市',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of appointment
-- ----------------------------

-- ----------------------------
-- Table structure for business
-- ----------------------------
DROP TABLE IF EXISTS `business`;
CREATE TABLE `business` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `b_name` varchar(50) NOT NULL DEFAULT '',
  `b_type` tinyint(4) NOT NULL DEFAULT '1',
  `clogo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `zlogo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `banner` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `b_phone` int(11) NOT NULL DEFAULT '0',
  `qq` int(11) NOT NULL DEFAULT '0',
  `fax` int(11) NOT NULL DEFAULT '0',
  `bushour` varchar(50) NOT NULL DEFAULT '',
  `notice` varchar(100) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `level` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of business
-- ----------------------------

-- ----------------------------
-- Table structure for b_case
-- ----------------------------
DROP TABLE IF EXISTS `b_case`;
CREATE TABLE `b_case` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `cellname` varchar(32) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `idea` text NOT NULL,
  `gid` int(11) NOT NULL,
  `audit` tinyint(4) NOT NULL DEFAULT '1',
  `logo` varchar(255) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of b_case
-- ----------------------------
INSERT INTO `b_case` VALUES ('5', '1', '标题', '天津市,天津市,河西区', '北京小区', '1', '/case/2017-08-29/59a5119060794.jpeg,/case/2017-08-29/59a5119061624.jpeg', '11', '1', '1', '/case/2017-08-29/59a5117ce730c.jpeg');

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `c_name` varchar(32) NOT NULL DEFAULT '',
  `introduce` char(50) NOT NULL DEFAULT '',
  `level` tinyint(4) NOT NULL DEFAULT '1',
  `banner` char(100) NOT NULL DEFAULT 'default.jpg',
  `clogo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `zlogo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `contacts` varchar(32) NOT NULL DEFAULT '',
  `c_phone` varchar(11) NOT NULL DEFAULT '0',
  `qq` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('1', '2', '2', '阿里巴巴', '打造宇宙第一装修公司', '1', '/company/2017-08-24/599e358cecae1.jpeg', '/company/2017-08-24/599e358ced5e6.jpeg', '/company/2017-08-24/599e358cedd52.jpeg', '李硕', '2147483647', '2147483647');
INSERT INTO `company` VALUES ('2', '3', '2', '最强公司', '最强就是了', '1', '/company/2017-08-26/59a10f0097e8b.jpeg', '/company/2017-08-26/59a10f009893c.jpeg', '/company/2017-08-26/59a10f0099402.jpeg', '火星人', '13498788223', '13133313');
INSERT INTO `company` VALUES ('3', '4', '2', '123', '12312', '1', '/company/2017-08-30/59a611dbced09.jpeg', '/company/2017-08-30/59a611dbcf4f6.jpeg', '/company/2017-08-30/59a611dbcfe45.jpeg', '123123', '13126991105', '123123');
INSERT INTO `company` VALUES ('4', '5', '2', '', '', '1', 'default.jpg', 'default.jpg', 'default.jpg', '', '0', '0');

-- ----------------------------
-- Table structure for designer
-- ----------------------------
DROP TABLE IF EXISTS `designer`;
CREATE TABLE `designer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `company` varchar(32) NOT NULL DEFAULT '',
  `school` varchar(32) NOT NULL DEFAULT '',
  `qq` int(11) NOT NULL DEFAULT '0',
  `concept` tinyint(4) NOT NULL DEFAULT '1',
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of designer
-- ----------------------------

-- ----------------------------
-- Table structure for evaluate
-- ----------------------------
DROP TABLE IF EXISTS `evaluate`;
CREATE TABLE `evaluate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `content` text NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of evaluate
-- ----------------------------

-- ----------------------------
-- Table structure for examine
-- ----------------------------
DROP TABLE IF EXISTS `examine`;
CREATE TABLE `examine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `e_name` varchar(32) NOT NULL,
  `number` varchar(50) NOT NULL,
  `e_photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `e_status` tinyint(4) NOT NULL DEFAULT '1',
  `ltime` int(11) NOT NULL DEFAULT '0',
  `ttime` int(11) NOT NULL DEFAULT '0',
  `e_phone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of examine
-- ----------------------------

-- ----------------------------
-- Table structure for foreman
-- ----------------------------
DROP TABLE IF EXISTS `foreman`;
CREATE TABLE `foreman` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '1',
  `qq` int(11) NOT NULL DEFAULT '0',
  `idea` varchar(100) NOT NULL DEFAULT '',
  `age` tinyint(4) NOT NULL DEFAULT '1',
  `uid` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foreman
-- ----------------------------

-- ----------------------------
-- Table structure for friendlink
-- ----------------------------
DROP TABLE IF EXISTS `friendlink`;
CREATE TABLE `friendlink` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `linkname` varchar(32) NOT NULL,
  `url` varchar(42) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friendlink
-- ----------------------------
INSERT INTO `friendlink` VALUES ('1', '百度', 'www.baidu.com', '/case/2017-08-28/150390155134093698.jpeg', '百度首页1', '1');
INSERT INTO `friendlink` VALUES ('3', '百度1111', '123123', '/friendlink/2017-08-28/150390166673668344.jpeg', '123123', '1');
INSERT INTO `friendlink` VALUES ('4', '百度1111', 'www.baidu.com', '/friendlink/2017-08-28/150390169233343714.jpeg', '1123123', '1');
INSERT INTO `friendlink` VALUES ('5', '12321323', '213', '/friendlink/2017-08-28/150390170420473935.jpeg', '21323', '2');
INSERT INTO `friendlink` VALUES ('7', '213213', '123123', '/friendlink/2017-08-28/150390172579763742.jpeg', '213123', '1');

-- ----------------------------
-- Table structure for insurance
-- ----------------------------
DROP TABLE IF EXISTS `insurance`;
CREATE TABLE `insurance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `i_name` varchar(32) NOT NULL,
  `i_phone` varchar(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of insurance
-- ----------------------------
INSERT INTO `insurance` VALUES ('1', '1', '1', '14', '李硕', '13888888888', '1', '123111', '1503553116');

-- ----------------------------
-- Table structure for material
-- ----------------------------
DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of material
-- ----------------------------
INSERT INTO `material` VALUES ('1', '瓷砖', '0', '0');
INSERT INTO `material` VALUES ('2', '橱柜', '0', '0');
INSERT INTO `material` VALUES ('3', '马可波罗瓷砖', '1', '0-1');
INSERT INTO `material` VALUES ('4', '叭叭叭瓷砖', '1', '0-1');
INSERT INTO `material` VALUES ('5', '北京橱柜', '2', '0-2');
INSERT INTO `material` VALUES ('6', '天津橱柜', '2', '0-2');
INSERT INTO `material` VALUES ('7', '内门', '0', '0');
INSERT INTO `material` VALUES ('8', '地板', '0', '0');
INSERT INTO `material` VALUES ('9', '阿根地板', '8', '0-8');
INSERT INTO `material` VALUES ('10', '波波门', '7', '0-7');
INSERT INTO `material` VALUES ('11', '卫浴', '0', '0');
INSERT INTO `material` VALUES ('12', '吊顶', '0', '0');
INSERT INTO `material` VALUES ('13', '开关', '0', '0');
INSERT INTO `material` VALUES ('14', '油漆', '0', '0');
INSERT INTO `material` VALUES ('15', '朗斯卫浴', '11', '0-11');
INSERT INTO `material` VALUES ('16', '阿里吊顶', '12', '0-12');
INSERT INTO `material` VALUES ('17', '公牛开关', '13', '0-13');
INSERT INTO `material` VALUES ('18', '泰和油漆', '14', '0-14');
INSERT INTO `material` VALUES ('19', '实木门', '7', '0-7');
INSERT INTO `material` VALUES ('20', '齐心地板', '8', '0-8');
INSERT INTO `material` VALUES ('21', '蓝蛇油漆', '14', '0-14');
INSERT INTO `material` VALUES ('22', '奔腾开关', '13', '0-13');
INSERT INTO `material` VALUES ('23', '佳佳卫浴', '11', '0-11');
INSERT INTO `material` VALUES ('24', '嘎窝吊顶', '12', '0-12');
INSERT INTO `material` VALUES ('25', '杭州瓷砖', '1', '0-1');

-- ----------------------------
-- Table structure for mechanic
-- ----------------------------
DROP TABLE IF EXISTS `mechanic`;
CREATE TABLE `mechanic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level` tinyint(4) NOT NULL DEFAULT '1',
  `qq` int(11) NOT NULL DEFAULT '0',
  `introduce` varchar(100) NOT NULL DEFAULT '',
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `types` tinyint(4) NOT NULL DEFAULT '1',
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mechanic
-- ----------------------------
INSERT INTO `mechanic` VALUES ('3', '2', '2123123123', '123123', '9', '5', '3', '/mechanic/2017-08-15/150278607292790603.jpeg');
INSERT INTO `mechanic` VALUES ('2', '1', '2147483611', '房费', '8', '5', '1', '/mechanic/2017-08-14/150269913061374314.jpeg');
INSERT INTO `mechanic` VALUES ('4', '1', '2147483611', '123123', '12', '5', '1', '/mechanic/2017-08-14/150270460588225782.jpeg');
INSERT INTO `mechanic` VALUES ('5', '2', '2147483611', '123123', '13', '5', '1', '/mechanic/2017-08-14/150270470157896634.jpeg');

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', '1', '1', 'default.jpg');

-- ----------------------------
-- Table structure for renovation
-- ----------------------------
DROP TABLE IF EXISTS `renovation`;
CREATE TABLE `renovation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `page` int(11) NOT NULL,
  `bpic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `num` int(11) NOT NULL DEFAULT '0',
  `ceramic` varchar(32) NOT NULL,
  `cupboard` varchar(32) NOT NULL,
  `door` varchar(32) NOT NULL,
  `floor` varchar(32) NOT NULL,
  `bath` varchar(32) NOT NULL,
  `ceiling` varchar(32) NOT NULL,
  `switch` varchar(32) NOT NULL,
  `paint` varchar(32) NOT NULL,
  `rest_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `living` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `study_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `bed_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `introduction` text NOT NULL,
  `sleep_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `kitchen_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `bath_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of renovation
-- ----------------------------
INSERT INTO `renovation` VALUES ('1', '标题', '省份,地级市,市、县级市', '12313', '/renovation/2017-08-25/599fb5f259690.jpeg', '0', '马可波罗瓷砖', '北京橱柜', '波波门', '阿根地板', '朗斯卫浴', '阿里吊顶', '公牛开关', '泰和油漆', '/renovation/2017-08-25/599fb5f259f18.jpeg', 'default.jpg', '/renovation/2017-08-25/599fb5f25a7a2.jpeg', '/renovation/2017-08-25/599fb5f25be5b.jpeg', '123213', '/renovation/2017-08-25/599fb5f25c660.jpeg', '/renovation/2017-08-25/599fb5f25ced9.jpeg', '/renovation/2017-08-25/599fb5f25fed8.jpeg', '0');
INSERT INTO `renovation` VALUES ('3', '标题', '北京市,北京市,西城区', '12313', '/renovation/2017-08-25/599fbd54d8de3.jpeg', '0', '马可波罗瓷砖', '北京橱柜', '波波门', '阿根地板', '朗斯卫浴', '阿里吊顶', '公牛开关', '泰和油漆', '/renovation/2017-08-25/599fbd54d98f1.jpeg', 'default.jpg', '/renovation/2017-08-25/599fbd54da16a.jpeg', '/renovation/2017-08-25/599fbd54db026.jpeg', '哈哈', '/renovation/2017-08-25/599fbd54db7d0.jpeg', '/renovation/2017-08-25/599fbd54dc073.jpeg', '/renovation/2017-08-25/599fbd54dcc2f.jpeg', '1503640916');

-- ----------------------------
-- Table structure for tender
-- ----------------------------
DROP TABLE IF EXISTS `tender`;
CREATE TABLE `tender` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `budget` tinyint(4) NOT NULL,
  `acreage` varchar(12) NOT NULL,
  `cellname` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `method` tinyint(4) NOT NULL,
  `style` tinyint(4) NOT NULL,
  `server` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `examine` tinyint(4) NOT NULL,
  `title` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tender
-- ----------------------------
INSERT INTO `tender` VALUES ('14', '1', '李硕', '13888888888', '1', '1', '32', '阿里', '省份,地级市,市、县级市', '糊涂', '/tender/2017-08-23/150347222419636838.jpeg', '1', '1', '13123', '1', '1', '标题');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '篮球', '0', '0');
INSERT INTO `type` VALUES ('2', '体育', '0', '0');
INSERT INTO `type` VALUES ('3', '123', '0-1', '1');
INSERT INTO `type` VALUES ('4', '美国新闻', '0-1', '1');
INSERT INTO `type` VALUES ('5', '篮球', '0-2', '2');
INSERT INTO `type` VALUES ('7', '英国新闻', '0-1', '1');
INSERT INTO `type` VALUES ('10', '美国男篮', '0-2-5', '5');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` char(50) NOT NULL DEFAULT '',
  `city` varchar(100) NOT NULL DEFAULT '北京市',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `regtime` int(11) NOT NULL DEFAULT '0',
  `lastlogin` int(11) NOT NULL DEFAULT '0',
  `birth` varchar(50) NOT NULL DEFAULT '0',
  `truename` varchar(32) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '0',
  `delete` tinyint(4) NOT NULL DEFAULT '1',
  `audit` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', '123@qq.com', '北京市', '1', '1', '1503453475', '0', '2017-1-1', '李硕', '13888888888', '1', '3');
INSERT INTO `users` VALUES ('2', 'user', 'e10adc3949ba59abbe56e057f20f883e', '', '北京市,北京市,西城区', '2', '1', '1503540620', '0', '0', '', '0', '1', '1');
INSERT INTO `users` VALUES ('3', 'balibali', 'e10adc3949ba59abbe56e057f20f883e', '12323@qq.copm', '河南省,开封市,鼓楼区', '2', '1', '1503727277', '0', '2017-1-1', '你猜', '13124445876', '1', '1');
INSERT INTO `users` VALUES ('4', '123123', '274da997412973c08cf7e78724153f55', '', '辽宁省,地级市,市、县级市', '2', '1', '1504055771', '0', '0', '', '0', '1', '1');
INSERT INTO `users` VALUES ('5', '1231231111', '4297f44b13955235245b2497399d7a93', '123123@qq.com', '北京市', '2', '1', '1504056074', '0', '1993-7-25', 'lishuo', '13126991105', '1', '1');
