/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : ajaxdemo1

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-07-23 17:52:48
*/


SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `click` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', 'php', '58');
INSERT INTO `article` VALUES ('2', 'pps', '99');
INSERT INTO `article` VALUES ('3', 'pdf阅读器下载', '32');
INSERT INTO `article` VALUES ('4', 'pptv', '52');
INSERT INTO `article` VALUES ('5', 'photoshop', '58');
INSERT INTO `article` VALUES ('6', 'photoshop cs5 序列号', '26');
INSERT INTO `article` VALUES ('7', 'phpcms', '56');
INSERT INTO `article` VALUES ('8', 'phpnow', '10');
INSERT INTO `article` VALUES ('9', 'php文件如何打开', '18');
INSERT INTO `article` VALUES ('10', 'php发展', '6');
INSERT INTO `article` VALUES ('11', 'php学习', '158');
INSERT INTO `article` VALUES ('12', 'php教程', '88');
