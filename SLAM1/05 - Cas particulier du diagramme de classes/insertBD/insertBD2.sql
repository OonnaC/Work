INSERT INTO PERSONNE (id, nom, prenom) VALUES ('TC', 'CRUISE', 'TOM');
INSERT INTO PERSONNE (id, nom, prenom) VALUES ('GH', 'HACKMAN', 'GENE');
INSERT INTO PERSONNE (id, nom, prenom) VALUES ('CE', 'EASTWOOD', 'CLINT');
INSERT INTO PERSONNE (id, nom, prenom) VALUES ('JD', 'DUTRONC', 'JACQUES');
INSERT INTO PERSONNE (id, nom, prenom) VALUES ('AH', 'HITCHCOCK', 'ALFRED');

INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('V', 'VERTIGO', '1958', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('I', 'IMPITOYABLE', '1992', 'WESTERN');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('P', 'PSYCHOSE', '1960', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('E', 'ENNEMI D''ETAT', '1999', 'THRILLER');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('VG', 'VAN GOGH', '1991', 'BIOPIC');
INSERT INTO FILM (idFilm, titre, annee, genre) VALUES ('GT', 'GRAN TORINO', '2008', 'THRILLER');

INSERT INTO JOUE (id, idFilm) VALUES ('GH', 'E');
INSERT INTO JOUE (id, idFilm) VALUES ('GH', 'I');
INSERT INTO JOUE (id, idFilm) VALUES ('JD', 'VG');

INSERT INTO REALISE (idFilm, id) VALUES ('V', 'AH');
INSERT INTO REALISE (idFilm, id) VALUES ('P', 'AH');
INSERT INTO REALISE (idFilm, id) VALUES ('I', 'CE');