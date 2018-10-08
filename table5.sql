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
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `question1` varchar(255) DEFAULT NULL,
  `question2` varchar(255) DEFAULT NULL,
  `question3` varchar(255) DEFAULT NULL,
  `question4` varchar(255) DEFAULT NULL,
  `question5` varchar(255) DEFAULT NULL,
  `id_user` smallint(6) UNSIGNED DEFAULT NULL,
  `activite_type` varchar(255) DEFAULT NULL,
  `exemple` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`question1`, `question2`, `question3`, `question4`, `question5`, `id_user`, `activite_type`, `exemple`) VALUES
('test', 'retest', 'encore', 'et encore', 'c\'est la fin', 15, 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 'On trime pour avoir ces infos'),
('aze', 'rez', 'zeraq', 'aaa', 'azrzeat', 15, 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 'et ici aussi ça galère'),
('lsqmigjt', 'cvqlm', 'qofjkm<o', 'poiu', 'csqdf', 15, 'Développer la partie back-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 'azerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table5`
--
ALTER TABLE `table5`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `question4` (`question4`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table5`
--
ALTER TABLE `table5`
  ADD CONSTRAINT `table5_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table2` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
