-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2015 a las 04:00:38
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemaslibre1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `FechaNaci` date NOT NULL,
  `Genero` varchar(1) NOT NULL,
  `celencargado` varchar(8) NOT NULL,
  `direccion` varchar(350) NOT NULL,
  `nomencargado` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE IF NOT EXISTS `maestro` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `NombreDocente` varchar(150) NOT NULL,
  `ApellidoDocente` varchar(150) NOT NULL,
  `FechaNaciDo` date NOT NULL,
  `GeneroDoc` varchar(1) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `DireccionDoce` varchar(350) NOT NULL,
  `Escalafon` varchar(15) NOT NULL,
  `Turno` varchar(50) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `idmateria` int(3) NOT NULL DEFAULT '0',
  `asignatura` varchar(150) NOT NULL,
  PRIMARY KEY (`idmateria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idnota` int(3) NOT NULL DEFAULT '0',
  `nota1` decimal(3,0) NOT NULL,
  `nota2` decimal(3,0) NOT NULL,
  `nota3` decimal(3,0) NOT NULL,
  `promedio` decimal(3,0) NOT NULL,
  PRIMARY KEY (`idnota`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(3) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Nivel` varchar(15) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `Login`, `Password`, `Nivel`) VALUES
(1, 'cris', 'maira', 'alto'),
(2, 'maira', 'maira', 'administrador'),
(3, 'cris2', 'maira3', 'alto'),
(4, 'maira2', '2aa079a1a0', 'bajo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
