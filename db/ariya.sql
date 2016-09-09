/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.17 : Database - ariya_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ariya_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ariya_db`;

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_title_en` varchar(250) DEFAULT NULL,
  `cat_title_kh` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

/*Table structure for table `tbl_order` */

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `or_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `or_number_of_item` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`or_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order` */

/*Table structure for table `tbl_pro_picture` */

DROP TABLE IF EXISTS `tbl_pro_picture`;

CREATE TABLE `tbl_pro_picture` (
  `pic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic_path` varchar(250) NOT NULL,
  `pro_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `udpated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pic_id`),
  KEY `pro_id` (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pro_picture` */

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `pro_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primary key of the table',
  `pro_title_en` varchar(250) DEFAULT NULL COMMENT 'title in english language',
  `pro_title_kh` varchar(250) DEFAULT NULL COMMENT 'title in khmer language',
  `pro_unit_price` double DEFAULT NULL COMMENT 'Price per item',
  `pro_discount` int(10) DEFAULT NULL COMMENT 'persentage of discount',
  `pro_cat` int(10) DEFAULT NULL COMMENT 'category id',
  `pro_color` int(10) DEFAULT NULL COMMENT 'Blue,Black,Red etc...',
  `pro_number` int(10) DEFAULT NULL COMMENT 'Number of product in stock',
  `pro_user_target` int(10) DEFAULT NULL COMMENT 'target of product can be 0-1,0-3 etc...',
  `pro_description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`pro_id`,`pro_title_en`,`pro_title_kh`,`pro_unit_price`,`pro_discount`,`pro_cat`,`pro_color`,`pro_number`,`pro_user_target`,`pro_description`,`created_at`,`updated_at`) values (1,'Iphone 6s Plus','???????? ? ??? ?????',220,10,1,1,10,2,'test','2016-09-07 17:24:50','2016-09-07 17:24:52');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primary key of tbl_user',
  `user_first_name` varchar(200) DEFAULT NULL,
  `user_last_name` varchar(200) DEFAULT NULL,
  `user_username` varchar(200) DEFAULT NULL,
  `user_password` varbinary(250) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_status` tinyint(4) DEFAULT NULL COMMENT '1:enbale,0:disable',
  `created_at` datetime DEFAULT NULL,
  `udpated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`user_id`,`user_first_name`,`user_last_name`,`user_username`,`user_password`,`user_email`,`user_phone`,`user_status`,`created_at`,`udpated_at`) values (1,'KIMHIM','HOM','kimhim.hom','159753','kimhim.hom@gmail.com','077440096',1,'2016-09-07 17:23:08','2016-09-07 17:23:10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
