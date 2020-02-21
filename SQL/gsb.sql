-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le :  ven. 21 fév. 2020 à 06:57
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

DROP TABLE IF EXISTS `materiels`;
CREATE TABLE IF NOT EXISTS `materiels` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `poids` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `materiels`
--

INSERT INTO `materiels` (`id`, `nom`, `prix`, `poids`) VALUES
(1, 'Ordinateur', '255', '63'),
(2, 'Ordinateur', '255', '63'),
(3, 'Ordinateur', '255', '63'),
(4, 'Ordinateur', '255', '63'),
(5, 'Ordinateur', '255', '63'),
(6, 'Ordinateur', '255', '63'),
(7, 'Ordinateur', '255', '63'),
(8, 'Ordinateur', '255', '63'),
(9, 'Ordinateur', '255', '63'),
(10, 'Ordinateur', '255', '63'),
(11, 'Ordinateur', '255', '63'),
(12, 'Ordinateur', '255', '63'),
(13, 'Ordinateur', '255', '63'),
(14, 'Ordinateur', '255', '63'),
(15, 'Ordinateur', '255', '63'),
(16, 'Ordinateur', '255', '63'),
(17, 'Ordinateur', '255', '63'),
(18, 'Ordinateur', '255', '63'),
(19, 'Ordinateur', '255', '63'),
(20, 'Ordinateur', '255', '63'),
(21, 'tom', '150', '65'),
(22, 'tom', '150', '65'),
(23, 'tom', '150', '65'),
(24, 'tom', '150', '65'),
(25, 'tom', '150', '65'),
(26, 'tom', '150', '65');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `fat` varchar(255) NOT NULL,
  `temperature` varchar(255) NOT NULL,
  `calories` varchar(255) NOT NULL,
  `coeur` varchar(255) NOT NULL,
  `sommeil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `idUtilisateur`, `nom`, `prenom`, `age`, `sexe`, `poids`, `taille`, `fat`, `temperature`, `calories`, `coeur`, `sommeil`) VALUES
(7, 1, 'Albuquerque', 'Yohan', '19', 'homme', '67', '1.80', '22', '36.5', '954', '78', '7.3'),
(2, 1, 'reynaud', 'pierre', '22', 'homme', '64', '1.79', '9', '37', '857', '75', '7.30'),
(6, 1, 'deprez', 'tom', '22', 'homme', '65', '1.75', '12', '37', '657', '82', '8.30'),
(8, 1, 'Cadiou', 'Samuel', '21', 'homme', '59', '1.65', '5', '36.8', '874', '87', '8.9'),
(9, 1, 'Meilheurat', 'Victorien', '21', 'homme', '67', '1.70', '24', '37.1', '2154', '74', '6.7'),
(10, 1, 'caquinou', 'quentin', '19', 'homme', '78', '1.78', '15', '37.3', '3154', '87', '8.7'),
(11, 1, 'Lopez', 'Alexandre', '30', 'Homme', '75', '1.76', '27', '37', '2500', '90', '6.30');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `age`, `email`, `mdp`, `secteur`) VALUES
(1, 'tom', 'deprez', '18', 'tomtom.deprez@hotmail.com', 'a0e073e9ce2854b3697a96fefd2617ab', 'Medecin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
