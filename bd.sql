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
INSERT INTO `andar` VALUES (1,'1┬░  andar'),(2,'2┬░  andar'),(3,'3┬░ andar');
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
  `descricaofisica` varchar(1000) NOT NULL,
  `funcionarios` varchar(200) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `funcao` varchar(200) NOT NULL,
  `idandar` int(11) NOT NULL,
  `bloco` varchar(20) NOT NULL,
  `alunos` varchar(200) NOT NULL,
  `rota` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locais`
--

LOCK TABLES `locais` WRITE;
/*!40000 ALTER TABLE `locais` DISABLE KEYS */;
INSERT INTO `locais` VALUES (9,'Ap├│s entrar pela porta de vidro na entrada, \r\nchegamos ao hall. O hall ├⌐ relativamente \r\nmuito espa├ºoso. Na parede direita, logo na \r\nentrada temos a recep├º├úo, mais a frente \r\nainda na parede direita, h├í bancos e uma \r\nmesinha, a frente a direita temos uma entrada \r\nque permite acesso a outros locais do ifc. Mais \r\na frente ainda na  parede direita temos v├írios \r\narm├írios que os \r\nestudantes utilizam para guardar seus \r\nmateriais. Na parede esquerda, h├í mais \r\narm├írios e tamb├⌐m um pouco distante da \r\nparede temos outra mesinha. Mais a frente \r\nna parede dos fundos, cujo se encontra \r\npr├│ximo a ├írea do gr├¬mio estudantil temos \r\npufs de bancos pros alunos sentarem.','Todos os professores e servidores frequentam \r\nesse local.','Hall','Receber os alunos que entram no campus do ifc-cas',1,'1┬░ bloco','Todos os discentes frequentam esse local.','Primeiro local ao entrar no ifc-cas.');
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('Marcos dos Santos Luiz','marcola','marcodossantosluiz@gmail.com','$2y$10$xajfcEU9UTV9.Db2kX3UoucLBRnxVlBGxYrzjpCxQ6gY/SfB3tL02',28,1),('','marcolaaaaaaaa','m@gmail.com','$2y$10$tVoAY1sLzmkarDsq2gajN.2mzHhLqaFseq3KzEI49M32uINAGmjai',29,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarioimagem`
--

LOCK TABLES `usuarioimagem` WRITE;
/*!40000 ALTER TABLE `usuarioimagem` DISABLE KEYS */;
INSERT INTO `usuarioimagem` VALUES (32,'user-img-28.png',28);
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

-- Dump completed on 2022-10-19 23:09:02
