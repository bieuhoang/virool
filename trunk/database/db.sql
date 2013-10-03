-- MySQL dump 10.13  Distrib 5.1.68, for unknown-linux-gnu (x86_64)
--
-- Host: localhost    Database: luclv_k2i2
-- ------------------------------------------------------
-- Server version	5.1.68-cll-lve

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
-- Table structure for table `category_video`
--

DROP TABLE IF EXISTS `category_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_video`
--

LOCK TABLES `category_video` WRITE;
/*!40000 ALTER TABLE `category_video` DISABLE KEYS */;
INSERT INTO `category_video` (`id`, `category_id`, `video_id`) VALUES (16,2,27),(18,2,28),(19,3,28),(20,14,27),(21,16,27),(38,6,30),(39,12,30),(40,2,31),(41,3,31),(42,2,32),(43,5,33),(44,7,33),(45,9,33),(46,15,33),(47,4,35),(48,5,35),(49,8,35),(50,15,35),(51,2,36),(52,3,36),(53,8,36),(54,11,36),(55,14,36),(56,2,37),(57,3,37),(58,4,37),(59,5,37),(60,8,37),(61,9,37),(62,4,38),(63,5,38),(64,8,38),(65,14,38),(66,14,39),(67,6,40),(68,15,40),(69,16,40),(70,6,41),(71,8,41),(72,9,41),(73,14,41),(74,15,41),(75,6,42),(76,1,43),(77,5,44),(78,6,44),(79,7,44),(80,14,44),(81,15,44),(82,6,45),(83,15,45),(84,4,47),(85,5,47),(86,6,47),(87,7,47),(88,8,47),(89,9,47),(90,14,47),(91,15,47),(92,4,48),(93,5,48),(94,4,49),(95,4,50),(96,4,48),(97,5,48),(98,2,60),(99,5,60),(100,14,60),(101,2,61),(102,3,61),(103,5,61),(104,6,61),(105,7,61),(106,14,61),(107,5,62),(108,14,62),(109,4,63),(110,5,63),(111,3,28);
/*!40000 ALTER TABLE `category_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorys`
--

LOCK TABLES `categorys` WRITE;
/*!40000 ALTER TABLE `categorys` DISABLE KEYS */;
INSERT INTO `categorys` (`id`, `name`) VALUES (1,'All'),(2,'Business & Marketing'),(3,'Creative'),(4,'Film & Music'),(5,'Fun & Entertainment'),(6,'Hobby & Home'),(7,'Life & Health'),(8,'Man'),(9,'Mode'),(10,'Engine'),(11,'News & Politics'),(12,'Sports'),(13,'Technology & Internet'),(14,'Travel & Events'),(15,'Woman'),(16,'Other');
/*!40000 ALTER TABLE `categorys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` (`id`, `name`) VALUES (1,'United States'),(2,'Canada'),(3,'Albania'),(4,'Algeria'),(5,'American Samoa'),(6,'Andorra'),(7,'Angola'),(8,'Anguilla'),(9,'Antarctica'),(10,'Antigua and/or Barbuda'),(11,'Argentina'),(12,'Armenia'),(13,'Aruba'),(14,'Australia'),(15,'Austria'),(16,'Azerbaijan'),(17,'Bahamas'),(18,'Bahrain'),(19,'Bangladesh'),(20,'Barbados'),(21,'Belarus'),(22,'Belgium'),(23,'Belize'),(24,'Benin'),(25,'Bermuda'),(26,'Bhutan'),(27,'Bolivia'),(28,'Bosnia and Herzegovina'),(29,'Botswana'),(30,'Bouvet Island'),(31,'Brazil'),(32,'British lndian Ocean Territory'),(33,'Brunei Darussalam'),(34,'Bulgaria'),(35,'Burkina Faso'),(36,'Burundi'),(37,'Cambodia'),(38,'Cameroon'),(39,'Cape Verde'),(40,'Cayman Islands'),(41,'Central African Republic'),(42,'Chad'),(43,'Chile'),(44,'Christmas Island'),(45,'Cocos (Keeling) Islands'),(46,'Colombia'),(47,'Comoros'),(48,'Congo'),(49,'Cook Islands'),(50,'Costa Rica'),(51,'Croatia (Hrvatska)'),(52,'Cuba'),(53,'Cyprus'),(54,'Czech Republic'),(55,'Denmark'),(56,'Djibouti'),(57,'Dominica'),(58,'Dominican Republic'),(59,'East Timor'),(60,'Ecudaor'),(61,'Egypt'),(62,'El Salvador'),(63,'Equatorial Guinea'),(64,'Eritrea'),(65,'Estonia'),(66,'Ethiopia'),(67,'Falkland Islands (Malvinas)'),(68,'Faroe Islands'),(69,'Fiji'),(70,'Finland'),(71,'France'),(72,'French Guiana'),(73,'French Polynesia'),(74,'French Southern Territories'),(75,'Gabon'),(76,'Gambia'),(77,'Georgia'),(78,'Germany'),(79,'Ghana'),(80,'Gibraltar'),(81,'Greece'),(82,'Greenland'),(83,'Grenada'),(84,'Guadeloupe'),(85,'Guam'),(86,'Guatemala'),(87,'Guinea'),(88,'Guinea-Bissau'),(89,'Guyana'),(90,'Haiti'),(91,'Heard and Mc Donald Islands'),(92,'Honduras'),(93,'Hong Kong'),(94,'Hungary'),(95,'Iceland'),(96,'India'),(97,'Indonesia'),(98,'Iraq'),(99,'Ireland'),(100,'Israel'),(101,'Italy'),(102,'Ivory Coast'),(103,'Jamaica'),(104,'Japan'),(105,'Jordan'),(106,'Kazakhstan'),(107,'Kenya'),(108,'Kiribati'),(109,'Korea Democratic People\\\'s Republic of'),(110,'Korea Republic of'),(111,'Kuwait'),(112,'Kyrgyzstan'),(113,'Lao People\\\'s Democratic Republic'),(114,'Latvia'),(115,'Lebanon'),(116,'Lesotho'),(117,'Liberia'),(118,'Libyan Arab Jamahiriya'),(119,'Liechtenstein'),(120,'Lithuania'),(121,'Luxembourg'),(122,'Macau'),(123,'Macedonia'),(124,'Madagascar'),(125,'Malawi'),(126,'Malaysia'),(127,'Maldives'),(128,'Mali'),(129,'Malta'),(130,'Marshall Islands'),(131,'Martinique'),(132,'Mauritania'),(133,'Mauritius'),(134,'Mayotte'),(135,'Mexico'),(136,'Micronesia Federated States of'),(137,'Moldova Republic of'),(138,'Monaco'),(139,'Mongolia'),(140,'Montserrat'),(141,'Morocco'),(142,'Mozambique'),(143,'Myanmar'),(144,'Namibia'),(145,'Nauru'),(146,'Nepal'),(147,'Netherlands'),(148,'Netherlands Antilles'),(149,'New Caledonia'),(150,'New Zealand'),(151,'Nicaragua'),(152,'Niger'),(153,'Nigeria'),(154,'Niue'),(155,'Norfork Island'),(156,'Northern Mariana Islands'),(157,'Norway'),(158,'Oman'),(159,'Palau'),(160,'Panama'),(161,'Papua New Guinea'),(162,'Paraguay'),(163,'Peru'),(164,'Philippines'),(165,'Pitcairn'),(166,'Poland'),(167,'Portugal'),(168,'Puerto Rico'),(169,'Qatar'),(170,'Reunion'),(171,'Romania'),(172,'Russian Federation'),(173,'Rwanda'),(174,'Saint Kitts and Nevis'),(175,'Saint Lucia'),(176,'Saint Vincent and the Grenadines'),(177,'Samoa'),(178,'San Marino'),(179,'Sao Tome and Principe'),(180,'Saudi Arabia'),(181,'Senegal'),(182,'Seychelles'),(183,'Sierra Leone'),(184,'Singapore'),(185,'Slovakia'),(186,'Slovenia'),(187,'Solomon Islands'),(188,'Somalia'),(189,'South Africa'),(190,'South Georgia South Sandwich Islands'),(191,'Spain'),(192,'Sri Lanka'),(193,'St. Helena'),(194,'St. Pierre and Miquelon'),(195,'Suriname'),(196,'Svalbarn and Jan Mayen Islands'),(197,'Swaziland'),(198,'Sweden'),(199,'Switzerland'),(200,'Taiwan'),(201,'Tajikistan'),(202,'Tanzania United Republic of'),(203,'Thailand'),(204,'Togo'),(205,'Tokelau'),(206,'Tonga'),(207,'Trinidad and Tobago'),(208,'Tunisia'),(209,'Turkey'),(210,'Turkmenistan'),(211,'Turks and Caicos Islands'),(212,'Tuvalu'),(213,'Uganda'),(214,'Ukraine'),(215,'United Arab Emirates'),(216,'United Kingdom'),(217,'United States minor outlying islands'),(218,'Uruguay'),(219,'Uzbekistan'),(220,'Vanuatu'),(221,'Vatican City State'),(222,'Venezuela'),(223,'Vietnam'),(224,'Virigan Islands (British)'),(225,'Virgin Islands (U.S.)'),(226,'Wallis and Futuna Islands'),(227,'Western Sahara'),(228,'Yemen'),(229,'Yugoslavia'),(230,'Zaire'),(231,'Zambia'),(232,'Zimbabwe');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country_video`
--

DROP TABLE IF EXISTS `country_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country_video`
--

LOCK TABLES `country_video` WRITE;
/*!40000 ALTER TABLE `country_video` DISABLE KEYS */;
INSERT INTO `country_video` (`id`, `country_id`, `video_id`) VALUES (15,2,27),(17,2,28),(18,3,28),(19,223,27),(20,232,27),(34,52,30),(35,93,30),(36,2,31),(37,4,31),(38,6,31),(39,1,33),(40,2,33),(41,71,33),(42,101,33),(43,191,33),(44,216,33),(45,2,34),(46,1,36),(47,1,38),(48,2,38),(49,135,38),(50,1,42),(51,2,42),(52,14,42),(53,135,44),(54,1,43),(55,1,45),(56,2,45),(57,14,45),(58,71,45),(59,1,47),(60,2,47),(61,2,49),(62,2,50),(63,191,47),(64,191,44),(65,223,44),(66,1,41),(67,191,41),(68,223,41),(69,96,60),(70,1,61),(71,2,61),(72,216,61),(73,1,62),(74,216,62),(75,3,28);
/*!40000 ALTER TABLE `country_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `can_view` tinyint(4) NOT NULL DEFAULT '0',
  `can_edit` tinyint(4) NOT NULL DEFAULT '0',
  `can_add` tinyint(4) NOT NULL DEFAULT '0',
  `can_delete` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`, `can_view`, `can_edit`, `can_add`, `can_delete`) VALUES (1,'Admin','Administrator',1,1,1,1),(2,'Publisher','Publisher',1,0,0,0),(3,'Advertiser','Advertiser',1,0,0,0),(4,'Member','Member',1,0,0,0);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '' COMMENT 'Slide, Page, Post',
  `name` varchar(250) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sort` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`id`, `user_id`, `created_at`, `message`) VALUES (1,1,'0000-00-00 00:00:00','Building <strong>#330 Wattle Street, Ultimo</strong> updated by <strong>Admin Test</strong>'),(2,1,'0000-00-00 00:00:00','Building <strong>#330 Wattle Street, Ultimo</strong> updated by <strong>Admin Test</strong>'),(3,1,'0000-00-00 00:00:00','Building <strong>#Building test</strong> updated by <strong>Admin Test</strong>'),(4,1,'0000-00-00 00:00:00','Building <strong>#Building test</strong> updated by <strong>Admin Test</strong>'),(5,1,'0000-00-00 00:00:00','Building <strong>#Balmain Shores - Pinnacle</strong> updated by <strong>Admin Test</strong>'),(6,1,'0000-00-00 00:00:00','Building <strong>#Balmain Shores - Pinnacle</strong> updated by <strong>Admin Test</strong>'),(7,1,'0000-00-00 00:00:00','Building <strong>#330 Wattle Street, Ultimo</strong> updated by <strong>Admin Test</strong>'),(8,1,'0000-00-00 00:00:00','Building <strong>#The Bellevue</strong> updated by <strong>Admin Test</strong>'),(9,1,'0000-00-00 00:00:00','Building <strong>#The Bellevue</strong> updated by <strong>Admin Test</strong>'),(10,1,'0000-00-00 00:00:00','Building <strong>#The Bellevue</strong> updated by <strong>Admin Test</strong>'),(11,1,'0000-00-00 00:00:00','Building <strong>#The Bellevue</strong> updated by <strong>Admin Test</strong>'),(12,1,'0000-00-00 00:00:00','Building <strong>#The Bellevue</strong> updated by <strong>Admin Test</strong>'),(13,1,'0000-00-00 00:00:00','Building <strong>#The Bellevue</strong> updated by <strong>Admin Test</strong>');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mysites`
--

DROP TABLE IF EXISTS `mysites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mysites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `platforms` text COLLATE utf8_unicode_ci NOT NULL,
  `countries` text COLLATE utf8_unicode_ci NOT NULL,
  `categorys_id` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `currency` text COLLATE utf8_unicode_ci NOT NULL,
  `currency_conversion_rate` text COLLATE utf8_unicode_ci NOT NULL,
  `callback_url` text COLLATE utf8_unicode_ci NOT NULL,
  `signature_template` text COLLATE utf8_unicode_ci NOT NULL,
  `encryption_method` text COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mysites`
--

LOCK TABLES `mysites` WRITE;
/*!40000 ALTER TABLE `mysites` DISABLE KEYS */;
INSERT INTO `mysites` (`id`, `title`, `url`, `description`, `platforms`, `countries`, `categorys_id`, `keywords`, `currency`, `currency_conversion_rate`, `callback_url`, `signature_template`, `encryption_method`, `images`, `created_at`, `user_id`) VALUES (1,'title','http://serciveoneglobal.com.au','description','[\"2\",\"3\"]','[\"2\",\"3\"]','[\"2\",\"4\"]','keywords','coin','0.01','callback','template','md5','',2013,258),(2,'Harry test','http://mydarling.vn/virool','http://mydarling.vn/virool','2','223','4','','','','Callback Url','','md5','',2013,258),(3,'CultuRead','http://culturead.com','We are a promote video and publications platform.','[\"1\",\"2\",\"3\",\"4\",\"5\"]','','[\"4\",\"7\",\"13\"]','','','','','','plain','',1370465468,267),(5,'','http://hereweare.es','','[\"1\",\"3\"]','[\"1\",\"191\"]','[\"1\"]','','','','','','plain','',2013,270);
/*!40000 ALTER TABLE `mysites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `auto_load` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`id`, `name`, `value`, `auto_load`) VALUES (1,'email_contact','info@virool.com',1),(2,'phone','(415) 735-5560',1),(3,'address','Virool, Inc.\r\n<br>\r\n767 Bryant St.\r\n<br>\r\nSuite 210\r\n<br>\r\nSan Francisco, CA 94107',1);
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `user_id`, `type`, `name`, `content`, `created_at`, `updated_at`, `active`) VALUES (1,1,'page','name of page','content of page','2013-04-17 18:55:34','2013-04-17 18:55:38',1);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platforms`
--

DROP TABLE IF EXISTS `platforms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platforms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platforms`
--

LOCK TABLES `platforms` WRITE;
/*!40000 ALTER TABLE `platforms` DISABLE KEYS */;
INSERT INTO `platforms` (`id`, `title`) VALUES (1,'Blogs/Sites'),(2,'Games'),(3,'Mobile'),(4,'Social Networks'),(5,'Virtual Currency API');
/*!40000 ALTER TABLE `platforms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_images`
--

DROP TABLE IF EXISTS `site_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `urlfull` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_images`
--

LOCK TABLES `site_images` WRITE;
/*!40000 ALTER TABLE `site_images` DISABLE KEYS */;
INSERT INTO `site_images` (`id`, `site_id`, `url`, `urlfull`, `created_at`) VALUES (2,1,'uploads/sites/thumb_4f33b1b25b282fbe4afccf6e737b22f0.jpg','uploads/sites/f09cb258d7e80ac5dc6c3e4eaaec3be4.jpg',1370449163),(3,0,'uploads/sites/thumb_ea6a76fefe5c7d8ac04e129a006bd047.jpg','uploads/sites/5f9a6aa0e37bbbb18e301d89aae770b7.jpg',1370465447),(4,0,'uploads/sites/thumb_13d16ec28422a6342bd2860d159c652f.jpg','uploads/sites/8be9aa7fe93f63f6b4af3b3753462dc2.jpg',1370474522),(5,3,'uploads/sites/thumb_bf0410bb875ddb3c2f73d5a8b9aa2071.jpg','uploads/sites/92b8cdc627159314d0855ed42480b99e.jpg',1371479286);
/*!40000 ALTER TABLE `site_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_logins`
--

DROP TABLE IF EXISTS `user_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_logins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `ip_address` varchar(20) NOT NULL DEFAULT '',
  `user_agent` varchar(50) NOT NULL DEFAULT '',
  `login_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=476 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_logins`
--

LOCK TABLES `user_logins` WRITE;
/*!40000 ALTER TABLE `user_logins` DISABLE KEYS */;
INSERT INTO `user_logins` (`id`, `user_id`, `ip_address`, `user_agent`, `login_time`) VALUES (1,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-21 16:33:57'),(2,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-21 20:37:05'),(3,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-21 21:08:05'),(4,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-21 22:47:31'),(5,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-23 12:14:23'),(6,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-23 18:28:10'),(7,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-23 20:56:03'),(8,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-25 16:37:27'),(9,1,'::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.17 (K','2013-01-28 04:47:40'),(10,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-28 04:57:59'),(11,1,'::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.17 (K','2013-01-28 18:10:46'),(12,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-28 20:08:21'),(13,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-29 01:56:34'),(14,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-29 12:05:55'),(15,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-29 17:03:11'),(16,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-30 17:02:51'),(17,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-01-31 15:28:12'),(18,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-02-04 12:20:00'),(19,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/201001','2013-02-04 19:26:10'),(20,1,'::1','Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/201001','2013-02-27 15:30:29'),(21,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 03:04:49'),(22,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 03:07:21'),(23,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 03:07:54'),(24,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 03:26:39'),(25,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 03:36:15'),(26,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 03:37:00'),(27,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 03:38:15'),(28,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 04:06:26'),(29,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 04:07:15'),(30,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 04:10:00'),(31,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 07:30:48'),(32,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 10:31:18'),(33,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 10:47:39'),(34,100,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 10:55:26'),(35,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 10:56:19'),(36,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-03 17:38:01'),(37,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-05 16:51:22'),(38,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-06 02:45:09'),(39,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-06 15:20:27'),(40,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-07 02:50:53'),(41,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-09 02:41:45'),(42,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 02:53:41'),(43,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 17:01:01'),(44,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 18:40:09'),(45,226,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 18:57:31'),(46,234,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 20:04:53'),(47,235,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 20:15:27'),(48,236,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 20:35:02'),(49,237,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 20:35:51'),(50,237,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 21:19:05'),(51,238,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 23:08:25'),(52,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-10 23:17:29'),(53,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-11 02:41:03'),(54,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-11 12:40:52'),(55,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-11 14:06:53'),(56,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-12 16:33:50'),(57,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-12 17:59:43'),(58,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-13 17:19:59'),(59,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-13 20:50:01'),(60,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 02:39:03'),(61,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 17:19:40'),(62,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:01:36'),(63,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:10:35'),(64,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:18:44'),(65,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:22:19'),(66,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:27:05'),(67,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:27:50'),(68,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:36:45'),(69,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 18:44:09'),(70,243,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-14 19:25:24'),(71,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-15 07:04:15'),(72,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-15 07:48:35'),(73,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-15 11:46:18'),(74,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-15 18:41:15'),(75,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-16 03:01:58'),(76,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-16 07:29:55'),(77,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-16 09:17:18'),(78,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-16 14:06:10'),(79,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-17 07:36:16'),(80,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-17 17:28:02'),(81,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-18 04:11:01'),(82,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-18 09:48:54'),(83,249,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 06:08:01'),(84,250,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 06:12:05'),(85,251,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 10:54:13'),(86,252,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 10:57:18'),(87,253,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 10:58:21'),(88,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 10:59:12'),(89,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 11:05:42'),(90,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 11:06:52'),(91,254,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 11:15:24'),(92,254,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 17:23:29'),(93,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-19 20:15:20'),(94,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-20 02:54:36'),(95,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-20 15:58:58'),(96,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-21 02:49:01'),(97,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-21 15:00:19'),(98,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-22 16:10:16'),(99,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-22 23:41:29'),(100,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-23 12:18:18'),(101,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-23 14:19:28'),(102,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:20.0) Gecko/201001','2013-05-23 23:36:58'),(103,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-24 02:49:30'),(104,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-24 09:44:03'),(105,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-24 14:11:41'),(106,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-24 14:13:01'),(107,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-24 16:40:21'),(108,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-25 02:15:46'),(109,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-25 03:55:38'),(110,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-25 03:58:20'),(111,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-25 04:35:53'),(112,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-25 12:36:54'),(113,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-25 17:40:39'),(114,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 04:49:38'),(115,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 07:25:36'),(116,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 11:57:01'),(117,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:06:38'),(118,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:16'),(119,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:20'),(120,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:21'),(121,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:21'),(122,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:22'),(123,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:22'),(124,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:22'),(125,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:44:28'),(126,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:45:22'),(127,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:51:09'),(128,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:52:30'),(129,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 17:59:30'),(130,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 18:03:02'),(131,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 18:04:54'),(132,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 18:11:36'),(133,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-26 19:12:04'),(134,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-27 02:36:50'),(135,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-27 04:25:04'),(136,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-27 04:25:04'),(137,264,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-28 18:31:46'),(138,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-28 19:31:31'),(139,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-28 19:46:14'),(140,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-29 11:36:23'),(141,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 03:18:25'),(142,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 03:19:17'),(143,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 03:40:37'),(144,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 18:28:27'),(145,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 19:31:15'),(146,0,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 19:55:51'),(147,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 20:50:27'),(148,264,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 21:46:49'),(149,263,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 22:16:38'),(150,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-05-30 22:17:37'),(151,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-01 16:35:05'),(152,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 01:23:12'),(153,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 01:24:39'),(154,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 09:23:45'),(155,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 09:30:32'),(156,264,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 13:04:08'),(157,264,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 13:04:22'),(158,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 13:07:37'),(159,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 16:15:29'),(160,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-02 17:26:17'),(161,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-03 02:54:43'),(162,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-03 14:04:23'),(163,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-03 15:23:24'),(164,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-04 00:04:19'),(165,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-04 01:27:28'),(166,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-04 14:23:01'),(167,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-04 16:50:15'),(168,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 00:19:38'),(169,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 00:54:10'),(170,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 00:56:44'),(171,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 01:33:22'),(172,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 01:33:50'),(173,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 02:42:13'),(174,258,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 07:26:24'),(175,1,'::1','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 17:03:57'),(176,264,'1.55.81.149','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-05 22:47:47'),(177,266,'1.55.81.149','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-05 23:07:05'),(178,258,'1.55.81.149','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/201001','2013-06-05 23:10:05'),(179,258,'1.55.117.176','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-05 23:12:24'),(180,1,'1.55.81.149','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-05 23:15:54'),(181,266,'1.55.117.176','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-06 00:44:54'),(182,258,'1.55.117.176','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-06 01:02:52'),(183,266,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-06 03:03:32'),(184,267,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-06 03:42:12'),(185,268,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-06 03:56:41'),(186,266,'1.55.81.149','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-06 06:20:51'),(187,258,'1.55.81.149','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/201001','2013-06-06 06:21:32'),(188,1,'1.55.81.149','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-06 06:43:09'),(189,1,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-06 07:01:03'),(190,266,'118.70.184.167','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-06 07:57:49'),(191,266,'118.70.184.167','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-06 07:58:48'),(192,267,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-06 15:26:55'),(193,268,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-06 15:28:52'),(194,1,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-06 21:38:52'),(195,266,'1.55.34.101','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-07 04:44:32'),(196,268,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-07 05:29:54'),(197,1,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-07 21:54:43'),(198,266,'1.55.91.250','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-07 22:06:17'),(199,1,'1.55.91.250','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-07 22:13:02'),(200,1,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-07 22:51:13'),(201,1,'118.71.148.9','Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (K','2013-06-07 23:04:43'),(202,1,'1.55.108.157','Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/201001','2013-06-07 23:09:08'),(203,1,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-07 23:16:53'),(204,268,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-08 05:27:06'),(205,267,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-08 08:29:26'),(206,268,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-08 17:58:50'),(207,1,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-09 04:16:13'),(208,267,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-09 04:19:39'),(209,268,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-10 08:16:59'),(210,267,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-11 01:12:54'),(211,1,'81.61.34.204','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-11 01:15:08'),(212,268,'82.158.2.203','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-11 16:28:45'),(213,1,'82.158.2.203','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-11 22:03:23'),(214,267,'82.158.2.203','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-11 22:31:38'),(215,268,'82.158.2.203','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-11 22:32:56'),(216,268,'82.158.2.203','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-12 03:03:05'),(217,267,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-12 17:18:03'),(218,268,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-12 17:18:46'),(219,266,'1.55.91.157','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-12 20:42:05'),(220,268,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-12 21:00:37'),(221,266,'1.55.91.157','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/201001','2013-06-12 21:26:40'),(222,268,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-13 04:57:52'),(223,266,'1.55.91.157','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/201001','2013-06-13 06:52:42'),(224,266,'1.55.91.157','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-13 06:57:00'),(225,268,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-13 16:10:35'),(226,266,'1.55.91.157','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-13 22:48:19'),(227,1,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-14 08:12:13'),(228,267,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-14 23:04:58'),(229,267,'1.55.91.143','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-14 23:09:47'),(230,267,'123.18.228.88','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-06-15 16:09:52'),(231,1,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-15 22:53:40'),(232,267,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-15 23:24:42'),(233,267,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-16 20:57:52'),(234,1,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-16 21:06:53'),(235,267,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-17 21:25:27'),(236,1,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-17 21:30:41'),(237,1,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-17 23:41:45'),(238,1,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-18 02:31:12'),(239,267,'213.37.173.91','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-18 05:49:55'),(240,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-18 18:17:32'),(241,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-18 18:18:51'),(242,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-18 19:57:38'),(243,268,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-18 20:08:55'),(244,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-18 23:52:05'),(245,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-19 04:19:27'),(246,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-19 17:27:57'),(247,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-20 04:54:04'),(248,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-20 17:01:11'),(249,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-20 22:59:20'),(250,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-21 21:01:00'),(251,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-21 21:03:47'),(252,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-23 17:14:50'),(253,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-24 03:41:01'),(254,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-24 03:52:46'),(255,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-25 23:13:33'),(256,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-26 17:35:00'),(257,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-27 08:28:50'),(258,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-27 08:41:04'),(259,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-27 08:42:29'),(260,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-27 15:55:48'),(261,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-27 20:35:29'),(262,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-28 21:49:15'),(263,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-28 21:52:30'),(264,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 00:09:19'),(265,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 00:11:36'),(266,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 05:25:06'),(267,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 05:26:39'),(268,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 05:28:19'),(269,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 15:25:18'),(270,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 15:29:07'),(271,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-29 23:49:46'),(272,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-30 04:47:42'),(273,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-06-30 07:20:54'),(274,258,'1.55.112.209','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-06-30 19:55:43'),(275,1,'1.55.112.209','Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (K','2013-06-30 19:56:34'),(276,258,'1.55.112.209','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-01 05:38:13'),(277,258,'1.55.90.103','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/201001','2013-07-01 21:36:47'),(278,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-01 22:53:20'),(279,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-01 23:01:05'),(280,258,'1.55.112.209','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-01 23:06:31'),(281,258,'1.55.90.103','Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/201001','2013-07-01 23:08:32'),(282,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-02 01:27:34'),(283,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-02 01:32:04'),(284,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-02 17:00:09'),(285,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-02 22:06:49'),(286,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-03 17:38:39'),(287,268,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-03 18:36:20'),(288,269,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-03 21:48:51'),(289,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-04 04:40:20'),(290,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-04 08:01:14'),(291,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-05 21:49:06'),(292,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-05 22:27:06'),(293,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-06 17:33:54'),(294,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-06 21:29:06'),(295,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-08 16:47:17'),(296,258,'118.71.141.34','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-11 00:11:50'),(297,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-11 04:38:37'),(298,268,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-11 04:49:34'),(299,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-11 21:34:42'),(300,258,'1.55.221.102','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-11 21:47:00'),(301,258,'1.55.91.32','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-11 21:47:05'),(302,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-12 21:23:52'),(303,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-12 21:27:29'),(304,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-13 03:42:29'),(305,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-14 00:11:33'),(306,258,'58.187.126.136','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-14 21:50:24'),(307,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-15 00:14:32'),(308,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-15 07:04:35'),(309,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-15 07:09:36'),(310,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-15 08:14:23'),(311,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-15 22:11:16'),(312,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-15 22:18:10'),(313,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-16 07:31:19'),(314,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-16 07:34:20'),(315,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-18 07:29:13'),(316,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-19 22:54:34'),(317,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-20 20:39:32'),(318,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-20 21:18:41'),(319,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-21 20:50:43'),(320,268,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-21 20:53:49'),(321,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-22 21:30:38'),(322,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-22 21:34:15'),(323,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-23 00:33:45'),(324,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-23 16:42:51'),(325,258,'118.70.184.167','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-23 17:45:09'),(326,258,'42.113.69.175','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-23 17:55:32'),(327,1,'118.70.184.167','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-23 18:02:43'),(328,1,'42.113.69.175','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-23 18:07:50'),(329,1,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-23 20:38:21'),(330,258,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-23 20:39:25'),(331,1,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-23 21:45:19'),(332,1,'42.113.69.175','Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (K','2013-07-23 21:56:15'),(333,264,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-23 22:34:12'),(334,264,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-23 22:44:30'),(335,1,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-23 22:46:56'),(336,258,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-23 22:47:32'),(337,1,'42.113.69.175','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-23 22:49:06'),(338,258,'1.55.90.235','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-23 23:20:02'),(339,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-23 23:46:28'),(340,268,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-23 23:56:55'),(341,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-23 23:57:54'),(342,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 00:00:44'),(343,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 00:02:52'),(344,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 00:18:29'),(345,264,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 20:29:28'),(346,1,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 20:29:47'),(347,258,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-24 20:30:24'),(348,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 20:47:16'),(349,1,'42.113.166.232','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-24 20:48:53'),(350,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 20:49:26'),(351,1,'42.113.166.232','Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (K','2013-07-24 20:50:49'),(352,258,'42.113.166.232','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-24 20:51:15'),(353,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 20:51:36'),(354,264,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 20:55:53'),(355,1,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 20:57:02'),(356,264,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 21:12:17'),(357,1,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 21:14:58'),(358,264,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 21:19:32'),(359,1,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 21:19:44'),(360,1,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 21:23:30'),(361,264,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-24 21:24:34'),(362,258,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-24 21:39:58'),(363,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 22:55:23'),(364,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 22:59:31'),(365,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 23:19:51'),(366,268,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 23:23:28'),(367,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 23:27:47'),(368,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 23:29:32'),(369,267,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 23:32:00'),(370,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-24 23:34:45'),(371,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-25 07:01:50'),(372,1,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-25 21:25:54'),(373,267,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-25 21:49:13'),(374,270,'1.55.91.2','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K','2013-07-25 21:49:56'),(375,268,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-25 23:17:15'),(376,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-25 23:18:27'),(377,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-26 21:11:36'),(378,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-27 17:41:19'),(379,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-27 22:22:38'),(380,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-27 22:26:48'),(381,271,'42.113.197.120','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-07-28 18:03:30'),(382,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-29 01:02:24'),(383,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-30 01:11:21'),(384,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-30 19:20:15'),(385,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-30 21:40:17'),(386,1,'42.113.207.172','Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/201001','2013-07-31 21:23:26'),(387,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-07-31 21:40:16'),(388,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-01 17:05:52'),(389,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-02 04:48:12'),(390,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-02 18:55:35'),(391,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-04 01:04:14'),(392,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-06 00:46:59'),(393,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-06 21:13:21'),(394,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-07 17:13:42'),(395,1,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-08 09:22:27'),(396,258,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-08 09:25:40'),(397,1,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-08 09:46:42'),(398,258,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-08 10:08:43'),(399,0,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-08 11:10:02'),(400,1,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-08 11:12:18'),(401,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-09 00:42:37'),(402,273,'14.161.11.235','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:19.0) Gecko','2013-08-09 12:37:51'),(403,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-09 17:08:58'),(404,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-11 09:02:58'),(405,270,'58.187.37.200','Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/201001','2013-08-11 17:17:43'),(406,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-12 07:42:40'),(407,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-12 21:47:51'),(408,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-13 16:38:37'),(409,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-14 00:35:22'),(410,1,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-14 13:52:30'),(411,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-14 17:08:15'),(412,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-14 23:27:31'),(413,1,'42.116.19.228','Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (','2013-08-15 14:28:40'),(414,267,'42.116.19.228','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:23.0) Gec','2013-08-15 14:30:52'),(415,270,'42.116.19.228','Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (','2013-08-15 14:32:19'),(416,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-15 16:57:51'),(417,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-16 22:39:03'),(418,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-18 06:11:10'),(419,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-20 07:04:47'),(420,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-21 17:30:44'),(421,263,'1.55.15.93','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-08-22 19:22:05'),(422,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-22 19:41:53'),(423,258,'118.70.184.167','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-08-23 09:57:34'),(424,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-24 22:08:26'),(425,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-25 17:29:20'),(426,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-26 06:15:03'),(427,270,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-26 16:51:53'),(428,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-27 17:45:37'),(429,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-27 17:46:21'),(430,1,'213.37.53.47','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-27 22:10:00'),(431,1,'82.158.224.154','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-28 20:40:49'),(432,1,'213.37.173.34','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-29 23:51:17'),(433,1,'213.37.53.5','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-30 21:34:04'),(434,1,'213.37.53.5','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-08-31 16:57:25'),(435,267,'42.113.131.169','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-01 21:53:20'),(436,270,'42.113.131.169','Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/53','2013-09-01 21:55:42'),(437,1,'42.113.131.169','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-01 22:48:33'),(438,1,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-02 17:31:04'),(439,270,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-04 00:38:00'),(440,1,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-04 21:37:03'),(441,270,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-05 00:50:28'),(442,1,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-05 17:23:33'),(443,1,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-07 00:17:17'),(444,1,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-09 06:00:04'),(445,1,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-09 20:38:34'),(446,1,'118.71.202.65','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-10 22:54:04'),(447,1,'213.37.203.172','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-11 00:55:34'),(448,1,'213.37.53.189','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-11 18:58:39'),(449,258,'118.71.202.65','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-11 19:07:18'),(450,264,'118.71.202.65','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-11 19:10:55'),(451,1,'123.16.193.145','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-12 08:01:04'),(452,264,'123.16.193.145','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-12 08:01:33'),(453,264,'123.16.193.145','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-12 15:33:29'),(454,1,'213.37.53.189','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-12 17:24:50'),(455,1,'118.71.202.65','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-13 00:02:06'),(456,258,'118.71.202.65','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-13 00:22:45'),(457,1,'118.71.202.65','Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko','2013-09-13 00:25:05'),(458,1,'213.37.53.189','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-13 15:52:19'),(459,270,'213.37.53.189','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-13 17:20:15'),(460,1,'213.37.53.189','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-15 04:51:53'),(461,1,'213.37.53.189','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-15 18:43:19'),(462,1,'213.37.202.62','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-16 08:08:08'),(463,1,'213.37.203.71','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-16 17:13:21'),(464,1,'213.37.203.71','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-17 17:07:31'),(465,1,'213.37.203.71','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-17 23:54:55'),(466,1,'213.37.203.97','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-18 22:10:49'),(467,1,'213.37.255.74','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-19 20:55:16'),(468,1,'213.37.255.74','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-20 22:49:25'),(469,1,'213.37.255.74','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-23 16:43:12'),(470,1,'213.37.255.74','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-24 02:07:52'),(471,1,'82.159.56.7','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-24 20:43:52'),(472,1,'82.158.224.23','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-25 20:46:46'),(473,1,'82.159.56.62','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-26 21:55:48'),(474,1,'82.158.224.92','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-30 00:27:23'),(475,1,'82.158.3.44','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53','2013-09-30 22:12:22');
/*!40000 ALTER TABLE `user_logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_logs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_logs`
--

LOCK TABLES `user_logs` WRITE;
/*!40000 ALTER TABLE `user_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_video`
--

DROP TABLE IF EXISTS `user_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `funds` decimal(11,0) NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Advertiser',
  `encode` text COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Question',
  `sate` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `tokenapi` text COLLATE utf8_unicode_ci NOT NULL,
  `publicshe_id` int(11) NOT NULL DEFAULT '0',
  `lock` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `percent` decimal(11,2) NOT NULL DEFAULT '30.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_video`
--

LOCK TABLES `user_video` WRITE;
/*!40000 ALTER TABLE `user_video` DISABLE KEYS */;
INSERT INTO `user_video` (`id`, `user_id`, `video_id`, `site_id`, `views`, `click`, `funds`, `created_at`, `type`, `encode`, `action`, `sate`, `tokenapi`, `publicshe_id`, `lock`, `percent`) VALUES (5,1,27,0,0,0,'0',1370146927,'Advertiser','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-ac9253fe3919747844197688d4d65c6e',0,'Lock','0.00'),(6,1,28,0,0,0,'0',1370147102,'Advertiser','','Question','Pending','',0,'Lock','0.00'),(8,1,30,0,0,0,'0',1370164109,'Advertiser','','Question','Pending','',0,'Lock','0.00'),(9,264,31,0,0,0,'0',1370171178,'Advertiser','','Question','Pending','',0,'','0.00'),(10,264,32,0,1,0,'0',1370448212,'Advertiser','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-fa97bc6a41f742a7984d035ba5eb6a4b',0,'','0.00'),(11,268,33,0,0,0,'0',1370474616,'Advertiser','','Question','Pending','',0,'','0.00'),(12,266,34,0,0,0,'0',1370474738,'Advertiser','','Question','Pending','',0,'','0.00'),(13,268,35,0,0,0,'0',1370476207,'Advertiser','','Question','Pending','',0,'','0.00'),(14,268,36,0,0,0,'0',1370559725,'Advertiser','','Question','Pending','',0,'','0.00'),(15,268,37,0,0,0,'0',1370560335,'Advertiser','','Question','Pending','',0,'','0.00'),(16,268,38,0,0,0,'0',1370561181,'Advertiser','','Question','Pending','',0,'','0.00'),(17,268,39,0,0,0,'0',1370689475,'Advertiser','','Question','Pending','',0,'','0.00'),(18,268,40,0,0,0,'0',1371035739,'Advertiser','','Question','Pending','',0,'','0.00'),(19,268,41,0,0,0,'0',1371048265,'Advertiser','','Question','Pending','',0,'','0.00'),(20,268,42,0,0,0,'0',1371048668,'Advertiser','','Question','Pending','',0,'','0.00'),(21,1,43,0,0,0,'0',1372020669,'Advertiser','','Action','Run','3536216fecbf795b6699da93a654aa82-9b4de214a57d18efab6577d7b1ec5711',0,'Lock','0.00'),(22,1,44,0,0,0,'0',1372178461,'Advertiser','','Question','Pending','',0,'Lock','0.00'),(23,1,45,0,0,0,'0',1372495054,'Advertiser','','Question','Pending','',0,'Lock','0.00'),(24,268,46,0,0,0,'0',1372851661,'Advertiser','','Question','Pending','',0,'','0.00'),(25,1,47,0,0,0,'0',1373553901,'Advertiser','','Question','Pending','',0,'Lock','0.00'),(26,1,48,0,0,0,'0',1373901425,'Advertiser','','Question','Pending','',0,'Lock','0.00'),(27,1,27,0,0,0,'0',1374550332,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-ac9253fe3919747844197688d4d65c6e',258,'Lock','30.00'),(28,264,49,0,0,0,'0',1374593780,'Advertiser','','Question','Pending','',0,'','0.00'),(29,264,49,0,4,0,'404',1374551262,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-5d017fa115932e1164e03608919085fa',258,'','40.00'),(30,1,50,0,0,0,'0',1374596239,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(31,1,50,0,0,0,'0',1374553053,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-dec8b15847c07ae9357983a80e403454',258,'Lock','40.00'),(32,1,51,0,0,0,'0',1374596523,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(33,1,51,0,0,0,'0',1374553339,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-6fc7b1b377c98ba3562c71c9436860fb',258,'Lock','30.00'),(34,1,52,0,0,0,'0',1374597043,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(35,1,52,0,0,0,'0',1374553853,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-bc0f6ed89647cdc1c9f3495feb488f7e',258,'Lock','30.00'),(36,268,35,0,6,0,'28',1374555503,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-426707f99fa3847c29b43d46ecf0f5e2',267,'','40.00'),(37,268,41,0,0,0,'0',1374555573,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-c49662559d4dbeea275999f70d343d14',267,'','40.00'),(39,1,47,0,0,0,'0',1374642068,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-d8a20405f554d73e305fedf268b57765',270,'Lock','30.00'),(40,1,48,0,0,0,'0',1374642074,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-0faeeafe22b0da890711bd2fa82f9596',270,'Lock','30.00'),(42,264,32,0,2,0,'8',1374642091,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-fa97bc6a41f742a7984d035ba5eb6a4b',270,'','30.00'),(43,268,35,0,0,0,'0',1374642116,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-426707f99fa3847c29b43d46ecf0f5e2',270,'','30.00'),(44,264,53,0,0,0,'0',1374674192,'Advertiser','','Question','Pending','',0,'','30.00'),(45,264,53,0,3,0,'13',1374631007,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-c1863e41929d486ff8989428b49831e5',258,'','50.00'),(46,1,54,0,0,0,'0',1374674841,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(47,1,54,0,0,0,'0',1374631656,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-83e07d33d4c2e50ae7bd513e52e37171',258,'Lock','50.00'),(48,264,55,0,0,0,'0',1374675274,'Advertiser','','Question','Pending','',0,'','30.00'),(49,264,55,0,0,0,'0',1374632084,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-ab520631bad8ba25ce78774eaa773a6d',258,'','30.00'),(50,1,56,0,0,0,'0',1374675390,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(52,1,57,0,0,0,'0',1374675660,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(53,1,57,0,0,0,'0',1374632474,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-37da0235cdea624557b0b063287e0fa4',258,'Lock','30.00'),(54,264,58,0,0,0,'0',1374675932,'Advertiser','','Question','Pending','',0,'','30.00'),(55,264,58,0,1,0,'10',1374632751,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-11c7c11c1fc1fbba6729fb3073206cdc',258,'','50.00'),(56,264,59,0,0,0,'0',1374676411,'Advertiser','','Question','Pending','',0,'','30.00'),(57,264,59,0,1,0,'10',1374633220,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-3a8975784ece280645730f75af4fd76e',258,'','50.00'),(58,268,36,0,0,0,'0',1374639553,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-9e897971ebfee68a1c3b302cfef91551',267,'','40.00'),(59,268,36,0,0,0,'0',1374640080,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-2336f6726d7cd0eaf1b9974da7fcf10c',270,'','30.00'),(60,268,39,0,0,0,'0',1374640084,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-1bb593978094d6aa633a67faf560ea54',270,'','30.00'),(61,268,41,0,0,0,'0',1374640086,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-c49662559d4dbeea275999f70d343d14',270,'','30.00'),(62,268,37,0,0,0,'0',1374640090,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-e06acced30a2d38a181e30290a8aaf4f',270,'','30.00'),(63,264,58,0,0,0,'0',1374640104,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-11c7c11c1fc1fbba6729fb3073206cdc',270,'','30.00'),(64,264,59,0,0,0,'0',1374895624,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-3a8975784ece280645730f75af4fd76e',270,'','30.00'),(65,268,40,0,0,0,'0',1374895634,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-c9a03a4f52596335361b0c7e2de1a668',270,'','30.00'),(66,1,27,0,0,0,'0',1374895650,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-ac9253fe3919747844197688d4d65c6e',270,'Lock','30.00'),(67,1,50,0,0,0,'0',1375152039,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-dec8b15847c07ae9357983a80e403454',270,'Lock','30.00'),(68,264,49,0,0,0,'0',1375152043,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-5d017fa115932e1164e03608919085fa',270,'','30.00'),(69,1,45,0,0,0,'0',1375152045,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-b329bb7ec9f05f0d22cda43fb1ea6f53',270,'Lock','30.00'),(70,268,33,0,0,0,'0',1375154726,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-be592af81a33f9bec6f98da7e2e329a9',270,'','30.00'),(71,268,38,0,0,0,'0',1375154728,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-5af18632a68ccb6a71f100b9cb3bcaad',270,'','30.00'),(72,268,42,0,0,0,'0',1375154731,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-90dd99e8126177943249feef46960b9a',270,'','30.00'),(73,1,43,0,0,0,'0',1375154733,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-9b4de214a57d18efab6577d7b1ec5711',270,'Lock','30.00'),(74,1,28,0,0,0,'0',1375928805,'Publisher','','Question','Pending','',258,'Lock','30.00'),(75,1,30,0,0,0,'0',1375928863,'Publisher','','Question','Pending','',258,'Lock','30.00'),(76,264,31,0,0,0,'0',1375928864,'Publisher','','Question','Pending','',258,'','30.00'),(77,264,32,0,0,0,'0',1375928866,'Publisher','','Question','Pending','',258,'','30.00'),(78,1,30,0,0,0,'0',1376026940,'Publisher','','Question','Pending','',273,'Lock','30.00'),(79,264,31,0,0,0,'0',1376026942,'Publisher','','Question','Pending','',273,'','30.00'),(80,264,32,0,0,0,'0',1376026944,'Publisher','','Question','Pending','',273,'','30.00'),(81,268,33,0,0,0,'0',1376026945,'Publisher','','Question','Pending','',273,'','30.00'),(82,1,27,0,0,0,'0',1376026949,'Publisher','','Question','Pending','',273,'Lock','30.00'),(83,266,34,0,0,0,'0',1376026953,'Publisher','','Question','Pending','',273,'','30.00'),(84,268,35,0,0,0,'0',1376026954,'Publisher','','Question','Pending','',273,'','30.00'),(85,268,36,0,0,0,'0',1376026954,'Publisher','','Question','Pending','',273,'','30.00'),(86,268,37,0,0,0,'0',1376026955,'Publisher','','Question','Pending','',273,'','30.00'),(87,1,60,0,0,0,'0',1376187896,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(88,1,28,0,0,0,'0',1376173076,'Publisher','','Question','Pending','',270,'Lock','30.00'),(89,1,30,0,0,0,'0',1376173079,'Publisher','','Question','Pending','',270,'Lock','30.00'),(90,264,31,0,0,0,'0',1376173081,'Publisher','','Action','Run','86ed8be3c3ebea12a82c67c15de4e7b6-3688babf1d7850db6275b9cddfb95a5a',270,'','30.00'),(91,266,34,0,0,0,'0',1376173381,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-43a3e5744390324be6169e03a84bcbd9',270,'','30.00'),(92,1,61,0,0,0,'0',1376268767,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(93,1,62,0,0,0,'0',1376325183,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(94,1,63,0,0,0,'0',1376781534,'Advertiser','','Question','Pending','',0,'Lock','30.00'),(95,1,63,0,0,0,'0',1377467547,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-2644c357232e1b407c6e54a7950e04a7',270,'','30.00'),(96,1,28,0,0,0,'0',1378004436,'Publisher','','Question','Pending','',267,'','30.00'),(97,1,60,0,0,0,'0',1378273151,'Publisher','','Action','Run','3536216fecbf795b6699da93a654aa82-72e3fc270526041670e85ab755753945',270,'','30.00'),(98,1,62,0,0,0,'0',1378360237,'Publisher','','Question','Pending','',270,'','30.00'),(99,268,33,0,0,0,'0',1379049783,'Publisher','','Question','Pending','',258,'','30.00');
/*!40000 ALTER TABLE `user_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `password` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `apikey` varchar(250) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `paypal_email` varchar(50) NOT NULL DEFAULT '',
  `address_1` varchar(250) NOT NULL DEFAULT '',
  `address_2` varchar(40) NOT NULL DEFAULT '',
  `state` varchar(250) NOT NULL DEFAULT '',
  `country_id` int(11) NOT NULL DEFAULT '0',
  `zip_post_code` varchar(250) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `signature` text NOT NULL,
  `salt` varchar(100) NOT NULL DEFAULT '',
  `activation_code` varchar(40) NOT NULL DEFAULT '',
  `forgotten_password_code` varchar(40) NOT NULL DEFAULT '',
  `remember_code` varchar(40) NOT NULL DEFAULT '',
  `recurring_billing` tinyint(4) NOT NULL DEFAULT '0',
  `card_holder_name` varchar(100) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  `card_ccv_code` varchar(10) DEFAULT NULL,
  `card_expiration_month` varchar(50) DEFAULT NULL,
  `card_expiration_year` varchar(50) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `totalamount` int(11) NOT NULL,
  `percentage` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=274 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `group_id`, `password`, `email`, `apikey`, `first_name`, `phone`, `last_name`, `paypal_email`, `address_1`, `address_2`, `state`, `country_id`, `zip_post_code`, `created_at`, `updated_at`, `last_login`, `signature`, `salt`, `activation_code`, `forgotten_password_code`, `remember_code`, `recurring_billing`, `card_holder_name`, `card_number`, `card_ccv_code`, `card_expiration_month`, `card_expiration_year`, `active`, `totalamount`, `percentage`) VALUES (1,1,'e10adc3949ba59abbe56e057f20f883e','virool@virool.com','','Nguyen','0966345234','Harry','sdfsdfdsds','Service One','0975797454','',17,'','0000-00-00 00:00:00','2013-09-30 22:12:22','2013-09-30 10:12:22','','9462e8eee0','','','f1bff4355bceee6b06d8b5166ea1ecd90da48f28',0,'Harry Nguyen','0966345456','6789','6','2018',1,0,'0'),(266,3,'e10adc3949ba59abbe56e057f20f883e','admin@domain.com','','Nguyen','0966998889','Harry','admin@domain.com','Virool','','',0,'','2013-05-26 19:22:50','2013-06-13 22:48:19','2013-06-13 10:48:19','','','','','',0,'Harry Nguyen','0966345456','6789','6','2018',1,1000,'0'),(264,3,'e10adc3949ba59abbe56e057f20f883e','harrynguyen.info@gmail.com','','Nguyen','09789988686','Harry','admin@mail.com','','','',0,'','2013-05-28 18:31:46','2013-09-12 15:33:29','2013-09-12 03:33:29','','','','e4da3b7','',0,'Mr Harry','8686868686','TKBJC','12','1988',0,9557,'0'),(258,2,'e10adc3949ba59abbe56e057f20f883e','harrynguyen@gmail.com','','Nguyen','','Harry','','','','',0,'','2013-05-26 13:31:20','2013-09-13 00:22:45','2013-09-13 12:22:45','','','','','',0,NULL,NULL,NULL,NULL,NULL,1,437,'0'),(263,1,'e10adc3949ba59abbe56e057f20f883e','harrynguyenone@gmail.com','','Harry','','Harry','','','','',0,'','2013-05-26 19:22:50','2013-08-22 19:22:05','2013-08-22 07:22:05','','','','','',0,NULL,NULL,NULL,NULL,NULL,0,0,'0'),(267,2,'75ba49fbee4e5dc10814af169f9c9d95','raul@culturead.com','','Raúl','','','','','','',191,'','2013-06-06 03:42:12','2013-09-01 21:53:20','2013-09-01 09:53:20','','','','','',0,NULL,NULL,NULL,NULL,NULL,0,28,'40'),(268,3,'75ba49fbee4e5dc10814af169f9c9d95','raul@hereweare.es','','','','','','','','',0,'','2013-06-06 03:56:41','2013-07-30 21:42:38','2013-07-25 11:17:15','','','','','',0,NULL,NULL,NULL,NULL,NULL,0,972,'0'),(269,2,'45a527b1eeffd85bb8c59e4051c68463','jorge@misterparties.com','','Jorge','','','','','','',0,'','2013-07-03 21:48:51','2013-07-03 21:49:23','2013-07-03 09:48:51','','','','','',0,NULL,NULL,NULL,NULL,NULL,0,0,'0'),(270,2,'75ba49fbee4e5dc10814af169f9c9d95','hello@culturead.com','','Hello','','','','','','',0,'','2013-07-13 03:42:28','2013-09-13 17:20:15','2013-09-13 05:20:15','','','','','',0,NULL,NULL,NULL,NULL,NULL,0,8,'0'),(271,3,'79afff0077f0933ff968c08a199433af','trannhunhong@gmail.com','','','','','','','','',0,'','2013-07-28 18:03:30','2013-07-28 18:03:30','2013-07-28 06:03:30','','','','e4da3b7','',0,NULL,NULL,NULL,NULL,NULL,0,0,'0'),(273,2,'25d55ad283aa400af464c76d713c07ad','cedarfall123@yahoo.com','','dgsdgsdgfsd','','','','','','',0,'','2013-08-09 12:37:51','2013-08-09 12:40:26','2013-08-09 12:37:51','','','','','',0,'','','','1','2013',0,0,'0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_user` (`user_id`),
  KEY `idx_group` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (1,1,1),(2,2,1),(3,2,3);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Awaiting deposit',
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `link_url` text COLLATE utf8_unicode_ci NOT NULL,
  `link_title` text COLLATE utf8_unicode_ci NOT NULL,
  `ad_placements` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ages` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `budget` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `budget_kind` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `max_bid` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Video',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `videoid`, `display`, `views`, `clicks`, `title`, `state`, `caption`, `images`, `link_url`, `link_title`, `ad_placements`, `keywords`, `gender`, `ages`, `budget`, `budget_kind`, `max_bid`, `type`) VALUES (27,'X4eYPzYI7kc',0,0,0,'[Vietsub] Kim Huyn Joong-because i\'m stupid.FLV','Awaiting deposit','Esto es una descripcion','https://i1.ytimg.com/vi/X4eYPzYI7kc/default.jpg:::https://i1.ytimg.com/vi/X4eYPzYI7kc/mqdefault.jpg:::https://i1.ytimg.com/vi/X4eYPzYI7kc/hqdefault.jpg','http://culturead.com','Pincha parta ir a la web','blogs,games,mobile,social,virtual_currency','[\"[Vietsub]\",\"Kim\",\"Huyn\",\"Joong-because\",\"i\'m\",\"stupid.FLV\"]','all','all','500.00','lifetime',10,'Video'),(28,'Tn5Rc2Xh2Z0',0,3,0,'[Vietsub] Kim Huyn Joong-because i\'m stupid.FLV','Awaiting deposit','','https://i1.ytimg.com/vi/Tn5Rc2Xh2Z0/default.jpg:::https://i1.ytimg.com/vi/Tn5Rc2Xh2Z0/mqdefault.jpg:::https://i1.ytimg.com/vi/Tn5Rc2Xh2Z0/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"[Vietsub]\",\"Kim\",\"Huyn\",\"Joong-because\",\"i\'m\",\"stupid.FLV\"]','all','all','500.00','lifetime',13,'Video'),(30,'121110204528-81b6b7b9617f4e3e889e1eda9ad3c416',0,0,0,'Harry potter e as Relíquias da Morte 1','Awaiting deposit','Harry potter e as Relíquias da Morte 1','','Link Url 1','Link Title 1','blogs,games,mobile,social,virtual_currency','','males','1','300.00','per_day',15,'Document'),(31,'RkWQDDv_qdg',0,0,0,'Blue - All Rise','Awaiting deposit','Official video of Blue performing All Rise from the album All Rise. \r\nBuy It Here: http://smarturl.it/vus6pe  \r\nLike Blue on Facebook: http://www.facebook.com/officialblue \r\nFollow Blue on Twitter: https://twitter.com/officialblue \r\nOfficial Website: http://www.officialblue.com/ \r\nSee more videos: http://www.youtube.com/user/officialblueworld','https://i3.ytimg.com/vi/RkWQDDv_qdg/default.jpg:::https://i3.ytimg.com/vi/RkWQDDv_qdg/mqdefault.jpg:::https://i3.ytimg.com/vi/RkWQDDv_qdg/hqdefault.jpg','https://twitter.com/officialblue','http://www.youtube.com/user/officialblueworld','blogs,games,mobile,social,virtual_currency','[\"Blue\",\"-\",\"All\",\"Rise\"]','all','all','500.00','lifetime',10,'Video'),(32,'mFu3YzRnyDU',0,2,0,'P!nk - Trouble','Awaiting deposit','Music video by P!nk performing Trouble. (C) 2003 Arista Records, Inc.','https://i2.ytimg.com/vi/mFu3YzRnyDU/default.jpg:::https://i2.ytimg.com/vi/mFu3YzRnyDU/mqdefault.jpg:::https://i2.ytimg.com/vi/mFu3YzRnyDU/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"P!nk\",\"-\",\"Trouble\"]','all','','500.00','per_day',13,'Video'),(33,'130524164707-cadd25242f6f4d408d656ff54b3ce867',0,0,0,'The Daily Summer','Awaiting deposit','The Daily Summer','','','','blogs,games,mobile,social,virtual_currency','[\"designers\",\"fashion\",\"fashion week\",\"front row\",\"hamptons\",\"nyfw\",\"summer\",\"the daily\",\"the daily front row\",\"the daily summer\"]','females','1','100.00','per_day',10,'Document'),(34,'080217125440-c7d17a5e6ce94133b05289e7a3fef352',0,0,0,'carol_demo','Awaiting deposit','hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.','','','','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','500.00','per_day',13,'Document'),(35,'kEa0v2zLAKI',0,6,0,'Joey Montana - Único','Awaiting deposit','Music video by Joey Montana performing Unico. (P) (C) 2012 Capitol Latin. All rights reserved. Unauthorized reproduction is a violation of applicable laws.  Manufactured by Capitol Latin, 404 Washington Ave.  Suite 700, Miami Beach, FL 33139','https://i4.ytimg.com/vi/kEa0v2zLAKI/default.jpg:::https://i4.ytimg.com/vi/kEa0v2zLAKI/mqdefault.jpg:::https://i4.ytimg.com/vi/kEa0v2zLAKI/hqdefault.jpg','http://culturead.com','http://culturead.com','blogs,games,mobile,social,virtual_currency','[\"Joey\",\"Montana\",\"-\",\"\\u00danico\"]','all','all','20.00','per_day',12,'Video'),(36,'130510214953-7f31c28546c3479ab0c1bd58acdd4dff',0,1,0,'Silicon Valley Global Magazine','Awaiting deposit','Silicon Valley Global Magazine','','http://culturead.com','Visit our site','blogs,games,mobile,social,virtual_currency','[\"itlg\",\"silicon valley global magazine\"]','all','1','100.00','per_day',5,'Document'),(37,'110613210102-dd643e4aeae24cdbae57f0118af33433',0,0,0,'INDUSTRY MAY/JUN 2011','Awaiting deposit','Lifestyle Staten Island Industry Magazine MAY JUNE 2011 industry magazine, lifestyle magazine, new york magazine, staten island magazine','','','Visit our site','blogs,games,mobile,social,virtual_currency','[\"staten island magazine\",\"industry magazine march april 2011 industry magazine\",\"lifestyle magazine\",\"new york magazine\",\"industry magazine\"]','all','1','50.00','per_day',4,'Document'),(38,'130510152155-5186d4efe8d9483faf2ba07996644ebd',0,0,0,'IN VEGAS MAGAZINE | MAY 2013 | ISSUE 006','Awaiting deposit','INVEGAS Magazine | POOL FASHION. Guía de Albercas. IN 5 Cocteles de Verano. Chef Emeril Lagasse. Striptease. IN MTY The 30 Most Beautiful People event at Privatt. Pool Parties. Fashion Trends. Hakkasan Grand Opening. Masajes. Lou Ruvo Center. Michael Jackson ONE. Daylight Beach Club. El Granero.','','','','blogs,games,mobile,social,virtual_currency','[\"albercas\",\"chef\",\"cirque du soleil\",\"city center\",\"cocktail\",\"cocteles\",\"emeril\",\"hakkasan\",\"invegas\",\"lou rovu\",\"masaje\",\"massage\",\"mj one\",\"monterrey\",\"nuevo leon\",\"parties\",\"pool\",\"striptease\",\"vegas\"]','all','1','100.00','lifetime',10,'Document'),(39,'130131182010-e52921a98ee644b28800165ef3a8346a',0,0,0,'Islas Exóticas 2013-2014','Awaiting deposit','Catai Tours presenta con \"Islas Exóticas\" un auténtico catálogo de los paraísos que aún quedan en el planeta. Y no sólo lo presenta, además ofrece todas las herramientas necesarias para disfrutar de estos lugares privilegiados: los mejores hoteles, traslados privados y un servicio altamente cualificado y personalizado, para que el disfrute del “dolce far niente” sea casi una obligación.','','http://www.catai.es/','Visite Catai','blogs,games,mobile,social,virtual_currency','[\"catai\",\"honeymoon\",\"luna de miel\",\"novios\",\"vacaciones\",\"viajar\",\"viajeros\"]','all','1','70.00','per_day',5,'Document'),(40,'130315112817-565f06f23dab4274b60c36f6d54fd88b',0,0,0,'Mollie Makes issue 25','Awaiting deposit','In this issue: • Make Easter egg cosies from vintage jumpers • Needle felt creatures • Stitch a sweet rucksack • Design a geometric necklace','','culturead.com','Visit site','blogs,games,mobile,social,virtual_currency','[\"craft\",\"crochet\",\"fashion\",\"interiors\",\"knitting\",\"mollie makes\",\"needlefelting\",\"sewing\",\"thrift\"]','all','1','100.00','lifetime',5,'Document'),(41,'130521120503-a8f06d0f90da47d1bcf1af030c3d4c86',0,0,0,'Creative HEAD June 2013','Awaiting deposit','The UK\'s finest hair magazine brings you the very latest news, trends and products, as well as revealing how you can keep clients coming back to your salon','','','','blogs,games,mobile,social,virtual_currency','[\"clients\",\"collections\",\"colour\",\"creative\",\"fashion\",\"hair\",\"hairdressing\",\"salon\",\"salons\",\"style\",\"styling\"]','all','1','30.00','per_day',7,'Document'),(42,'130528151301-18c9cf647d1341ecaf3f2b43fa855437',0,0,0,'WFV May/June 2013','Awaiting deposit','Each issue of VISION brings you the latest new products, trends, designs, business tips and information to help you grow. If you are a window covering professional, interior designer or retailer selling and specifying custom window coverings, Window Fashion VISION is your magazine for inspiration and industry education.','','','','blogs,games,mobile,social,virtual_currency','[\"certification\",\"decorating\",\"interior design\",\"international window coverings expo\",\"iwce\",\"online courses\",\"wfcp\",\"window coverings\",\"window fashions\"]','all','1','100.00','lifetime',8,'Document'),(43,'130603165426-8394ed6b700d8e84c0b13d7dd6ab162c',0,0,0,'VM Magazine Swim 2013 Issue','Awaiting deposit','View this years hottest trends in summer and swimwear fashions.','','','','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','100.00','lifetime',15,'Document'),(44,'130624215511-940e390bc45580b7c9cd0b43860cede2',0,0,0,'ESTILODF 24 A 30 JUNIO 2013','Awaiting deposit','ESTILODF 24 A 30 JUNIO 2013','','','','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','50.00','per_day',10,'Document'),(45,'130416145024-1e1edc23559e43edbe95f7d916ba12b6',0,0,0,'BODIEANDFOU SPRING/SUMMER 2013','Awaiting deposit','BODIEandFOU.com\'s spring/summer mail order catalogue. A well edited collection of furniture and accessories for your home.','','','','blogs,games,mobile,social,virtual_currency','[\"diy\",\"home\",\"interiors\",\"lifestyle\",\"styling\"]','all','1','20.00','per_day',8,'Document'),(46,'MZSVpannu3Y',0,1,0,'Bridge - Whiskey','Awaiting deposit','Follow Bridge:\nhttp://www.xxbridge.com/\nhttps://www.facebook.com/xxbridge\n\nCreature of Habit: Part I - \n\"Whiskey\" (Free Download) http://www.xxbridge.com/\n\nDirector: Nic Delikat\nProducer: Mike Brown, Dan Amato\nStylist: Tess Alexandra Callner\nMusic Producer: Rooster Cogburn of Filthy Fortune \n1st Round Pictures - 1st Round Records\nSkeeTV\n                                                                                                        Music video by Bridge performing Whiskey. (C) 2013 1st Round Records. All Rights Reserved.\n\n\"Do Ya Right\" Single Available - https://itunes.apple.com/us/album/do-ya-right-single/id626959560\n\nhttp://www.1stroundrecords.com/\nhttp://fingersxcrossed.com/','https://i1.ytimg.com/vi/MZSVpannu3Y/default.jpg:::https://i1.ytimg.com/vi/MZSVpannu3Y/mqdefault.jpg:::https://i1.ytimg.com/vi/MZSVpannu3Y/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"Bridge\",\"-\",\"Whiskey\"]','all','all','100.00','per_day',15,'Video'),(47,'130711123918-1545ec35f8c72cafd9abb7931eb83771',0,0,0,'Adv arte de vivir 130','Awaiting deposit','Lifestyle magazine, revista de estilos de vida','','','','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','180.00','lifetime',7,'Document'),(48,'Sv6dMFF_yts',0,1,0,'Fun.: We Are Young ft. Janelle Monáe [OFFICIAL VIDEO]','Awaiting deposit','Fun.\'s music video for \'We Are Young\' featuring Janelle Monáe from the full-length album, Some Nights - available now on Fueled By Ramen. Visit http://ournameisfun.com for more!\n\nDownload the album now on iTunes at http://smarturl.it/somenights and the iTunes Session at http://smarturl.it/funsession\n\nhttp://www.ournameisfun.com/\nhttp://facebook.com/ournameisfun\nhttps://twitter.com/#!/ournameisfun\nhttp://youtube.com/ournameisfun\n\ndirected by Marc Klasfeld\n\nLYRICS\nGive me a second I,\nI need to get my story straight\nMy friends are in the bathroom getting higher than the Empire State\nMy lover she\'s waiting for me just across the bar\nMy seat\'s been taken by some sunglasses asking bout a scar, and\nI know I gave it to you months ago\nI know you\'re trying to forget\nBut between the drinks and subtle things\nThe holes in my apologies, you know\nI\'m trying hard to take it back\nSo if by the time the bar closes\nAnd you feel like falling down\nI\'ll carry you home\n\nTonight\nWe are young\nSo let\'s set the world on fire\nWe can burn brighter than the sun\n\nTonight\nWe are young\nSo let\'s set the world on fire\nWe can burn brighter than the sun\n\nNow I know that I\'m not\nAll that you got\nI guess that I, I just thought\nMaybe we could find new ways to fall apart\nBut our friends are back\nSo let\'s raise a glass\n\'Cause I found someone to carry me home\n\nTonight\nWe are young\nSo let\'s set the world on fire\nWe can burn brighter than the sun\n\nTonight\nWe are young\nSo let\'s set the world on fire\nWe can burn brighter than the sun\n\nCarry me home tonight\nJust carry me home tonight\nCarry me home tonight\nJust carry me home tonight\n\nThe moon is on my side\nI have no reason to run\nSo will someone come and carry me home tonight\nThe angels never arrived\nBut I can hear the choir\nSo will someone come and carry me home\n\nTonight\nWe are young\nSo let\'s set the world on fire\nWe can burn brighter than the sun\n\nTonight\nWe are young\nSo let\'s set the world on fire\nWe can burn brighter than the sun\n\nSo if by the time the bar closes\nAnd you feel like falling down\nI\'ll carry you home tonight','https://i1.ytimg.com/vi/Sv6dMFF_yts/default.jpg:::https://i1.ytimg.com/vi/Sv6dMFF_yts/mqdefault.jpg:::https://i1.ytimg.com/vi/Sv6dMFF_yts/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"Fun.:\",\"We\",\"Young\",\"Janelle\"]','all','all','50.00','per_day',5,'Video'),(49,'b_ILDFp5DGA',0,4,0,'Hello by Lionel Richie','Awaiting deposit','The music video for Lionel Richie\'s \"Hello\" directed by Bob Giraldi, attracts attention as it tells the story of  a music teacher (played by Lionel Richie) who falls in love with his blind student.','https://i1.ytimg.com/vi/b_ILDFp5DGA/default.jpg:::https://i1.ytimg.com/vi/b_ILDFp5DGA/mqdefault.jpg:::https://i1.ytimg.com/vi/b_ILDFp5DGA/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"Hello\",\"by\",\"Lionel\",\"Richie\"]','all','all','500.00','per_day',10,'Video'),(50,'FOjdXSrtUxA',0,0,0,'Ed Sheeran - Give Me Love [Official Video]','Awaiting deposit','Watch the official video for Ed Sheeran\'s single \'Give Me Love\'.\nGet this track on iTunes now: http://smarturl.it/GML\nGet Ed\'s debut album \'+\' on iTunes: http://smarturl.it/ed.plus\nPre-order the remix bundle from iTunes: http://bit.ly/VUSx0b\n\nFollow Ed on:\nhttp://twitter.com/edsheeran\nhttp://www.facebook.com/EdSheeranMusic\nhttp://soundcloud.com/edsheeran','https://i1.ytimg.com/vi/FOjdXSrtUxA/default.jpg:::https://i1.ytimg.com/vi/FOjdXSrtUxA/mqdefault.jpg:::https://i1.ytimg.com/vi/FOjdXSrtUxA/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"Ed\",\"Sheeran\",\"-\",\"Give\",\"Me\",\"Love\",\"[Official\",\"Video]\"]','all','all','500.00','lifetime',10,'Video'),(51,'080217125440-c7d17a5e6ce94133b05289e7a3fef352',0,0,0,'carol_demo','Awaiting deposit','hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.hello.','','','','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','500.00','lifetime',10,'Document'),(52,'aScVVhUx56M',0,0,0,'Darling','Awaiting deposit','Darling is a Bollywood horror thriller starring Esha Deol, Fardeen Khan and Isha Koppikar in the lead roles, was directed by Ram Gopal Varma. It was filmed in Mumbai, India. The soundtrack score was composed by Pritam.\n\nEnjoy and Stay connected with us!!\nSUBSCRIBE our channel for unlimited entertainment\nhttp://www.youtube.com/tseries\n\nCircle us on G+ \nhttp://www.google.com/+tseriesmusic\n\nLike us on Facebook\nhttp://www.facebook.com/tseriesmusic\n\nFollow us\nhttp://www.twitter.com/_Tseries','https://i1.ytimg.com/vi/aScVVhUx56M/default.jpg:::https://i1.ytimg.com/vi/aScVVhUx56M/mqdefault.jpg:::https://i1.ytimg.com/vi/aScVVhUx56M/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"Darling\"]','all','all','500.00','lifetime',10,'Video'),(53,'unRldLdllZ8',0,3,0,'D4NNY - Goodbye (Official Music Video)','Awaiting deposit','Music video by D4NNY performing Goodbye. (C)\n\n\nFind D4NNY on:\nhttps://www.twitter.com/D4nnyMusic\nhttps://www.facebook.com/D4nnyMusic\nhttp://soundcloud.com/d4nny-music\n\nContact D4NNY on:\nDanish_Ghaffar @hotmail.co.uk','https://i1.ytimg.com/vi/unRldLdllZ8/default.jpg:::https://i1.ytimg.com/vi/unRldLdllZ8/mqdefault.jpg:::https://i1.ytimg.com/vi/unRldLdllZ8/hqdefault.jpg','','','blogs,games,mobile,social,virtual_currency','[\"D4NNY\",\"-\",\"Goodbye\",\"(Official\",\"Music\",\"Video)\"]','all','all','500.00','lifetime',10,'Video'),(54,'110220153308-6718d9d13bb348c2af2eccacfa03f201',0,0,0,'Julia Pressman','Awaiting deposit','blink (don\'t) Change It \'s goodbye for now It\'s goodbye for now It\'s goodbye for now It\'s goodbye for now It\'s goodbye for now It\'s goodbye for now It\'s goodbye for now It\'s goodbye for now It\'s goodbye for now It\'s goodbye for now Regret I know we both made mistakes I know we both made mistakes But we don\'t care But we don\'t care But we don\'t care ... ...... Moral Culpability and Free Will Here is the trick Here is the trick Here is the trick Strict ac Strict a Shedding Skin','','','','blogs,games,mobile,social,virtual_currency','[\"julia pressman\",\"blink\"]','all','1','500.00','lifetime',20,'Document'),(55,'130710141206-1d3a7993c96c4308b0def15607aac7cd',0,0,0,'Mp3 Ian Macdonald Hello Hello Hello Hello','Awaiting deposit','','','','','blogs,games,mobile,social,virtual_currency','[\"documents\",\"guide\",\"manuals\",\"pdf\",\"repair manuals\",\"service manuals\"]','all','1','500.00','lifetime',20,'Document'),(56,'120605055020-c92c2d5e79bc40819015863bdf5d0f1b',0,0,0,'test','Awaiting deposit','test test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test testtest test test test test','','','','blogs,games,mobile,social,virtual_currency','[\"test test\",\"test test test\"]','all','1','500.00','lifetime',20,'Document'),(57,'120112235811-5ef792a753f04273b80acdad94881078',0,0,0,'video site map generator','Awaiting deposit','#1 Best Seller Google Video Sitemap Over 4,000 Sold At http://tiny.cc/GoogleVideoSitemap','','','','blogs,games,mobile,social,virtual_currency','[\"video sitemap\",\"google video sitemaps\",\"video sitemaps google\",\"google video sitemap\",\"video site maps\",\"google webmaster video\",\"creating a video sitemap\",\"video site map generator\",\"google video sitemap plugin\",\"google video sitemap generator\"]','all','1','500.00','lifetime',20,'Document'),(58,'120402090045-908087adf4734cbfa18fd88ba2ece565',0,1,0,'Hello Cape Town Magazine- April 2012','Awaiting deposit','The Official Hotels Tourist Guide. A free publication for visitors and travellers. Free and updated every month. Browse here or download to your mobile.','','','','blogs,games,mobile,social,virtual_currency','[\"cape town tourism\",\"cape town directory\",\"hello\",\"tourist guide\",\"where to go in cape town\",\"tourist\",\"eating\",\"hello cape town\",\"dining\",\"south africa  what to see in cape town\",\"travel\",\"what to do in cape town\",\"cape town maps\",\"travel magazine\"]','all','1','500.00','lifetime',20,'Document'),(59,'120131230422-4c8c8a403d7546769384f9b7b8da6bc4',0,1,0,'Love Notes, A Collection of Romantic Poetry','Awaiting deposit','Perfect Valentine\'s Day Gift  Love shared, love in secret, celebrated, exploded. Unrequited longing and love that’s mellowed through the years. Love at long distance, across continents, so close there’s no space to breathe, or never quite close enough. Love lost and love found. Love from the inside out and love from the outside in. Love Notes has it all: a collection of poetry as diverse as the experience of falling in love itself. A shared candied apple, a farewell at Paddington Station, a name scribbled in a notebook, a face that leaves us breath less, a single word that changes our life forever. Love Notes is a rich tapestry of verse woven from fragments of life and those moments that make falling in love so irresistible. And so inevitable.  Love is unique, love is universal. Love is everywhere\n\nAvailable at Amazon, Barnes and Noble, and iBooks.','','','','blogs,games,mobile,social,virtual_currency','[\"romantic poems\",\"valentines day\",\"romance\",\"love\",\"love poetry\"]','all','1','500.00','lifetime',20,'Document'),(60,'130809070245-2c18aa3f743bc6e2e456f6d5c69c54de',0,0,0,'Express Travelworld August, 2013','Awaiting deposit','Great Escapes\nAs India celebrates her 67th Independence Day, we take a look at some great weekend getaways from the major cities of the country that can tempt the wanderlust to hit the road','','http://issuu.com/indianexpressgroup','Visit our site','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','120.00','lifetime',7,'Document'),(61,'130730143230-603021c16adad0e52aea52dd1de00acd',0,0,0,'Vine Magazine | August 2013','Awaiting deposit','Your Favourite Sevenoaks Magazine','','http://www.vinedigital.co.uk/','Visit Vine','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','100.00','lifetime',20,'Document'),(62,'130807162026-abbd370c04ad51dba8d987eaacb18e7a',0,0,0,'Wanderlust September 2013','Awaiting deposit','September 2013 issue of Wanderlust travel magazine','','http://www.wanderlust.co.uk/','Visit Wanderlust','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','10.00','per_day',8,'Document'),(63,'130816113624-d577f023c8a2a5c870c00744043da871',0,0,0,'PACHA MAGAZINE SEPTEMBER','Awaiting deposit','','','http://www.recodemedia.com/','http://www.recodemedia.com/','blogs,games,mobile,social,virtual_currency','[\"\"]','all','1','40.00','per_day',8,'Document');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-01  0:21:47
