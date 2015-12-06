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
INSERT INTO `alumno` VALUES (1,'','Maira Cristela','Pocasangre Baires','1990-05-15','f','7877-787','COL. SANTA CECI','Clariza Estella Baires'),(2,'N2','M','M','2222-02-02','f','222','222','22'),(3,'N3','Rommel','Sosa','2000-05-07','m','7578-455','san miguel','Ligia Ohoa');
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
INSERT INTO `maestro` VALUES (1,'Luis','Rodriguez','0000-00-00','M','7878-7878','SAN MIGUEL','120487268','matutino','m@hh.com'),(2,'Luis','Rodriguez','2000-02-02','M','7878-7878','SAN MIGUEL','120487268','matutino','m@hh.com'),(3,'Luis','Perdomo','1992-05-02','H','7875-7898','san miguel','1458258','','m@gma.com');
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
INSERT INTO `materias` VALUES (1,'Lenguaje'),(2,'Matematica');
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
INSERT INTO `notas` VALUES (1,'10','10','8','9');
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
INSERT INTO `usuario` VALUES (2,'maira','maira','administrador'),(11,'perdomo','sosa','usuario');
UNLOCK TABLES;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

