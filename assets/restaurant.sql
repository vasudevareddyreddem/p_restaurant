/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.31-MariaDB : Database - restaurant
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`restaurant` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `restaurant`;

/*Table structure for table `aboutus` */

DROP TABLE IF EXISTS `aboutus`;

CREATE TABLE `aboutus` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus` */

/*Table structure for table `aboutus_brief` */

DROP TABLE IF EXISTS `aboutus_brief`;

CREATE TABLE `aboutus_brief` (
  `a_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus_brief` */

insert  into `aboutus_brief`(`a_b_id`,`banner`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (73,'product-circle-1b.jpg','banner',1,'2018-11-28 11:42:35','2018-11-28 11:42:35',1);

/*Table structure for table `aboutus_paragrap` */

DROP TABLE IF EXISTS `aboutus_paragrap`;

CREATE TABLE `aboutus_paragrap` (
  `a_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus_paragrap` */

insert  into `aboutus_paragrap`(`a_p_id`,`emp_id`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`) values (103,72,'b1',1,'2018-11-28 11:30:53','2018-11-28 11:30:53',1),(104,72,'b2',1,'2018-11-28 11:30:53','2018-11-28 11:30:53',1),(105,73,'banner1',1,'2018-11-28 11:42:35','2018-11-28 11:42:35',1),(106,73,'banner2',1,'2018-11-28 11:42:35','2018-11-28 11:42:35',1);

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `procedure` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `blog` */

insert  into `blog`(`b_id`,`pic`,`org_pic`,`date`,`procedure`,`status`,`created_at`,`updated_at`,`created_by`) values (15,'0.581630001543317530blog-grid-1.jpg','blog-grid-1.jpg','2018-11-21','fghfgjh',1,'2018-11-27 16:48:50','2018-11-27 16:48:50',1),(16,'blog-grid-1-1.jpg','blog-single-02.jpg','2018-10-20','fdghfjhgf',1,'2018-11-28 15:43:31','2018-11-28 15:43:31',1);

/*Table structure for table `chefs` */

DROP TABLE IF EXISTS `chefs`;

CREATE TABLE `chefs` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `specialist` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `chefs` */

insert  into `chefs`(`c_id`,`image`,`org_pic`,`name`,`specialist`,`status`,`created_at`,`updated_at`,`created_by`) values (10,'team-1.png','team-thumbnail-2.png','kasi','chef',1,'2018-11-27 18:05:38','2018-11-27 18:06:49',1),(13,'team-2.png','team-thumbnail-3.png','hari','chef',1,'2018-11-27 18:05:43','2018-11-27 18:06:58',1),(14,'team-3.png','team-2.png','rani','chef',1,'2018-11-27 18:05:48','2018-11-27 18:06:59',1),(15,'team-4.png','team-thumbnail-4.png','fhg','ghfg',1,'2018-11-27 18:05:55','2018-11-27 18:07:00',1);

/*Table structure for table `contact_data` */

DROP TABLE IF EXISTS `contact_data`;

