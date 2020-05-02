/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.24 : Database - landing_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`landing_system` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `landing_system`;

/*Table structure for table `firstpage` */

DROP TABLE IF EXISTS `firstpage`;

CREATE TABLE `firstpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strvalue` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `firstpage` */

insert  into `firstpage`(`id`,`strvalue`) values (1,'&lt;h1&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;Happy...&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;img src=&quot; img-uploads/first.png&quot; style=&quot;width: 50%;&quot;&gt;&lt;/h1&gt;&lt;p&gt;You can change this...&lt;/p&gt;');

/*Table structure for table `landingpage` */

DROP TABLE IF EXISTS `landingpage`;

CREATE TABLE `landingpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strvalue` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `landingpage` */

insert  into `landingpage`(`id`,`strvalue`) values (2,'\n                    \n                    \n                    \n                    \n                    \n                    \n                    \n                    &lt;h1&gt;&lt;img src=&quot; img-uploads/game.jpg&quot; style=&quot;width: 50%;&quot;&gt;That is landing&lt;/h1&gt;&lt;h1&gt;I have already made landingpage.&lt;/h1&gt;                                                                                                                                ');

/*Table structure for table `tbldata` */

DROP TABLE IF EXISTS `tbldata`;

CREATE TABLE `tbldata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbldata` */

insert  into `tbldata`(`id`,`fullname`,`address`,`email`,`phone`,`ip`,`country`,`creation_date`,`modified_date`,`comments`) values (1,'Danilov','Moscow','php@outlook.com','8505623542','192.168.200.33','Israel','2019-02-03 00:00:00','2019-03-23 00:00:00','Great'),(2,'Bogdan','Moscow','web@gmail.com','8505478542','192.168.200.34','Israel','2019-06-15 01:23:03','2019-06-15 01:23:03','GGG'),(3,'Nam sdf','Address','admin@asdf.com','8505623696','192.168.200.35','Israel','2019-06-15 11:47:18','2019-06-15 12:24:09','Happy'),(5,'Radu I','MMM','webmaster@outlook.com','0589562356','192.168.200.31','','2019-06-15 12:37:12','2019-06-15 12:37:12',' Localhost...'),(6,'Radu L','Address','radu@outlook.com','85056956852','192.168.200.31','','2019-06-15 12:44:29','2019-06-15 12:44:29',' country name is...\nbecause that is localhost...');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`email`,`password`) values (2,'Admin','admin@admin.com','d033e22ae348aeb5660fc2140aec35850c4da997');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
