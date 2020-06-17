-- ----------------------
-- dump de la base si6 du Lundi 08 Avril 2013 à 17:39:35
-- ----------------------


-- -----------------------------
-- Structure de la table test1
-- -----------------------------
CREATE TABLE `test1` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `info` char(20) NOT NULL,
  PRIMARY KEY (`numero`),
  UNIQUE KEY `info` (`info`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Structure de la table test2
-- -----------------------------
CREATE TABLE `test2` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `info` char(20) NOT NULL,
  PRIMARY KEY (`numero`),
  UNIQUE KEY `info` (`info`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



-- -----------------------------
-- Contenu de la table test1
-- -----------------------------
INSERT INTO test1 VALUES(1, 'Hello');
INSERT INTO test1 VALUES(2, 'World\"');
INSERT INTO test1 VALUES(3, 'Test');
INSERT INTO test1 VALUES(4, 'Reussi');

-- -----------------------------
-- Contenu de la table test2
-- -----------------------------
INSERT INTO test2 VALUES(1, 'Hello2');
INSERT INTO test2 VALUES(2, 'World2\"');
INSERT INTO test2 VALUES(3, 'Test2');
INSERT INTO test2 VALUES(4, 'Reussi2');

