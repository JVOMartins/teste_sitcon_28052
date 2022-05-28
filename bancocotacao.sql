/*
MySQL Backup
Source Server Version: 5.5.5
Source Database: cotacao
Date: 28/05/2022 12:24:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `cotacao`
-- ----------------------------
DROP TABLE IF EXISTS `cotacao`;
CREATE TABLE `cotacao` (
  `id_cotacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_proc` varchar(255) DEFAULT NULL,
  `nm_forn` varchar(255) DEFAULT NULL,
  `valor_cotacao` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_cotacao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `procedimentos`
-- ----------------------------
DROP TABLE IF EXISTS `procedimentos`;
CREATE TABLE `procedimentos` (
  `id_proc` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_proc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `cotacao` VALUES ('1','1','Hospital de Caridade São Roque','25'), ('2','1','AC BARRETO','27'), ('3','1','Sírio Libanês','30'), ('4','1','Marcio Cunha','22'), ('5','1','AAPI','23');
INSERT INTO `procedimentos` VALUES ('1','Ultrassonografia de Joelho',NULL), ('2','Ultrassonografia de Tórax',NULL);
