-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 nov. 2021 à 20:46
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hms`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `SERVICEID` int(11) NOT NULL,
  `INVOICENUMBER` varchar(50) NOT NULL,
  `SALEDATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appointments`
--

INSERT INTO `appointments` (`ID`, `USERID`, `SERVICEID`, `INVOICENUMBER`, `SALEDATE`) VALUES
(0, 8, 19, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `CODE` varchar(50) NOT NULL,
  `SPECIALITY` varchar(50) NOT NULL,
  `DOCTOR` varchar(1024) NOT NULL,
  `PRICE` decimal(18,2) NOT NULL,
  `QUANTITY` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`ID`, `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`, `QUANTITY`) VALUES
(19, 'DS001', 'Cardiology', 'Cielo Cortés', '100.00', 87),
(20, 'DS002', 'Ginecology', 'Laura Villar', '100.00', 99),
(21, 'DS001', 'Neurology', 'Steve Ataky', '150.00', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `services1`
--

CREATE TABLE `services1` (
  `ID` int(11) NOT NULL,
  `CODE` varchar(50) NOT NULL,
  `SPECIALITY` varchar(50) NOT NULL,
  `DOCTOR` varchar(50) NOT NULL,
  `PRICE` varchar(50) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `TIME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `SKEY` varchar(50) NOT NULL,
  `SVALUE` varchar(21792) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`ID`, `SKEY`, `SVALUE`) VALUES
(1, 'LASTINVOICENUMBER', '16');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `IDCARD`, `NAME`, `LASTNAME`, `PHONE`, `EMAIL`, `USERNAME`, `PASSWORD`, `ROLE`) VALUES
(1, '115870399', 'Luck', 'Smith', '84215616', '123@mail.com', 'admin', '$2y$10$cfYqEGC32RM5fZtxp4Ra/.KcruCoMnkSGIBJ5IQ9zxwAbbA5vq7oO', 'ADMIN'),
(7, 'DS001', 'DoctorOne', 'Ali', '123456789', 'doctor1@mail.com', 'doctor1', '$2y$10$Ukwpq7u7FQ.9sRPoGxXPCexD2AwD.to1PM3vfwGpz0juzXS0zK6Oy', 'DOCTOR'),
(8, 'HMSC001', 'Client', 'One', '1234567890', 'client1@mail.com', 'client1', '$2y$10$REKK/YTtn/flJVFI4xwws.4xDJtqQ6c1qCc4MC8KJGAZcg.dNXnQe', 'CLIENT');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `services1`
--
ALTER TABLE `services1`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `IDCARD` (`IDCARD`),
  ADD UNIQUE KEY `PHONE` (`PHONE`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `services1`
--
ALTER TABLE `services1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
