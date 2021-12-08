-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: price
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` int unsigned DEFAULT NULL,
  `quantity` int unsigned DEFAULT NULL,
  `username` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (5,'Smart watch',30,11,'happy123'),(6,'Smart watch',20,11,'happy123'),(7,'Smart watch',30,11,'happy123'),(8,'Smart watch',70,11,'happy123'),(9,'Smart watch',77,11,'happy123'),(10,'Smart watch',22,11,'happy123'),(11,'Smart watch',10,3,'happy123'),(12,'Digital Camera',22,1,'happy123'),(13,'Digital Camera',10,5,'happy123'),(14,'Smart watch',2,22,'happy123'),(15,'Wallet',10,33,'happy123'),(16,'Headphones',333,44,'happy123'),(17,'Digital Camera',30,55,'happy123'),(18,'Smart watch',22,2,'happy123'),(25,'Smart watch',NULL,11,'happy123'),(26,'Wallet',NULL,11,'happy123'),(27,'Headphones',NULL,22,'happy123'),(28,'Digital Camera',NULL,22,'happy123'),(29,'Smart watch',NULL,11,'happy123'),(30,'Wallet',NULL,11,'happy123'),(31,'Headphones',NULL,22,'happy123'),(32,'Digital Camera',NULL,22,'happy123'),(33,'Smart watch',33,111,'qwer02'),(34,'Wallet',33,111,'qwer02'),(35,'Headphones',22,111,'qwer02'),(36,'Smart watch',NULL,33,'qwer02'),(37,'Wallet',NULL,33,'qwer02'),(38,'Headphones',NULL,33,'qwer02'),(39,'Digital Camera',NULL,33,'qwer02'),(40,'Smart watch',2,67,'qwer02'),(41,'Wallet',222,67,'qwer02'),(42,'Headphones',2,67,'qwer02'),(43,'Digital Camera',NULL,0,'qwer02'),(44,'Smart watch',NULL,10,'kangaroott');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-29 11:48:29
