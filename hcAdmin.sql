-- MySQL dump 10.13  Distrib 5.7.12, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: sgad
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.20-MariaDB-1~xenial

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
-- Table structure for table `ad`
--

DROP TABLE IF EXISTS `ad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `summary` varchar(255) DEFAULT NULL COMMENT '简介',
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='广告表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ad`
--

LOCK TABLES `ad` WRITE;
/*!40000 ALTER TABLE `ad` DISABLE KEYS */;
INSERT INTO `ad` VALUES (1,'企业宣传','根植齐鲁大地，锐意进取，开拓创新，紧跟党中央号召，建设大而美，富而强的新中国。在中国富饶的土地上，在中国共产党的鲜明旗帜的领导下，必将实现所谓的中华民族的伟大复兴，雾霾世界第一，水污染世界第一，荒漠化世界第一，在不久的将来，随着中国污染的扩散，世界都会为之颤抖。','upload/1483841641.jpg'),(3,'学习习总书记系列讲话精神','最近我公司组织员工，开展一系列丰富多样的活动，学习讨论习近平总书记关于新春贺词的重要讲话，肯抓实干，提升自我，勇于创新。','upload/1483776084.png');
/*!40000 ALTER TABLE `ad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `name` varchar(45) DEFAULT NULL COMMENT '姓名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','123456','管理员大人');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `content` varchar(255) DEFAULT NULL COMMENT '公司详情',
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `mail` varchar(150) DEFAULT NULL,
  `products_content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='公司表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'我们的理念:“诚信为本、实力为先，全心全意为客户”，我们公司秉承客户至上、服务至上的经营理念，以卓越的it服务品质、专业的技术服务实力、技术精湛的客户服务团队，保障客户在信息时代的高速路上驰骋，又以稳固、发展、忠诚、高效、团结与创新的精神，尊重人才注重技术，使客户在享受信息科技发展最新成果的同时不断获得最大的收益。','upload/1483776458.png','<p><img src=\"/ueditor/php/upload/image/20170110/1484015742959467.jpg\" title=\"1484015742959467.jpg\" alt=\"3.jpg\"/></p><p><br/></p><p><img src=\"/ueditor/php/upload/image/20170110/1484015787618073.png\" title=\"1484015787618073.png\" alt=\"linux.png\"/></p>','山东省济南市历城区','18800000000','1312@123.com','我们的产品都是源于我们的真诚和认真，创新的工艺，卓越的企业文化，造就了产品的品质和灵魂。创新是文化的源泉，也是我们公司孜孜以求的企业精神，为每个产品严格控制质量，是我们公司前行中始终不忘的初心。');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  `mail` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `mobile` varchar(255) DEFAULT NULL COMMENT '手机号',
  `create_time` datetime DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COMMENT='客户留言表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,NULL,NULL,'好的','2017-01-07 15:18:46'),(2,'好的','seawedman@163.com','18800000000','2017-01-07 15:20:31'),(3,NULL,NULL,NULL,'2017-01-10 12:05:03'),(4,NULL,NULL,NULL,'2017-01-10 12:05:58'),(5,'fadf','1312@123','18800000000','2017-01-10 12:50:22'),(6,'123fdsaf','132','18789','2017-01-10 13:21:26'),(7,'123fdsaf','132','18789','2017-01-10 13:21:52'),(8,'123','123','123','2017-01-10 13:22:11'),(9,'123','123','123','2017-01-10 13:22:12'),(10,'123','123','123','2017-01-10 13:28:22'),(11,'123123','123','123','2017-01-10 13:29:04'),(12,'123123','123','123','2017-01-10 13:29:05'),(13,'123123','123','123','2017-01-10 13:29:05'),(14,'123123','123','123','2017-01-10 13:29:06'),(15,'123','123','123','2017-01-10 13:29:50'),(16,'123','123','123','2017-01-10 13:29:51'),(17,'123','123','123','2017-01-10 13:29:51'),(18,'123','123','123','2017-01-10 13:29:51'),(19,'123','123','123','2017-01-10 13:29:53'),(20,'123','123','123','2017-01-10 13:29:53'),(21,'123','123','123','2017-01-10 13:29:54'),(22,'123','123','123','2017-01-10 13:30:11'),(23,'123','123','123','2017-01-10 13:30:52'),(24,'123','123','123','2017-01-10 13:31:15'),(25,'123','123','fa','2017-01-10 13:33:03'),(26,'123','123','123','2017-01-10 13:35:07'),(27,'123','123','123','2017-01-10 13:49:43'),(28,'123','123','123','2017-01-10 13:55:29'),(29,'132','123','123','2017-01-10 13:57:24'),(30,'fdas','fdsa','te','2017-01-10 13:58:32'),(31,'123','123','123','2017-01-10 14:00:20'),(32,'123324','123','123','2017-01-10 14:01:01'),(33,'fdaf','123','123','2017-01-10 14:01:34'),(34,'erewq','123','123','2017-01-10 14:02:17'),(35,'ffdasfds','123fdsa','123','2017-01-10 14:02:33'),(36,'ffdasfds','123fdsa','123','2017-01-10 14:02:45'),(37,'123','dsaf','123','2017-01-10 14:03:02'),(38,'fdasfdasf','123','123','2017-01-10 14:04:14'),(39,'fdasfdasf','123','123','2017-01-10 14:05:16'),(40,'fdasfdasf','123','123','2017-01-10 14:05:19'),(41,'fdasfdasf','123','123','2017-01-10 14:05:21'),(42,'fdasfdasf','123','123','2017-01-10 14:05:52'),(43,'fdasfdasf','123','123','2017-01-10 14:06:00'),(44,'fdasfdasf','123','123','2017-01-10 14:06:02'),(45,'fdasfdasf','123','123','2017-01-10 14:06:04'),(46,'fdasfdasf','123','123','2017-01-10 14:06:06'),(47,'fdasfdasf','123','123','2017-01-10 14:06:08'),(48,'dfsafdsafa','teste@11.com','18800000000','2017-01-10 14:13:16'),(49,'dsfdsaf12321asfdsf','123123123qq','123123','2017-01-10 14:13:55'),(50,'123','123','123','2017-01-10 17:39:58'),(51,'123','123','123','2017-01-10 17:39:59'),(52,'123','123','123','2017-01-10 17:40:02'),(53,'123','123','123','2017-01-10 17:40:07'),(54,'ewrewqrewqr','12321','123','2017-01-10 17:49:32'),(55,'ewrewqrewqr','12321','123','2017-01-10 17:49:35');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL COMMENT '新闻标题',
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `summary` varchar(255) DEFAULT NULL COMMENT '简介',
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='新闻动态表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (4,'习总来我司检查指导','upload/1483844518.png','新年伊始，习近平总书记来我公司莅临指导，对我公司一年来取得成就给予来高度肯定，并勉励大家再新的一年的再接再厉，勇创佳绩。','<p>新闻大事记</p>','2017-01-08 11:10:16'),(5,'特朗普乘专机抵达中国','upload/1483845246.jpg','特朗普总统，盛赞我公司对世界人类文明发展作出的杰出贡献，并称赞我司使东亚文明great again。','<p>fadsfdasfq3eqwe123123</p>','2017-01-08 11:15:49'),(6,'奥巴马离任并定居我司职工公寓','upload/1483845631.jpg','2017年2月21日21时，奥巴马总统缓缓的走上宿舍楼的台阶，领取了床单被褥和洗漱用具，宣告了一个时代的结束。','<p>123123dsaf</p>','2017-01-08 11:20:31'),(7,'工业4.0水平惊呆默克尔','upload/1483845910.jpg','勇于探索，肯抓实干，我司又一次走在了人类科技发展的前列，工业化水平远超德国，引得默克尔总理连连惊叹。','<p>justeteset<br/></p>','2017-01-08 11:26:19');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL COMMENT '标题',
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `summary` varchar(255) DEFAULT NULL COMMENT '简介',
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='产品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (2,'五谷杂粮','upload/1483777117.png','民以食为天，放心的食品来源，是我们坚定的承诺。','<p>我们只生产销售健康无污染的有机粮食，品质值得信赖，为了您的健康、安心，把好每一道质量关。</p><p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p>','2017-01-07 16:18:37'),(3,'黑水矾石','upload/1483778442.png','我们不生产石头，我们只做大自然的搬运工。','<p>我们的石头，都是源自泰山山脉，1800m深的岩层下，绝对卫生安全。</p>','2017-01-07 16:40:42'),(4,'清水羽绒','upload/1483778598.png','妈妈再也不用给我套棉袄了','<p>羽绒服中的战斗服。</p>','2017-01-07 16:43:18');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-04 16:58:21
