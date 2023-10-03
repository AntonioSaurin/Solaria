-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbsolaria
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
-- Current Database: `dbsolaria`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `dbsolaria` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbsolaria`;

--
-- Table structure for table `adress`
--

DROP TABLE IF EXISTS `adress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adress` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CEP` varchar(9) NOT NULL,
  `city` int(11) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`,`CEP`),
  KEY `city` (`city`),
  CONSTRAINT `adress_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adress`
--

LOCK TABLES `adress` WRITE;
/*!40000 ALTER TABLE `adress` DISABLE KEYS */;
/*!40000 ALTER TABLE `adress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(100) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `state` (`state`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state`) REFERENCES `state` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `donationType` enum('money','toys','clothes','products') DEFAULT NULL,
  `donationDate` date DEFAULT NULL,
  `donator` int(11) DEFAULT NULL,
  `institution` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `donator` (`donator`),
  KEY `institution` (`institution`),
  CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`donator`) REFERENCES `donator` (`ID`),
  CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`institution`) REFERENCES `institution` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donation`
--

LOCK TABLES `donation` WRITE;
/*!40000 ALTER TABLE `donation` DISABLE KEYS */;
/*!40000 ALTER TABLE `donation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donator`
--

DROP TABLE IF EXISTS `donator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donator` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `accountID` (`accountID`),
  CONSTRAINT `donator_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `useraccount` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donator`
--

LOCK TABLES `donator` WRITE;
/*!40000 ALTER TABLE `donator` DISABLE KEYS */;
/*!40000 ALTER TABLE `donator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institution`
--

DROP TABLE IF EXISTS `institution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institution` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) DEFAULT NULL,
  `CNPJ` varchar(18) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `accountID` (`accountID`),
  CONSTRAINT `institution_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `useraccount` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institution`
--

LOCK TABLES `institution` WRITE;
/*!40000 ALTER TABLE `institution` DISABLE KEYS */;
/*!40000 ALTER TABLE `institution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `msgId` int(11) NOT NULL AUTO_INCREMENT,
  `incomingMsgID` int(255) NOT NULL,
  `outgoingMsgID` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msgId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,739016030,1534780869,'as'),(2,739016030,942035474,'oie'),(3,942035474,1534780869,'wowo'),(4,942035474,739016030,'salve'),(5,739016030,1534780869,'pau'),(6,942035474,739016030,'eae mano'),(7,942035474,739016030,'eae'),(8,942035474,739016030,'salve'),(9,942035474,739016030,'me responde'),(10,1534780869,739016030,'pedro'),(11,942035474,739016030,'ou'),(12,942035474,739016030,'eiei'),(13,942035474,739016030,'asa');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone`
--

DROP TABLE IF EXISTS `phone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phone` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DDD` varchar(3) DEFAULT NULL,
  `phoneNumber` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone`
--

LOCK TABLES `phone` WRITE;
/*!40000 ALTER TABLE `phone` DISABLE KEYS */;
/*!40000 ALTER TABLE `phone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `photoName` varchar(255) DEFAULT NULL,
  `photoFormat` varchar(5) DEFAULT NULL,
  `photeSize` double DEFAULT NULL,
  `photoPath` varchar(255) DEFAULT NULL,
  `photoType` enum('profile','banner','post') DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) DEFAULT NULL,
  `acronym` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useraccount`
--

DROP TABLE IF EXISTS `useraccount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useraccount` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueID` int(255) NOT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `userPhone` int(11) DEFAULT NULL,
  `userPhoto` int(11) DEFAULT NULL,
  `userAdress` int(11) DEFAULT NULL,
  `userStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `userEmail` (`userEmail`),
  UNIQUE KEY `userPhoto` (`userPhoto`),
  KEY `userPhone` (`userPhone`),
  KEY `userAdress` (`userAdress`),
  CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`userPhone`) REFERENCES `phone` (`ID`),
  CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`userPhoto`) REFERENCES `photo` (`ID`),
  CONSTRAINT `useraccount_ibfk_3` FOREIGN KEY (`userAdress`) REFERENCES `adress` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useraccount`
--

LOCK TABLES `useraccount` WRITE;
/*!40000 ALTER TABLE `useraccount` DISABLE KEYS */;
INSERT INTO `useraccount` VALUES (1,739016030,'Gabriel','gabriel@gmail.com','647431b5ca55b04fdf3c2fce31ef1915',NULL,NULL,NULL,'Active now'),(2,670046181,'Gabriel','gabriel1@gmail.com1','1ebb685a6d8ec313cef37936bbbbf21d',NULL,NULL,NULL,'Offline now'),(3,1534780869,'Pedro','pedro@gmail.com','c6cc8094c2dc07b700ffcc36d64e2138',NULL,NULL,NULL,'Offline now'),(4,942035474,'Renan','renan@gmail.com','1db68d9861e914b9a2dc65ca868c6d1f',NULL,NULL,NULL,'Offline now'),(5,1649259315,'Luiz ','luiz@gmail.com','77949c9f02621a4c85964be115a9dcc9',NULL,NULL,NULL,'Offline now'),(6,1111969834,'Rola','rola@gmail.com','a2765b6397d2c3e654b26834f393718a',NULL,NULL,NULL,'Active now');
/*!40000 ALTER TABLE `useraccount` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-02  9:52:28
