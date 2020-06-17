
-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 08 Septembre 2017 à 15:25
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `colibri`
--

-- --------------------------------------------------------

--
-- Structure de la table `CLIENTS`
--

CREATE TABLE IF NOT EXISTS `CLIENTS` (
  `codecli` int(2) DEFAULT NULL,
  `prenomcli` varchar(7) DEFAULT NULL,
  `nomcli` varchar(8) DEFAULT NULL,
  `ruecli` varchar(24) DEFAULT NULL,
  `cpcli` int(5) DEFAULT NULL,
  `villecli` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CLIENTS`
--

INSERT INTO `CLIENTS` (`codecli`, `prenomcli`, `nomcli`, `ruecli`, `cpcli`, `villecli`) VALUES
(1, 'Alberto', 'Dubois', '3 rue du Pont', 57500, 'Saint-Avold'),
(2, 'Mi', 'Volond', '4 rue de la liberté', 57500, 'Saint-Avold'),
(3, 'Roger', 'Botas', '5 place du marché', 57500, 'Saint-Avold'),
(4, 'Edouard', 'Noulas', '41 rue de l''église', 57600, 'Forbach'),
(5, 'Paul', 'Lontague', '21 Boulevard des oiseaux', 57800, 'Freyming'),
(6, 'Eric', 'Pondier', '14, rue des Agates', 57600, 'Forbach'),
(7, 'Thomas', 'Malon', '12 rue des lapins', 57600, 'Forbach'),
(8, 'Rénato', 'Point', '451, rue de l''égalité', 57500, 'Saint-Avold'),
(9, 'Michel', 'Botas', '17, rue des hochets', 57500, 'Saint-Avold'),
(10, 'David', 'Collague', '14, rue Utrillo', 57600, 'Forbach'),
(11, 'Simon', 'Potillon', '17, rue des marguerites', 57800, 'Freyming');

-- --------------------------------------------------------

--
-- Structure de la table `FILMS`
--

CREATE TABLE IF NOT EXISTS `FILMS` (
  `codefilm` int(2) DEFAULT NULL,
  `nomfilm` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `FILMS`
--

INSERT INTO `FILMS` (`codefilm`, `nomfilm`) VALUES
(1, 'C''est arrivé près de chez vous'),
(2, 'Bernie'),
(3, 'Dans la peau de John Malkovitch'),
(4, 'Intouchables'),
(5, 'Ong Bak'),
(6, 'Shoot'' Em UP'),
(7, 'Tigres et dragons'),
(8, 'Matrix 1'),
(9, 'Machete'),
(10, 'Boulevard de la mort'),
(11, 'Brain dead');

-- --------------------------------------------------------

--
-- Structure de la table `LOCATIONS`
--

CREATE TABLE IF NOT EXISTS `LOCATIONS` (
  `codecli` int(1) DEFAULT NULL,
  `codefilm` int(1) DEFAULT NULL,
  `datedebut` varchar(10) DEFAULT NULL,
  `duree` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `LOCATIONS`
--

INSERT INTO `LOCATIONS` (`codecli`, `codefilm`, `datedebut`, `duree`) VALUES
(1, 2, '2013-04-11', 1),
(1, 4, '2013-04-12', 3),
(1, 5, '2013-04-13', 3),
(2, 1, '2013-04-09', 2),
(3, 2, '2013-04-15', 5),
(4, 1, '2013-04-17', 1),
(4, 6, '2013-04-21', 2),
(5, 2, '2013-04-25', 3),
(6, 8, '2013-05-01', 2),
(7, 7, '2013-04-09', 1),
(7, 9, '2012-12-31', 4);
