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
  `status` int(11) NOT NULL,
  `is_answered` tinyint(1) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY  (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (1,0,2,'第二个提问的示例',0,'hans.he@mistertao.com',0,0,'2012-07-18 18:43:24','2012-07-18 18:43:24'),(2,0,1,'第二个提问的示例',0,'hans.he@mistertao.com',0,1,'2012-07-18 18:43:25','2012-07-18 18:43:25'),(3,0,2,'第二个提问的示例',0,'hans.he@mistertao.com',0,0,'2012-07-18 18:43:26','2012-07-18 18:43:26'),(4,0,2,'第二个提问的示例',0,'hans.he@mistertao.com',0,1,'2012-07-18 18:43:27','2012-07-18 18:43:27'),(5,0,1,'你说的订单可以优惠码?',0,'hans.he@mistertao.com',0,1,'2012-07-18 18:45:39','2012-07-18 18:45:39');
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket_message`
--

LOCK TABLES `ticket_message` WRITE;
/*!40000 ALTER TABLE `ticket_message` DISABLE KEYS */;
INSERT INTO `ticket_message` VALUES (1,1,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:24','2012-07-18 18:43:24'),(2,2,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:25','2012-07-18 18:43:25'),(3,3,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:26','2012-07-18 18:43:26'),(4,4,0,'再次感谢您选择EasyTicket.','127.0.0.1','2012-07-18 18:43:27','2012-07-18 18:43:27'),(5,4,22,'Okay','0','2012-07-18 18:43:40','2012-07-18 18:43:40'),(6,2,22,'这是个测试。','0','2012-07-18 18:43:50','2012-07-18 18:43:50'),(7,2,22,'这个是个测试赛','0','2012-07-18 18:43:59','2012-07-18 18:43:59'),(8,5,0,'你说的订单可以优惠码?你说的订单可以优惠码?\r\n你说的订单可以优惠码?','127.0.0.1','2012-07-18 18:45:40','2012-07-18 18:45:40'),(9,5,22,'啊，你说啥，还想优惠？','0','2012-07-19 14:03:05','2012-07-19 14:03:05');
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

-- Dump completed on 2012-07-19  6:05:26
