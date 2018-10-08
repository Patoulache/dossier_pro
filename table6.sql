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
-- Table structure for table `table6`
--

CREATE TABLE `table6` (
  `question4` varchar(255) DEFAULT NULL,
  `chant_at_serv` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `id_user` smallint(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`question4`, `chant_at_serv`, `date_debut`, `date_fin`, `id_user`) VALUES
('et encore', 'rhaaaaaa tatata tttatatat', '2018-10-01', '2018-10-04', 15),
('aaa', 'trsg', '2018-10-01', '2018-10-16', 15),
('poiu', 'sdrgs', '2018-10-10', '2018-10-26', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table6`
--
ALTER TABLE `table6`
  ADD KEY `question4` (`question4`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table6`
--
ALTER TABLE `table6`
  ADD CONSTRAINT `table6_ibfk_1` FOREIGN KEY (`question4`) REFERENCES `table5` (`question4`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
