-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ims
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth`
--

LOCK TABLES `auth` WRITE;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` VALUES (1,NULL,'kamal@gmail.com',NULL,NULL,'kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-06-14 20:06:58',NULL,NULL,NULL,NULL),(2,NULL,'',NULL,NULL,'suraiya','cba3802d0d10dd128a8e065c2a48a78d94ed40ab',NULL,'2024-06-27 05:19:12',NULL,NULL,NULL,NULL),(3,NULL,'',NULL,NULL,'suraiya','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-06-27 05:19:31',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'Eight','2024-06-16 20:45:29',1,NULL,1,'2024-06-29 08:12:47'),(2,'Seven','2024-06-18 07:54:54',1,NULL,1,'2024-06-29 08:12:46'),(3,'Six','2024-06-18 07:55:02',1,NULL,1,'2024-06-29 08:12:34'),(4,'ten','2024-06-19 08:56:47',1,NULL,1,'2024-06-29 08:12:33'),(5,'six','2024-06-29 08:12:51',1,NULL,NULL,NULL),(6,'Seven','2024-06-29 08:13:00',1,NULL,NULL,NULL),(7,'Eight','2024-06-29 08:13:12',1,NULL,NULL,NULL),(8,'Nine','2024-06-29 08:13:20',1,NULL,NULL,NULL),(9,'Ten','2024-06-29 08:13:29',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_fees_setting`
--

DROP TABLE IF EXISTS `class_fees_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_fees_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fees_id` varchar(255) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_fees_setting`
--

LOCK TABLES `class_fees_setting` WRITE;
/*!40000 ALTER TABLE `class_fees_setting` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_fees_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_routine`
--

DROP TABLE IF EXISTS `class_routine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_routine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `day_name` int(11) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_routine`
--

LOCK TABLES `class_routine` WRITE;
/*!40000 ALTER TABLE `class_routine` DISABLE KEYS */;
INSERT INTO `class_routine` VALUES (1,3,2,0,0,5,2,1,'2024-06-29 09:15:13',1,NULL,NULL,NULL),(2,4,0,0,1,5,2,1,'2024-06-29 09:15:13',1,NULL,NULL,NULL),(3,5,0,0,2,5,2,1,'2024-06-29 09:15:13',1,NULL,NULL,NULL),(4,6,0,0,3,5,2,1,'2024-06-29 09:15:13',1,NULL,NULL,NULL),(5,7,0,0,4,5,2,1,'2024-06-29 09:15:14',1,NULL,NULL,NULL),(6,0,0,0,5,5,2,1,'2024-06-29 09:15:14',1,NULL,NULL,NULL),(7,0,0,0,6,5,2,1,'2024-06-29 09:15:14',1,NULL,NULL,NULL),(8,0,0,0,7,5,2,1,'2024-06-29 09:15:14',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `class_routine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_subject`
--

DROP TABLE IF EXISTS `class_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `sub` decimal(5,2) DEFAULT NULL,
  `obj` decimal(5,2) DEFAULT NULL,
  `prac` decimal(5,2) DEFAULT NULL,
  `pass_marks` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_subject`
--

LOCK TABLES `class_subject` WRITE;
/*!40000 ALTER TABLE `class_subject` DISABLE KEYS */;
INSERT INTO `class_subject` VALUES (1,'3',4,1,1,50.00,50.00,50.00,50.00,'2024-06-19 21:14:16',1,NULL,1,'2024-06-19 22:01:36'),(2,'3',1,2,1,50.00,50.00,50.00,50.00,'2024-06-19 21:32:08',1,NULL,1,'2024-06-19 22:01:27'),(3,'3',2,4,3,50.00,50.00,50.00,50.00,'2024-06-19 21:59:40',1,NULL,1,'2024-06-20 10:25:47'),(4,'3',1,2,3,50.00,50.00,50.00,50.00,'2024-06-19 22:01:14',1,NULL,1,'2024-06-19 22:06:20'),(5,'3',4,2,3,50.00,50.00,50.00,50.00,'2024-06-19 22:15:40',1,'2024-06-19 22:17:15',1,'2024-06-19 22:17:25'),(6,'3',2,2,1,0.00,0.00,0.00,0.00,'2024-06-19 22:27:13',1,'2024-06-19 22:27:55',1,'2024-06-20 09:00:09'),(7,'3',1,2,3,50.00,50.00,50.00,50.00,'2024-06-20 08:57:52',0,NULL,1,'2024-06-20 09:00:05'),(8,'3',2,2,1,50.00,50.00,50.00,50.00,'2024-06-20 09:06:57',0,NULL,1,'2024-06-20 09:44:03'),(9,'3',3,2,1,0.00,0.00,0.00,0.00,'2024-06-20 09:31:10',0,NULL,NULL,NULL),(10,'3',1,2,1,50.00,0.00,50.00,0.00,'2024-06-20 09:39:41',0,NULL,1,'2024-06-20 09:41:13'),(11,'3',1,2,1,0.00,0.00,0.00,0.00,'2024-06-20 09:54:43',0,NULL,1,'2024-06-20 10:25:44'),(12,'3',3,4,1,0.00,0.00,0.00,0.00,'2024-06-20 09:56:24',0,NULL,1,'2024-06-20 10:29:36'),(13,'3',4,2,1,0.00,50.00,0.00,0.00,'2024-06-20 10:30:00',0,NULL,1,'2024-06-20 10:43:10'),(14,'4',2,2,1,0.00,0.00,0.00,0.00,'2024-06-20 13:00:47',0,NULL,1,'2024-06-20 17:34:24'),(15,'4',1,1,1,50.00,50.00,0.00,50.00,'2024-06-20 17:39:41',0,NULL,NULL,NULL),(16,'5',1,1,1,50.00,50.00,0.00,50.00,'2024-06-20 19:02:55',0,NULL,1,'2024-06-20 19:03:12');
/*!40000 ALTER TABLE `class_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `day_name`
--

DROP TABLE IF EXISTS `day_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `day_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sl` int(11) NOT NULL,
  `day_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `day_name`
--

LOCK TABLES `day_name` WRITE;
/*!40000 ALTER TABLE `day_name` DISABLE KEYS */;
INSERT INTO `day_name` VALUES (1,0,'Saturday','2024-06-27 07:11:52',1,NULL,NULL,NULL),(2,1,'Sunday','2024-06-27 07:11:52',1,NULL,NULL,NULL),(3,2,'Monday','2024-06-27 07:11:52',1,NULL,NULL,NULL),(4,3,'TuesDay','2024-06-27 07:11:52',1,NULL,NULL,NULL),(5,4,'WednesDay','2024-06-27 07:11:52',1,NULL,NULL,NULL),(6,5,'Thursday','2024-06-27 07:11:52',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `day_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Math','2024-06-26 17:29:19',1,'2024-06-29 08:15:29',1,NULL),(2,'Bangla','2024-06-29 08:14:35',1,NULL,NULL,NULL),(3,'English','2024-06-29 08:15:41',1,NULL,NULL,NULL),(4,'Science','2024-06-29 08:16:07',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation`
--

LOCK TABLES `designation` WRITE;
/*!40000 ALTER TABLE `designation` DISABLE KEYS */;
INSERT INTO `designation` VALUES (1,'Assitant teacher','2024-06-26 17:29:43',1,NULL,NULL,NULL),(2,'Teacher','2024-06-29 08:16:26',1,NULL,NULL,NULL),(3,'Senior  Teacher','2024-06-29 08:16:55',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees_category`
--

DROP TABLE IF EXISTS `fees_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees_category`
--

LOCK TABLES `fees_category` WRITE;
/*!40000 ALTER TABLE `fees_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `fees_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES (1,'None','2024-06-14 21:30:27',1,NULL,NULL,NULL),(2,'Science','2024-06-14 21:36:08',1,NULL,NULL,NULL),(3,'C','2024-06-14 21:43:37',1,'2024-06-14 21:46:10',1,'2024-06-14 21:46:18'),(4,'Commerce','2024-06-19 21:12:34',1,'2024-06-29 08:12:21',1,NULL);
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `period`
--

DROP TABLE IF EXISTS `period`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `period_name` varchar(255) DEFAULT NULL,
  `period_time` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `period`
--

LOCK TABLES `period` WRITE;
/*!40000 ALTER TABLE `period` DISABLE KEYS */;
INSERT INTO `period` VALUES (1,1,2,0,'1st','08:00 - 08:45','2024-06-29 07:13:47',1,NULL,NULL,NULL),(2,1,2,1,'2nd','08:45 - 09:30','2024-06-29 07:17:13',1,NULL,NULL,NULL),(3,1,2,2,'3rd','09:30 - 10:15','2024-06-29 07:17:27',1,NULL,NULL,NULL),(4,1,2,3,'4th','10:15 - 11:00','2024-06-29 07:18:00',1,NULL,NULL,NULL),(5,1,2,4,'Tiffin','11:00 - 11:20','2024-06-29 07:18:21',1,NULL,NULL,NULL),(6,1,2,5,'5th','11:20 - 12:05','2024-06-29 07:18:47',1,NULL,NULL,NULL),(7,1,2,6,'6th','12:05 - 12:50','2024-06-29 07:19:25',1,NULL,NULL,NULL),(8,1,2,7,'7th','12:50 - 01:30','2024-06-29 07:19:49',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `period` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES (1,'Green','2024-06-14 20:19:08',1,'2024-06-14 20:21:11',1,'2024-06-14 20:21:51'),(2,'Black','2024-06-15 07:44:47',1,'2024-06-15 07:45:02',1,NULL),(3,'Red','2024-06-29 08:09:18',1,NULL,NULL,NULL),(4,'Green','2024-06-29 08:09:26',1,NULL,NULL,NULL),(5,'Blue','2024-06-29 08:09:37',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES (1,'2024','2024-06-15 07:54:51',1,NULL,NULL,NULL),(2,'2301','2024-06-15 07:56:09',1,'2024-06-15 07:59:20',1,'2024-06-15 07:59:32'),(3,'2023','2024-06-15 08:01:05',1,'2024-06-29 08:10:10',1,NULL),(4,'2024','2024-06-19 21:12:45',1,NULL,1,'2024-06-19 21:12:55'),(5,'2022','2024-06-29 08:09:58',1,NULL,NULL,NULL),(6,'2021','2024-06-29 08:10:19',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3905 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (0,'','','','','','','','454613','2024-06-16 17:33:02',1,'2024-06-16 17:40:23',1,'2024-06-16 17:40:40'),(101,'Kamal','Jamal','Minu','kamal@gmail.com','1281542','World.jpg','kamal','1234','2024-06-16 16:20:32',1,NULL,1,'2024-06-16 17:25:05'),(451,'Priya','Jamal','Minu','rukiyapriya@gmail.com','1531554','image5.jpg','priya','48484','2024-06-16 17:41:30',1,NULL,1,'2024-06-20 10:17:33'),(454,'Umma Rukiya','Jamal','Minu','priyontika111@gmail.com','523563','carosel4.jpg','Rukiya','156565+','2024-06-16 17:36:39',1,NULL,1,'2024-06-17 18:49:13'),(3895,'','Pamal','','priyontika@gmail.com','','image4.jpg','','','2024-06-16 20:44:33',1,NULL,1,'2024-06-18 18:17:43'),(3896,'','','','','','','','','2024-06-17 18:32:19',1,'2024-06-17 18:35:20',1,'2024-06-17 18:49:10'),(3897,'Umma Rukiya','Pamal','Lilo','priyontika1@gmail.com','5698486155','','Rukiya','6578623123','2024-06-17 18:38:04',1,NULL,1,'2024-06-19 21:41:37'),(3898,'Computer','Jamal','','priyonti1@gmail.com','','','ka','','2024-06-17 18:49:03',1,NULL,1,'2024-06-17 18:49:07'),(3899,'Kamal','Pamal','Lilo','kamal@gmail.com','1281542','','kamal ','15464654','2024-06-20 10:42:49',1,NULL,1,'2024-06-20 10:42:56'),(3900,'Kamal','Jamal','Minu','priyontika@gmail.com','15455999','','priya','54646','2024-06-20 11:57:19',1,NULL,NULL,NULL),(3901,'suraiya','','','','',NULL,'','','2024-06-26 17:17:13',1,NULL,NULL,NULL),(3902,'suraiya','','','','',NULL,'','','2024-06-26 17:27:34',1,NULL,NULL,NULL),(3903,'maksuda',' mack','jun','kamal@gmail.com','45654646','17194584161566.jpg','kamal','1223','2024-06-27 05:20:16',1,NULL,NULL,NULL),(3904,'Sharmin',' mack','','kamal@gmail.com','',NULL,'kamal','','2024-06-29 09:30:38',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_attendance`
--

DROP TABLE IF EXISTS `student_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `att_date` date DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_attendance`
--

LOCK TABLES `student_attendance` WRITE;
/*!40000 ALTER TABLE `student_attendance` DISABLE KEYS */;
INSERT INTO `student_attendance` VALUES (1,4444,'2024-06-18','09:24:51','14:30:51','','2024-06-18 22:29:15',0,NULL,1,'2024-06-19 07:19:58'),(2,4,'2024-06-18','09:24:55','14:30:55','Late','2024-06-18 22:32:46',0,NULL,NULL,NULL),(3,3902,'2024-06-26','17:27:53','00:00:00','P','2024-06-26 17:27:56',0,NULL,1,'2024-06-26 17:28:01'),(4,3902,'2024-06-26','17:28:12','02:00:00','Late','2024-06-26 17:28:15',0,'2024-06-26 17:28:36',1,NULL),(5,3902,'2024-06-28','18:32:23','00:00:00','P','2024-06-28 18:32:26',0,NULL,NULL,NULL),(6,3904,'2024-06-29','09:31:50','00:00:00','P','2024-06-29 09:31:53',0,NULL,NULL,NULL),(7,3904,'2024-06-29','09:54:38','00:00:00','P','2024-06-29 09:54:40',0,NULL,NULL,NULL),(8,3904,'2024-06-29','09:56:05','00:00:00','P','2024-06-29 09:56:36',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `student_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_details`
--

LOCK TABLES `student_details` WRITE;
/*!40000 ALTER TABLE `student_details` DISABLE KEYS */;
INSERT INTO `student_details` VALUES (1,'4889',1,2,NULL,458,2,'2024-06-17 20:22:21',1,NULL,1,'2024-06-19 08:02:28'),(2,'4888',1,2,NULL,4444,1,'2024-06-17 20:32:16',1,NULL,1,'2024-06-19 11:29:36'),(3,'4877',1,2,NULL,455,2,'2024-06-17 20:50:33',1,'2024-06-19 07:54:25',1,'2024-06-19 08:02:40'),(4,'123',2,2,NULL,458,1,'2024-06-18 07:55:44',0,NULL,1,'2024-06-19 08:02:34'),(5,'4444',3,2,NULL,4444,2,'2024-06-18 08:04:39',0,'2024-06-18 10:20:38',1,'2024-06-20 09:54:21'),(6,'123',3,2,NULL,4,2,'2024-06-18 18:39:09',0,NULL,1,'2024-06-20 10:15:40'),(7,'6',1,2,NULL,12,2,'2024-06-19 08:07:47',0,NULL,1,'2024-06-20 10:15:37'),(8,'7',2,2,NULL,5,2,'2024-06-19 08:54:16',0,NULL,1,'2024-06-20 10:15:31'),(9,'3900',2,2,NULL,458,2,'2024-06-20 11:57:44',0,NULL,1,'2024-06-20 13:02:27'),(10,'123',1,2,NULL,123,1,'2024-06-20 13:05:42',0,NULL,1,'2024-06-20 13:07:38'),(11,'123',1,2,NULL,123,1,'2024-06-20 17:38:34',0,NULL,NULL,NULL),(12,'3902',1,2,1,1,1,'2024-06-26 17:27:34',1,NULL,NULL,NULL),(13,'3903',1,2,1,12,1,'2024-06-27 05:20:16',1,NULL,NULL,NULL),(14,'3904',5,2,1,789,2,'2024-06-29 09:30:38',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `student_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_fees`
--

DROP TABLE IF EXISTS `student_fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `fees_date` date DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_fees`
--

LOCK TABLES `student_fees` WRITE;
/*!40000 ALTER TABLE `student_fees` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_fees_details`
--

DROP TABLE IF EXISTS `student_fees_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_fees_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_fees_id` int(11) DEFAULT NULL,
  `fees_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `fees_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_fees_details`
--

LOCK TABLES `student_fees_details` WRITE;
/*!40000 ALTER TABLE `student_fees_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_fees_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_marks`
--

DROP TABLE IF EXISTS `student_marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` varchar(255) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `total_marks` decimal(5,2) DEFAULT NULL,
  `pass_marks` decimal(5,2) DEFAULT NULL,
  `sub` decimal(5,2) DEFAULT NULL,
  `obj` decimal(5,2) DEFAULT NULL,
  `prac` decimal(5,2) DEFAULT NULL,
  `gp` decimal(5,2) DEFAULT NULL,
  `gpl` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_marks`
--

LOCK TABLES `student_marks` WRITE;
/*!40000 ALTER TABLE `student_marks` DISABLE KEYS */;
INSERT INTO `student_marks` VALUES (1,'4',11,1,2,1,1,150.00,15.00,0.00,50.00,0.00,0.00,'','2024-06-20 17:40:35',0,NULL,NULL,NULL),(2,'4',11,1,2,2,3,150.00,15.00,50.00,30.00,0.00,4.00,'','2024-06-20 17:57:41',0,'2024-06-20 18:00:36',1,'2024-06-20 18:27:48');
/*!40000 ALTER TABLE `student_marks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) DEFAULT NULL,
  `subject_type` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,'Bangla','','2024-06-15 07:29:16',1,'2024-06-15 07:34:19',1,'2024-06-15 07:34:25'),(2,'Bangla','','2024-06-15 07:40:02',1,'2024-06-15 07:40:39',1,'2024-06-15 07:40:44'),(3,'Bangla','1','2024-06-19 21:12:07',1,'2024-06-20 19:01:57',1,NULL),(4,'English','1','2024-06-20 13:00:31',1,'2024-06-29 08:10:55',1,NULL),(5,'Mathematics','1','2024-06-20 19:01:30',1,'2024-06-29 08:11:01',1,NULL),(6,'Science','1','2024-06-29 08:10:40',1,NULL,NULL,NULL),(7,'Social-Science','1','2024-06-29 08:11:29',1,NULL,NULL,NULL),(8,'Religion','1','2024-06-29 09:16:20',1,NULL,NULL,NULL),(9,'ICT','1','2024-06-29 09:16:42',1,NULL,NULL,NULL),(10,'Arts & Crafts','0','2024-06-29 09:24:05',1,NULL,NULL,NULL),(11,'Work & Life Oriented Education','0','2024-06-29 09:24:54',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `assigned_class` int(11) DEFAULT NULL,
  `joining` date DEFAULT NULL,
  `resign` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'suraiya','sogir','','','','','Bba',0,'0000-00-00','0000-00-00',0,1,'2024-06-26 17:30:39',1,NULL,1,'2024-06-29 08:17:09'),(2,'Sharmin',' mack','Begum','kamal@gmail.com','45654646','','BBA',4,'0000-00-00','0000-00-00',12,1,'2024-06-29 08:17:46',1,NULL,NULL,NULL),(3,'kamal',' mack','jun','kamal@gmail.com','45654646','','BBA',0,'0000-00-00','0000-00-00',2,1,'2024-06-29 08:21:01',1,NULL,NULL,NULL),(4,'Jamal','jack','Marry','kamal@gmail.com','45654646','','BBA',2,'0000-00-00','0000-00-00',3,3,'2024-06-29 08:21:45',1,NULL,NULL,NULL),(5,'Sohana','denny','Rina','gorge@gmail.com','45654646','','BBA',2,'0000-00-00','0000-00-00',2,4,'2024-06-29 08:23:16',1,'2024-06-29 08:27:15',1,NULL),(6,'Sam','Ron','Rony','sam@gmail.com','45654646','','BBA',3,'0000-00-00','0000-00-00',1,4,'2024-06-29 08:24:22',1,NULL,NULL,NULL),(7,'Priya','Rahim','Rahima','priya@gmail.com','45654646','','BBA',5,'0000-00-00','0000-00-00',3,2,'2024-06-29 08:25:35',1,NULL,NULL,NULL),(8,'Reema','Jony','Jamila','ben@gmail.com','45654648','','BBA',2,'0000-00-00','0000-00-00',1,3,'2024-06-29 08:27:02',1,NULL,NULL,NULL),(9,'Vim',' mack','jun','gorge@gmail.com','45654646','','BBA',2,'0000-00-00','0000-00-00',1,2,'2024-06-29 09:40:21',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_attendance`
--

DROP TABLE IF EXISTS `teacher_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) DEFAULT NULL,
  `att_date` date DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_attendance`
--

LOCK TABLES `teacher_attendance` WRITE;
/*!40000 ALTER TABLE `teacher_attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_attendance` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-29  1:59:39
