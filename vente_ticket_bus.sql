-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Mai 2018 à 20:18
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vente_ticket_bus`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE IF NOT EXISTS `billet` (
  `idBillet` int(11) NOT NULL AUTO_INCREMENT,
  `prixBillet` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idTrajet` int(11) DEFAULT NULL,
  PRIMARY KEY (`idBillet`),
  KEY `idUser` (`idUser`),
  KEY `idTrajet` (`idTrajet`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `choisir_trajet`
--

CREATE TABLE IF NOT EXISTS `choisir_trajet` (
  `idUser` int(11) NOT NULL DEFAULT '0',
  `idTrajet` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTrajet`,`idUser`),
  KEY `idUser` (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE IF NOT EXISTS `trajet` (
  `idTrajet` int(11) NOT NULL AUTO_INCREMENT,
  `heureDepart` time DEFAULT NULL,
  `heureArrivee` time DEFAULT NULL,
  `ptDepart` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ptArrivee` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbrePlace` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTrajet`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numTel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `verifier_place`
--

CREATE TABLE IF NOT EXISTS `verifier_place` (
  `idUser` int(11) NOT NULL DEFAULT '0',
  `idTrajet` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idTrajet`,`idUser`),
  KEY `idUser` (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
