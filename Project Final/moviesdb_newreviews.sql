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
-- Table structure for table `newreviews`
--

DROP TABLE IF EXISTS `newreviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newreviews` (
  `movie_name` varchar(50) NOT NULL,
  `review` longtext,
  `user_name` varchar(45) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `is_member` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newreviews`
--

LOCK TABLES `newreviews` WRITE;
/*!40000 ALTER TABLE `newreviews` DISABLE KEYS */;
INSERT INTO `newreviews` VALUES ('Deadpool','My favourite movie so far !!!','Mike Zeakis','19/01/2021',10,1,0),('The%20Godfather','The best movie by far !!!\r\n','Stathis Tsi','19/01/2021',10,1,1),('The%20Godfather','One of my favourites !!','Kwstas','19/01/2021',9.5,0,-1),('The%20Godfather','Very good movie...','Kapa ','19/01/2021',8.5,1,2),('The%20Godfather','Niceeee ksks !!','Pantsoulhs ','19/01/2021',9.2,1,3),('Gabriel%27s%20Inferno%20Part%20III','Interesting movie. I liked it !!','Mike Zeakis','19/01/2021',7.5,1,0),('The%20Godfather','','Mike','19/01/2021',9,1,0),('The%20Godfather','the best !!','Stathis ','19/01/2021',10,1,1);
/*!40000 ALTER TABLE `newreviews` ENABLE KEYS */;
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
