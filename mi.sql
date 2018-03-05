-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: mi
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ads` (
  `ads_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `ads_place_id` smallint(5) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `extension` varchar(50) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `expired` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (1,'asd',4,'uploads/image/ads/adsbanner_160313060623.jpg','jpg','asd','2016-04-03','publish'),(3,'ads',3,'uploads/image/ads/adsbanner2_160313054920.jpg','jpg','ads','2016-03-19','publish'),(4,'google',1,'uploads/image/ads/adsbanner_160313065511.jpg','jpg','http://google.com','2016-03-12','publish'),(5,'kaskus',2,'uploads/image/ads/adsbanner2_160313065902.jpg','jpg','http://kaskus.co.id','2016-03-27','publish'),(6,'kaskus',1,'uploads/image/ads/adsbanner2_160313070106.jpg','jpg','http://kaskus.co.id','2016-04-03','publish'),(7,'gmail',2,'uploads/image/ads/adsbanner_160313070208.jpg','jpg','https://gmail.com','2016-04-03','publish'),(8,'detik',3,'uploads/image/ads/adsbanner2_160313070345.jpg','jpg','http://detik.com','2016-03-27','publish'),(9,'okezone.com',4,'uploads/image/ads/adsbanner2_160313070432.jpg','jpg','http://okezone.com','2016-04-03','publish'),(10,'kaskus',0,'uploads/image/ads/adsbanner_160316010620.jpg','jpg','http://kaskus.co.id','2016-04-03','unpublish');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ads_place`
--

DROP TABLE IF EXISTS `ads_place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ads_place` (
  `ads_place_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) NOT NULL,
  PRIMARY KEY (`ads_place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads_place`
--

LOCK TABLES `ads_place` WRITE;
/*!40000 ALTER TABLE `ads_place` DISABLE KEYS */;
INSERT INTO `ads_place` VALUES (1,'Top Home'),(2,'Bottom Home'),(3,'Bottom Gallery'),(4,'Bottom Event'),(5,'Footer Page');
/*!40000 ALTER TABLE `ads_place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `banner_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `banner_page_id` smallint(5) NOT NULL,
  `banner_category_id` smallint(5) NOT NULL,
  `banner_size_id` smallint(5) NOT NULL,
  `banner_name` varchar(50) NOT NULL,
  `banner_caption` varchar(200) NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,1,1,1,'Banner 3','','','uploads/image/banners/12_160114070350.jpg','jpg',27),(2,1,1,1,'Banner 2','<p>.</p>\r\n','','uploads/image/banners/11_160114070341.jpg','jpg',27),(3,1,1,1,'Banner 1','','','uploads/image/banners/1_160114070332.jpg','jpg',27);
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner_category`
--

DROP TABLE IF EXISTS `banner_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner_category` (
  `banner_category_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `page_id` smallint(5) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`banner_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner_category`
--

LOCK TABLES `banner_category` WRITE;
/*!40000 ALTER TABLE `banner_category` DISABLE KEYS */;
INSERT INTO `banner_category` VALUES (1,1,'Hero Banner'),(2,2,'Static Banner'),(3,3,'Static Banner'),(4,4,'Static Banner'),(5,5,'Static Banner'),(6,6,'Static Banner');
/*!40000 ALTER TABLE `banner_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner_size`
--

DROP TABLE IF EXISTS `banner_size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner_size` (
  `banner_size_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `banner_category_id` smallint(5) NOT NULL,
  `size` varchar(50) NOT NULL,
  `size_name` varchar(50) NOT NULL,
  PRIMARY KEY (`banner_size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner_size`
--

LOCK TABLES `banner_size` WRITE;
/*!40000 ALTER TABLE `banner_size` DISABLE KEYS */;
INSERT INTO `banner_size` VALUES (1,1,'1606x508','1606 x 508 (Slideshow)'),(2,2,'1606x508','1606 x 508 (Slideshow)'),(3,3,'1606x508','1606 x 508 (Slideshow)'),(4,4,'1606x508','1606 x 508 (Slideshow)'),(5,5,'1606x508','1606 x 508 (Slideshow)'),(6,6,'1606x508','1606 x 508 (Slideshow)');
/*!40000 ALTER TABLE `banner_size` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `blog_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `blog_category_id` smallint(5) DEFAULT NULL,
  `page_id` smallint(5) NOT NULL,
  `status` enum('draft','publish') NOT NULL,
  `filetype` enum('image','pdf','youtube') NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `extention` varchar(30) DEFAULT NULL,
  `youtube_id` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,65,2,'publish','image','uploads/image/blog/azimut50_160115095803.jpg','jpg',NULL,0,'2016-01-15 20:58:03',27),(2,65,2,'publish','image','uploads/image/blog/Felicia_160115095831.jpg','jpg',NULL,0,'2016-01-15 21:08:34',27),(3,65,2,'publish','image','uploads/image/blog/uhuuh_160218082311.jpg','jpg',NULL,0,'2016-02-18 19:23:11',27);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_category`
--

DROP TABLE IF EXISTS `blog_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_category` (
  `blog_category_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `page_id` smallint(5) NOT NULL,
  `blog_category_name` varchar(100) NOT NULL,
  `blog_category_desc` text NOT NULL,
  `order_no` smallint(2) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`blog_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_category`
--

LOCK TABLES `blog_category` WRITE;
/*!40000 ALTER TABLE `blog_category` DISABLE KEYS */;
INSERT INTO `blog_category` VALUES (65,2,'Default','',0,'2016-01-13 07:11:26',27);
/*!40000 ALTER TABLE `blog_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_child_category`
--

DROP TABLE IF EXISTS `blog_child_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_child_category` (
  `child_category_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `category_id` smallint(5) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`child_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_child_category`
--

LOCK TABLES `blog_child_category` WRITE;
/*!40000 ALTER TABLE `blog_child_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_child_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_image_size`
--

DROP TABLE IF EXISTS `blog_image_size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_image_size` (
  `blog_size_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` smallint(5) NOT NULL,
  `size` varchar(30) NOT NULL,
  `size_name` varchar(30) NOT NULL,
  PRIMARY KEY (`blog_size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_image_size`
--

LOCK TABLES `blog_image_size` WRITE;
/*!40000 ALTER TABLE `blog_image_size` DISABLE KEYS */;
INSERT INTO `blog_image_size` VALUES (24,44,'847x470','(847x470) px - Top'),(25,45,'847x470','(847x470) px - Top'),(26,46,'847x470','(847x470) px - Top'),(27,47,'847x470','(847x470) px - Top'),(29,53,'847x470','(847x470) px - Top'),(30,2,'847x470','(847x470) px - Top'),(40,65,'847x470','(847x470) px - Top');
/*!40000 ALTER TABLE `blog_image_size` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_static`
--

DROP TABLE IF EXISTS `blog_static`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_static` (
  `blog_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `blog_category_id` smallint(5) NOT NULL,
  `status` enum('draft','publish') NOT NULL,
  `filetype` enum('image','pdf','youtube') NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `extention` varchar(30) DEFAULT NULL,
  `youtube_id` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_static`
--

LOCK TABLES `blog_static` WRITE;
/*!40000 ALTER TABLE `blog_static` DISABLE KEYS */;
INSERT INTO `blog_static` VALUES (1,1,'publish','image','','',NULL,0,'2015-11-21 08:53:23',27),(2,2,'draft','image','','',NULL,0,'2015-11-22 13:44:58',27),(3,3,'draft','image','','',NULL,0,'2015-11-23 04:13:18',27),(4,4,'draft','image','uploads/image/blog/8_151119035813.jpg','jpg',NULL,0,'2015-11-19 14:58:13',27),(5,5,'draft','image','uploads/image/blog/blog1_151123051453.jpg','jpg',NULL,0,'2015-11-23 04:14:53',27),(6,6,'draft','image','uploads/image/blog/blog1_151123051551.jpg','jpg',NULL,0,'2015-11-23 04:15:52',27);
/*!40000 ALTER TABLE `blog_static` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_static_category`
--

DROP TABLE IF EXISTS `blog_static_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_static_category` (
  `blog_category_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `page_id` smallint(5) NOT NULL,
  `blog_category_name` varchar(100) NOT NULL,
  `order_no` smallint(2) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`blog_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_static_category`
--

LOCK TABLES `blog_static_category` WRITE;
/*!40000 ALTER TABLE `blog_static_category` DISABLE KEYS */;
INSERT INTO `blog_static_category` VALUES (1,5,'Single Page',1,'2015-11-19 09:46:18',1),(2,6,'About',0,'2015-11-19 10:16:38',1),(3,6,'Help',0,'2015-11-19 10:16:41',1),(4,6,'Developers',0,'2015-11-19 10:22:43',1),(5,6,'Terms',0,'2015-11-19 10:22:46',1),(6,6,'Privacy',0,'2015-11-19 10:22:48',1),(37,4,'dasdas55',0,'2015-11-19 07:29:13',27),(38,5,'Default',0,'2015-11-19 07:31:45',0),(39,6,'Privacy',0,'2015-11-19 08:04:31',0);
/*!40000 ALTER TABLE `blog_static_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('cf4722b0df91445d7373c1742e4396e1','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.3',1516450033,'');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `client_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (2,'Cakra Tunggal','uploads/image/client/cakra-tunggal-steel_160112083546.png','png','2016-01-12 19:35:46',27),(3,'Hotel Santika','uploads/image/client/hotel-santika_160112083608.png','png','2016-01-12 19:36:08',27),(4,'Mpti','uploads/image/client/mpti_160112083614.png','png','2016-01-12 19:36:14',27);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_message`
--

DROP TABLE IF EXISTS `contact_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_message` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_message`
--

LOCK TABLES `contact_message` WRITE;
/*!40000 ALTER TABLE `contact_message` DISABLE KEYS */;
INSERT INTO `contact_message` VALUES (1,'rakaa anggala','raka_home11@yahoo.com','test subject','hii pdi aku tester yaaa','2015-11-22 13:03:31'),(2,'rakaa anggala','raka_home11@yahoo.com','test subject','hii pdi aku tester yaaa','2015-11-22 13:03:37'),(3,'rakaa anggala','raka_home11@yahoo.com','test subject','hii pdi aku tester yaaa','2015-11-22 13:04:25'),(4,'rakaa anggala','raka_home11@yahoo.com','test subject','hii pdi aku tester yaaa','2015-11-22 13:04:43');
/*!40000 ALTER TABLE `contact_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `countries_id` int(11) NOT NULL AUTO_INCREMENT,
  `countries_idx` varchar(20) NOT NULL,
  `countries_name` varchar(100) NOT NULL,
  `countries_name_flag` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `active` enum('no','yes') NOT NULL,
  PRIMARY KEY (`countries_id`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AED','United Arab Emirates Dirham (AED)','','','','no'),(2,'AFN','Afghan Afghani (AFN)','','','','no'),(3,'ALL','Albanian Lek (ALL)','','','','no'),(4,'AMD','Armenian Dram (AMD)','','','','no'),(5,'ANG','Netherlands Antillean Guilder (ANG)','','','','no'),(6,'AOA','Angolan Kwanza (AOA)','','','','no'),(7,'ARS','Argentine Peso (ARS)','','','','no'),(8,'AUD','Australian Dollar (A$)','Australian','','','no'),(9,'AWG','Aruban Florin (AWG)','','','','no'),(10,'AZN','Azerbaijani Manat (AZN)','','','','no'),(11,'BAM','Bosnia-Herzegovina Convertible Mark (BAM)','','','','no'),(12,'BBD','Barbadian Dollar (BBD)','','','','no'),(13,'BDT','Bangladeshi Taka (BDT)','','','','no'),(14,'BGN','Bulgarian Lev (BGN)','','','','no'),(15,'BHD','Bahraini Dinar (BHD)','','','','no'),(16,'BIF','Burundian Franc (BIF)','','','','no'),(17,'BMD','Bermudan Dollar (BMD)','','','','no'),(18,'BND','Brunei Dollar (BND)','','','','no'),(19,'BOB','Bolivian Boliviano (BOB)','','','','no'),(20,'BRL','Brazilian Real (R$)','','','','no'),(21,'BSD','Bahamian Dollar (BSD)','','','','no'),(22,'BTN','Bhutanese Ngultrum (BTN)','','','','no'),(23,'BWP','Botswanan Pula (BWP)','','','','no'),(24,'BYR','Belarusian Ruble (BYR)','','','','no'),(25,'BZD','Belize Dollar (BZD)','','','','no'),(26,'CAD','Canadian Dollar (CA$)','','','','no'),(27,'CDF','Congolese Franc (CDF)','','','','no'),(28,'CHF','Swiss Franc (CHF)','','','','no'),(29,'CLF','Chilean Unit of Account (UF) (CLF)','','','','no'),(30,'CLP','Chilean Peso (CLP)','','','','no'),(31,'CNH','CNH (CNH)','','','','no'),(32,'CNY','Chinese Yuan (CN?)','','','','no'),(33,'COP','Colombian Peso (COP)','','','','no'),(34,'CRC','Costa Rican Col?n (CRC)','','','','no'),(35,'CUP','Cuban Peso (CUP)','','','','no'),(36,'CVE','Cape Verdean Escudo (CVE)','','','','no'),(37,'CZK','Czech Republic Koruna (CZK)','','','','no'),(38,'DEM','German Mark (DEM)','','','','no'),(39,'DJF','Djiboutian Franc (DJF)','','','','no'),(40,'DKK','Danish Krone (DKK)','','','','no'),(41,'DOP','Dominican Peso (DOP)','','','','no'),(42,'DZD','Algerian Dinar (DZD)','','','','no'),(43,'EGP','Egyptian Pound (EGP)','','','','no'),(44,'ERN','Eritrean Nakfa (ERN)','','','','no'),(45,'ETB','Ethiopian Birr (ETB)','','','','no'),(46,'EUR','Euro (?)','','','','no'),(47,'FIM','Finnish Markka (FIM)','','','','no'),(48,'FJD','Fijian Dollar (FJD)','','','','no'),(49,'FKP','Falkland Islands Pound (FKP)','','','','no'),(50,'FRF','French Franc (FRF)','','','','no'),(51,'GBP','British Pound Sterling','English','uploads/image/lang/en_151110123506.png','png','no'),(52,'GEL','Georgian Lari (GEL)','','','','no'),(53,'GHS','Ghanaian Cedi (GHS)','','','','no'),(54,'GIP','Gibraltar Pound (GIP)','','','','no'),(55,'GMD','Gambian Dalasi (GMD)','','','','no'),(56,'GNF','Guinean Franc (GNF)','','','','no'),(57,'GTQ','Guatemalan Quetzal (GTQ)','','','','no'),(58,'GYD','Guyanaese Dollar (GYD)','','','','no'),(59,'HKD','Hong Kong Dollar (HK$)','','','','no'),(60,'HNL','Honduran Lempira (HNL)','','','','no'),(61,'HRK','Croatian Kuna (HRK)','','','','no'),(62,'HTG','Haitian Gourde (HTG)','','','','no'),(63,'HUF','Hungarian Forint (HUF)','','','','no'),(64,'IDR','Indonesian Rupiah (IDR)','Indonesian','uploads/image/lang/id_151110122934.png','png','yes'),(65,'IEP','Irish Pound (IEP)','','','','no'),(66,'ILS','Israeli New Sheqel (?)','','','','no'),(67,'INR','Indian Rupee (Rs.)','','','','no'),(68,'IQD','Iraqi Dinar (IQD)','','','','no'),(69,'IRR','Iranian Rial (IRR)','','','','no'),(70,'ISK','Icelandic Kr?na (ISK)','','','','no'),(71,'ITL','Italian Lira (ITL)','','','','no'),(72,'JMD','Jamaican Dollar (JMD)','','','','no'),(73,'JOD','Jordanian Dinar (JOD)','','','','no'),(74,'JPY','Japanese Yen (?)','','','','no'),(75,'KES','Kenyan Shilling (KES)','','','','no'),(76,'KGS','Kyrgystani Som (KGS)','','','','no'),(77,'KHR','Cambodian Riel (KHR)','','','','no'),(78,'KMF','Comorian Franc (KMF)','','','','no'),(79,'KPW','North Korean Won (KPW)','','','','no'),(80,'KRW','South Korean Won (?)','','','','no'),(81,'KWD','Kuwaiti Dinar (KWD)','','','','no'),(82,'KYD','Cayman Islands Dollar (KYD)','','','','no'),(83,'KZT','Kazakhstani Tenge (KZT)','','','','no'),(84,'LAK','Laotian Kip (LAK)','','','','no'),(85,'LBP','Lebanese Pound (LBP)','','','','no'),(86,'LKR','Sri Lankan Rupee (LKR)','','','','no'),(87,'LRD','Liberian Dollar (LRD)','','','','no'),(88,'LSL','Lesotho Loti (LSL)','','','','no'),(89,'LTL','Lithuanian Litas (LTL)','','','','no'),(90,'LVL','Latvian Lats (LVL)','','','','no'),(91,'LYD','Libyan Dinar (LYD)','','','','no'),(92,'MAD','Moroccan Dirham (MAD)','','','','no'),(93,'MDL','Moldovan Leu (MDL)','','','','no'),(94,'MGA','Malagasy Ariary (MGA)','','','','no'),(95,'MKD','Macedonian Denar (MKD)','','','','no'),(96,'MMK','Myanma Kyat (MMK)','','','','no'),(97,'MNT','Mongolian Tugrik (MNT)','','','','no'),(98,'MOP','Macanese Pataca (MOP)','','','','no'),(99,'MRO','Mauritanian Ouguiya (MRO)','','','','no'),(100,'MUR','Mauritian Rupee (MUR)','','','','no'),(101,'MVR','Maldivian Rufiyaa (MVR)','','','','no'),(102,'MWK','Malawian Kwacha (MWK)','','','','no'),(103,'MXN','Mexican Peso (MX$)','','','','no'),(104,'MYR','Malaysian Ringgit (MYR)','','','','no'),(105,'MZN','Mozambican Metical (MZN)','','','','no'),(106,'NAD','Namibian Dollar (NAD)','','','','no'),(107,'NGN','Nigerian Naira (NGN)','','','','no'),(108,'NIO','Nicaraguan C?rdoba (NIO)','','','','no'),(109,'NOK','Norwegian Krone (NOK)','','','','no'),(110,'NPR','Nepalese Rupee (NPR)','','','','no'),(111,'NZD','New Zealand Dollar (NZ$)','','','','no'),(112,'OMR','Omani Rial (OMR)','','','','no'),(113,'PAB','Panamanian Balboa (PAB)','','','','no'),(114,'PEN','Peruvian Nuevo Sol (PEN)','','','','no'),(115,'PGK','Papua New Guinean Kina (PGK)','','','','no'),(116,'PHP','Philippine Peso (Php)','','','','no'),(117,'PKG','PKG (PKG)','','','','no'),(118,'PKR','Pakistani Rupee (PKR)','','','','no'),(119,'PLN','Polish Zloty (PLN)','','','','no'),(120,'PYG','Paraguayan Guarani (PYG)','','','','no'),(121,'QAR','Qatari Rial (QAR)','','','','no'),(122,'RON','Romanian Leu (RON)','','','','no'),(123,'RSD','Serbian Dinar (RSD)','','','','no'),(124,'RUB','Russian Ruble (RUB)','','','','no'),(125,'RWF','Rwandan Franc (RWF)','','','','no'),(126,'SAR','Saudi Riyal (SAR)','','','','no'),(127,'SBD','Solomon Islands Dollar (SBD)','','','','no'),(128,'SCR','Seychellois Rupee (SCR)','','','','no'),(129,'SDG','Sudanese Pound (SDG)','','','','no'),(130,'SEK','Swedish Krona (SEK)','','','','no'),(131,'SGD','Singapore Dollar (SGD)','','','','no'),(132,'SHP','Saint Helena Pound (SHP)','','','','no'),(133,'SLL','Sierra Leonean Leone (SLL)','','','','no'),(134,'SOS','Somali Shilling (SOS)','','','','no'),(135,'SRD','Surinamese Dollar (SRD)','','','','no'),(136,'STD','S?o Tom? and Pr?ncipe Dobra (STD)','','','','no'),(137,'SVC','Salvadoran Col?n (SVC)','','','','no'),(138,'SYP','Syrian Pound (SYP)','','','','no'),(139,'SZL','Swazi Lilangeni (SZL)','','','','no'),(140,'THB','Thai Baht (?)','','','','no'),(141,'TJS','Tajikistani Somoni (TJS)','','','','no'),(142,'TMT','Turkmenistani Manat (TMT)','','','','no'),(143,'TND','Tunisian Dinar (TND)','','','','no'),(144,'TOP','Tongan Pa?anga (TOP)','','','','no'),(145,'TRY','Turkish Lira (TRY)','','','','no'),(146,'TTD','Trinidad and Tobago Dollar (TTD)','','','','no'),(147,'TWD','New Taiwan Dollar (NT$)','','','','no'),(148,'TZS','Tanzanian Shilling (TZS)','','','','no'),(149,'UAH','Ukrainian Hryvnia (UAH)','','','','no'),(150,'UGX','Ugandan Shilling (UGX)','','','','no'),(151,'USD','US Dollar ($)','','','','no'),(152,'UYU','Uruguayan Peso (UYU)','','','','no'),(153,'UZS','Uzbekistan Som (UZS)','','','','no'),(154,'VEF','Venezuelan Bol?var (VEF)','','','','no'),(155,'VND','Vietnamese Dong (?)','','','','no'),(156,'VUV','Vanuatu Vatu (VUV)','','','','no'),(157,'WST','Samoan Tala (WST)','','','','no'),(158,'XAF','CFA Franc BEAC (FCFA)','','','','no'),(159,'XCD','East Caribbean Dollar (EC$)','','','','no'),(160,'XDR','Special Drawing Rights (XDR)','','','','no'),(161,'XOF','CFA Franc BCEAO (CFA)','','','','no'),(162,'XPF','CFP Franc (CFPF)','','','','no'),(163,'YER','Yemeni Rial (YER)','','','','no'),(164,'ZAR','South African Rand (ZAR)','','','','no'),(165,'ZMK','Zambian Kwacha (1968-2012) (ZMK)','','','','no'),(166,'ZMW','Zambian Kwacha (ZMW)','','','','no'),(167,'ZWL','Zimbabwean Dollar (2009) (ZWL)','','','','no');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `gallery_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `gallery_album_id` smallint(5) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url_link` varchar(255) NOT NULL,
  `video_intro` enum('no','yes') NOT NULL,
  `video_desc` text,
  `author` smallint(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,1,'uploads/gallery/dummy1_180101060901.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:09:01'),(2,1,'uploads/gallery/dummy2_180101060901.JPG','JPG','image','','','no',NULL,0,'2018-01-01 14:09:01'),(3,1,'uploads/gallery/dummy3_180101060901.png','png','image','','','no',NULL,0,'2018-01-01 14:09:01'),(4,2,'uploads/gallery/dummy4_180101060931.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:09:31'),(5,2,'uploads/gallery/dummy5_180101060931.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:09:31'),(6,2,'uploads/gallery/dummy6_180101060931.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:09:32'),(7,3,'uploads/gallery/dummy7_180101060953.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:09:54'),(8,3,'uploads/gallery/dummy8_180101060954.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:09:54'),(9,3,'uploads/gallery/dummy9_180101060954.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:09:54'),(10,4,'uploads/gallery/dummy10_180101061042.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:10:42'),(11,4,'uploads/gallery/dummy11_180101061042.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:10:42'),(12,4,'uploads/gallery/dummy12_180101061042.jpg','jpg','image','','','no',NULL,0,'2018-01-01 14:10:42');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_album`
--

DROP TABLE IF EXISTS `gallery_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_album` (
  `gallery_album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(100) NOT NULL,
  `album_title` varchar(100) NOT NULL,
  `album_description` text NOT NULL,
  `date` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `tipe` int(11) NOT NULL,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`gallery_album_id`),
  KEY `tipe` (`tipe`),
  CONSTRAINT `gallery_album_ibfk_1` FOREIGN KEY (`tipe`) REFERENCES `satria_tipe` (`tipe_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_album`
--

LOCK TABLES `gallery_album` WRITE;
/*!40000 ALTER TABLE `gallery_album` DISABLE KEYS */;
INSERT INTO `gallery_album` VALUES (1,'Album Prestasi','Prestasi MTS Satria','<p>Ini adalah Album Prestasi MTS Satria Jakarta Barat</p>','2018-01-01','uploads/gallery/prestasi_180101055904.png','png',2,0),(2,'Album Extrakurikuler','Extrakurikuler MTS Satria','<p>Ini adalah Album Extrakurikuler MTS Satria Jakarta Barat</p>','2018-01-08','uploads/gallery/kurikuler_180101060002.png','png',3,0),(3,'Album Lingkungan','Lingkungan MTS Satria','<p>Ini adalah Album Lingkungan MTS Satria Jakarta Barat</p>','2018-01-15','uploads/gallery/lingkunga_180101060155.png','png',4,0),(4,'Album Osis','OSIS MTS Satria','<p>Ini Adalah Album OSIS MTS Satria</p>','2018-01-29','uploads/gallery/osis_180101060250.png','png',5,0);
/*!40000 ALTER TABLE `gallery_album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_album_loved`
--

DROP TABLE IF EXISTS `log_album_loved`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_album_loved` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` smallint(5) NOT NULL,
  `loved` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_album_loved`
--

LOCK TABLES `log_album_loved` WRITE;
/*!40000 ALTER TABLE `log_album_loved` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_album_loved` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_album_view`
--

DROP TABLE IF EXISTS `log_album_view`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_album_view` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` smallint(5) NOT NULL,
  `view` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_album_view`
--

LOCK TABLES `log_album_view` WRITE;
/*!40000 ALTER TABLE `log_album_view` DISABLE KEYS */;
INSERT INTO `log_album_view` VALUES (1,16,17,'2015-11-23 10:39:01'),(2,14,11,'2015-11-23 10:40:36');
/*!40000 ALTER TABLE `log_album_view` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_article_loved`
--

DROP TABLE IF EXISTS `log_article_loved`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_article_loved` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` smallint(5) NOT NULL,
  `loved` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_article_loved`
--

LOCK TABLES `log_article_loved` WRITE;
/*!40000 ALTER TABLE `log_article_loved` DISABLE KEYS */;
INSERT INTO `log_article_loved` VALUES (1,70,1,'2015-11-23 12:19:10'),(2,69,2,'2015-11-23 16:34:30');
/*!40000 ALTER TABLE `log_article_loved` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_article_view`
--

DROP TABLE IF EXISTS `log_article_view`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_article_view` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` smallint(5) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_article_view`
--

LOCK TABLES `log_article_view` WRITE;
/*!40000 ALTER TABLE `log_article_view` DISABLE KEYS */;
INSERT INTO `log_article_view` VALUES (12,0,2,'2015-11-22 08:46:49'),(11,70,30,'2015-12-19 20:06:06'),(10,69,26,'2015-12-19 20:06:30'),(13,55,3,'2015-11-22 17:42:08'),(14,71,15,'2015-11-23 16:32:57'),(15,72,11,'2015-12-19 20:06:20'),(16,74,1,'2015-11-23 11:02:56'),(17,73,2,'2015-12-19 20:07:10');
/*!40000 ALTER TABLE `log_article_view` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership` (
  `id_membership` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `province` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`id_membership`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership`
--

LOCK TABLES `membership` WRITE;
/*!40000 ALTER TABLE `membership` DISABLE KEYS */;
INSERT INTO `membership` VALUES (1,'1','1',1,'js','1',1),(2,'hilmy','syarif',1,'js','arinda',15224),(3,'hilmy','syarif',1,'js','arinda',15224),(4,'hilmy','syarif',1,'js','arinda',15224),(5,'hilmy','syarif',1,'js','arinda',15224);
/*!40000 ALTER TABLE `membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_car`
--

DROP TABLE IF EXISTS `membership_car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_car` (
  `id_car` int(11) NOT NULL AUTO_INCREMENT,
  `id_membership` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `license_plate` varchar(100) NOT NULL,
  `chasis_no` varchar(20) NOT NULL,
  `engine_no` varchar(20) NOT NULL,
  PRIMARY KEY (`id_car`),
  UNIQUE KEY `id_membership` (`id_membership`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_car`
--

LOCK TABLES `membership_car` WRITE;
/*!40000 ALTER TABLE `membership_car` DISABLE KEYS */;
INSERT INTO `membership_car` VALUES (1,1,'1',2,'3','4','5'),(2,2,'A1',2013,'B 3 GO','12345342','12345432'),(4,3,'A1',2013,'B 3 GO','12345342','12345432'),(6,4,'A1',2013,'B 3 GO','12345342','12345432'),(8,5,'A1',2013,'B 3 GO','12345342','12345432');
/*!40000 ALTER TABLE `membership_car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_get`
--

DROP TABLE IF EXISTS `membership_get`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_get` (
  `get_id` int(11) NOT NULL AUTO_INCREMENT,
  `titone` varchar(100) NOT NULL,
  `descone` varchar(255) NOT NULL,
  `tittwo` varchar(100) NOT NULL,
  `desctwo` varchar(255) NOT NULL,
  `tittri` varchar(100) NOT NULL,
  `desctri` varchar(255) NOT NULL,
  `titco1` varchar(100) NOT NULL,
  `descco1` varchar(100) NOT NULL,
  `titco2` varchar(100) NOT NULL,
  `descco2` varchar(100) NOT NULL,
  `titco3` varchar(100) NOT NULL,
  `descco3` varchar(100) NOT NULL,
  `titco4` varchar(100) NOT NULL,
  `descco4` varchar(100) NOT NULL,
  `titco5` varchar(100) NOT NULL,
  `descco5` varchar(100) NOT NULL,
  `titco6` varchar(100) NOT NULL,
  `descco6` varchar(100) NOT NULL,
  PRIMARY KEY (`get_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_get`
--

LOCK TABLES `membership_get` WRITE;
/*!40000 ALTER TABLE `membership_get` DISABLE KEYS */;
INSERT INTO `membership_get` VALUES (1,'ddd','<p>asd</p>','asdd','<p>asd</p>','add','<p>adddd</p>','asd','assdd','asdd','asdd','asdd','asddd','asdda','asdd','asdd','asdd','add','asdd');
/*!40000 ALTER TABLE `membership_get` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `officer`
--

DROP TABLE IF EXISTS `officer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `officer` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `jobs` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL,
  `extention` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `officer`
--

LOCK TABLES `officer` WRITE;
/*!40000 ALTER TABLE `officer` DISABLE KEYS */;
INSERT INTO `officer` VALUES (1,'asd','<p>asd</p>','uploads/image/about/1_160314034733.jpg','jpg'),(2,'hilmz','<p>dev</p>','uploads/image/about/1_160314104348.jpg','jpg'),(7,'Hilmy Syarif','<p>dev</p>','uploads/image/about/Mr_171130035729.png','png'),(8,'hilmz2','<p>asd</p>','uploads/image/about/Mr_171130035657.png','png'),(9,'hilmz3','<p>dev</p>','uploads/image/about/Mr_171130035803.png','png');
/*!40000 ALTER TABLE `officer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `page_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(30) NOT NULL,
  `banner` enum('no','yes') NOT NULL,
  `blog` enum('no','yes') NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'Home','yes','no'),(2,'News','no','yes');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_about`
--

DROP TABLE IF EXISTS `page_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_about` (
  `about_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `file` varchar(200) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `file2` varchar(200) DEFAULT NULL,
  `extention2` varchar(30) DEFAULT NULL,
  `file3` varchar(200) DEFAULT NULL,
  `extention3` varchar(30) DEFAULT NULL,
  `file4` varchar(200) DEFAULT NULL,
  `extention4` varchar(30) DEFAULT NULL,
  `file5` varchar(200) DEFAULT NULL,
  `extention5` varchar(30) DEFAULT NULL,
  `file6` varchar(200) DEFAULT NULL,
  `extention6` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_about`
--

LOCK TABLES `page_about` WRITE;
/*!40000 ALTER TABLE `page_about` DISABLE KEYS */;
INSERT INTO `page_about` VALUES (3,'','<p>Alhamdulillahirobbil alamin &hellip; Puji syukur marilah kita panjatkan kepada Allah SWT yang atas limpahan rahmat, nikmat dan karunianya sehingga kita dapat menyelesaikan pembuatan website ini dengan lancar. Sholawat serta salam semoga tetap tercurah kepada baginda Nabi Agung Muhammad SAW, para sahabat dang pengikutnya.</p>\r\n<p>Perkembangan teknologi informasi saat ini membawa pengaruh besar bagi perkembanagn dunia. Berita yang terjadi di belahan bumi ini dapat dengan mudah di akses dari mana saja. Sebagai lembaga pendidikan, MI tarbiyah Al Islamiyah yang berada di bawah naungan yayasan Tarbiyah Islamiyah Al Alawiyah (SATRIA) tanggap dengan perkembangan teknologi tersebut.</p>','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `page_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_contact`
--

DROP TABLE IF EXISTS `page_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_contact` (
  `contact_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `contact_office` text NOT NULL,
  `opening_hour` text NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  `contact_phone` text NOT NULL,
  `geolocation` varchar(200) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_contact`
--

LOCK TABLES `page_contact` WRITE;
/*!40000 ALTER TABLE `page_contact` DISABLE KEYS */;
INSERT INTO `page_contact` VALUES (1,'<p>Ruko lorem ipsum<br /> No.38 lorem pisum<br /> Jakarta Barat12312</p>\r\n<p>&nbsp;</p>','<ul>\r\n	<li>Monday - Friday: 08.00-20.00</li>\r\n	<li>Saturday: 09.00-15.00</li>\r\n	<li>Sunday and holidays: closed</li>\r\n</ul>\r\n','admin@dem.com','087784338555','dsada555','2017-12-29 07:35:11',0);
/*!40000 ALTER TABLE `page_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_content`
--

DROP TABLE IF EXISTS `page_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_content` (
  `page_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_category` varchar(100) NOT NULL,
  `content_id` smallint(5) NOT NULL,
  `id_countries` smallint(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`page_content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_content`
--

LOCK TABLES `page_content` WRITE;
/*!40000 ALTER TABLE `page_content` DISABLE KEYS */;
INSERT INTO `page_content` VALUES (1,'blog',1,64,'dasdaLorem Ipsum is simply dummy text of the printing and typesetting industry. ','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in clas</p>\r\n'),(2,'blog',2,64,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in clas</p>\r\n'),(3,'blog',3,64,'','<p>asasdads</p>\n');
/*!40000 ALTER TABLE `page_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_event`
--

DROP TABLE IF EXISTS `page_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_event` (
  `event_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `place` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `extension2` varchar(30) NOT NULL,
  `file3` varchar(200) NOT NULL,
  `extension3` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `is_slide` enum('yes','no') NOT NULL,
  `status` enum('Soon','Past') NOT NULL,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_event`
--

LOCK TABLES `page_event` WRITE;
/*!40000 ALTER TABLE `page_event` DISABLE KEYS */;
INSERT INTO `page_event` VALUES (9,'paris','paris','<p>paris</p>','true','jpg','uploads/event/1_160313035544.JPG','JPG','uploads/event/mini-cooper-ipad-wallpaper-wallpaper-8_160316125407.jpg','jpg','2016-04-03','yes','Past',0),(10,'Trip to Bali','Bali','<p>bali view</p>','true','jpg','uploads/event/5_160313033717.jpg','jpg','uploads/event/slider_160316123706.jpg','0','2016-03-25','yes','Past',0),(11,'test','test','<p>test</p>','uploads/event/5_160316124023.jpg','jpg','uploads/event/2_160315092641.jpg','jpg','uploads/event/img4_160316124024.jpg','jpg','2016-03-06','yes','Past',0),(13,'Asd','asd','<p>asd</p>','uploads/event/3_160316010311.jpg','jpg','uploads/event/1c6fc53fae5ae1a3df8b45d9d5cf2cff_160316123755.jpg','jpg','uploads/event/slider_160316123907.jpg','jpg','2016-03-16','yes','Soon',0),(14,'bandung','bandung','<p>bandung</p>','uploads/event/1_160319011031.JPG','JPG','uploads/event/2_160319011032.jpg','jpg','uploads/event/slider_160319011033.jpg','jpg','2016-04-03','yes','Soon',0);
/*!40000 ALTER TABLE `page_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_gallery`
--

DROP TABLE IF EXISTS `page_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_gallery` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `file` varchar(200) NOT NULL,
  `extention` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_gallery`
--

LOCK TABLES `page_gallery` WRITE;
/*!40000 ALTER TABLE `page_gallery` DISABLE KEYS */;
INSERT INTO `page_gallery` VALUES (1,'uploads/event/5_160316124023.jpg','jpg');
/*!40000 ALTER TABLE `page_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_membership`
--

DROP TABLE IF EXISTS `page_membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_membership` (
  `id_membership` smallint(5) NOT NULL AUTO_INCREMENT,
  `desc` text NOT NULL,
  PRIMARY KEY (`id_membership`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_membership`
--

LOCK TABLES `page_membership` WRITE;
/*!40000 ALTER TABLE `page_membership` DISABLE KEYS */;
INSERT INTO `page_membership` VALUES (1,'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Repudiandae possimus quas odio nisi optio asperiores, vitae error laudantium, ratione odit ipsa obcaecati debitis deleniti minus, illo maiores placeat omnis magnam.</p>\n<blockquote class=\"serif\">\n<p>Modi perferendis ipsa, dolorum eaque accusantium! Velit libero fugit dolores repellendus consequatur nisi, deserunt aperiam a ea ex hic, iusto atque, quas. Aliquam rerum dolores saepe sunt, assumenda voluptas.</p>\n</blockquote>\n<p>Ipsa in adipisci eius qui quos minima ratione velit reprehenderit fuga deleniti amet quidem commodi ducimus.</p>\n<h3>In hac habitasse platea dictumst.</h3>\n<p>Sapiente amet eaque soluta perferendis. Quia ex sit sint voluptate ipsa culpa, veritatis:</p>\n<ul>\n<li>Proin elementum ante quis mauris</li>\n<li>Integer dictum magna vitae ullamcorper sodales</li>\n<li>Integer non placerat diam, id ornare est. Curabitur sit amet lectus vitae urna.</li>\n<li>Vestibulum ante ipsum primis in faucibus</li>\n</ul>\n<p>Labore expedita officiis, in perspiciatis atque voluptates odio dignissimos doloribus quibusdam est minus ullam nulla quisquam nihil aspernatur rem laborum accusantium animi.daaaaa</p>');
/*!40000 ALTER TABLE `page_membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_merchant`
--

DROP TABLE IF EXISTS `page_merchant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_merchant` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `page_desc` text NOT NULL,
  `merchant_name` varchar(200) NOT NULL,
  `merchant_place` varchar(200) NOT NULL,
  `merchant_desc` text NOT NULL,
  `file` varchar(200) NOT NULL,
  `extention` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_merchant`
--

LOCK TABLES `page_merchant` WRITE;
/*!40000 ALTER TABLE `page_merchant` DISABLE KEYS */;
INSERT INTO `page_merchant` VALUES (1,'<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor diam, porta eget laoreet a, rhoncus at urna. Vestibulum a risus magna Aliquam non odio elementum, gravida massa ac, vehicula velit.</h4>','','','','','');
/*!40000 ALTER TABLE `page_merchant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category` varchar(50) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_price_disc` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_spec` text NOT NULL,
  `deals` enum('no','yes') NOT NULL,
  `location` varchar(70) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `url_link` varchar(255) NOT NULL,
  `author` smallint(5) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'t-shirts','','baju miniinc',100000,'80000','<p>harga murah kualitas bagus</p>','','yes','','','','',27,'2017-11-30 14:40:22');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category` (
  `product_category_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL,
  PRIMARY KEY (`product_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` VALUES (7,'t-shirts','2016-03-20 07:50:27',27);
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_image` (
  `product_image_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `product_id` smallint(5) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  PRIMARY KEY (`product_image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (48,37,'uploads/image/product/Atasita_160117084559.jpg','jpg'),(49,37,'uploads/image/product/Aneecha-Catamaran_160117084559.jpg','jpg'),(50,37,'uploads/image/product/Amanikan_160117084559.jpg','jpg'),(52,38,'uploads/image/product/Calico-Jack_160117085031.jpg','jpg'),(53,38,'uploads/image/product/Komodo-Dancer_160117085031.jpg','jpg'),(56,40,'uploads/image/product/5_160117085410.jpg','jpg'),(57,41,'uploads/image/product/Burjuman-56_160117085617.jpg','jpg'),(58,41,'uploads/image/product/Lady-Cruise_160117085617.jpg','jpg'),(59,37,'uploads/image/product/Felicia_160117092805.jpg','jpg'),(60,42,'uploads/image/product/Atasita_160117101116.jpg','jpg'),(61,43,'uploads/image/product/Komodo-Dancer_160117101132.jpg','jpg'),(62,43,'uploads/image/product/Burjuman-56_160117101228.jpg','jpg'),(63,43,'uploads/image/product/Calico-Jack_160117101229.jpg','jpg'),(64,43,'uploads/image/product/Datu-Bua_160117101229.jpg','jpg'),(65,44,'uploads/image/product/1_160315045628.jpg','jpg'),(66,44,'uploads/image/product/3_160315045629.jpg','jpg'),(67,44,'uploads/image/product/4_160315045635.jpg','jpg'),(68,44,'uploads/image/product/5_160315045638.jpg','jpg'),(69,45,'uploads/image/product/1_160315045700.jpg','jpg'),(70,45,'uploads/image/product/3_160315045701.jpg','jpg'),(71,45,'uploads/image/product/4_160315045707.jpg','jpg'),(72,45,'uploads/image/product/5_160315045710.jpg','jpg'),(73,46,'uploads/image/product/1_160315045741.jpg','jpg'),(74,46,'uploads/image/product/3_160315045743.jpg','jpg'),(75,46,'uploads/image/product/4_160315045757.jpg','jpg'),(76,46,'uploads/image/product/5_160315045804.jpg','jpg'),(77,47,'uploads/image/product/11_160315053144.jpg','jpg'),(78,48,'uploads/image/product/1_160315063723.png','png'),(79,48,'uploads/image/product/2_160315063723.png','png'),(80,48,'uploads/image/product/logo_toraja_160315063723.png','png'),(81,48,'uploads/image/product/white_logo_160315063723.png','png'),(82,48,'uploads/image/product/1_160315063723.jpg','jpg'),(83,49,'uploads/image/product/promo-image-1_160315064217.png','png'),(84,49,'uploads/image/product/promo-image-2_160315064218.png','png'),(85,49,'uploads/image/product/promo-image-3_160315064219.png','png'),(86,49,'uploads/image/product/promo-image-4_160315064219.png','png'),(87,50,'uploads/image/product/single-1_160315065315.jpg','jpg'),(88,50,'uploads/image/product/2_160315064513.jpg','jpg'),(89,50,'uploads/image/product/3_160315064514.jpg','jpg'),(90,50,'uploads/image/product/4_160315064516.jpg','jpg'),(91,50,'uploads/image/product/5_160315064518.jpg','jpg'),(92,1,'uploads/image/product/1912487_10201389750335605_896594520_o_171130034021.jpg','jpg'),(93,1,'uploads/image/product/2_160320084800.jpg','jpg');
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes` (
  `quotes_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `layout` enum('left','right') NOT NULL,
  `word` varchar(255) NOT NULL,
  `moment_by` varchar(100) NOT NULL,
  `template` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `extention` varchar(30) NOT NULL,
  `use_for` enum('blog','paste') NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` smallint(5) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`quotes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` VALUES (8,'left','<p>TAK sehatlah masyarakat itu, manakala salah satu pihak menindas kepada yang lain</p>','Kursus politik kepada para wanita, Istana Presiden Yogyakarta, 1947','\r\n              \r\n                <div class=\"col-md-3 ta-c width100\">\r\n                   <img src=\"uploads/image/quotes/quote_151122064114.jpg\" alt=\"Kutipan Soekarno\">\r\n                </div>  \r\n              <blockquote class=\"blog-post-quote quote-depan col-md-9\">\r\n                 <p class=\"lead\"><p>TAK sehatlah masyarakat itu, manakala salah satu pihak menindas kepada yang lain</p></p>\r\n                 <span class=\"quote-author\">Kursus politik kepada para wanita, Istana Presiden Yogyakarta, 1947</span>\r\n              </blockquote>\r\n            ','uploads/image/quotes/quote_151122064114.jpg','jpg','blog','70',27,'2015-11-22 17:41:14'),(9,'left','<p>Orang tidak dapat mengabdi kepada Tuhan dengan tidak mengabdi kepada sesama manusia. Tuhan Bersemayam di gubuknya si miskin</p>','Bung Karno, 23 Oktober 1946','\r\n              \r\n                <div class=\"col-md-3 ta-c width100\">\r\n                   <img src=\"\" alt=\"Kutipan Soekarno\">\r\n                </div>  \r\n              <blockquote class=\"blog-post-quote quote-depan col-md-9\">\r\n                 <p class=\"lead\"><p>Orang tidak dapat mengabdi kepada Tuhan dengan tidak mengabdi kepada sesama manusia. Tuhan Bersemayam di gubuknya si miskin</p></p>\r\n                 <span class=\"quote-author\">Bung Karno, 23 Oktober 1946</span>\r\n              </blockquote>\r\n            ','uploads/image/quotes/quote_151122064015.jpg','jpg','blog','72',27,'2015-11-22 17:40:20'),(10,'right','<p>Nasionalisme kita adalah nasionalisme yang membuat kita menjadi &quot;perkakasnya Tuhan&quot;, dan membuat kita menjadi &quot;hidup di dalam roh&quot;.</p>','Soekarno, Suluh Indonesia Muda, 1928','\r\n              \r\n                <div class=\"col-md-3 col-md-push-9 ta-c width100\">\r\n                    <img src=\"\" alt=\"Kutipan Soekarno\">\r\n                </div>\r\n              <blockquote class=\"blog-post-quote quote-depan col-md-9 col-md-pull-3\">\r\n                <p class=\"lead\"><p>Nasionalisme kita adalah nasionalisme yang membuat kita menjadi &quot;perkakasnya Tuhan&quot;, dan membuat kita menjadi &quot;hidup di dalam roh&quot;.</p></p>\r\n                <span class=\"quote-author\">Soekarno, Suluh Indonesia Muda, 1928</span>\r\n              </blockquote>','uploads/image/quotes/quote_151122063959.jpg','jpg','blog','70',27,'2015-11-22 17:41:00');
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_about`
--

DROP TABLE IF EXISTS `satria_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_desc` text NOT NULL,
  `about_pict` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `jenjang_id` int(11) NOT NULL,
  PRIMARY KEY (`about_id`),
  KEY `jenjang_id` (`jenjang_id`),
  CONSTRAINT `satria_about_ibfk_1` FOREIGN KEY (`jenjang_id`) REFERENCES `satria_jenjang` (`jenjang_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_about`
--

LOCK TABLES `satria_about` WRITE;
/*!40000 ALTER TABLE `satria_about` DISABLE KEYS */;
INSERT INTO `satria_about` VALUES (1,'<p>Alhamdulillahirobbil alamin &hellip; Puji syukur marilah kita panjatkan kepada Allah SWT yang atas limpahan rahmat, nikmat dan karunianya sehingga kita dapat menyelesaikan pembuatan website ini dengan lancar. Sholawat serta salam semoga tetap tercurah kepada baginda Nabi Agung Muhammad SAW, para sahabat dang pengikutnya.</p>\r\n<p>Perkembangan teknologi informasi saat ini membawa pengaruh besar bagi perkembanagn dunia. Berita yang terjadi di belahan bumi ini dapat dengan mudah di akses dari mana saja. Sebagai lembaga pendidikan, MI tarbiyah Al Islamiyah yang berada di bawah naungan yayasan Tarbiyah Islamiyah Al Alawiyah (SATRIA) tanggap dengan perkembangan teknologi tersebut.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>','http://satria.sch.id/images/satria/no-images.jpeg','R-91zBrXJaU',1),(2,'<p>Madrasah Tsanawiyah ( MTs ) Al-Islamiyah Srengseng adalah Sekolah Lanjutan Pertama berciri khas agama Islam (SLTPI). MTs Al-Islamiyah Srengseng didirikan sejak tahun 1981 atas permintaan masyarakat sekitar pada saat itu, yang haus akan pendidikan agama, karena sekolah-sekolah umum yang ada dirasakan masih sangat kurang di dalam menyediakan jam pelajaran agama.</p>\r\n<p>MTs Al-Islamiyah Srengseng telah menggunakan Kurikulum Pendidikan Nasional, sesuai dengan ketentuan yang ada. karena itu siswa MTs Al-Islamiyah setelah lulus tidak mendapatkan hambatan apapun untuk melanjutkan pendidikan yang lebih tinggi.</p>','http://satria.sch.id/images/satria/no-images.jpeg','fa7JNfD3NZY',2),(3,'<p>SMK SATRIA berdiri mulai tahun 1986 berada di bawah naungan Yayasan Tarbiyah Islamiyah Al Alawiyah (SATRIA) yang mulai didirikan pada tahun 1951 oleh KH. Abdul Hamid Sholeh yang berkeinginan agar masyarakat sekitar wilayah Srengseng dapat menuntut ilmu agama yang baik dan juga ilmu pengetahuan umum. Maka dibentuklah dengan nama Yayasan Tarbiyatul Atfal.</p>\r\n<p>Semakin berkembangnya Yayasan yang akhirnya membawahi 3 lembaga Madrasah Ibtidaiyah Al Islamiyah, Madrasah Tsanawiyah Al Islamiyah (Berdiri tahun 1981) dan SMK SATRIA. SMK SATRIA berdiri di tanah wakaf yang merupakan milik Pendiri Yayasan SATRIA dengan luas &plusmn; 2000 m2.</p>\r\n<p>&nbsp;</p>','http://satria.sch.id/images/satria/no-images.jpeg','2eqC6U3qDOM',3);
/*!40000 ALTER TABLE `satria_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_event`
--

DROP TABLE IF EXISTS `satria_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(50) NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `event_time_start` time NOT NULL,
  `event_time_end` time NOT NULL,
  `event_date_start` date NOT NULL,
  `event_date_end` date NOT NULL,
  `event_desc` text NOT NULL,
  `event_pict` text NOT NULL,
  `jenjang_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `satria_event_ibfk_1` (`jenjang_id`),
  CONSTRAINT `satria_event_ibfk_1` FOREIGN KEY (`jenjang_id`) REFERENCES `satria_jenjang` (`jenjang_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_event`
--

LOCK TABLES `satria_event` WRITE;
/*!40000 ALTER TABLE `satria_event` DISABLE KEYS */;
INSERT INTO `satria_event` VALUES (9,'The Boombastic Satria','Yayasan Satria','00:00:00','00:00:00','2018-01-24','2018-01-25','<p>Kuy .. Daftarkan Segera</p>\r\n<p>Raih Hadiah Beasiswa dan Uang Pembinaan</p>\r\n<h5 style=\"text-align: center;\"><strong>Merebutkan</strong></h5>\r\n<ul>\r\n<li>Piala Kapolsek Kembangan Jakarta Barat</li>\r\n<li style=\"text-align: left;\">Piala Camat Kembangan Jakarta Barat</li>\r\n<li style=\"text-align: left;\">Piala Lurah Srengseng Jakarta Barat</li>\r\n</ul>\r\n<h5 style=\"text-align: center;\"><strong>Kategori Lomba</strong></h5>\r\n<ul>\r\n<li>Menyanyi</li>\r\n<li style=\"text-align: left;\">Menggambar &amp; Mewarnai</li>\r\n<li style=\"text-align: left;\">Futsal</li>\r\n<li style=\"text-align: left;\">Hadroh, MTQ, Tahfiz</li>\r\n<li style=\"text-align: left;\">Lomba Gitar Akustik</li>\r\n<li style=\"text-align: left;\">Baca Puisi</li>\r\n</ul>\r\n<p>Special Performence NAIF .....</p>\r\n<p>SABTU, 3 Maret 2018</p>','uploads/event/WhatsApp Image 2018-01-03 at 7_180107111300.jpeg',2),(10,'The Boombastic Satria','Yayasan Satria','00:00:00','00:00:00','2018-01-24','2018-01-25','<p>Kuy .. Daftarkan Segera</p> <p>Raih Hadiah Beasiswa dan Uang Pembinaan</p> <p style=\"text-align: center;\">Merebutkan</p> <ul> <li style=\"text-align: left;\">Piala Kapolsek Kembangan Jakarta Barat</li> <li style=\"text-align: left;\">Piala Camat Kembangan Jakarta Barat</li> <li style=\"text-align: left;\">Piala Lurah Srengseng Jakarta Barat</li> </ul> <p style=\"text-align: center;\">Kategori Lomba</p> <ul> <li style=\"text-align: left;\">Menyanyi</li> <li style=\"text-align: left;\">Menggambar &amp; Mewarnai</li> <li style=\"text-align: left;\">Futsal</li> <li style=\"text-align: left;\">Hadroh, MTQ, Tahfiz</li> <li style=\"text-align: left;\">Lomba Gitar Akustik</li> <li style=\"text-align: left;\">Baca Puisi</li> </ul> <p>Special Performence NAIF .....</p> <p>SABTU, 3 Maret 2018</p>','uploads/event/WhatsApp Image 2018-01-03 at 7_180107111300.jpeg',1),(11,'The Boombastic Satria','Yayasan Satria','00:00:00','00:00:00','2018-01-24','2018-01-25','<p>Kuy .. Daftarkan Segera</p> <p>Raih Hadiah Beasiswa dan Uang Pembinaan</p> <p style=\"text-align: center;\">Merebutkan</p> <ul> <li style=\"text-align: left;\">Piala Kapolsek Kembangan Jakarta Barat</li> <li style=\"text-align: left;\">Piala Camat Kembangan Jakarta Barat</li> <li style=\"text-align: left;\">Piala Lurah Srengseng Jakarta Barat</li> </ul> <p style=\"text-align: center;\">Kategori Lomba</p> <ul> <li style=\"text-align: left;\">Menyanyi</li> <li style=\"text-align: left;\">Menggambar &amp; Mewarnai</li> <li style=\"text-align: left;\">Futsal</li> <li style=\"text-align: left;\">Hadroh, MTQ, Tahfiz</li> <li style=\"text-align: left;\">Lomba Gitar Akustik</li> <li style=\"text-align: left;\">Baca Puisi</li> </ul> <p>Special Performence NAIF .....</p> <p>SABTU, 3 Maret 2018</p>','uploads/event/WhatsApp Image 2018-01-03 at 7_180107111300.jpeg',3);
/*!40000 ALTER TABLE `satria_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_fasilitas`
--

DROP TABLE IF EXISTS `satria_fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_fasilitas` (
  `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT,
  `fasilitas_nama` varchar(255) NOT NULL,
  PRIMARY KEY (`fasilitas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_fasilitas`
--

LOCK TABLES `satria_fasilitas` WRITE;
/*!40000 ALTER TABLE `satria_fasilitas` DISABLE KEYS */;
INSERT INTO `satria_fasilitas` VALUES (1,'Guru Berpengalaman\r\n'),(2,'Fasilitas Mendukung'),(3,'Ruang kelas ber AC'),(4,'Seragam'),(5,'Buku Paket'),(6,'null');
/*!40000 ALTER TABLE `satria_fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_jenjang`
--

DROP TABLE IF EXISTS `satria_jenjang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_jenjang` (
  `jenjang_id` int(11) NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(25) NOT NULL,
  PRIMARY KEY (`jenjang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_jenjang`
--

LOCK TABLES `satria_jenjang` WRITE;
/*!40000 ALTER TABLE `satria_jenjang` DISABLE KEYS */;
INSERT INTO `satria_jenjang` VALUES (1,'mi'),(2,'mts'),(3,'smk');
/*!40000 ALTER TABLE `satria_jenjang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_jenjang_smk`
--

DROP TABLE IF EXISTS `satria_jenjang_smk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_jenjang_smk` (
  `kd_jenjang_smk` varchar(10) NOT NULL,
  `nm_jenjang_smk` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_jenjang_smk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_jenjang_smk`
--

LOCK TABLES `satria_jenjang_smk` WRITE;
/*!40000 ALTER TABLE `satria_jenjang_smk` DISABLE KEYS */;
INSERT INTO `satria_jenjang_smk` VALUES ('I','Satu'),('II','Dua'),('III','Tiga'),('IV','Empat'),('V','Lima'),('VI','Enam');
/*!40000 ALTER TABLE `satria_jenjang_smk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_jurusan`
--

DROP TABLE IF EXISTS `satria_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_jurusan` (
  `jurusan_kd` varchar(10) NOT NULL,
  `jurusan_nama` varchar(100) NOT NULL,
  `foto_jurusan` varchar(255) NOT NULL,
  `prospek_jurusan` text NOT NULL,
  PRIMARY KEY (`jurusan_kd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_jurusan`
--

LOCK TABLES `satria_jurusan` WRITE;
/*!40000 ALTER TABLE `satria_jurusan` DISABLE KEYS */;
INSERT INTO `satria_jurusan` VALUES ('AK','Akuntansi','uploads/gallery/w_171230114203.jpg','dapat bekerja sebagai akuntan di kantor-kantor'),('AP','Akademik Perkantoran','uploads/gallery/Home_171228111438.png','dapat bekerja sebagai admin, sekertaris di kantor-kantor'),('MM','Multimedia','uploads/gallery/w_171230114203.jpg','dapat mendesign sebuah produk'),('PM','Pemasaran','uploads/gallery/Home_171228111438.png','dapat menguasai pasaran nasional maupun internasional'),('TKJ','Tekhnik Konputer dan Jaringan','uploads/gallery/w_171230114203.jpg','dapat memahami keadaan komputer beserta jaringan komputer');
/*!40000 ALTER TABLE `satria_jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_kalender_akademik`
--

DROP TABLE IF EXISTS `satria_kalender_akademik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_kalender_akademik` (
  `id_kalender_akademik` int(11) NOT NULL AUTO_INCREMENT,
  `file_kalender_akademik` varchar(255) NOT NULL,
  `jenjang_id` int(11) NOT NULL,
  PRIMARY KEY (`id_kalender_akademik`),
  KEY `jenjang_id` (`jenjang_id`),
  CONSTRAINT `satria_kalender_akademik_ibfk_1` FOREIGN KEY (`jenjang_id`) REFERENCES `satria_jenjang` (`jenjang_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_kalender_akademik`
--

LOCK TABLES `satria_kalender_akademik` WRITE;
/*!40000 ALTER TABLE `satria_kalender_akademik` DISABLE KEYS */;
INSERT INTO `satria_kalender_akademik` VALUES (1,'uploads/jadwal/kalender akademik_171228114134.jpg',1),(2,'uploads/jadwal/kalender akademik_171228114144.jpg',2),(3,'uploads/jadwal/kalender akademik_171228114151.jpg',3);
/*!40000 ALTER TABLE `satria_kalender_akademik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_kategori_info`
--

DROP TABLE IF EXISTS `satria_kategori_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_kategori_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_kategori_info`
--

LOCK TABLES `satria_kategori_info` WRITE;
/*!40000 ALTER TABLE `satria_kategori_info` DISABLE KEYS */;
INSERT INTO `satria_kategori_info` VALUES (1,'Lowongan Kerja'),(2,'Bidik Misi'),(3,'SBMPTN'),(4,'Kelulusan'),(5,'Ujian');
/*!40000 ALTER TABLE `satria_kategori_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_kelas_jurusan`
--

DROP TABLE IF EXISTS `satria_kelas_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_kelas_jurusan` (
  `id_kelas_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `kd_jenjang_smk` varchar(10) NOT NULL,
  `kelas_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_kelas_jurusan`),
  KEY `kd_jenjang_smk` (`kd_jenjang_smk`),
  KEY `kelas_id` (`kelas_id`),
  CONSTRAINT `satria_kelas_jurusan_ibfk_1` FOREIGN KEY (`kd_jenjang_smk`) REFERENCES `satria_jenjang_smk` (`kd_jenjang_smk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_kelas_jurusan`
--

LOCK TABLES `satria_kelas_jurusan` WRITE;
/*!40000 ALTER TABLE `satria_kelas_jurusan` DISABLE KEYS */;
INSERT INTO `satria_kelas_jurusan` VALUES (1,'II','B'),(2,'II','A'),(3,'III','B'),(4,'III','A'),(5,'I','B'),(6,'I','A'),(7,'IV','A'),(8,'IV','B'),(9,'V','A'),(10,'V','B'),(11,'VI','A'),(12,'VI','B');
/*!40000 ALTER TABLE `satria_kelas_jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_mi_silabus`
--

DROP TABLE IF EXISTS `satria_mi_silabus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_mi_silabus` (
  `silabus_id` int(11) NOT NULL AUTO_INCREMENT,
  `silabus_nm_pel` varchar(50) NOT NULL,
  `silabus_kls_1` varchar(255) NOT NULL,
  `silabus_kls_2` varchar(255) NOT NULL,
  `silabus_kls_3` varchar(255) NOT NULL,
  `silabus_kls_4` varchar(255) NOT NULL,
  `silabus_kls_5` varchar(255) NOT NULL,
  `silabus_kls_6` varchar(255) NOT NULL,
  `tahun_ajar` varchar(10) NOT NULL,
  PRIMARY KEY (`silabus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_mi_silabus`
--

LOCK TABLES `satria_mi_silabus` WRITE;
/*!40000 ALTER TABLE `satria_mi_silabus` DISABLE KEYS */;
/*!40000 ALTER TABLE `satria_mi_silabus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_mts_info`
--

DROP TABLE IF EXISTS `satria_mts_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_mts_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_kategori` int(11) NOT NULL,
  `info_title` varchar(255) NOT NULL,
  `info_desc` text NOT NULL,
  `info_date` date NOT NULL,
  `info_link` varchar(100) NOT NULL,
  `info_file` varchar(255) NOT NULL,
  `info_ext` varchar(11) NOT NULL,
  PRIMARY KEY (`info_id`),
  KEY `info_kategori` (`info_kategori`),
  CONSTRAINT `satria_mts_info_ibfk_1` FOREIGN KEY (`info_kategori`) REFERENCES `satria_kategori_info` (`info_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_mts_info`
--

LOCK TABLES `satria_mts_info` WRITE;
/*!40000 ALTER TABLE `satria_mts_info` DISABLE KEYS */;
INSERT INTO `satria_mts_info` VALUES (1,1,'Lowongan Kerja PT Maju Mundur','<p>Ini adalah informasi Lowongan kerja di PT Maju Mundur Terus</p>','2018-01-30','http://pramborsfm.com/streaming/','uploads/lowongan/dummy9_180105114712.jpg','0'),(2,3,'SBMPTN 2018','<p>Ini adalah informasi tentang SBMPTN 2018</p>','2018-01-31','https://www.google.co.id/','uploads/lowongan/dummy12_180106125444.jpg','0'),(3,1,'Lowongan Kerja PT Maju Mundur','<p>Ini adaah Informasi tentang Lowongan Kerja di PT Maju Mundur Sejahtera</p>','2018-01-31','http://pramborsfm.com/streaming/','uploads/lowongan/dummy5_180106011159.jpg','0'),(4,4,'Info Kelulusan 2018','<p>Ini adalah&nbsp;Info Lulusan 2018</p>','2018-01-26','','uploads/lowongan/dummy1_180106042213.jpg','');
/*!40000 ALTER TABLE `satria_mts_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_price`
--

DROP TABLE IF EXISTS `satria_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_real` int(20) NOT NULL,
  `jenjang_id` int(11) NOT NULL,
  `fasilitas_id` int(11) NOT NULL,
  PRIMARY KEY (`price_id`),
  KEY `jenjang_id` (`jenjang_id`),
  KEY `fasilitas_id` (`fasilitas_id`),
  CONSTRAINT `satria_price_ibfk_1` FOREIGN KEY (`jenjang_id`) REFERENCES `satria_jenjang` (`jenjang_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `satria_price_ibfk_2` FOREIGN KEY (`fasilitas_id`) REFERENCES `satria_fasilitas` (`fasilitas_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_price`
--

LOCK TABLES `satria_price` WRITE;
/*!40000 ALTER TABLE `satria_price` DISABLE KEYS */;
INSERT INTO `satria_price` VALUES (4,200000,2,4),(5,200000,2,5),(6,200000,2,6),(35,1000000,3,2),(36,1000000,3,3),(37,1000000,3,4),(38,1000000,3,5),(39,1000000,3,6),(43,500000,1,2),(44,500000,1,3),(45,500000,1,4),(46,500000,1,5);
/*!40000 ALTER TABLE `satria_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_smk_info`
--

DROP TABLE IF EXISTS `satria_smk_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_smk_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_kategori` int(11) NOT NULL,
  `info_title` varchar(255) NOT NULL,
  `info_desc` text NOT NULL,
  `info_date` date NOT NULL,
  `info_link` varchar(100) NOT NULL,
  `info_file` varchar(255) NOT NULL,
  `info_ext` varchar(11) NOT NULL,
  PRIMARY KEY (`info_id`),
  KEY `info_kategori` (`info_kategori`),
  CONSTRAINT `satria_smk_info_ibfk_1` FOREIGN KEY (`info_kategori`) REFERENCES `satria_kategori_info` (`info_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_smk_info`
--

LOCK TABLES `satria_smk_info` WRITE;
/*!40000 ALTER TABLE `satria_smk_info` DISABLE KEYS */;
INSERT INTO `satria_smk_info` VALUES (2,1,'Lowongan Kerja PT Maju Mundur','<p>Ini adalah informasi Lowongan kerja di PT Maju Mundur Terus</p>','2018-01-30','http://pramborsfm.com/streaming/','uploads/lowongan/dummy9_180105114712.jpg','0'),(3,3,'SBMPTN 2018','<p>Ini adalah informasi tentang SBMPTN 2018</p>','2018-01-31','https://www.google.co.id/','uploads/lowongan/dummy12_180106125444.jpg','0'),(4,1,'Lowongan Kerja PT Maju Mundur','<p>Ini adaah Informasi tentang Lowongan Kerja di PT Maju Mundur Sejahtera</p>','2018-01-31','http://pramborsfm.com/streaming/','uploads/lowongan/dummy5_180106011159.jpg','0'),(9,4,'Info Kelulusan 2018','<p>Ini adalah&nbsp;Info Lulusan 2018</p>','2018-01-26','','uploads/lowongan/dummy1_180106042213.jpg','');
/*!40000 ALTER TABLE `satria_smk_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_smk_jadwal`
--

DROP TABLE IF EXISTS `satria_smk_jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_smk_jadwal` (
  `jadwal_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas_jurusan` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tahun_ajar` varchar(25) NOT NULL,
  PRIMARY KEY (`jadwal_id`),
  KEY `id_kelas_jurusan` (`id_kelas_jurusan`),
  CONSTRAINT `satria_smk_jadwal_ibfk_1` FOREIGN KEY (`id_kelas_jurusan`) REFERENCES `satria_kelas_jurusan` (`id_kelas_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_smk_jadwal`
--

LOCK TABLES `satria_smk_jadwal` WRITE;
/*!40000 ALTER TABLE `satria_smk_jadwal` DISABLE KEYS */;
INSERT INTO `satria_smk_jadwal` VALUES (6,1,'uploads/jadwal/jadwal-pelajaran_171228114409.jpg','2017/2018'),(7,2,'uploads/jadwal/jadwal-pelajaran_171228114433.jpg','2017/2018'),(8,3,'uploads/jadwal/jadwal-pelajaran_171228114501.jpg','2017/2018'),(9,4,'uploads/jadwal/jadwal-pelajaran_171228114512.jpg','2017/2018'),(10,5,'uploads/jadwal/jadwal-pelajaran_171228114523.jpg','2017/2018'),(11,11,'uploads/jadwal/jadwal-pelajaran_171228114409.jpg','2017/2018'),(12,6,'uploads/jadwal/jadwal-pelajaran_171228114409_180120110429.jpg','2017/2018'),(13,12,'uploads/jadwal/jadwal-pelajaran_171228114409_180120110429_180120110819.jpg','2017/2018'),(14,9,'uploads/jadwal/jadwal-pelajaran_171228114409_180120110429_180120110819_180120110835.jpg','2017/2018'),(15,10,'uploads/jadwal/jadwal-pelajaran_171228114409_180120110429_180120110819_180120110835_thumb_180120110849.jpg','2017/2018'),(16,7,'uploads/jadwal/jadwal-pelajaran_171228114409_180120110429_180120110819_180120110835_thumb_180120110908.jpg','2017/2018'),(17,8,'uploads/jadwal/jadwal-pelajaran_171228114409_180120110429_180120110819_180120110835_thumb_180120110849_180120110921.jpg','2017/2018');
/*!40000 ALTER TABLE `satria_smk_jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_smk_kelas`
--

DROP TABLE IF EXISTS `satria_smk_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_smk_kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `wali_kelas` varchar(100) NOT NULL,
  `kelas_id_b` varchar(45) NOT NULL,
  PRIMARY KEY (`kelas_id`,`kelas_id_b`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_smk_kelas`
--

LOCK TABLES `satria_smk_kelas` WRITE;
/*!40000 ALTER TABLE `satria_smk_kelas` DISABLE KEYS */;
INSERT INTO `satria_smk_kelas` VALUES (2,'Argus','A'),(3,'Laila','B');
/*!40000 ALTER TABLE `satria_smk_kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_smk_materi`
--

DROP TABLE IF EXISTS `satria_smk_materi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_smk_materi` (
  `materi_id` int(11) NOT NULL AUTO_INCREMENT,
  `materi_ajar` varchar(255) NOT NULL,
  `kd_jenjang_smk` varchar(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_vii` varchar(255) NOT NULL,
  `file_ix` varchar(255) NOT NULL,
  `tahun_ajar` varchar(20) NOT NULL,
  PRIMARY KEY (`materi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_smk_materi`
--

LOCK TABLES `satria_smk_materi` WRITE;
/*!40000 ALTER TABLE `satria_smk_materi` DISABLE KEYS */;
INSERT INTO `satria_smk_materi` VALUES (4,'Matematika','','uploads/materi/123123123-DECRYPTED-19069SILABUS-MATEMATIKA-SMK-X-(3)(1)_180119115445.pdf','uploads/materi/7777-DECRYPTED-8832pendataan-website-baru_180119115445.pdf','uploads/materi/0000-DECRYPTED-32322pendataan-website-baru_180119115445.pdf','2017/2018');
/*!40000 ALTER TABLE `satria_smk_materi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_smk_silabus`
--

DROP TABLE IF EXISTS `satria_smk_silabus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_smk_silabus` (
  `silabus_id` int(11) NOT NULL AUTO_INCREMENT,
  `silabus_nm_pel` varchar(255) NOT NULL,
  `silabus_kls_x` varchar(255) DEFAULT NULL,
  `silabus_kls_xi` varchar(255) DEFAULT NULL,
  `silabus_kls_xii` varchar(255) DEFAULT NULL,
  `silabus_tahun_ajar` varchar(11) NOT NULL,
  `silabus_kls_iv` varchar(255) DEFAULT NULL,
  `silabus_kls_v` varchar(255) DEFAULT NULL,
  `silabus_kls_vi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`silabus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_smk_silabus`
--

LOCK TABLES `satria_smk_silabus` WRITE;
/*!40000 ALTER TABLE `satria_smk_silabus` DISABLE KEYS */;
INSERT INTO `satria_smk_silabus` VALUES (1,'Matematika','uploads/silabus/SILABUSMATEMATIKASMKX(1)_171229022809.pdf','uploads/silabus/SILABUSMATEMATIKASMKX(2)_171229022809.pdf','uploads/silabus/SILABUSMATEMATIKASMKX(3)_171229022809.pdf','2017/2018','uploads/silabus/SILABUSMATEMATIKASMKX(2)_171229022809.pdf','uploads/silabus/SILABUSMATEMATIKASMKX(2)_171229022809.pdf','uploads/silabus/SILABUSMATEMATIKASMKX(2)_171229022809.pdf');
/*!40000 ALTER TABLE `satria_smk_silabus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_socmed`
--

DROP TABLE IF EXISTS `satria_socmed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_socmed` (
  `socmed_id` int(11) NOT NULL AUTO_INCREMENT,
  `socmed_nama` varchar(255) NOT NULL,
  `socmed_value` varchar(255) NOT NULL,
  `jenjang_id` int(11) NOT NULL,
  PRIMARY KEY (`socmed_id`),
  KEY `jenjang_id` (`jenjang_id`),
  CONSTRAINT `satria_socmed_ibfk_1` FOREIGN KEY (`jenjang_id`) REFERENCES `satria_jenjang` (`jenjang_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_socmed`
--

LOCK TABLES `satria_socmed` WRITE;
/*!40000 ALTER TABLE `satria_socmed` DISABLE KEYS */;
INSERT INTO `satria_socmed` VALUES (1,'Facebook','http://facebook.com/',1),(2,'Twitter','http://twitter.com',1),(3,'Instagram','http://instagram.com',1),(4,'Facebook','http://facebook.com/',2),(5,'Twitter','http://twitter.com',2),(6,'Instagram','http://instagram.com',2),(7,'Facebook','http://facebook.com/',3),(8,'Twitter','http://twitter.com',3),(9,'Instagram','http://instagram.com',3);
/*!40000 ALTER TABLE `satria_socmed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_struktur`
--

DROP TABLE IF EXISTS `satria_struktur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_struktur` (
  `struktur_id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `jenjang_id` int(11) NOT NULL,
  PRIMARY KEY (`struktur_id`),
  KEY `satria_struktur_ibfk_1` (`jenjang_id`),
  CONSTRAINT `satria_struktur_ibfk_1` FOREIGN KEY (`jenjang_id`) REFERENCES `satria_jenjang` (`jenjang_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_struktur`
--

LOCK TABLES `satria_struktur` WRITE;
/*!40000 ALTER TABLE `satria_struktur` DISABLE KEYS */;
INSERT INTO `satria_struktur` VALUES (1,'uploads/struktur/struktur-organisasi_171229122301.PNG',1),(2,'uploads/struktur/struktur-organisasi_171229122308.PNG',2),(3,'uploads/struktur/struktur-organisasi_171229122314.PNG',3);
/*!40000 ALTER TABLE `satria_struktur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_testi`
--

DROP TABLE IF EXISTS `satria_testi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_testi` (
  `testi_id` int(11) NOT NULL AUTO_INCREMENT,
  `testi_nama` varchar(50) NOT NULL,
  `testi_testimonial` text NOT NULL,
  `testi_pict` varchar(255) NOT NULL,
  `jenjang_id` int(11) NOT NULL,
  PRIMARY KEY (`testi_id`),
  KEY `jenjang_id` (`jenjang_id`),
  CONSTRAINT `satria_testi_ibfk_1` FOREIGN KEY (`jenjang_id`) REFERENCES `satria_jenjang` (`jenjang_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_testi`
--

LOCK TABLES `satria_testi` WRITE;
/*!40000 ALTER TABLE `satria_testi` DISABLE KEYS */;
INSERT INTO `satria_testi` VALUES (1,'Mahfud MD','Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat viverra. Ut dictum turpis in ipsum sagittis finibus.','http://lorempixel.com/74/74',1),(2,'Setya Novanto','Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat viverra. Ut dictum turpis in ipsum sagittis finibus.','http://lorempixel.com/74/74',2),(3,'Anas Urbaningrum','Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat viverra. Ut dictum turpis in ipsum sagittis finibus.','http://lorempixel.com/74/74',3);
/*!40000 ALTER TABLE `satria_testi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satria_tipe`
--

DROP TABLE IF EXISTS `satria_tipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satria_tipe` (
  `tipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tipe` varchar(255) NOT NULL,
  `desc_tipe` varchar(255) NOT NULL,
  PRIMARY KEY (`tipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satria_tipe`
--

LOCK TABLES `satria_tipe` WRITE;
/*!40000 ALTER TABLE `satria_tipe` DISABLE KEYS */;
INSERT INTO `satria_tipe` VALUES (2,'prestasi','Prestasi Siswa dan Sekolah'),(3,'extra','extrakurikuler'),(4,'lingkungan','Lingkuhan di Sekolah'),(5,'osis','Oraganisasi Siswa Intra Sekolah');
/*!40000 ALTER TABLE `satria_tipe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(200) NOT NULL,
  `desc_prod` varchar(200) NOT NULL,
  `price_prod` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(100) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `extention2` varchar(100) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `extention3` varchar(100) NOT NULL,
  `file4` varchar(255) NOT NULL,
  `extention4` varchar(100) NOT NULL,
  `file5` varchar(255) NOT NULL,
  `extention5` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
INSERT INTO `shop` VALUES (2,'handphone','handphone asus murah banget',2000000,'true','','true','','true','','true','','true','',878787887),(3,'','',0,'true','','true','','true','','true','','true','',0);
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socmed`
--

DROP TABLE IF EXISTS `socmed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socmed` (
  `socmed_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `socmed_arrangement` tinyint(2) NOT NULL,
  `socmed_name` varchar(50) NOT NULL,
  `socmed_link` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `icon_class` varchar(30) NOT NULL,
  `author` smallint(5) NOT NULL,
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`socmed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socmed`
--

LOCK TABLES `socmed` WRITE;
/*!40000 ALTER TABLE `socmed` DISABLE KEYS */;
INSERT INTO `socmed` VALUES (1,1,'Facebook','http://facebook.com3','','','e169',0,'2015-10-24 05:21:01'),(2,2,'Twitter','https://twitter.com','','','e16d',0,'2015-09-16 04:16:15'),(3,3,'Instagram','http://instagram','','','',0,'2016-01-18 06:10:27');
/*!40000 ALTER TABLE `socmed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsors` (
  `id_sponsors` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `desc_brand` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `ext` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sponsors`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsors`
--

LOCK TABLES `sponsors` WRITE;
/*!40000 ALTER TABLE `sponsors` DISABLE KEYS */;
INSERT INTO `sponsors` VALUES (0,'asd','asd','uploads/image/about/1_160319093510.jpg','jpg');
/*!40000 ALTER TABLE `sponsors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_administrator`
--

DROP TABLE IF EXISTS `sys_administrator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_administrator` (
  `id_administrator` smallint(5) NOT NULL AUTO_INCREMENT,
  `id_privileges` smallint(2) NOT NULL,
  `nickname` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL COMMENT 'References to id_file',
  `extention` varchar(30) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_administrator`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_administrator`
--

LOCK TABLES `sys_administrator` WRITE;
/*!40000 ALTER TABLE `sys_administrator` DISABLE KEYS */;
INSERT INTO `sys_administrator` VALUES (27,1,'Administrator','admin@demo.com','ca337f991dc9ac372bd24e3bfcb066168758c896','171228095412','uploads/image/1_160309095417.jpg','jpg','2017-12-28 17:54:13'),(28,2,'asd','asd@asd.com','f5ee5196d6dda653e469afb9933963f0ffd0cc15','160312111901','uploads/image/1_160312111901.jpg','jpg','2016-03-12 16:19:01');
/*!40000 ALTER TABLE `sys_administrator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_privileges`
--

DROP TABLE IF EXISTS `sys_privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_privileges` (
  `sys_privileges_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `sys_privileges_name` varchar(30) NOT NULL,
  PRIMARY KEY (`sys_privileges_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_privileges`
--

LOCK TABLES `sys_privileges` WRITE;
/*!40000 ALTER TABLE `sys_privileges` DISABLE KEYS */;
INSERT INTO `sys_privileges` VALUES (1,'root'),(2,'administrator');
/*!40000 ALTER TABLE `sys_privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonial_charter`
--

DROP TABLE IF EXISTS `testimonial_charter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonial_charter` (
  `tc_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `charter_id` smallint(5) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonial_charter`
--

LOCK TABLES `testimonial_charter` WRITE;
/*!40000 ALTER TABLE `testimonial_charter` DISABLE KEYS */;
INSERT INTO `testimonial_charter` VALUES (2,40,'uploads/image/testimonial/charter//author2_160121014511.png','png','Excellent - you found the right boat in the right place at the right time, and managed to change the dates for our convenience - brillian.','Cherish','2016-01-21 06:45:13'),(3,41,'uploads/image/testimonial/charter//author1_160121014144.png','png','Excellent - you found the right boat in the right place at the right time, and managed to change the dates for our convenience - brillian.','Marina Chamer','2016-01-21 06:41:46'),(4,43,'uploads/image/testimonial/charter//author2_160121013948.png','png','Excellent - you found the right boat in the right place at the right time,and managed to change the dates for our convenience - brillian.','Calista','2016-01-21 06:39:49');
/*!40000 ALTER TABLE `testimonial_charter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `u_subscribe`
--

DROP TABLE IF EXISTS `u_subscribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `u_subscribe` (
  `u_subscribe_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `u_subscribe_email` varchar(70) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_subscribe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `u_subscribe`
--

LOCK TABLES `u_subscribe` WRITE;
/*!40000 ALTER TABLE `u_subscribe` DISABLE KEYS */;
INSERT INTO `u_subscribe` VALUES (1,'','hilmysyarif@gmail.com','2016-02-18 19:21:50');
/*!40000 ALTER TABLE `u_subscribe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_setup`
--

DROP TABLE IF EXISTS `web_setup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_setup` (
  `web_setup_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `status` enum('enable','disable') NOT NULL,
  `site_url` varchar(200) NOT NULL,
  `google_analytics` text NOT NULL,
  `file` varchar(225) NOT NULL,
  `extention` varchar(20) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `active_lang` smallint(5) NOT NULL COMMENT 'references to countries_id',
  PRIMARY KEY (`web_setup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_setup`
--

LOCK TABLES `web_setup` WRITE;
/*!40000 ALTER TABLE `web_setup` DISABLE KEYS */;
INSERT INTO `web_setup` VALUES (1,'','http://www.kemprus.com','','uploads/image/logo/logo.png_171229024813.png','png','uploads/image/logo/logo.png_171229024813.png',64);
/*!40000 ALTER TABLE `web_setup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-20 19:12:23
