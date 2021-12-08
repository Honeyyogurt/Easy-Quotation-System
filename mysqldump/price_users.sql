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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `password_UNIQUE` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'happy123','$2y$10$pqv1b2qeDZ.i2ug/LLYF2eGVFURWZYf01S97TY6xlVpAIlUXwV8te',''),(2,'raccoon','$2y$10$XClqD1DGj8QuHUBJxFpDwOlJLFCIDlcc44g5jtX6BgGtggDqCcqrC',NULL),(3,'kangaroo','$2y$10$YqeGPtzoJlMWPSrTxEFs4OMLBUjLm0bhH3PWHB/mFKsqCQ4HERuxO',NULL),(4,'teddyyy','$2y$10$0HcyLSZM18YZBmkUCCaKnOfcXra2YBwTSUmRjjfqOGjpSZI6qvBPO',NULL),(5,'teddyyyyy','$2y$10$Y3dONIOaEY2unnCTXI6NDeh/SNbAzsP/jV4lXOJJoyQK/QOUEaJKC',NULL),(6,'teddyyyyyy','$2y$10$K/yUxQy4ksVtxXsuQDzDhuxjRyla8XGk8zEJe0dQWSXlP4ev8JaTC',NULL),(7,'qwerqwer','$2y$10$diW0GQO0TuOY5ejtGsagReTcWll4je0Kxcj9rLczIuyKjr56LlLjK',NULL),(8,'qwer01','$2y$10$P2.iGrEjJGFw8jBnvNqpOeZhx8j8sGC7e7uUJlntp5a6ziMmxrny2','staff'),(9,'qwer02','$2y$10$HBgmkUvmUm25NU47a3H86etUI7CgsOxiYwBE.Zrc8V069KXFHDFSS','customer'),(10,'kangaroot','$2y$10$jMx/XKFTqbamDE82kOt4v.1GNqp2UihKNZk8eu5OPli1EEEEHXJm.','staff'),(11,'kangaroott','$2y$10$MuhQnhfbAF66ewh68BJLaOHbWtHz9M8Otn8XRflj.ihdVGmU/aly2','customer'),(12,'qwer03','$2y$10$evrJVRtPh6SJI2l632DRrexzKjwPei4Ll.tYh5Xt7orpxT0MT2TfO','staff');
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

-- Dump completed on 2021-11-29 11:48:30
