-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 00:44:24
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `SERVICEID` int(11) NOT NULL,
  `INVOICENUMBER` varchar(50) NOT NULL,
  `SALEDATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `appointments`
--

INSERT INTO `appointments` (`ID`, `USERID`, `SERVICEID`, `INVOICENUMBER`, `SALEDATE`) VALUES
(0, 8, 19, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `CODE` varchar(50) NOT NULL,
  `SPECIALITY` varchar(50) NOT NULL,
  `DOCTOR` varchar(1024) NOT NULL,
  `PRICE` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`ID`, `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`) VALUES
(19, 'DS001', 'Cardiology', 'Cielo Cortés', '100.00'),
(20, 'DS002', 'Ginecology', 'Laura Villar', '100.00'),
(21, 'DS001', 'Neurology', 'Steve Ataky', '150.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services1`
--

CREATE TABLE `services1` (
  `ID` int(11) NOT NULL,
  `CODE` varchar(50) NOT NULL,
  `SPECIALITY` varchar(50) NOT NULL,
  `DOCTOR` varchar(50) NOT NULL,
  `PRICE` varchar(50) NOT NULL,
  `USERID` int(10) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `TIME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `services1`
--

INSERT INTO `services1` (`ID`, `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`, `USERID`, `DATE`, `TIME`) VALUES
(2, 'DS002', 'Ginecology', 'Laura Villar', '100.00', 8, '2021-11-24', '10:04'),
(3, 'DS002', 'Ginecology', 'Laura Villar', '100.00', 8, '2021-11-18', '19:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `SKEY` varchar(50) NOT NULL,
  `SVALUE` varchar(21792) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`ID`, `SKEY`, `SVALUE`) VALUES
(1, 'LASTINVOICENUMBER', '16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialty`
--

CREATE TABLE `specialty` (
  `ID` int(11) NOT NULL,
  `SPECIALTY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `specialty`
--

INSERT INTO `specialty` (`ID`, `SPECIALTY`) VALUES
(1, 'Allergy'),
(2, 'Anaesthesiology and resuscitation'),
(3, 'Digestive system'),
(4, 'Cardiology'),
(5, 'Endocrinology and nutrition'),
(6, 'Geriatrics'),
(7, 'Haematology and hemotherapy'),
(8, 'Intensive care'),
(9, 'Internal medicine'),
(10, 'Nephrology'),
(11, 'Pulmonology'),
(12, 'Medical oncology'),
(13, 'Radiation oncology'),
(14, 'Pediatrics'),
(15, 'Psychiatry'),
(16, 'Rheumatology'),
(17, 'Family and community medicine'),
(18, 'Optometry');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `IDCARD` varchar(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ROLE` varchar(50) NOT NULL DEFAULT 'CLIENT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `IDCARD`, `NAME`, `LASTNAME`, `PHONE`, `EMAIL`, `USERNAME`, `PASSWORD`, `ROLE`) VALUES
(1, '115870399', 'Luck', 'Smith', '84215616', '123@mail.com', 'admin', '$2y$10$cfYqEGC32RM5fZtxp4Ra/.KcruCoMnkSGIBJ5IQ9zxwAbbA5vq7oO', 'ADMIN'),
(7, 'DS001', 'DoctorOne', 'Ali', '123456789', 'doctor1@mail.com', 'doctor1', '$2y$10$Ukwpq7u7FQ.9sRPoGxXPCexD2AwD.to1PM3vfwGpz0juzXS0zK6Oy', 'DOCTOR'),
(8, 'HMSC001', 'Client', 'One', '1234567890', 'client1@mail.com', 'client1', '$2y$10$REKK/YTtn/flJVFI4xwws.4xDJtqQ6c1qCc4MC8KJGAZcg.dNXnQe', 'CLIENT');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `services1`
--
ALTER TABLE `services1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `IDCARD` (`IDCARD`),
  ADD UNIQUE KEY `PHONE` (`PHONE`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `services1`
--
ALTER TABLE `services1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
