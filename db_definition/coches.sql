-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2014 a las 21:28:18
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u847514393_chema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daw2_coches`
--

CREATE TABLE IF NOT EXISTS `daw2_coches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(10) NOT NULL,
  `fabricacion` date NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `version` varchar(20) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `combustible` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `daw2_coches` (`id`, `matricula`, `fabricacion`, `marca`, `modelo`, `version`, `precio`, `combustible`) VALUES
(1, 'm6113vl', '1997-12-18', 'Renault', 'Megane', 'Coupe 1.6v', 3300.00, 'Gasolina'),
(2, 'm3032cbz', '2000-02-13', 'Ford', 'Mondeo', 'Guia 2.0 TDi', 8000.00, 'Diesel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
