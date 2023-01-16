-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 04 Octobre 2020 à 14:47
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `numclient` int(40) NOT NULL,
  `nom` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `adr1` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `adr2` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `cp` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ville` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `infolivraison` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `tel` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `mail` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `login` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mdp` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`numclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`numclient`, `nom`, `prenom`, `adr1`, `adr2`, `cp`, `ville`, `infolivraison`, `tel`, `mail`, `login`, `mdp`) VALUES
(1, 'MARTIN', 'ALBERT', 'Avenue Bidouille,15', 'Avenue Badouille,16', '6900', 'Paris', NULL, '084123456', 'ababababa', '', ''),
(2, 'DAMESSI', 'SAMUEL', 'Avenue Badouille,17', 'Avenue Bedouille,18', '6800', 'Lome', NULL, '084123456', 'bababaab', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `numcommande` int(11) NOT NULL,
  `datecommande` date NOT NULL,
  `livraisonok` tinyint(40) NOT NULL,
  `numclient` int(40) NOT NULL,
  PRIMARY KEY (`numcommande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignecom`
--

CREATE TABLE IF NOT EXISTS `lignecom` (
  `numcommande` int(50) NOT NULL,
  `nomarticle` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `qte` int(50) NOT NULL,
  PRIMARY KEY (`numcommande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