CREATE TABLE `contact_data` (
  `c_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) DEFAULT NULL,
  `day` varchar(250) DEFAULT NULL,
  `time_from` varchar(250) DEFAULT NULL,
  `time_to` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `contact_data` */

insert  into `contact_data`(`c_d_id`,`contact_id`,`day`,`time_from`,`time_to`,`status`,`created_at`,`updated_at`,`created_by`) values (5,16,'Wednesday','10:41','12:12',2,'2018-11-28 13:50:06','2018-11-28 13:50:06',1),(6,16,'Tuesday','00:12','22:12',2,'2018-11-28 13:50:06','2018-11-28 13:50:06',1),(7,17,'Monday','22:15','12:12',2,'2018-11-28 13:51:42','2018-11-28 13:51:42',1),(8,17,'Friday','00:12','12:08',2,'2018-11-28 13:51:43','2018-11-28 13:51:43',1),(9,18,'Monday','10:12','22:15',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1),(10,18,'Tuesday','10:15','22:20',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1),(11,18,'Wednesday','10:10','22:20',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1),(12,18,'Thursday','10:10','22:20',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1),(13,18,'Friday','10:10','22:20',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1),(14,18,'Saturday','10:10','22:20',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1),(15,18,'Sunday','10:10','22:20',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1);

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `google_link` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`c_id`,`banner`,`email`,`phone`,`email_id`,`address`,`paragraph`,`facebook_link`,`twitter_link`,`google_link`,`status`,`created_at`,`updated_at`,`created_by`) values (16,'product-01.jpg','ravi@gmail.com','7013319039','admin@gmail.com','dfgf','gfhfg','www.face.com','www.face.com','www.face.com',2,'2018-11-28 13:50:06','2018-11-28 13:50:06',1),(17,'product-circle-1e.jpg','admin@gmail.com','7013319039','admin@gmail.com','hgfj','dfgfd','www.face.com','www.face.com','www.face.com',2,'2018-11-28 13:51:42','2018-11-28 13:51:42',1),(18,'pd-cat-dessert.png','kasi@gmail.com','8459521152','kasi@gmail.com','hjk','ghgj','www.face.com','www.face.com','www.face.com',1,'2018-11-28 14:04:50','2018-11-28 14:04:50',1);

/*Table structure for table `food type` */

DROP TABLE IF EXISTS `food type`;

CREATE TABLE `food type` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `food_type` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `food type` */

insert  into `food type`(`f_id`,`food_type`,`status`,`created_at`,`created_by`) values (1,'Breakfast',1,'2018-11-23 14:28:47',1),(2,'Lunch',1,'2018-11-23 14:28:50',1),(3,'Snaks',1,'2018-11-23 14:28:52',1),(4,'Dinner',1,'2018-11-23 14:28:54',1);

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`g_id`,`image`,`org_image`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (7,'0.768979001543310796gallery-1.jpg','gallery-1.jpg','cake',1,'2018-11-27 14:56:36','2018-11-27 14:56:36',1),(8,'0.827094001543310796gallery-6.jpg','gallery-6.jpg','clod ',1,'2018-11-27 14:56:36','2018-11-27 14:56:36',1),(9,'gallery-4.jpg','gallery-5.jpg','fish',1,'2018-11-27 15:01:18','2018-11-27 15:01:18',1),(10,'0.047532001543311036gallery-2.jpg','gallery-2.jpg','cake',1,'2018-11-27 15:00:36','2018-11-27 15:00:36',1);

/*Table structure for table `header` */

DROP TABLE IF EXISTS `header`;

CREATE TABLE `header` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `favicon` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `header` */

insert  into `header`(`h_id`,`favicon`,`logo`,`banner`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (15,'product-circle-1k.jpg','pd-cat-drink.png','product-circle-1l.jpg','friut',1,'2018-11-26 17:58:10','2018-11-26 17:58:10',1);

/*Table structure for table `menu_brief` */

DROP TABLE IF EXISTS `menu_brief`;

CREATE TABLE `menu_brief` (
  `m_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `menu_type` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

/*Data for the table `menu_brief` */

insert  into `menu_brief`(`m_b_id`,`banner`,`title`,`menu_type`,`status`,`created_at`,`updated_at`,`created_by`) values (133,'0.765652001543401101blog-grid-1.jpg','dgbvf','Menu',1,'2018-11-28 16:01:41','2018-11-28 16:01:41',1),(134,'0.295449001543401173blog-grid-1-1.jpg','fh','Daily special',1,'2018-11-28 16:02:53','2018-11-28 16:02:53',1);

/*Table structure for table `menu_brief_all_details` */

DROP TABLE IF EXISTS `menu_brief_all_details`;

CREATE TABLE `menu_brief_all_details` (
  `m_b_a_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_brief_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `food_type` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `status` int(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_b_a_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `menu_brief_all_details` */

insert  into `menu_brief_all_details`(`m_b_a_d_id`,`menu_brief_id`,`image`,`org_pic`,`food_type`,`name`,`description`,`price`,`status`,`created_at`,`updated_at`,`created_by`) values (52,133,'0.803527001543401101blog-grid-1-1.jpg','blog-grid-1-1.jpg','Breakfast','gh','gh','100',1,'2018-11-28 16:01:41','2018-11-28 16:01:41',1),(53,134,'0.347607001543401173blog-grid-1.jpg','blog-grid-1.jpg','Lunch','fg','fgf','100',1,'2018-11-28 16:02:53','2018-11-28 16:02:53',1),(54,135,'0.600016001543401202blog-grid-1.jpg','blog-grid-1.jpg','Lunch','gfh','ghg','50',1,'2018-11-28 16:03:22','2018-11-28 16:03:22',1);

/*Table structure for table `menu_data` */

DROP TABLE IF EXISTS `menu_data`;

CREATE TABLE `menu_data` (
  `m_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `emp_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `food_type` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `menu_data` */

insert  into `menu_data`(`m_d_id`,`title`,`emp_id`,`image`,`org_pic`,`food_type`,`name`,`description`,`price`,`status`,`created_at`,`updated_at`,`created_by`) values (49,'cake',1,'0.652096001543315875pd-cat-dessert.png','pd-cat-dessert.png','Lunch','cake','fdgdfh','50',1,'2018-11-27 16:21:15','2018-11-27 16:21:15',1),(50,'food',1,'0.456132001543316600pd-cat-dinner.png','pd-cat-dinner.png','Snaks','food','fghgfj','25',1,'2018-11-27 16:33:20','2018-11-27 16:33:20',1),(51,'break fast',1,'0.5661450015433228930.012134001542976739product-01e.jpg','0.012134001542976739product-01e.jpg','Breakfast','breakfast1','breakfast one','110',1,'2018-11-27 18:18:13','2018-11-27 18:18:13',1);

/*Table structure for table `reservation_brief` */

DROP TABLE IF EXISTS `reservation_brief`;

CREATE TABLE `reservation_brief` (
  `r_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `reservation_brief` */

insert  into `reservation_brief`(`r_b_id`,`banner`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (5,'product-circle-1c.jpg','flower',1,'2018-11-26 18:09:39','2018-11-26 18:09:39',1);

/*Table structure for table `reservation_home` */

DROP TABLE IF EXISTS `reservation_home`;

CREATE TABLE `reservation_home` (
  `r_h_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `reservation_home` */

insert  into `reservation_home`(`r_h_id`,`image`,`phone`,`status`,`created_at`,`updated_at`,`created_by`) values (6,'product-circle-1b.jpg','1233546552',1,'2018-11-26 18:08:16','2018-11-26 18:08:16',1);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`s_id`,`image`,`org_pic`,`name`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`) values (9,'0.614111001543235729product-circle-1b.jpg','product-circle-1b.jpg','test','dfhfgjhgk',1,'2018-11-26 18:05:29','2018-11-26 18:05:29',1),(10,'0.951330001543317432service-image-01.png','service-image-01.png','siva','rfytdfguhyt',1,'2018-11-27 16:47:12','2018-11-27 16:47:12',1);

/*Table structure for table `services_brief` */

DROP TABLE IF EXISTS `services_brief`;

CREATE TABLE `services_brief` (
  `s_r_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `banner` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `services_brief` */

insert  into `services_brief`(`s_r_id`,`emp_id`,`banner`,`image`,`org_pic`,`title`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`) values (10,1,'pd-cat-drink.png','product-circle-1b.jpg','product-circle-1a.jpg','test3','dfhfgjhgk',1,'2018-11-26 18:06:54','2018-11-26 18:06:54',1),(11,1,'bg6.jpg','0.969727001543320173bg5.png','bg5.png','kasi','fghfgjghjk',1,'2018-11-27 17:32:53','2018-11-27 17:32:53',1);

/*Table structure for table `servies_brief_banner` */

DROP TABLE IF EXISTS `servies_brief_banner`;

CREATE TABLE `servies_brief_banner` (
  `s_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`s_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `servies_brief_banner` */

insert  into `servies_brief_banner`(`s_b_id`,`emp_id`,`image`,`title`,`paragraph`,`org_pic`) values (1,1,'0.0873400015428882800.127343001542800523flower.jpeg','','dfhfgjhgk','0.127343001542800523flower.jpeg'),(2,1,'0.1311560015428882800.284148001542798248event-01.jpg','','dfhfgjhgk','0.284148001542798248event-01.jpg'),(3,1,'0.8679430015428883160.127343001542800523flower.jpeg','test3','dfhfgjhgk','0.127343001542800523flower.jpeg'),(4,1,'0.9111560015428883160.0192640015428743330.892445001542798691feature-box-bg-2.jpg','','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(5,1,'0.5386420015428883300.127343001542800523flower.jpeg','test3','dfhfgjhgk','0.127343001542800523flower.jpeg'),(6,1,'0.5830330015428883300.073668001542800523featured-box-bg-1.jpg','','dfhfgjhgk','0.073668001542800523featured-box-bg-1.jpg'),(7,NULL,'0.5688070015428884970.127343001542800523flower.jpeg','test3','dfhfgjhgk','0.127343001542800523flower.jpeg'),(8,NULL,'0.6195160015428884970.073668001542800523featured-box-bg-1.jpg','','dfhfgjhgk','0.073668001542800523featured-box-bg-1.jpg'),(9,NULL,'0.1032970015428885220.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(10,NULL,'0.1536140015428885220.411536001542794015bgimg1.png','','tuyhtgj','0.411536001542794015bgimg1.png'),(11,NULL,'0.0291380015428885650.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(12,NULL,'0.0693660015428885650.411536001542794015bgimg1.png','','tuyhtgj','0.411536001542794015bgimg1.png'),(13,NULL,'0.3839230015428885680.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(14,NULL,'0.4205430015428885680.411536001542794015bgimg1.png','','tuyhtgj','0.411536001542794015bgimg1.png'),(15,NULL,'0.4465670015428885780.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(16,NULL,'0.4742380015428885780.0192640015428743330.892445001542798691feature-box-bg-2.jpg','test1','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(17,NULL,'0.8079370015428885910.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(18,NULL,'0.8542340015428885910.0192640015428743330.892445001542798691feature-box-bg-2.jpg','test1','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(19,1,'0.2471290015428886280.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(20,1,'0.2925290015428886280.0192640015428743330.892445001542798691feature-box-bg-2.jpg','test1','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(21,1,'0.4646610015428886580.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(22,1,'0.5036940015428886580.0192640015428743330.892445001542798691feature-box-bg-2.jpg','test1','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(23,1,'0.8485610015428887310.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(24,1,'0.8973280015428887310.0192640015428743330.892445001542798691feature-box-bg-2.jpg','test1','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(25,1,'0.4318650015428887950.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(26,1,'0.4793420015428887950.0192640015428743330.892445001542798691feature-box-bg-2.jpg','test1','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(27,1,'0.6066560015428888160.151356001542794074banner-img-1.jpg','test3','dfhfgjhgk','0.151356001542794074banner-img-1.jpg'),(28,1,'0.6452960015428888160.0192640015428743330.892445001542798691feature-box-bg-2.jpg','test1','tuyhtgj','0.0192640015428743330.892445001542798691feature-box-bg-2.jpg'),(29,1,'0.1681390015428888530.284148001542798248event-01.jpg','test3','dfhfgjhgk','0.284148001542798248event-01.jpg'),(30,1,'0.2171930015428888530.0291380015428885650.151356001542794074banner-img-1.jpg','test1','tuyhtgj','0.0291380015428885650.151356001542794074banner-img-1.jpg'),(31,1,'0.215183001542888919feature-box-bg-3.jpg','test3','dfhfgjhgk','feature-box-bg-3.jpg'),(32,1,'0.2496620015428889190.1663550015428715170.127343001542800523flower.jpeg','test1','tuyhtgj','0.1663550015428715170.127343001542800523flower.jpeg'),(33,1,'0.4181660015428907620.073668001542800523featured-box-bg-1.jpg','test3','dfhfgjhgk','0.073668001542800523featured-box-bg-1.jpg'),(34,1,'0.3669640015429559060.215183001542888919feature-box-bg-3.jpg','test3','dfhfgjhgk','0.215183001542888919feature-box-bg-3.jpg'),(35,1,'0.4574600015429559060.215183001542888919feature-box-bg-3.jpg','test1','dfhfgjhgk','0.215183001542888919feature-box-bg-3.jpg'),(36,1,'0.8758230015429559160.215183001542888919feature-box-bg-3.jpg','test3','dfhfgjhgk','0.215183001542888919feature-box-bg-3.jpg'),(37,1,'0.9281230015429559160.215183001542888919feature-box-bg-3.jpg','test1','dfhfgjhgk','0.215183001542888919feature-box-bg-3.jpg');

/*Table structure for table `testimonial` */

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE `testimonial` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_pic` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `paragraph` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

insert  into `testimonial`(`t_id`,`image`,`org_pic`,`name`,`designation`,`paragraph`,`status`,`created_at`,`updated_at`,`created_by`) values (8,'0.052317001543312656testi-1.jpg','testi-1.jpg','bayapu','test','testing',1,'2018-11-27 15:27:36','2018-11-27 15:27:36',1),(9,'0.096386001543312656testi-2.jpg','testi-2.jpg','sridevi','tester1','testing1',1,'2018-11-27 15:27:36','2018-11-27 15:27:36',1);

/*Table structure for table `topheader` */

DROP TABLE IF EXISTS `topheader`;

CREATE TABLE `topheader` (
  `t_h_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `google_link` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `topheader` */

insert  into `topheader`(`t_h_id`,`address`,`phone_number`,`facebook_link`,`twitter_link`,`google_link`,`status`,`created_at`,`updated_at`,`created_by`) values (5,'hyd','7013319056','www.facebook.com','www.twiter.com','www.google.com',1,'2018-11-26 14:05:16','2018-11-26 14:05:16',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `current_address` varchar(250) DEFAULT NULL,
  `premenent_address` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`u_id`,`name`,`mobile_number`,`gender`,`email`,`password`,`org_password`,`profile_pic`,`current_address`,`premenent_address`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'admin','8545648950','Male','admin@gmail.com','e10adc3949ba59abbe56e057f20f883e','123456','testi-2.jpg','vizzg','kurnool',1,'2018-11-17 16:35:24','2018-11-20 17:55:44',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
