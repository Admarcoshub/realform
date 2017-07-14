/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : bd_proyectos

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-07-07 17:57:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idclientes` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `razon social` varchar(45) NOT NULL,
  `proyecto_idproyecto` int(11) NOT NULL,
  PRIMARY KEY (`idclientes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cliente
-- ----------------------------

-- ----------------------------
-- Table structure for colaboradores
-- ----------------------------
DROP TABLE IF EXISTS `colaboradores`;
CREATE TABLE `colaboradores` (
  `idcolaboradores` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) NOT NULL,
  `nombre` char(1) NOT NULL,
  `domicio` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `banco` varchar(45) NOT NULL,
  `Nro. Cuenta` varchar(45) NOT NULL,
  PRIMARY KEY (`idcolaboradores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of colaboradores
-- ----------------------------

-- ----------------------------
-- Table structure for pago
-- ----------------------------
DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago` (
  `idPagos` int(11) NOT NULL AUTO_INCREMENT,
  `Nro. de pago` varchar(45) NOT NULL,
  `concepto` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fech-pago` date NOT NULL,
  PRIMARY KEY (`idPagos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pago
-- ----------------------------

-- ----------------------------
-- Table structure for pago_has_colaboradores
-- ----------------------------
DROP TABLE IF EXISTS `pago_has_colaboradores`;
CREATE TABLE `pago_has_colaboradores` (
  `Pago_idPagos` int(11) NOT NULL,
  `colaboradores_idcolaboradores` int(11) NOT NULL,
  PRIMARY KEY (`Pago_idPagos`,`colaboradores_idcolaboradores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pago_has_colaboradores
-- ----------------------------

-- ----------------------------
-- Table structure for proyecto
-- ----------------------------
DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE `proyecto` (
  `idproyecto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `costo` int(11) NOT NULL,
  `fechinicio` date NOT NULL,
  `fechfin` date NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idproyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of proyecto
-- ----------------------------
INSERT INTO `proyecto` VALUES ('1', '234', 'sitio rersponsive', '700', '2017-07-01', '2017-07-31', '1');

-- ----------------------------
-- Table structure for proyecto_has_colaboradores
-- ----------------------------
DROP TABLE IF EXISTS `proyecto_has_colaboradores`;
CREATE TABLE `proyecto_has_colaboradores` (
  `proyecto_idproyecto` int(11) NOT NULL,
  `colaboradores_idcolaboradores` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_idproyecto`,`colaboradores_idcolaboradores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of proyecto_has_colaboradores
-- ----------------------------

-- ----------------------------
-- Table structure for tipo_de_pago
-- ----------------------------
DROP TABLE IF EXISTS `tipo_de_pago`;
CREATE TABLE `tipo_de_pago` (
  `idpagos` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) NOT NULL,
  `descipción` varchar(45) NOT NULL,
  PRIMARY KEY (`idpagos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipo_de_pago
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'marcos', 'c5e3539121c4944f2bbe097b425ee774');
SET FOREIGN_KEY_CHECKS=1;
