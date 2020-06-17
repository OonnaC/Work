INSERT INTO INTERNAUTE (email, nom, prenom, region) VALUES ('Tom.Martin@free.fr', 'MARTIN', 'TOM', 'Bretagne');
INSERT INTO INTERNAUTE (email, nom, prenom, region) VALUES ('Jean.ticipe@free.fr', 'TICIPE', 'Jean', 'Bretagne');
INSERT INTO INTERNAUTE (email, nom, prenom, region) VALUES ('yvon.bosser@orange.fr', 'BOSSER', 'Yvon','Bretagne');

INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('V', 'VERTIGO', '1958', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('I', 'IMPITOYABLE', '1992', 'WESTERN');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('P', 'PSYCHOSE', '1960', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('E', 'ENNEMI D''ETAT', '1999', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('VG', 'VAN GOGH', '1991', 'BIOPIC');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('GT', 'GRAN TORINO', '2008', 'THRILLER');

INSERT INTO EVALUER (idFilm, email, dte, note) VALUES ('GT', 'Tom.Martin@free.fr', '2018-03-01', 18);
INSERT INTO EVALUER (idFilm, email, dte, note) VALUES ('GT', 'Tom.Martin@free.fr', '2018-03-05', 20);
INSERT INTO EVALUER (idFilm, email, dte, note) VALUES ('GT', 'yvon.bosser@orange.fr', '2018-03-01', 10);
INSERT INTO EVALUER (idFilm, email, dte, note) VALUES ('GT', 'yvon.bosser@orange.fr', '2018-03-05', 15);
