/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.7.12 : Database - ranario
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ranario` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ranario`;

/*Table structure for table `movimentacao` */

DROP TABLE IF EXISTS `movimentacao`;

CREATE TABLE `movimentacao` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ra` int(255) DEFAULT NULL,
  `tanque_origem` int(255) DEFAULT NULL,
  `tanque_destino` int(255) DEFAULT NULL,
  `dia_retirada` date DEFAULT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `movimentacao` */

/*Table structure for table `ras` */

DROP TABLE IF EXISTS `ras`;

CREATE TABLE `ras` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `especie` varchar(255) DEFAULT NULL,
  `regiao` varchar(255) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `id_tanque` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `ras` */

insert  into `ras`(`id`,`nome`,`especie`,`regiao`,`sexo`,`id_tanque`) values (4,'Michele','Cururu','Europa','Femea',1),(5,'MIchele','Cururu','Europa','Femea',2),(6,'Joana','Gibão','América do Sul','Macho',2),(7,'Joana','Gibão','América do Sul','Macho',2),(8,'Joana','Gibão','América do Sul','Macho',2),(9,'Joana','Gibão','América do Sul','Macho',2),(10,'João','Pintado','África','Fêmea',3),(11,'João','Pintado','África','Fêmea',3),(12,'Maria','Gibão','América do Sul','Fêmea',4),(13,'Fausto','Cururu','América do Sul','Macho',4),(14,'Bruna','Gibão','Europa','Fêmea',1);

/*Table structure for table `tanques` */

DROP TABLE IF EXISTS `tanques`;

CREATE TABLE `tanques` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `tempo_minimo` int(255) DEFAULT NULL,
  `tempo_maximo` int(255) DEFAULT NULL,
  `quantidade` int(255) DEFAULT NULL,
  `manutencao` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tanques` */

insert  into `tanques`(`id`,`descricao`,`tempo_minimo`,`tempo_maximo`,`quantidade`,`manutencao`) values (1,'Tanque 1',5,10,NULL,'2016-12-04'),(2,'Tanque 2',10,20,NULL,'2016-11-27'),(3,'Tanque 3',10,20,NULL,'2016-11-20'),(4,'Tanque 4',15,30,NULL,'2016-11-13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
