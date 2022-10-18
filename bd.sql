-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: usuario
-- ------------------------------------------------------
-- Server version       5.5.5-10.4.24-MariaDB

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
-- Table structure for table `andar`
--

DROP TABLE IF EXISTS `andar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `andar` (
  `id` int(11) NOT NULL,
  `andar` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `andar`
--

LOCK TABLES `andar` WRITE;
/*!40000 ALTER TABLE `andar` DISABLE KEYS */;
INSERT INTO `andar` VALUES (1,'1┬░ andar'),(2,'2┬░ andar'),(3,'3┬░ andar');
/*!40000 ALTER TABLE `andar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locais`
--

DROP TABLE IF EXISTS `locais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricaofisica` varchar(500) NOT NULL,
  `funcionarios` varchar(200) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `idandar` int(11) NOT NULL,
  `bloco` varchar(20) NOT NULL,
  `alunos` varchar(200) NOT NULL,
  `rota` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locais`
--

LOCK TABLES `locais` WRITE;
/*!40000 ALTER TABLE `locais` DISABLE KEYS */;
INSERT INTO `locais` VALUES (8,'Ap├│s chegar ao hall, a direita temos o sisae, \r\nseguindo reto, ao final do corredor, ap├│s os \r\nbanheiros, temos a biblioteca. A entrada se da \r\npor uma porta de vidro.','Bibliotecarios','Biblioteca','Local dedicado a estudo e leitura',1,'1┬░ bloco','Aberto a todos os alunos ','');
/*!40000 ALTER TABLE `locais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `nome` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admuser` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('Marcos dos Santos Luiz','marcos','marcodossantosluiz111@gmail.com','$2y$10$1j0K4rwWVtApbfSdADPbR.TD9njaePyC.ijb2S2KlMbt2R6WKdeP2',14,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarioimagem`
--

DROP TABLE IF EXISTS `usuarioimagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarioimagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userimagem` varchar(200) NOT NULL DEFAULT '../assets/images/userimg.png',
  `iduser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarioimagem`
--

LOCK TABLES `usuarioimagem` WRITE;
/*!40000 ALTER TABLE `usuarioimagem` DISABLE KEYS */;
INSERT INTO `usuarioimagem` VALUES (19,'/assets/images/userimg/user-img-14.jpeg',14),(20,'/assets/images/userimg/user-img-14.jpeg',14),(21,'/assets/images/userimg/user-img-14.jpeg',14),(22,'/assets/images/userimg/user-img-14.jpeg',14),(23,'/assets/images/userimg/user-img-14.jpeg',14);
/*!40000 ALTER TABLE `usuarioimagem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-17 20:23:16