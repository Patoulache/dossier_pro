-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 13 Octobre 2018 à 17:41
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dossier_professionnel`
--

-- --------------------------------------------------------

--
-- Structure de la table `table1`
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
-- Contenu de la table `table1`
--

INSERT INTO `table1` (`id_user`, `nom_naissance`, `nom_usage`, `prenom`, `adresse`, `modalite_acces`, `email`, `pass`, `cle`, `actif`, `token`) VALUES
(15, NULL, 'albert', 'albert', NULL, NULL, 'albert@albert.fr', '$2y$10$aTTK3jHjuevJr5H21SRaze3MGjMF7t1tqdRf2wYJ0zP6ywI7Tnapy', '03f2d274c00a52cb249d5baac34b76ef', 1, '7d533f4f1bfa294bc8dbd0f0455b1f25'),
(16, 'Azeaea', 'p', 'p', '  azeae  ', NULL, 'p@p.fr', '$2y$10$Ejo/ML9jgWUUO7VhA/HWCOIUuUWelEzayX3kPTbKJcCz65S/pUsli', '3d09baddc21a365b7da5ae4d0aa5cb95', 1, 'a17c462e959460125ef5e65149d44b55');

-- --------------------------------------------------------

--
-- Structure de la table `table2`
--

CREATE TABLE `table2` (
  `auto_inc` smallint(6) NOT NULL,
  `titre_pro_vise` varchar(255) DEFAULT NULL,
  `id_user` smallint(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table2`
--

INSERT INTO `table2` (`auto_inc`, `titre_pro_vise`, `id_user`) VALUES
(1, 'Développeur web et web mobile', 15),
(11, 'Développeur web et web mobile', 16);

-- --------------------------------------------------------

--
-- Structure de la table `table3`
--

CREATE TABLE `table3` (
  `titre_pro_vise` varchar(255) DEFAULT NULL,
  `activite_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table3`
--

INSERT INTO `table3` (`titre_pro_vise`, `activite_type`) VALUES
('Développeur web et web mobile', 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité'),
('Développeur web et web mobile', 'Développer la partie back-end d\'une application web ou web mobile en intégrant les recommandations de sécurité');

-- --------------------------------------------------------

--
-- Structure de la table `table4`
--

CREATE TABLE `table4` (
  `exemples` varchar(255) DEFAULT NULL,
  `activite_type` varchar(255) DEFAULT NULL,
  `id_user` smallint(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table4`
--

INSERT INTO `table4` (`exemples`, `activite_type`, `id_user`) VALUES
('on trime pour avoir ces infos', 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 15),
('et ici aussi ça galère', 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 15),
('azerty', 'Développer la partie back-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 15);

-- --------------------------------------------------------

--
-- Structure de la table `table5`
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
-- Contenu de la table `table5`
--

INSERT INTO `table5` (`question1`, `question2`, `question3`, `question4`, `question5`, `id_user`, `activite_type`, `exemple`) VALUES
('test', 'retest', 'encore', 'et encore', 'c\'est la fin', 15, 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 'On trime pour avoir ces infos'),
('aze', 'rez', 'zeraq', 'aaa', 'azrzeat', 15, 'Développer la partie front-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 'et ici aussi ça galère'),
('lsqmigjt', 'cvqlm', 'qofjkm<o', 'poiu', 'csqdf', 15, 'Développer la partie back-end d\'une application web ou web mobile en intégrant les recommandations de sécurité', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `table6`
--

CREATE TABLE `table6` (
  `question4` varchar(255) DEFAULT NULL,
  `chant_at_serv` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `id_user` smallint(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table6`
--

INSERT INTO `table6` (`question4`, `chant_at_serv`, `date_debut`, `date_fin`, `id_user`) VALUES
('et encore', 'rhaaaaaa tatata tttatatat', '2018-10-01', '2018-10-04', 15),
('aaa', 'trsg', '2018-10-01', '2018-10-16', 15),
('poiu', 'sdrgs', '2018-10-10', '2018-10-26', 15);

-- --------------------------------------------------------

--
-- Structure de la table `table7`
--

CREATE TABLE `table7` (
  `id_user` smallint(6) UNSIGNED DEFAULT NULL,
  `diplome` varchar(255) DEFAULT NULL,
  `organisme` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table7`
--

INSERT INTO `table7` (`id_user`, `diplome`, `organisme`, `date`, `id`) VALUES
(15, 'tesrg', 'rges', '2018-10-08', 2),
(16, 'Azeazea', 'Azeaeza', '2018-10-02', 6);

-- --------------------------------------------------------

--
-- Structure de la table `table8`
--

CREATE TABLE `table8` (
  `id_user` smallint(6) UNSIGNED DEFAULT NULL,
  `texte1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table8`
--

INSERT INTO `table8` (`id_user`, `texte1`) VALUES
(15, 'drthtsrj,ystrjhaqgercregc'),
(16, 'Azeazeaeazeaze');

-- --------------------------------------------------------

--
-- Structure de la table `table9`
--

CREATE TABLE `table9` (
  `id_user` smallint(6) UNSIGNED DEFAULT NULL,
  `texte2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table9`
--

INSERT INTO `table9` (`id_user`, `texte2`) VALUES
(15, 'ce que je veuc xdze rg'),
(16, '           azeaezaze ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`auto_inc`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `titre_pro_vise` (`titre_pro_vise`);

--
-- Index pour la table `table3`
--
ALTER TABLE `table3`
  ADD KEY `titre_pro_vise` (`titre_pro_vise`);

--
-- Index pour la table `table4`
--
ALTER TABLE `table4`
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `table5`
--
ALTER TABLE `table5`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `question4` (`question4`);

--
-- Index pour la table `table6`
--
ALTER TABLE `table6`
  ADD KEY `question4` (`question4`);

--
-- Index pour la table `table7`
--
ALTER TABLE `table7`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `table8`
--
ALTER TABLE `table8`
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `table9`
--
ALTER TABLE `table9`
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `table1`
--
ALTER TABLE `table1`
  MODIFY `id_user` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `table2`
--
ALTER TABLE `table2`
  MODIFY `auto_inc` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `table7`
--
ALTER TABLE `table7`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `table2`
--
ALTER TABLE `table2`
  ADD CONSTRAINT `table2_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table1` (`id_user`);

--
-- Contraintes pour la table `table3`
--
ALTER TABLE `table3`
  ADD CONSTRAINT `table3_ibfk_1` FOREIGN KEY (`titre_pro_vise`) REFERENCES `table2` (`titre_pro_vise`);

--
-- Contraintes pour la table `table4`
--
ALTER TABLE `table4`
  ADD CONSTRAINT `table4_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table1` (`id_user`);

--
-- Contraintes pour la table `table5`
--
ALTER TABLE `table5`
  ADD CONSTRAINT `table5_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table1` (`id_user`);

--
-- Contraintes pour la table `table6`
--
ALTER TABLE `table6`
  ADD CONSTRAINT `table6_ibfk_1` FOREIGN KEY (`question4`) REFERENCES `table5` (`question4`);

--
-- Contraintes pour la table `table7`
--
ALTER TABLE `table7`
  ADD CONSTRAINT `table7_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table1` (`id_user`);

--
-- Contraintes pour la table `table8`
--
ALTER TABLE `table8`
  ADD CONSTRAINT `table8_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table1` (`id_user`);

--
-- Contraintes pour la table `table9`
--
ALTER TABLE `table9`
  ADD CONSTRAINT `table9_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `table1` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
