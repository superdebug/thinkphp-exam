-- MySQL dump 10.13  Distrib 5.6.12, for Win32 (x86)
--
-- Host: localhost    Database: article
-- ------------------------------------------------------
-- Server version	5.6.12-log

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
-- Table structure for table `at_admin`
--

DROP TABLE IF EXISTS `at_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `at_admin` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `at_admin`
--

LOCK TABLES `at_admin` WRITE;
/*!40000 ALTER TABLE `at_admin` DISABLE KEYS */;
INSERT INTO `at_admin` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e'),(2,'manager','c33367701511b4f6020ec61ded352059');
/*!40000 ALTER TABLE `at_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `at_article`
--

DROP TABLE IF EXISTS `at_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `at_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `author` varchar(20) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `new` tinyint(2) NOT NULL DEFAULT '0',
  `hot` tinyint(2) NOT NULL DEFAULT '0',
  `descs` text NOT NULL,
  `typeid` int(5) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `at_article`
--

LOCK TABLES `at_article` WRITE;
/*!40000 ALTER TABLE `at_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `at_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `at_type`
--

DROP TABLE IF EXISTS `at_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `at_type` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `typename` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `at_type`
--

LOCK TABLES `at_type` WRITE;
/*!40000 ALTER TABLE `at_type` DISABLE KEYS */;
INSERT INTO `at_type` VALUES (1,'孙悟空'),(70,'历史'),(71,'政治');
/*!40000 ALTER TABLE `at_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-21 15:40:21
