-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2018 at 04:33 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dossier_professionnel`
--

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `exemples` varchar(255) DEFAULT NULL,
  `activite_type` varchar(255) DEFAULT NULL,
  `id_user` smallint(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`exemples`, `activite_type`, `id_user`) VALUES
('on trime pour avoir ces infos', 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 15),
('et ici aussi ça galère', 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 15),
('azerty', 'Développer la partie back-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD KEY `id_user` (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table4`
--
ALTER TABLE `table4`
  ADD CONSTRAINT `table4_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table2` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
