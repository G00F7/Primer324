-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2022 a las 02:31:43
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibasewillson`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nombrec` varchar(35) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `nombrec`) VALUES
('1', 'Física'),
('2', 'Informática'),
('3', 'Matemática');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `CIEst` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Sigla` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Nota1` int NOT NULL,
  `Nota2` int NOT NULL,
  `Nota3` int NOT NULL,
  `NotaFinal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`CIEst`, `Sigla`, `Nota1`, `Nota2`, `Nota3`, `NotaFinal`) VALUES
('10000', 'INF-111', 25, 20, 15, 60),
('10002', 'INF-111', 15, 20, 15, 50),
('10003', 'INF-111', 30, 20, 20, 70),
('10004', 'INF-111', 20, 25, 30, 75),
('10005', 'INF-112', 20, 15, 15, 50),
('10013', 'INF-272', 19, 30, 21, 70),
('10034', 'INF-324', 12, 21, 25, 58),
('10103', 'INF-324', 12, 21, 25, 58),
('10113', 'INF-314', 30, 30, 40, 100),
('10142', 'INF-324', 21, 19, 30, 70),
('10204', 'INF-329', 22, 32, 25, 79),
('10209', 'INF-324', 21, 19, 30, 70),
('10212', 'INF-329', 22, 32, 25, 79),
('10234', 'INF-329', 22, 32, 25, 79),
('10239', 'INF-329', 22, 32, 25, 79),
('10294', 'INF-324', 21, 19, 30, 70),
('10423', 'INF-329', 22, 32, 25, 79),
('10451', 'INF-324', 12, 21, 25, 58),
('10452', 'INF-324', 30, 19, 12, 61),
('10631', 'INF-324', 19, 30, 21, 70),
('10634', 'INF-324', 12, 21, 25, 58),
('10823', 'INF-314', 30, 30, 40, 100),
('10827', 'INF-314', 30, 30, 40, 100),
('10923', 'INF-314', 30, 30, 40, 100),
('18074', 'INF-324', 12, 21, 25, 58);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `CI` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Apellido` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `FechaNac` date NOT NULL,
  `Departamento` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`CI`, `Nombre`, `Apellido`, `FechaNac`, `Departamento`) VALUES
('10000', 'Pepito', 'Rosales', '1991-02-13', '02'),
('10001', 'Daniela', 'Colque', '1994-06-23', '04'),
('10002', 'Jesus', 'Condori', '1996-08-20', '03'),
('10003', 'Armando', 'Quispe', '1992-07-12', '02'),
('10004', 'Miguel', 'Mamani', '1995-08-15', '04'),
('10005', 'Armando', 'Rosales', '1999-03-13', '02'),
('10013', 'Ariel', 'Colque', '1997-12-23', '04'),
('10034', 'Maria', 'Flores', '1997-02-19', '05'),
('10103', 'Carlos', 'Condori', '1998-11-23', '01'),
('10113', 'Carmen', 'Condori', '1999-12-20', '03'),
('10123', 'Nicolas', 'Quenta', '1970-03-14', '03'),
('10142', 'Camila', 'Quenta', '1999-06-30', '03'),
('10200', 'Mario', 'Rodriguez', '1999-06-19', '06'),
('10204', 'Karen', 'Apaza', '1998-12-27', '03'),
('10209', 'Jhoselin', 'Flores', '1997-02-22', '09'),
('10212', 'Wilson', 'Avalos', '1998-09-12', '01'),
('10234', 'Carlos', 'Mamani', '1997-02-15', '04'),
('10239', 'Eduardo', 'Apaza', '1990-12-20', '09'),
('10294', 'Alejandro', 'Avalos', '1999-08-13', '01'),
('10423', 'Carla', 'Quispe', '1999-06-12', '02'),
('10451', 'Beatriz', 'Quisbert', '1998-06-25', '08'),
('10452', 'Veronica', 'Quisbert', '1999-09-12', '01'),
('10631', 'Vidal', 'Aguire', '1999-08-24', '07'),
('10634', 'Brayan', 'Aguire', '1996-11-24', '06'),
('10823', 'Eugenia', 'Calle', '1999-03-31', '05'),
('10827', 'Veronica', 'Calle', '1997-03-31', '08'),
('10923', 'Mercedes', 'Rodriguez', '1996-04-13', '06'),
('18074', 'Felix', 'Condori', '1996-12-23', '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IDRol` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IDRol`, `Descripcion`) VALUES
('1', 'Director'),
('3', 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CI` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `User` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `IDRol` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `IDCarrera` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CI`, `User`, `Password`, `IDRol`, `IDCarrera`) VALUES
('10000', 'PRosales', 'PRosales', '3', '2'),
('10001', 'DColque', 'DColque', '3', '2'),
('10002', 'JCondori', 'JCondori', '3', '2'),
('10003', 'AQuispe', 'AQuispe', '3', '2'),
('10004', 'MMamani', 'MMamani', '3', '2'),
('10005', 'ARosales', 'ARosales', '3', '3'),
('10013', 'AColque', 'AColque', '3', '2'),
('10034', 'MFlores', 'MFlores', '3', '2'),
('10103', 'CCondori', 'CCondori', '3', '3'),
('10113', 'CCondori', 'CCondori', '3', '1'),
('10123', 'NQuenta', 'NQuenta', '1', '2'),
('10142', 'CQuenta', 'CQuenta', '3', '3'),
('10200', 'MRodriguez', 'MRodriguez', '3', '1'),
('10204', 'KApaza', 'KApaza', '1', '2'),
('10209', 'JFlores', 'JFlores', '3', '1'),
('10212', 'WAvalos', 'WAvalos', '3', '2'),
('10234', 'CMamani', 'CMamani', '3', '3'),
('10239', 'EApaza', 'EApaza', '3', '2'),
('10294', 'AAvalos', 'AAvalos', '1', '3'),
('10423', 'CQuispe', 'CQuispe', '3', '3'),
('10451', 'BQuisbert', 'BQuisbert', '3', '1'),
('10452', 'VQuisbert', 'VQuisbert', '3', '2'),
('10631', 'VAguire', 'VAguire', '3', '1'),
('10634', 'BAguire', 'BAguire', '3', '2'),
('10823', 'ECalle', 'ECalle', '3', '2'),
('10827', 'VCalle', 'VCalle', '3', '1'),
('10923', 'MRodriguez1', 'MRodriguez1', '3', '3'),
('18074', 'FCondori', 'FCondori', '3', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`CIEst`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`CI`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IDRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
