/*
Navicat MySQL Data Transfer

Source Server         : zabdiel
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : ejercicio

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2021-09-23 13:36:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cliente`
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES ('1', 'zabdiel', '2021-08-01', 'zabdiel', 'zabdiel');
INSERT INTO `cliente` VALUES ('2', 'hermano', '2021-09-02', 'her', 'her');

-- ----------------------------
-- Table structure for `empresa`
-- ----------------------------
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(255) NOT NULL,
  `rfc` varchar(12) NOT NULL,
  `id_planes` int(11) NOT NULL,
  PRIMARY KEY (`id_empresa`),
  KEY `id_plan` (`id_planes`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of empresa
-- ----------------------------
INSERT INTO `empresa` VALUES ('1', 'wallmart', '123456789123', '1');
INSERT INTO `empresa` VALUES ('2', 'sams', 'asasasasasas', '2');

-- ----------------------------
-- Table structure for `planes`
-- ----------------------------
DROP TABLE IF EXISTS `planes`;
CREATE TABLE `planes` (
  `id_planes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_plan` varchar(255) NOT NULL,
  `cantidad_clientes` int(11) NOT NULL,
  PRIMARY KEY (`id_planes`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of planes
-- ----------------------------
INSERT INTO `planes` VALUES ('1', 'actividad', '5');
INSERT INTO `planes` VALUES ('2', 'activismo', '10');
