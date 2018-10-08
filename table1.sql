-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2018 at 04:32 PM
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
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id_user` smallint(6) UNSIGNED NOT NULL,
  `nom_naissance` varchar(50) DEFAULT NULL,
  `nom_usage` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `modalite_acces` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `cle` varchar(32) DEFAULT NULL,
  `actif` int(10) UNSIGNED DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id_user`, `nom_naissance`, `nom_usage`, `prenom`, `adresse`, `modalite_acces`, `email`, `pass`, `cle`, `actif`, `token`) VALUES
(2, NULL, 'ROSSO', 'luca', NULL, NULL, 'blabla@blabla.fr', '$2y$10$oqEtk.eo5S48YkyBh0xQ2e0nNS37k17fD3.gGsT9gcXMqnrInzUii', 'jesuisunecle', 1, '9df233736faacece2b15f9a9423b13a0'),
(15, NULL, 'albert', 'albert', NULL, NULL, 'albert@albert.fr', '$2y$10$aTTK3jHjuevJr5H21SRaze3MGjMF7t1tqdRf2wYJ0zP6ywI7Tnapy', '03f2d274c00a52cb249d5baac34b76ef', 1, '8ba3208f5fca0144bb926feddebf7062');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id_user` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
