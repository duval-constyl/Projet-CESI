-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2022 at 08:05 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `Association_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Association_Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Event_Description` varchar(255) COLLATE utf8_bin NOT NULL,
  `Association_President` varchar(255) COLLATE utf8_bin NOT NULL,
  `Photo_Id` int(11) NOT NULL,
  PRIMARY KEY (`Association_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `boutique`
--

DROP TABLE IF EXISTS `boutique`;
CREATE TABLE IF NOT EXISTS `boutique` (
  `Product_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Product_Description` varchar(255) COLLATE utf8_bin NOT NULL,
  `Product_Prix` int(11) NOT NULL,
  `Product_Rate` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Product_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `Category_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Category_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

DROP TABLE IF EXISTS `command`;
CREATE TABLE IF NOT EXISTS `command` (
  `COMMAND_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMMAND_DATE` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Identificatio_Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  PRIMARY KEY (`COMMAND_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `effectuer`
--

DROP TABLE IF EXISTS `effectuer`;
CREATE TABLE IF NOT EXISTS `effectuer` (
  `Event_Id` int(11) NOT NULL,
  `Association_Id` int(11) NOT NULL,
  PRIMARY KEY (`Event_Id`,`Association_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `Event_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Event_Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Event_Description` varchar(255) COLLATE utf8_bin NOT NULL,
  `Event_Date` date NOT NULL,
  `Futur_Event` tinyint(1) NOT NULL,
  `Passed_event` tinyint(1) NOT NULL,
  PRIMARY KEY (`Event_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `fournir`
--

DROP TABLE IF EXISTS `fournir`;
CREATE TABLE IF NOT EXISTS `fournir` (
  `Category_Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  PRIMARY KEY (`Category_Id`,`Product_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `Product_Id` int(11) NOT NULL,
  `Identificatio_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`Product_Id`,`Identificatio_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `Photo_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_bin NOT NULL,
  `Publication_Date` datetime NOT NULL,
  `URL_Link` varchar(255) COLLATE utf8_bin NOT NULL,
  `Event_Id` int(11) NOT NULL,
  `Product_Id` int(11) DEFAULT NULL,
  `Association_Id` int(11) NOT NULL,
  PRIMARY KEY (`Photo_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Identificatio_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_bin NOT NULL,
  `Surname` varchar(100) COLLATE utf8_bin NOT NULL,
  `Localisation` varchar(255) COLLATE utf8_bin NOT NULL,
  `Mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `Password` varchar(255) COLLATE utf8_bin NOT NULL,
  `Password_Confirmation` varchar(50) COLLATE utf8_bin NOT NULL,
  `User` varchar(50) COLLATE utf8_bin NOT NULL,
  `Association_Id` int(11) NOT NULL,
  PRIMARY KEY (`Identificatio_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE IF NOT EXISTS `voter` (
  `Event_Id` int(11) NOT NULL,
  `Identificatio_Id` int(11) NOT NULL,
  PRIMARY KEY (`Event_Id`,`Identificatio_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fournir`
--
ALTER TABLE `fournir`
  ADD CONSTRAINT `FOURNIR_CATEGORY0_FK` FOREIGN KEY (`Category_Id`) REFERENCES `category` (`Category_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
