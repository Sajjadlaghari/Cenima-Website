/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.22-MariaDB : Database - cenima
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cenima` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `cenima`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `category` */

insert  into `category`(`category_id`,`name`,`description`) values 
(1,'Funny','xyz\r\n\r\n'),
(2,'Action.','Action'),
(3,'Comedy.','Comedy.'),
(4,'Horror.','Horror.'),
(5,'Romance.','Romance.'),
(6,'',''),
(7,'',''),
(8,'','urdu'),
(9,'','urdu'),
(10,'','urdu'),
(11,'',''),
(12,'',''),
(13,'','');

/*Table structure for table `contact_us` */

DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contact_us` */

insert  into `contact_us`(`id`,`name`,`email`,`subject`,`message`,`time`) values 
(1,'Sajjad Ali','sajjadlaghari723@gmail.com','For Help','Hello','2022-08-21 01:17:30'),
(3,'xyz','saqib123@gmail.com','','','2022-08-21 08:26:04');

/*Table structure for table `films` */

DROP TABLE IF EXISTS `films`;

CREATE TABLE `films` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_name` varchar(255) NOT NULL,
  `language` varchar(50) NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `rating` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `director` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `movie_date` varchar(255) DEFAULT NULL,
  `movie_time` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `total_seats` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`film_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `films_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `films` */

insert  into `films`(`film_id`,`film_name`,`language`,`duration`,`rating`,`image`,`director`,`category_id`,`discount`,`movie_date`,`movie_time`,`price`,`total_seats`,`time`) values 
(20,'DJjd','Urdu','1:12','5','images/3854a-scanner-darkly.jpg','sajjad3',3,'10','12:58','1669762800','300','140','2022-08-22 20:12:53'),
(22,'Sajjad Ali','urdu1','11','51','images/58628y1YhD6niL3aMfeEPhStHMWdPxH.jpg','sajjad1',2,'3',NULL,'1638273540','400','200','2022-08-22 20:46:01');

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `card_owner` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `expire_date` varchar(255) NOT NULL,
  `ccv` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `movie_id` (`movie_id`),
  CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `films` (`film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payments` */

insert  into `payments`(`id`,`movie_id`,`card_owner`,`card_number`,`expire_date`,`ccv`,`time`) values 
(1,20,'Sajjad Ali','4743839','12 2023','xyz','2022-08-22 08:42:32'),
(2,20,'Ali','744848','2345','djdh','2022-08-22 20:34:08'),
(3,22,'Sajjad Ali','555','12 12','djfjfj','2022-08-22 21:31:31');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(22) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`role_id`,`name`,`email`,`contact_no`,`password`,`is_active`,`time`) values 
(1,1,'admin','admin@gmail.com','009239384458','12345','active','2022-08-22 20:44:29'),
(2,2,'user','user@gmail.com','7474774747','12345','active','2022-08-22 20:03:55'),
(7,3,'guest','gust@gmail.com','8468464864','12345','active','2022-08-22 21:34:04');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_role` */

insert  into `user_role`(`role_id`,`role`,`time`) values 
(1,'admin','2022-08-21 01:42:32'),
(2,'member customer','2022-08-21 01:42:32'),
(3,'guest customer','2022-08-21 01:42:52');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
