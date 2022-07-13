-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: dragon_ball_z_db
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `campus_table`
--

DROP TABLE IF EXISTS `campus_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campus_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `campus_table_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campus_table`
--

LOCK TABLES `campus_table` WRITE;
/*!40000 ALTER TABLE `campus_table` DISABLE KEYS */;
INSERT INTO `campus_table` VALUES (1,'Turtle School','Antwerpen'),(2,'Crane School','Gent'),(3,'Orin Temple','Brussel'),(4,'Satan Castle','Luik'),(5,'King Chappa\'s Temple','Brugge');
/*!40000 ALTER TABLE `campus_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_table`
--

DROP TABLE IF EXISTS `group_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_table_id_uindex` (`id`),
  KEY `group_table_teacher_table_id_fk` (`teacher_id`),
  KEY `group_table_campus_table_id_fk` (`campus_id`),
  CONSTRAINT `group_table_campus_table_id_fk` FOREIGN KEY (`campus_id`) REFERENCES `campus_table` (`id`) ON DELETE CASCADE,
  CONSTRAINT `group_table_student_table_group_id_fk` FOREIGN KEY (`id`) REFERENCES `student_table` (`group_id`) ON DELETE CASCADE,
  CONSTRAINT `group_table_teacher_table_id_fk` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_table` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_table`
--

LOCK TABLES `group_table` WRITE;
/*!40000 ALTER TABLE `group_table` DISABLE KEYS */;
INSERT INTO `group_table` VALUES (1,'Dragon Team',1,1),(2,'Frieza Force',3,3),(3,'Red Ribbon Army',2,2),(4,'Organization of Babidi',4,4),(5,'Team Universe 6',1,5),(6,'Pride Troopers',5,2),(7,'Dark Empire',2,4),(8,'Galactic Patrol',4,1),(9,'Earth Police',2,1),(10,'Monster Island Rangers',1,3);
/*!40000 ALTER TABLE `group_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_table`
--

DROP TABLE IF EXISTS `student_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_table_id_uindex` (`id`),
  KEY `student_table_group_table_id_fk` (`group_id`),
  CONSTRAINT `student_table_group_table_id_fk` FOREIGN KEY (`group_id`) REFERENCES `group_table` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_table`
--

LOCK TABLES `student_table` WRITE;
/*!40000 ALTER TABLE `student_table` DISABLE KEYS */;
INSERT INTO `student_table` VALUES (1,'Goku','goku@dragonteam.com',1),(5,'Goten','goten@dragonteam.com',1),(6,'Vegeta','vegeta@dragonteam.com',1),(7,'Gohan','gohan@dragonteam.com',1),(8,'Future Trunks','futuretrunks@dragonteam.com',1),(9,'Frost','frost@universe6.com',5),(10,'Botamo','botamo@universe6.com',5),(11,'Cabba','cabba@universe6.com',5),(12,'Hit','hit@universe6.com',5),(13,'Mira','mira@darkempire.com',7),(14,'Dabura','dabura@darkempire.com',7),(15,'Towa','towa@darkempire.com',7),(16,'Mechikabura','mechikabura@darkempire.com',7),(17,'Putine','putine@darkempire.com',7),(18,'Frieza','frieza@friezaforce.com',2),(19,'Nappa','nappa@friezaforce.com',2),(20,'Bardock','bardock@friezaforce.com',2),(21,'Dr.Gero','gero@redribbon.com',3),(22,'Colonel Silver','silver@redribbon.com',3),(23,'General White','white@redribbon.com',3),(24,'Ninja Murasaki','murasaki@redribbon.com',3),(25,'Dr.Hedo','hedo@redribbon.com',3),(26,'Top','top@pridetrooper.com',6),(27,'Jiren','jiren@pridetrooper.com',6),(28,'Dyspo','dyspo@pridetrooper.com',6),(29,'Kahseral','kahseral@pridetrooper.com',6),(30,'Tupper','tupper@pridetrooper.com',6),(31,'Bibidi','bibidi@oorgbabidi',4),(32,'Babidi','babidi@oorgbabidi.com',4),(33,'Dabura','dabura@oorgbabidi.com',4),(34,'Majin Vegeta','majinvegeta@oorgbabidi.com',4),(35,'Buu','buu@oorgbabidi.com',4),(36,'Galactic King','king@patrol.com',8),(37,'Jaco','jaco@patrol.com',8),(38,'Jiya','jiya@patrol.com',8),(39,'Merus','merus@patrol.com',8),(40,'Irico','irico@patrol.com',8),(41,'Walter','walter@earthpolice.com',9),(42,'Kaori','kaori@earthpolice.com',9),(43,'Sanji','sanji@earthpolice.com',9),(44,'Tomato','tomato@earthpolice.com',9),(45,'Traffic Agent Lady','tal@earthpolice.com',9),(46,'Marron','walter@monsterislandrangers.com',10),(47,'Android 16','android16@monsterislandrangers.com',10),(48,'Android 17','android17@monsterislandrangers.com',10);
/*!40000 ALTER TABLE `student_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_table`
--

DROP TABLE IF EXISTS `teacher_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teacher_table_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_table`
--

LOCK TABLES `teacher_table` WRITE;
/*!40000 ALTER TABLE `teacher_table` DISABLE KEYS */;
INSERT INTO `teacher_table` VALUES (1,'Master Roshi','masterroshi@teacher.com'),(2,'Grandpa Gohan','grandpagohan@teacher.com'),(3,'Korin','korin@teacher.com'),(4,'Mister Popo','misterpopo@teacher.com'),(5,'King Kai','kingkai@teacher.com');
/*!40000 ALTER TABLE `teacher_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-13 16:36:13
