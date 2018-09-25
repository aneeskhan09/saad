/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.25-MariaDB : Database - techno_new
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`techno_new` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `techno_new`;

/*Table structure for table `admin_menu` */

DROP TABLE IF EXISTS `admin_menu`;

CREATE TABLE `admin_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `parent` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `class` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Table structure for table `brand_groups` */

DROP TABLE IF EXISTS `brand_groups`;

CREATE TABLE `brand_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `company_information` */

DROP TABLE IF EXISTS `company_information`;

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `address_1` longtext NOT NULL,
  `address_2` longtext NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Pending','Approved') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `email_notification` */

DROP TABLE IF EXISTS `email_notification`;

CREATE TABLE `email_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(14) NOT NULL,
  `profile_update` enum('Yes','No') NOT NULL,
  `image_update` enum('Yes','No') NOT NULL,
  `password_change` enum('Yes','No') NOT NULL,
  `project_AF` enum('Yes','No') NOT NULL,
  `module_AF` enum('Yes','No') NOT NULL,
  `task_AF` enum('Yes','No') NOT NULL,
  `daily_updates` enum('Yes','No') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Table structure for table `email_settings` */

DROP TABLE IF EXISTS `email_settings`;

CREATE TABLE `email_settings` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `host` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `port` int(3) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `sent_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sent_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `reply_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `reply_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `order_details` */

DROP TABLE IF EXISTS `order_details`;

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `paid_amount` double(11,2) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paypal_paymentID` varchar(100) DEFAULT NULL,
  `paypal_payerID` varchar(100) DEFAULT NULL,
  `quantity` int(3) DEFAULT NULL,
  `shipment_charges` double(11,2) DEFAULT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `purchase_id` int(20) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` double(11,2) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_phone` varchar(30) NOT NULL,
  `customer_country` varchar(30) NOT NULL,
  `customer_city` varchar(30) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_zipcode` varchar(20) NOT NULL,
  `status` enum('Pending','Approved','Shipment','Delivered') NOT NULL,
  `comment` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(20) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `purchase_price` decimal(11,2) NOT NULL,
  `sale_price` decimal(11,2) NOT NULL,
  `discount` decimal(11,2) NOT NULL,
  `tags` longtext NOT NULL,
  `details` longtext NOT NULL,
  `p_feature` enum('NO','YES') NOT NULL,
  `views` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `system_title` varchar(20) NOT NULL,
  `footer` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `sub_title` varchar(30) NOT NULL,
  `quote` text NOT NULL,
  `link` text NOT NULL,
  `status` enum('Disable','Enable') NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Table structure for table `social_links` */

DROP TABLE IF EXISTS `social_links`;

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `google_plus` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `sub_category` */

DROP TABLE IF EXISTS `sub_category`;

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `theme` */

DROP TABLE IF EXISTS `theme`;

CREATE TABLE `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(2) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `status` enum('pending','approved') NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` text NOT NULL,
  `operating_system` varchar(20) NOT NULL,
  `device` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
