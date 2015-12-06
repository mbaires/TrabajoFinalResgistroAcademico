-- MySQL dump 10.8
--
-- Host: localhost    Database: sistemaslibre1
-- ------------------------------------------------------
-- Server version	5.6.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;

--
-- Current Database: `sistemaslibre1`
--

USE `sistemaslibre1`;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `id` int(3) auto_increment,
  `NIE` varchar(6),
  `Nombre` varchar(100),
  `Apellidos` varchar(100),
  `FechaNaci` date,
  `Genero` varchar(1),
  `celencargado` varchar(8),
  `direccion` varchar(350),
  `nomencargado` varchar(150),
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `alumno`
--


/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
LOCK TABLES `alumno` WRITE;
INSERT INTO `alumno` VALUES (1,'12','jkjh','hjhjh','2022-02-02','f','222222','2222','22222'),(2,'0','mmm','mmmm','2001-02-02','f','22222222','22222','2222222'),(3,'0','uuu','uuuu','2000-02-03','f','5555','hgfgvg','gggg'),(4,'0','nnn','n','0000-00-00','','n','nnnn','nnnn'),(5,'0','maira','maira','1992-10-02','f','7852-658','mimmmm','Clariza Estella Baires'),(6,'1','mmm','jjj','0022-02-22','f','2222-222','2222','2222'),(7,'1','44444','444','4444-04-04','f','4444-444','444444','44444'),(8,'8','MAIRA','BAIRES','1992-05-15','f','7927-693','COLONIA SANTA CECILIA','CLARIZA ESTELLA BAIRES'),(9,'9','MM','MM','0000-00-00','m','MM','M','M'),(10,'10','CRIS','CRIS','0000-00-00','f','2222-222','2222222','222222'),(11,'0','MMM','MMM','0222-02-02','m','??444','444','4444'),(12,'0','MAMAM','MMAMAM','0002-02-02','m','2222-2','222','2222'),(13,'N13','M2','2','0022-02-22','m','1111','111','111');
UNLOCK TABLES;
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;

--
-- Table structure for table `maestro`
--

DROP TABLE IF EXISTS `maestro`;
CREATE TABLE `maestro` (
  `id` int(3) auto_increment,
  `NombreDocente` varchar(150),
  `ApellidoDocente` varchar(150),
  `FechaNaciDo` date,
  `GeneroDoc` varchar(1),
  `Telefono` varchar(9),
  `DireccionDoce` varchar(350),
  `Escalafon` varchar(15),
  `Turno` varchar(50),
  `Correo` varchar(100),
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `maestro`
--


/*!40000 ALTER TABLE `maestro` DISABLE KEYS */;
LOCK TABLES `maestro` WRITE;
INSERT INTO `maestro` VALUES (1,'mamamma','mamama','2014-04-04','H','222222','22222','SI','Matutino','55555@ssss.com'),(2,'mmm','mmm','0002-02-02','M','25555','5555','SI','Matutino','55555@ssss.com'),(3,'m','m','0000-00-00','M','222222','m','','Matutino','55555@ssss.com'),(4,'m','m','0000-00-00','','m','mm','','Matutino','55555@ssss.com'),(5,'m','m','0000-00-00','M','m','mm','','Matutino','55555@ssss.com'),(6,'m','m','0000-00-00','M','m','m','','Matutino','55555@ssss.com'),(7,'m','m','0000-00-00','M','m','m','','Matutino','55555@ssss.com'),(8,'hhh','hhhh','0000-00-00','H','h','h','','','55555@ssss.com'),(9,'m','m','0000-00-00','M','m','m','','Matutino','55555@ssss.com'),(10,'mmmmmmmmmmmmmm','mmmmmm','0000-00-00','M','mmm','mmm','','','55555@ssss.com'),(11,'vvv','v','0000-00-00','','v','v','','','55555@ssss.com'),(12,'m','m','0000-00-00','M','m','m','','Matutino','55555@ssss.com'),(13,'hhh','h','0000-00-00','H','h','h','','','55555@ssss.com'),(14,'y','y','0000-00-00','','y','yy','','','55555@ssss.com'),(15,'n','n','0000-00-00','','n','n','NO','','55555@ssss.com'),(16,'111','1111','2222-02-02','M','5555-5555','5555','5555','Matutino','22222@mmmm.com'),(17,'m','m','0002-02-02','M','2222-2222','222222','2222','Matutino','22222@mmmm.com'),(18,'maira','maira','0020-02-02','M','2222-2222','22222','222','Matutino','22222@mmmm.com'),(19,'1','11','0000-00-00','','1','111','1111','Matutino','22222@mmmm.com'),(20,'mm','mmm','2222-02-02','M','2222-222','22222','222222','Matutino','22222@mmmm.com');
UNLOCK TABLES;
/*!40000 ALTER TABLE `maestro` ENABLE KEYS */;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `idmateria` int(3) DEFAULT '0',
  `asignatura` varchar(150),
  PRIMARY KEY (`idmateria`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `materias`
--


/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
LOCK TABLES `materias` WRITE;
INSERT INTO `materias` VALUES (1,'mmmmm'),(2,'Matematica'),(3,'Lenguaje');
UNLOCK TABLES;
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `idnota` int(3) DEFAULT '0',
  `nota1` decimal(3,0),
  `nota2` decimal(3,0),
  `nota3` decimal(3,0),
  `promedio` decimal(3,0),
  PRIMARY KEY (`idnota`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `notas`
--


/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
LOCK TABLES `notas` WRITE;
INSERT INTO `notas` VALUES (1,'10','10','10','10'),(2,'10','10','10','10');
UNLOCK TABLES;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idusuario` int(3) auto_increment,
  `Login` varchar(50),
  `Password` varchar(10),
  `Nivel` varchar(15),
  PRIMARY KEY (`idusuario`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `usuario`
--


/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
LOCK TABLES `usuario` WRITE;
INSERT INTO `usuario` VALUES (1,'cris','maira','alto'),(2,'maira','maira','administrador'),(3,'cris2','maira3','alto'),(6,'maira','maira','Bajo'),(7,'222','222222','Bajo'),(8,'222','2222','Bajo'),(9,'sese','sesese','alto'),(10,'uno','uno','alto');
UNLOCK TABLES;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

