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
  `dept_id` int(11) NOT NULL,
  `topic` varchar(30) NOT NULL,
  PRIMARY KEY  (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `help_topic`
--

LOCK TABLES `help_topic` WRITE;
/*!40000 ALTER TABLE `help_topic` DISABLE KEYS */;
INSERT INTO `help_topic` VALUES (1,0,'Add Money'),(2,0,'Orders');
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
  `user_name` varchar(32) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `status` varchar(60) NOT NULL,
  `is_answered` tinyint(1) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `lastreply_time` datetime NOT NULL,
  PRIMARY KEY  (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (1,0,1,'充值问题咨询',50,'Hans He','hans.he@cifang.hk','open',0,'2012-08-03 16:34:10','2012-08-03 16:34:10','0000-00-00 00:00:00'),(2,0,1,'我的第二个问题',50,'Hans He','hans.he@cifang.hk','open',0,'2012-08-03 17:40:09','2012-08-03 17:40:09','0000-00-00 00:00:00'),(3,0,2,'哈哈，您有问题',100,'He Jialiang','me@hihans.com','Customer-Reply',0,'2012-08-03 17:43:12','2012-08-03 17:43:12','2012-08-03 17:44:04'),(4,0,2,'NFS服务器',100,'He Jialiang','me@hihans.com','Customer-Reply',0,'2012-08-03 17:46:26','2012-08-03 17:46:26','2012-08-03 17:46:50');
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket_message`
--

LOCK TABLES `ticket_message` WRITE;
/*!40000 ALTER TABLE `ticket_message` DISABLE KEYS */;
INSERT INTO `ticket_message` VALUES (1,1,0,'我昨天充值了100，但是没有收到。','127.0.0.1','2012-08-03 16:34:10','2012-08-03 16:34:10'),(2,2,0,'我的第二个问题。','127.0.0.1','2012-08-03 17:40:09','2012-08-03 17:40:09'),(3,3,0,'哈哈哈哈。哈哈哈哈\r\n您有额太难听','127.0.0.1','2012-08-03 17:43:12','2012-08-03 17:43:12'),(4,3,22,'给你回复了哦，哈哈','0','2012-08-03 17:43:53','2012-08-03 17:43:53'),(5,4,0,'在上海吗？是的呢','127.0.0.1','2012-08-03 17:46:26','2012-08-03 17:46:26'),(6,4,22,'Yes ,YOucan\r\n','0','2012-08-03 17:46:41','2012-08-03 17:46:41'),(7,3,0,'知道了啊。\r\n','0','2012-08-03 17:47:37','2012-08-03 17:47:37'),(8,4,0,'好的，谢谢你拉。','0','2012-08-03 17:47:53','2012-08-03 17:47:53');
/*!40000 ALTER TABLE `ticket_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL auto_increment,
  `nick` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-08-03 10:23:57
