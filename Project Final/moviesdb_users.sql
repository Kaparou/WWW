-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: moviesdb
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(65) NOT NULL,
  `fullName` varchar(80) DEFAULT NULL,
  `birthday` varchar(60) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `favmovie` varchar(45) DEFAULT NULL,
  `favtvshow` varchar(45) DEFAULT NULL,
  `favactor` varchar(45) DEFAULT NULL,
  `favdirector` varchar(45) DEFAULT NULL,
  `followers` int DEFAULT NULL,
  `followin` int DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  `id` int NOT NULL,
  `following_id` longtext,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('mikeze@gmai.com','1234','Mike','1997-11-16','none','Every Deadpool','Prison break','rayn reynold','none',2,0,'action, comedy',0,'1'),('stathis@gmail.com','12345','Stathis ','2023-07-05','none','The Godfather','Black mirror','Cesar Romero','Nolan',60,0,'Horror, action',1,NULL),('kaparou@gmail.com','asdf','Kapa ','1997-11-25','none','Donnie Darko ','Bojack Horseman','Bojack Horseman','Oikonomidis',101,0,'Drama, greek movies ',2,NULL),('pantsos@gmail.com','ksks','Pantsoulhs ','NN/NN/NN','none','the witcher','the witcher','The witcher','none',0,0,'Romance, magic',3,NULL),('sgf@mail.com','123','whahah','NN/NN/NN','none','none','none','none','none',0,0,'none',4,'10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-19 20:21:49
