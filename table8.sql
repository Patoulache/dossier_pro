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
-- Table structure for table `table8`
--

CREATE TABLE `table8` (
  `id_user` smallint(6) UNSIGNED DEFAULT NULL,
  `texte1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table8`
--

INSERT INTO `table8` (`id_user`, `texte1`) VALUES
(15, 'drthtsrj,ystrjhaqgercregc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table8`
--
ALTER TABLE `table8`
  ADD KEY `id_user` (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table8`
--
ALTER TABLE `table8`
  ADD CONSTRAINT `table8_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table2` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
