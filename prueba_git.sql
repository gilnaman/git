/*
Navicat MySQL Data Transfer

Source Server         : Local Wamp
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : prueba_git

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-02-19 08:13:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for becas
-- ----------------------------
DROP TABLE IF EXISTS `becas`;
CREATE TABLE `becas` (
  `id_beca` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `beca` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_beca`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Table structure for carreras
-- ----------------------------
DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Table structure for departamentos
-- ----------------------------
DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE `departamentos` (
  `id_depto` int(11) NOT NULL AUTO_INCREMENT,
  `depto` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_depto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Table structure for localidades
-- ----------------------------
DROP TABLE IF EXISTS `localidades`;
CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL AUTO_INCREMENT,
  `localidad` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cp` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_localidad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `curp` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidop` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidom` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`curp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Table structure for profesiones
-- ----------------------------
DROP TABLE IF EXISTS `profesiones`;
CREATE TABLE `profesiones` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Table structure for villas
-- ----------------------------
DROP TABLE IF EXISTS `villas`;
CREATE TABLE `villas` (
  `id_villa` int(11) NOT NULL AUTO_INCREMENT,
  `villas` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_villa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
