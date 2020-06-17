-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Dim 05 Octobre 2014 à 11:44
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bandedessinee`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `CODE_ALB` varchar(5) NOT NULL,
  `TITRE_ALB` varchar(50) DEFAULT NULL,
  `NBPAGES` smallint(6) DEFAULT NULL,
  `NBHISTOIRE` smallint(6) DEFAULT NULL,
  `NOMREVUE` varchar(25) DEFAULT NULL,
  `CODE_SER` varchar(5),
  PRIMARY KEY (`CODE_ALB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `album`
--

INSERT INTO `album` (`CODE_ALB`, `TITRE_ALB`, `NBPAGES`, `NBHISTOIRE`, `NOMREVUE`, `CODE_SER`) VALUES
('ald00', 'alda', 46, 1, 'v', 'tou00'),
('ali00', 'l''alligator blanc', 62, 1, NULL, 'jim00'),
('ave00', 'quatre aventures de spirou et fantasio', 46, 4, 'spirou', 'spi00'),
('bab00', 'babette', 46, 1, 'v', 'tou00'),
('bar00', 'barbarella', 48, 1, 'v magazine', 'bar00'),
('ble00', 'les bleus de la balle', 46, 1, 'spirou', 'tun00'),
('car00', 'le carnaval sauvage', 48, 1, 'tintin', 'com00'),
('col00', 'les col', 62, 1, NULL, 'bar00'),
('dol00', 'le dollar a trois faces', 48, 1, 'tintin', 'com00'),
('elo00', 'elo', 46, 1, 'v', 'tou00'),
('fai00', 'le faiseur dNULLor', 46, 1, 'spirou', 'spi00'),
('fau00', 'les fauves', 48, 1, 'tintin', 'com00'),
('foi00', 'la foire aux immortels', 72, 1, 'm', NULL),
('ger00', 'germain', 46, 1, 'v', 'tou00'),
('gue00', 'les guerriers du d', 48, 1, 'tintin', 'com00'),
('gue01', 'la guerre des tranch', 152, 1, NULL, NULL),
('her00', 'l''h', 46, 2, 'spirou', 'spi00'),
('hom00', 'l''homme de la nouvelle orleans', 62, 1, NULL, 'jim00'),
('ici00', 'ici-m', 200, 1, NULL, NULL),
('kha00', 'khaled', 46, 1, 'v', 'tou00'),
('mir00', 'le miroir aux temp', 62, 1, 'echo des savanes', 'bar00'),
('mis00', 'mississipi river', 60, 1, 'm', 'jim00'),
('mou00', 'mouh-mouh', 85, 7, NULL, NULL),
('mys00', 'myst', 72, 1, 'pif gadget', NULL),
('nep00', 'captain nepel', 46, 1, 'spirou', 'tun00'),
('nid00', 'le nid des marsupilamis', 46, 1, 'spirou', 'spi00'),
('nor00', 'du nord au sud', 46, 2, 'spirou', 'tun00'),
('oli00', 'olivier', 46, 1, 'v', 'tou00'),
('out00', 'outlaw', 46, 1, 'spirou', 'tun00'),
('par00', 'partie de chasse', 104, 1, 'pilote', NULL),
('pic00', 'tintin et les picaros', 62, 1, 'tintin', 'tin00'),
('plu00', 'une plume pour clovis', 48, 8, 'pilote', NULL),
('qrn00', 'qrn sur bretzelburg', 46, 1, 'spirou', 'spi00'),
('rad00', 'radar le robot', 46, 3, 'spirou', 'spi00'),
('red00', 'red dust', 48, 1, 'tintin', 'com00'),
('rei00', 'reinhart', 46, 1, 'v', 'tou00'),
('sel00', 'le seljouki', 46, 1, 'v', 'tou00'),
('she00', 'les sh', 48, 1, 'tintin', 'com00'),
('sig00', 'sigurd', 46, 1, 'v', 'tou00'),
('sov00', 'tintin chez les soviets', 120, 1, 'petit vingti', 'tin00'),
('tib00', 'tintin au tibet', 62, 1, 'tintin', 'tin00'),
('ton00', 'tonnerre au sud', 62, 1, NULL, 'jim00'),
('tor00', 'toratorapa', 46, 1, 'spirou', 'spi00'),
('vai00', 'le vaisseau de pierre', 64, 1, 'pilote', NULL),
('vil00', 'la ville qui nNULLexistait pas', 64, 1, 'pilote', NULL),
('vol00', 'vol 714 pour sydney', 62, 1, 'tintin', 'tin00'),
('wei00', 'weird fantasy', 45, 6, NULL, NULL),
('wil00', 'william', 46, 1, 'v', 'tou00');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `PSEUDO_AUT` varchar(20) NOT NULL,
  `NOM_AUT` varchar(20) DEFAULT NULL,
  `PRE_AUT` varchar(20) DEFAULT NULL,
  `NAT_AUT` varchar(15) DEFAULT NULL,
  `DDN_AUT` smallint(6) DEFAULT NULL,
  `DDD_AUT` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`PSEUDO_AUT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`PSEUDO_AUT`, `NOM_AUT`, `PRE_AUT`, `NAT_AUT`, `DDN_AUT`, `DDD_AUT`) VALUES
('BILAL', 'BILAL', 'Enki', 'yougoslave', 1951, 0),
('BILLON', 'BILLON', 'Daniel', 'france', 1927, 0),
('CAUVIN', 'CAUVIN', 'Raoul', 'belgique', 1938, 0),
('CHARLIER', 'CHARLIER', 'Jean-Michel', 'Belgique', 1924, 1989),
('CHRISTIN', 'CHRISTIN', 'Pierre', 'france', 1938, 0),
('FELDSTEIN', 'FELDSTEIN', 'Alfred', 'USA', 1922, 1991),
('FOREST', 'FOREST', 'Jean-Claude', 'france', 1930, 0),
('FOURNIER', 'FOURNIER', 'Jean-Claude', 'france', 1943, 0),
('FRANQUIN', 'FRANQUIN', 'André', 'belgique', 1924, 0),
('FRAZETTA', 'FRAZETTA', 'Franck', 'USA', 1928, 0),
('GEBE', 'BLONDEAU', 'Georges', 'france', 1929, 0),
('GIRAUD', 'GIRAUD', 'Jean', 'France', 1938, 0),
('GREG', 'REGNIER', 'Michel', 'Belgique', 1931, 0),
('HERGE', 'REMY', 'Georges', 'belgique', 1907, 1983),
('HERMANN', 'HUPPEN', 'Hermann', 'belgique', 1938, 0),
('KAMEN', 'KAMEN', 'Jack', 'USA', 1920, 1968),
('LAMBIL', 'LAMBILLOTTE', 'Willy', 'belgique', 1936, 0),
('LOB', 'LOB', 'jacques', 'france', 1932, 1990),
('ORLANDO', 'ORLANDO', 'joe', 'USA', 1927, 0),
('ROSSI', 'ROSSI', 'Christian', 'france', 1954, 0),
('ROUGE', 'ROUGE', 'Michel', 'france', 1950, 0),
('SALVE', 'SALVERIUS', 'Louis', 'belgique', 1930, 1972),
('TARDI', 'TARDI', 'Jacques', 'France', 1946, 0),
('WILLIAMSON', 'WILLIAMSON', 'Al', 'USA', 1931, 0),
('WOOD', 'WOOD', 'Wallace', 'USA', 1927, 1981);

-- --------------------------------------------------------

--
-- Structure de la table `dessiner`
--

DROP TABLE IF EXISTS `dessiner`;
CREATE TABLE IF NOT EXISTS `dessiner` (
  `CODE_ALB` varchar(5) NOT NULL,
  `PSEUDO_AUT` varchar(20) NOT NULL,
  PRIMARY KEY (`CODE_ALB`,`PSEUDO_AUT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dessiner`
--

INSERT INTO `dessiner` (`CODE_ALB`, `PSEUDO_AUT`) VALUES
('ald00', 'HERMANN'),
('ali00', 'GIRAUD'),
('ali00', 'ROSSI'),
('ave00', 'FRANQUIN'),
('bab00', 'HERMANN'),
('bar00', 'FOREST'),
('ble00', 'LAMBIL'),
('car00', 'ROUGE'),
('col00', 'FOREST'),
('dol00', 'ROUGE'),
('elo00', 'HERMANN'),
('fai00', 'FOURNIER'),
('fau00', 'ROUGE'),
('foi00', 'BILAL'),
('ger00', 'HERMANN'),
('gue00', 'HERMANN'),
('gue01', 'TARDI'),
('her00', 'FRANQUIN'),
('hom00', 'GIRAUD'),
('hom00', 'ROSSI'),
('ici00', 'TARDI'),
('kha00', 'HERMANN'),
('mir00', 'BILLON'),
('mir00', 'FOREST'),
('mis00', 'GIRAUD'),
('mou00', 'TARDI'),
('mys00', 'FOREST'),
('nep00', 'LAMBIL'),
('nid00', 'FRANQUIN'),
('nor00', 'SALVE'),
('oli00', 'HERMANN'),
('out00', 'SALVE'),
('par00', 'BILAL'),
('pic00', 'HERGE'),
('plu00', 'GEBE'),
('qrn00', 'FRANQUIN'),
('rad00', 'FRANQUIN'),
('red00', 'HERMANN'),
('rei00', 'HERMANN'),
('sel00', 'HERMANN'),
('she00', 'HERMANN'),
('sig00', 'HERMANN'),
('sov00', 'HERGE'),
('tib00', 'HERGE'),
('ton00', 'ROSSI'),
('tor00', 'FOURNIER'),
('vai00', 'BILAL'),
('vil00', 'BILAL'),
('vol00', 'HERGE'),
('wei00', 'FRAZETTA'),
('wei00', 'KAMEN'),
('wei00', 'ORLANDO'),
('wei00', 'WILLIAMSON'),
('wei00', 'WOOD'),
('wil00', 'HERMANN');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `NOM_EDIT` varchar(25) NOT NULL,
  `ADR_EDIT` varchar(15) DEFAULT NULL,
  `NAT_EDIT` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`NOM_EDIT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `editeur`
