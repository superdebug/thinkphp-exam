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
  `desc` text NOT NULL,
  `typeid` int(5) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `at_article`
--

LOCK TABLES `at_article` WRITE;
/*!40000 ALTER TABLE `at_article` DISABLE KEYS */;
INSERT INTO `at_article` VALUES (1,'测试文章1333','2222222222','./Public/Uploads/2016-08-09/57a976ecbe617.jpg',0,1,'                            描述abc测试1234                                                                                                                                                                                                                                                                                                                                                                                    ',1,''),(2,'测试文章2','吴承恩','',0,1,'',1,''),(3,'测试文章3','雨果','',1,1,'',71,''),(4,'xxxx','dddd','',0,1,'',1,''),(5,'sssd','ddd','',1,1,'',71,'1469757267'),(6,'xxdd','xdsdf','',1,1,'',70,'1469758717'),(7,'ss','ss','',1,0,'',1,'1469758790'),(8,'sddd','sdf','',0,1,'',70,'1469758867'),(9,'dddddddddddddd','dddddddddddddddddddd','',1,0,'',0,'1469761899'),(10,'d','dddddddddddddddddddd','',0,0,'',70,'1469771741'),(11,'sex','s','./Public/Uploads/2016-07-29/579af0bba1f32.jpg',1,0,'                                                                                                        ',70,'1469771963'),(12,'jjj','','./Public/Uploads/2016-07-29/579af1b1b7b25.jpg',1,1,'',70,'1469772209'),(15,'xxxxxxxxxxxxxxxxxxxx','xxxxxxxxxxxxxxxxxxxx','./Public/Uploads/2016-08-02/57a046ad32b77.jpg',0,1,'',1,'1470121645'),(16,'ddddddd','ddddddddddddddd','./Public/Uploads/2016-08-02/57a0471d01022.jpg',0,1,'描述ddd',70,'1470121756'),(17,'测试文章123','孙悟空','',1,1,'继14日凌晨抛出离婚声明之后，15日王宝强现身法院起诉离婚，要求财产分割，共同财产中竟然有不少奢侈品，广大群众表示，每次在电视上出现看起来很一般啊，并没有珠光宝气的样子，其实，你们完全错了！\r\n这件带有彩色毛毛装饰的黑色高领毛衣来自意大利著名奢侈品牌Fendi，价格不菲，结果在她身上就像一件保暖用的高领衫。\r\n这款黑白条纹的亚克力包来自香奈儿，注意哦，可是全球限量版的。马蓉用来搭配廉价的白色透视衣只让人怀疑是不是街上30块钱买的。\r\n这件带着波点连衣裙来自意大利奢侈品牌Dolce&amp;Gabbana，黑白波点的基色看起来简单优雅，大片的红色色块又增加了亮点，这一件马蓉穿的还不错。\r\n这一款太阳镜来自国际一线奢侈品牌Prada，你是不是觉得还没有你几百块钱的暴龙好看？没错，她选错型了，长脸戴椭圆框，亏你想的出来，以及廉价的发色很是拉低档次。\r\n这款钥匙形状的满是钻的项链来自赫本超爱的奢侈品牌Tiffany。\r\n这款豹纹边框的茶色墨镜来自奢侈品牌Miu Miu，最适合长脸戴的形状是方形和圆形。\r\n耳钉来自奢侈品牌香奈儿，报上名字大家都能想的到价格，这款耳钉精致优雅，是不少女孩们青睐的单品。\r\n给儿子买的衣服也是来自于D＆G，牛仔色配上卡通人物（你是冲那个戴眼镜的卡通人买的吗），还挺可爱的，不过你拿着宝强的钱给自己买了这么多，给宝强买过吗？\r\n\r\n',71,'1471319060'),(18,'aaaaaaa','aaaaaaaaaaaaaaaaaaaa','',0,0,'aaaaaaaaaaaaaaaaaaaaaaaa',1,'1471413412');
/*!40000 ALTER TABLE `at_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `at_type`
--

DROP TABLE IF EXISTS `at_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `at_type` (
  `typeid` int(5) NOT NULL AUTO_INCREMENT,
  `typename` varchar(40) NOT NULL,
  PRIMARY KEY (`typeid`)
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

-- Dump completed on 2016-08-18 11:12:04
