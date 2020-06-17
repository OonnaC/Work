INSERT INTO CINEMA (idCine, nom, cp, ville) VALUES ('C', 'CELTIC', '29200', 'BREST');
INSERT INTO CINEMA (idCine, nom, cp, ville) VALUES ('M', 'MULTIPLEXE LIBERTE', '29200', 'BREST');
INSERT INTO CINEMA (idCine, nom, cp, ville) VALUES ('LR', 'LE ROHAN', '29800', 'LANDERNEAU');

INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('V', 'VERTIGO', '1958', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('I', 'IMPITOYABLE', '1992', 'WESTERN');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('P', 'PSYCHOSE', '1960', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('E', 'ENNEMI D''ETAT', '1999', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('VG', 'VAN GOGH', '1991', 'BIOPIC');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('GT', 'GRAN TORINO', '2008', 'THRILLER');

INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('C', '1', 500);
INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('C', '2', 500 );
INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('C', '3', 500);
INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('M', '1', 100);
INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('M', '2', 200);
INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('M', '3', 300);
INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('LR', '1', 100);
INSERT INTO SALLE (idCine, idSalle, capacite) VALUES ('LR', '2', 350);

INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('I','C', '1');
INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('I', 'C', '2');
INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('GT','C', '3');
INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('GT','M', '1');
INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('GT','M', '2');
INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('I','M', '3');
INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('V','LR', '1');
INSERT INTO PROJETER (idFilm, idCine, idSalle) VALUES ('VG','LR', '2');