--

INSERT INTO `editeur` (`NOM_EDIT`, `ADR_EDIT`, `NAT_EDIT`) VALUES
('Albin Michel', 'Paris', 'France'),
('Casterman', 'Bruxelles', 'Belgique'),
('Dargaud', 'Paris', 'France'),
('Dupuis', 'Marcinelle', 'France'),
('Gl', 'Grenoble', 'France'),
('Kesserling', 'Berne', 'Suisse'),
('Le square', 'Paris', 'France'),
('Les humano', 'Paris', 'France'),
('Lombard', 'Bruxelles', 'Belgique'),
('Losfeld', 'Paris', 'France'),
('Peperland', 'Bruxelles', 'Belgique'),
('Serg', 'Paris', 'France'),
('Zenda', 'Paris', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

DROP TABLE IF EXISTS `publier`;
CREATE TABLE IF NOT EXISTS `publier` (
  `CODE_ALB` varchar(5) NOT NULL,
  `NOM_EDIT` varchar(25) NOT NULL,
  `DATE_PUB` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODE_ALB`,`NOM_EDIT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `publier`
--

INSERT INTO `publier` (`CODE_ALB`, `NOM_EDIT`, `DATE_PUB`) VALUES
('ald00', 'Gl', 1988),
('ali00', 'Casterman', 1993),
('ave00', 'Dupuis', 1976),
('bab00', 'Gl', 1982),
('bar00', 'Losfeld', 1964),
('ble00', 'Dupuis', 1988),
('car00', 'Dargaud', 1995),
('col00', 'Kesserling', 1974),
('dol00', 'Dargaud', 1993),
('elo00', 'Gl', 1984),
('fai00', 'Dupuis', 1974),
('fau00', 'Dargaud', 1991),
('foi00', 'Les humano', 1988),
('ger00', 'Gl', 1986),
('gue00', 'Lombard', 1974),
('gue01', 'Casterman', 1993),
('her00', 'Dupuis', 1976),
('hom00', 'Casterman', 1990),
('ici00', 'Casterman', 1978),
('kha00', 'Gl', 1993),
('mir00', 'Albin Michel', 1982),
('mis00', 'Casterman', 1990),
('mis00', 'Les humano', 1979),
('mou00', 'Peperland', 1979),
('mys00', 'Serg', 1972),
('nep00', 'Dupuis', 1993),
('nid00', 'Dupuis', 1967),
('nor00', 'Dupuis', 1968),
('oli00', 'Gl', 1994),
('out00', 'Dupuis', 1970),
('par00', 'Dargaud', 1983),
('par00', 'Les humano', 1990),
('pic00', 'Casterman', 1975),
('plu00', 'Dargaud', 1988),
('plu00', 'Le square', 1975),
('qrn00', 'Dupuis', 1971),
('rad00', 'Dupuis', 1976),
('red00', 'Lombard', 1974),
('rei00', 'Gl', 1987),
('sel00', 'Gl', 1992),
('she00', 'Lombard', 1987),
('sig00', 'Gl', 1989),
('sov00', 'Casterman', 1973),
('tib00', 'Casterman', 1960),
('ton00', 'Casterman', 1995),
('tor00', 'Dupuis', 1978),
('vai00', 'Dargaud', 1981),
('vai00', 'Les humano', 1990),
('vil00', 'Dargaud', 1983),
('vil00', 'Les humano', 1990),
('vol00', 'Casterman', 1968),
('wei00', 'Zenda', 1987),
('wil00', 'Gl', 1991);

-- --------------------------------------------------------

--
-- Structure de la table `scenarie`
--

DROP TABLE IF EXISTS `scenarie`;
CREATE TABLE IF NOT EXISTS `scenarie` (
  `CODE_ALB` varchar(5) NOT NULL,
  `PSEUDO_AUT` varchar(20) NOT NULL,
  PRIMARY KEY (`CODE_ALB`,`PSEUDO_AUT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `scenarie`
--

INSERT INTO `scenarie` (`CODE_ALB`, `PSEUDO_AUT`) VALUES
('ald00', 'HERMANN'),
('ali00', 'GIRAUD'),
('ave00', 'FRANQUIN'),
('bab00', 'HERMANN'),
('bar00', 'FOREST'),
('ble00', 'CAUVIN'),
('car00', 'GREG'),
('col00', 'FOREST'),
('dol00', 'GREG'),
('elo00', 'HERMANN'),
('fai00', 'FOURNIER'),
('fau00', 'GREG'),
('foi00', 'CHRISTIN'),
('ger00', 'HERMANN'),
('gue00', 'GREG'),
('gue01', 'TARDI'),
('her00', 'FRANQUIN'),
('hom00', 'CHARLIER'),
('hom00', 'GIRAUD'),
('ici00', 'FOREST'),
('kha00', 'HERMANN'),
('mir00', 'FOREST'),
('mis00', 'CHARLIER'),
('mou00', 'TARDI'),
('mys00', 'LOB'),
('nep00', 'CAUVIN'),
('nid00', 'FRANQUIN'),
('nor00', 'CAUVIN'),
('oli00', 'HERMANN'),
('out00', 'CAUVIN'),
('par00', 'CHRISTIN'),
('pic00', 'HERGE'),
('plu00', 'GEBE'),
('qrn00', 'FRANQUIN'),
('rad00', 'FRANQUIN'),
('red00', 'GREG'),
('rei00', 'HERMANN'),
('sel00', 'HERMANN'),
('she00', 'GREG'),
('sig00', 'HERMANN'),
('sov00', 'HERGE'),
('tib00', 'HERGE'),
('ton00', 'GIRAUD'),
('tor00', 'FOURNIER'),
('vai00', 'CHRISTIN'),
('vil00', 'CHRISTIN'),
('vol00', 'HERGE'),
('wei00', 'FELDSTEIN'),
('wil00', 'HERMANN');

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

DROP TABLE IF EXISTS `serie`;
CREATE TABLE IF NOT EXISTS `serie` (
  `CODE_SER` varchar(5) NOT NULL,
  `TITRE_SER` varchar(50) DEFAULT NULL,
  `GENRE` varchar(25) DEFAULT NULL,
  `EPOQUE` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`CODE_SER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `serie`
--

INSERT INTO `serie` (`CODE_SER`, `TITRE_SER`, `GENRE`, `EPOQUE`) VALUES
('bar00', 'barbarella', 'science-fiction', 'futur'),
('com00', 'commanche', 'western', 'USA XIX '),
('jim00', 'les aventures de jim cutlass', 'western', 'USA XIX '),
('spi00', 'spirou et fantasio', 'humoristique', 'contemporaine'),
('tin00', 'les aventures de tintin', 'humoristique', 'contemporaine'),
('tou00', 'les tours de bois maury', 'm', 'moyen-'),
('tun00', 'les tuniques bleues', 'western humoristique', 'guerre de  secession');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE album
ADD CONSTRAINT fk_serie FOREIGN KEY (CODE_SER) REFERENCES serie (code_ser);

ALTER TABLE dessiner
ADD CONSTRAINT fk_album1 FOREIGN KEY (code_alb) REFERENCES album (code_alb),
ADD CONSTRAINT fk_auteur1 FOREIGN KEY (pseudo_aut) REFERENCES auteur (pseudo_aut);

ALTER TABLE publier
ADD CONSTRAINT fk_album2 FOREIGN KEY (code_alb) REFERENCES album(code_alb),
ADD CONSTRAINT fk_edit FOREIGN KEY (nom_edit) REFERENCES editeur (nom_edit);

ALTER TABLE scenarie
ADD CONSTRAINT fk_album3 FOREIGN KEY (code_alb) REFERENCES album(code_alb),
ADD CONSTRAINT fk_auteur3 FOREIGN KEY (pseudo_aut) REFERENCES auteur (pseudo_aut);

