-- MySQL dump 10.11
--
-- Host: localhost    Database: easy-ticket
-- ------------------------------------------------------
-- Server version	5.0.67-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `help_topic`
--

DROP TABLE IF EXISTS `help_topic`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `help_topic` (
  `topic_id` int(11) NOT NULL auto_increment,
  `topic` varchar(30) NOT NULL,
  PRIMARY KEY  (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `help_topic`
--

LOCK TABLES `help_topic` WRITE;
/*!40000 ALTER TABLE `help_topic` DISABLE KEYS */;
INSERT INTO `help_topic` VALUES (1,'Add Money'),(2,'Orders');
/*!40000 ALTER TABLE `help_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL auto_increment,
  `dept_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `status` varchar(60) NOT NULL,
  `is_answered` tinyint(1) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `lastreply_time` datetime NOT NULL,
  PRIMARY KEY  (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (1,0,2,'第二个提问的示例',0,'hans.he@mistertao.com','Customer-Reply',0,'2012-07-18 18:43:24','2012-07-18 18:43:24','0000-00-00 00:00:00'),(2,0,1,'第二个提问的示例',0,'hans.he@mistertao.com','Customer-Reply',0,'2012-07-18 18:43:25','2012-07-18 18:43:25','0000-00-00 00:00:00'),(3,0,2,'第二个提问的示例',0,'hans.he@mistertao.com','Customer-Reply',0,'2012-07-18 18:43:26','2012-07-18 18:43:26','0000-00-00 00:00:00'),(4,0,2,'第二个提问的示例',0,'hans.he@mistertao.com','Customer-Reply',0,'2012-07-18 18:43:27','2012-07-18 18:43:27','0000-00-00 00:00:00'),(5,0,1,'你说的订单可以优惠码?',0,'hans.he@mistertao.com','Customer-Reply',0,'2012-07-18 18:45:39','2012-07-18 18:45:39','0000-00-00 00:00:00'),(6,0,2,'咨询一个问题',0,'me@hihans.com','0',0,'2012-07-21 10:21:31','2012-07-21 10:21:31','0000-00-00 00:00:00'),(7,0,1,'测试前台',0,'me@hihans.com','0',0,'2012-07-21 10:38:17','2012-07-21 10:38:17','0000-00-00 00:00:00'),(8,0,1,'kljdsfj',0,'sak@ksjfl.com','0',0,'2012-07-21 10:39:05','2012-07-21 10:39:05','0000-00-00 00:00:00'),(9,0,1,'kljdsfj',0,'sak@ksjfl.com','0',0,'2012-07-21 10:39:08','2012-07-21 10:39:08','0000-00-00 00:00:00'),(10,0,2,'kljdsfj',0,'sak@ksjfl.com','Closed',0,'2012-07-21 10:39:21','2012-07-21 10:39:21','2012-07-26 20:20:15'),(11,0,1,'Hansn jksela j',0,'me@hihans.com','Closed',0,'2012-07-21 10:48:40','2012-07-21 10:48:40','2012-07-21 15:40:47'),(12,0,1,'帮助解决问题',0,'me@hihans.com','0',0,'2012-07-21 11:18:46','2012-07-21 11:18:46','0000-00-00 00:00:00'),(13,0,2,'CIfnaglsda',0,'hans.he@cifang.hk','Closed',0,'2012-07-21 11:25:47','2012-07-21 11:25:47','2012-07-26 18:10:29'),(14,0,1,'Hello everyone',0,'hans.he@mistertao.com','open',0,'2012-07-26 18:11:56','2012-07-26 18:11:56','0000-00-00 00:00:00'),(15,0,1,'Hello everyone',0,'hans.he@mistertao.com','Closed',1,'2012-07-26 18:11:57','2012-07-26 18:11:57','2012-07-26 18:49:52');
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_message`
--

DROP TABLE IF EXISTS `ticket_message`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `ticket_message` (
  `msg_id` int(11) NOT NULL auto_increment,
  `ticket_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `msg_content` text NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY  (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket_message`
--

LOCK TABLES `ticket_message` WRITE;
/*!40000 ALTER TABLE `ticket_message` DISABLE KEYS */;
INSERT INTO `ticket_message` VALUES (1,1,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:24','2012-07-18 18:43:24'),(2,2,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:25','2012-07-18 18:43:25'),(3,3,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:26','2012-07-18 18:43:26'),(4,4,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:27','2012-07-18 18:43:27'),(5,4,22,'Okay','0','2012-07-18 18:43:40','2012-07-18 18:43:40'),(6,2,22,'这是个测试。','0','2012-07-18 18:43:50','2012-07-18 18:43:50'),(7,2,22,'这个是个测试赛','0','2012-07-18 18:43:59','2012-07-18 18:43:59'),(8,5,0,'你说的订单可以优惠码?你说的订单可以优惠码?\r\n你说的订单可以优惠码?','127.0.0.1','2012-07-18 18:45:40','2012-07-18 18:45:40'),(9,5,22,'啊，你说啥，还想优惠？','0','2012-07-19 14:03:05','2012-07-19 14:03:05'),(10,6,0,'我想咨询的问题是YII','127.0.0.1','2012-07-21 10:21:31','2012-07-21 10:21:31'),(11,7,0,'测试前台\r\n','127.0.0.1','2012-07-21 10:38:17','2012-07-21 10:38:17'),(12,8,0,'sjfldskjf','127.0.0.1','2012-07-21 10:39:05','2012-07-21 10:39:05'),(13,9,0,'sjfldskjf','127.0.0.1','2012-07-21 10:39:08','2012-07-21 10:39:08'),(14,10,0,'sjfldskjf','127.0.0.1','2012-07-21 10:39:21','2012-07-21 10:39:21'),(15,11,0,'laKjdlskajfwejfs\r\nsaldjflk \r\n\r\njasldfj','127.0.0.1','2012-07-21 10:48:40','2012-07-21 10:48:40'),(16,12,0,'所了定积分；就；放假\r\n据撒地方进山洞\r\n爱死京东方jason\r\n经搜啊阿斯顿积分j\r\n教师解决就\r\n','127.0.0.1','2012-07-21 11:18:46','2012-07-21 11:18:46'),(17,13,0,'大口径阿里司法局','127.0.0.1','2012-07-21 11:25:47','2012-07-21 11:25:47'),(18,13,22,'已回复的问题\r\n','0','2012-07-21 12:58:56','2012-07-21 12:58:56'),(19,13,22,'客户的回复','0','2012-07-21 13:11:44','2012-07-21 13:11:44'),(20,13,22,'客户的回复状态','0','2012-07-21 13:12:59','2012-07-21 13:12:59'),(21,13,22,'Staff的回复','0','2012-07-21 13:19:12','2012-07-21 13:19:12'),(22,13,22,'客户回复200','0','2012-07-21 13:19:27','2012-07-21 13:19:27'),(23,13,22,'Staff 回复200','0','2012-07-21 13:19:40','2012-07-21 13:19:40'),(24,13,0,'客户的回复300','0','2012-07-21 13:28:35','2012-07-21 13:28:35'),(25,13,22,'Staff的回复300','0','2012-07-21 13:29:07','2012-07-21 13:29:07'),(26,13,0,'客户的回复400','0','2012-07-21 13:36:47','2012-07-21 13:36:47'),(27,13,22,'Staff 的回复 400','0','2012-07-21 13:45:49','2012-07-21 13:45:49'),(28,12,22,'Staff Reply.','0','2012-07-21 13:57:10','2012-07-21 13:57:10'),(29,12,0,'Customer Reply','0','2012-07-21 14:24:07','2012-07-21 14:24:07'),(30,13,0,'CUSTOMER 500','0','2012-07-21 14:30:42','2012-07-21 14:30:42'),(31,13,22,'Staff reply','0','2012-07-21 14:37:16','2012-07-21 14:37:16'),(32,13,22,'Reply again.','0','2012-07-21 14:45:15','2012-07-21 14:45:15'),(33,13,0,'MEssage received.\r\n`\r\n','0','2012-07-21 14:48:20','2012-07-21 14:48:20'),(34,13,22,'Okay,Thank you','0','2012-07-21 14:58:37','2012-07-21 14:58:37'),(35,11,22,'Last Reply.','0','2012-07-21 15:40:36','2012-07-21 15:40:36'),(36,13,0,'This is a test message.','0','2012-07-21 16:54:12','2012-07-21 16:54:12'),(37,13,0,'This a new message.','0','2012-07-21 16:57:43','2012-07-21 16:57:43'),(38,13,0,'Thank you very much.','0','2012-07-21 16:58:56','2012-07-21 16:58:56'),(39,13,22,'It\'s my pleasure.','0','2012-07-21 17:02:00','2012-07-21 17:02:00'),(40,13,0,'Do not lie to me.','0','2012-07-21 17:43:21','2012-07-21 17:43:21'),(41,13,0,'A new reply from customer.','0','2012-07-21 17:45:32','2012-07-21 17:45:32'),(42,13,0,'Thank you very much.','0','2012-07-21 17:47:24','2012-07-21 17:47:24'),(43,13,22,'This is closed','0','2012-07-26 18:06:30','2012-07-26 18:06:30'),(44,13,22,'Open','0','2012-07-26 18:06:42','2012-07-26 18:06:42'),(45,13,22,'Do not open','0','2012-07-26 18:10:07','2012-07-26 18:10:07'),(46,14,0,'This is my order.','127.0.0.1','2012-07-26 18:11:56','2012-07-26 18:11:56'),(47,15,0,'This is my order.','127.0.0.1','2012-07-26 18:11:57','2012-07-26 18:11:57'),(48,15,0,'HI MT','0','2012-07-26 18:49:15','2012-07-26 18:49:15'),(49,15,22,'This is my test','0','2012-07-26 18:49:44','2012-07-26 18:49:44'),(50,2,0,'客户回复内容','0','2012-07-26 18:56:34','2012-07-26 18:56:34'),(51,3,0,'客户回复','0','2012-07-26 18:56:51','2012-07-26 18:56:51'),(52,1,0,'DFSDSF','0','2012-07-26 18:57:05','2012-07-26 18:57:05'),(53,4,0,'松岛枫郭德纲','0','2012-07-26 18:57:29','2012-07-26 18:57:29'),(54,5,0,'电饭锅代购','0','2012-07-26 18:57:35','2012-07-26 18:57:35'),(55,10,22,'上岛咖啡加速了卡近距离看所肩负的','0','2012-07-26 20:08:20','2012-07-26 20:08:20'),(56,10,0,'Hahhshdhh ','0','2012-07-26 20:19:48','2012-07-26 20:19:48'),(57,10,22,'Once again.','0','2012-07-26 20:20:06','2012-07-26 20:20:06');
/*!40000 ALTER TABLE `ticket_message` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-07-26 12:50:07
