-- MySQL dump 10.13  Distrib 9.1.0, for Win64 (x86_64)
--
-- Host: localhost    Database: donkeyrent
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id_custom` int NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_custom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insurance`
--

DROP TABLE IF EXISTS `insurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `insurance` (
  `id_insurance` int NOT NULL AUTO_INCREMENT,
  `typeInsurance` varchar(255) DEFAULT NULL,
  `priceInsurance` float DEFAULT NULL,
  PRIMARY KEY (`id_insurance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insurance`
--

LOCK TABLES `insurance` WRITE;
/*!40000 ALTER TABLE `insurance` DISABLE KEYS */;
/*!40000 ALTER TABLE `insurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `options` (
  `id_option` int NOT NULL AUTO_INCREMENT,
  `optionName` varchar(255) DEFAULT NULL,
  `priceOption` float DEFAULT NULL,
  PRIMARY KEY (`id_option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resaoption`
--

DROP TABLE IF EXISTS `resaoption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resaoption` (
  `id_resaOption` int NOT NULL AUTO_INCREMENT,
  `idFk_option` int DEFAULT NULL,
  `idFk_resa` int DEFAULT NULL,
  PRIMARY KEY (`id_resaOption`),
  KEY `idFk_option` (`idFk_option`),
  KEY `idFk_resa` (`idFk_resa`),
  CONSTRAINT `resaoption_ibfk_1` FOREIGN KEY (`idFk_option`) REFERENCES `options` (`id_option`),
  CONSTRAINT `resaoption_ibfk_2` FOREIGN KEY (`idFk_resa`) REFERENCES `reservation` (`id_resa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resaoption`
--

LOCK TABLES `resaoption` WRITE;
/*!40000 ALTER TABLE `resaoption` DISABLE KEYS */;
/*!40000 ALTER TABLE `resaoption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `id_resa` int NOT NULL AUTO_INCREMENT,
  `dateResa` date DEFAULT NULL,
  `dateDeparture` date DEFAULT NULL,
  `departureTime` time DEFAULT NULL,
  `dateArrival` date DEFAULT NULL,
  `arrivalTime` time DEFAULT NULL,
  `idFk_custom` int DEFAULT NULL,
  `idFk_insurance` int DEFAULT NULL,
  `idFk_vehicle` int DEFAULT NULL,
  PRIMARY KEY (`id_resa`),
  KEY `idFk_custom` (`idFk_custom`),
  KEY `idFk_insurance` (`idFk_insurance`),
  KEY `idFk_vehicle` (`idFk_vehicle`),
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idFk_custom`) REFERENCES `customer` (`id_custom`),
  CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idFk_insurance`) REFERENCES `insurance` (`id_insurance`),
  CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`idFk_vehicle`) REFERENCES `vehicle` (`id_vehicle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicle` (
  `id_vehicle` int NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `doors` int DEFAULT NULL,
  `seats` int DEFAULT NULL,
  `gearBox` varchar(20) DEFAULT NULL,
  `energy` varchar(20) DEFAULT NULL,
  `airCond` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `registration` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `modelYear` int DEFAULT NULL,
  `km` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_vehicle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle`
--

LOCK TABLES `vehicle` WRITE;
/*!40000 ALTER TABLE `vehicle` DISABLE KEYS */;
INSERT INTO `vehicle` VALUES (1,'on','RENAULT','MEGANE',6,5,'on','on','on',250,'Break-renault-megane.webp','PE-214-KE','on',2024,10000,NULL,NULL),(2,'on','RENAULT','TRAFIC',2,3,'on','on','on',250,'Fourgon-renault-trafic.webp','YM-957-EK','on',2024,20000,NULL,NULL);
/*!40000 ALTER TABLE `vehicle` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-19 11:43:10
