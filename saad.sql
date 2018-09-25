/*
SQLyog Trial v12.4.1 (64 bit)
MySQL - 10.1.25-MariaDB : Database - pms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pms`;

/*Table structure for table `ads` */

DROP TABLE IF EXISTS `ads`;

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_title` varchar(250) DEFAULT NULL,
  `status` enum('rent','sale') DEFAULT NULL,
  `type` enum('comercial','residential') DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `description` longtext,
  `area` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `province` varchar(250) DEFAULT NULL,
  `bedroom` int(10) DEFAULT NULL,
  `kitchen` int(10) DEFAULT NULL,
  `garage` int(10) DEFAULT NULL,
  `bathroom` int(10) DEFAULT NULL,
  `dining_room` int(10) DEFAULT NULL,
  `drawing_room` int(10) DEFAULT NULL,
  `features` longtext,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_update` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `ads` */

insert  into `ads`(`ads_id`,`ad_title`,`status`,`type`,`price`,`description`,`area`,`address`,`city`,`province`,`bedroom`,`kitchen`,`garage`,`bathroom`,`dining_room`,`drawing_room`,`features`,`date_create`,`date_update`) values 
(41,'hhh','sale','residential',12,'jhgdfghjkl;\'','12','jkjkj','jkjkjk','jkjkj',1,NULL,1,1,1,1,'Swimming Pool,Air Condetioning,Gym,Guest House','2018-09-01 14:15:34',' ');

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_id` int(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `contacts` */

insert  into `contacts`(`contact_id`,`ad_id`,`name`,`email`,`phone`) values 
(40,1,'ahjh','aneeskhan09@gmail.com','jhjhj');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_id` int(10) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert  into `images`(`image_id`,`ad_id`,`image`) values 
(26,1,'uploads/ads/2.pdf'),
(27,1,'uploads/ads/015.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
