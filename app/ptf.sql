-- MySQL dump 10.13  Distrib 5.7.10, for osx10.11 (x86_64)
--
-- Host: localhost    Database: ptf
-- ------------------------------------------------------
-- Server version	5.7.10

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
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) DEFAULT NULL,
  `age` int(4) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `experience` varchar(3) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicant`
--

LOCK TABLES `applicant` WRITE;
/*!40000 ALTER TABLE `applicant` DISABLE KEYS */;
/*!40000 ALTER TABLE `applicant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `work` varchar(50) DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `location` varchar(2000) DEFAULT NULL,
  `scope` varchar(2000) DEFAULT NULL,
  `addinfo` varchar(2000) DEFAULT NULL,
  `jobcat` varchar(100) DEFAULT NULL,
  `loccat` varchar(100) DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES ('Mechanics','Tools Sdn.Bhd.',10,'Taman 123,\r\nJalan 1/23,\r\nTaman Area 123,\r\n52100 Kuala Lumpur.','Employee will be hired as an assistant','Starts at 10.00am to 2.00pm','Services','Kuala Lumpur','2016-02-02',1,1),('Programmer','Pocketpixel',150,'jdhajhc jksdhkjnknfnsfkjsnf ajfhdsljfhdlsjfhsdp','programming user requirement big data analysis social media research','were looking for someone whos capable and smart. and cool. and nice.','Services','Selangor','2016-02-15',3,3),('Clerk','shopshop',15,'Jalan Raya Besar\r\nJalan 1/1\r\nJalan Besar\r\n55000 Kuala Lumpur','Work as a clerk','needs to be 18 years old or older.','Services','Kuala Lumpur','2016-02-15',4,4),('Dispatch','Speedy Co.',20,'Taman Besar\r\nJalan 4/4\r\nTaman Jalan Besar\r\n58100 Kuala Lumpur','Work as a dispatcher','The person needs to have own vehicle','Services','Kuala Lumpur','2016-02-15',5,5),('adsadsa','dsadsadsa',1231,'dsadsadsa','dsadsadsa','sadsadsa','Services','Kuala Lumpur','2016-03-10',11,2),('asdsa','dasd',2131,'asdsa','dasda','dasdsa','Services','Kuala Lumpur','2016-03-14',13,2);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `email` varchar(254) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('deud@deud.com','admin','admindude','2016-02-16',1,'employer'),('farid@gmail.com','farid','123abc','2016-02-26',2,'employer'),('ali@yahoo.com','ali','gcb123','2016-02-26',3,'employer'),('abu@yahoo.com','abu','abu123','2016-02-26',4,'employer'),('zack@yahoo.com','zack','zac123','2016-02-26',5,'employer');
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

-- Dump completed on 2016-03-15 14:53:48
