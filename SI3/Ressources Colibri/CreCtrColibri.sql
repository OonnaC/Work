ALTER TABLE CLIENTS
ADD CONSTRAINT pk_clients PRIMARY KEY (CodeCli);

ALTER TABLE FILMS
ADD CONSTRAINT pk_films PRIMARY KEY (CodeFilm);

ALTER TABLE LOCATIONS
ADD CONSTRAINT pk_locations PRIMARY KEY (CodeFilm, CodeCli, DateDebut);

ALTER TABLE LOCATIONS
ADD CONSTRAINT fk_locations_films FOREIGN KEY (CodeFilm) REFERENCES FILMS(CodeFilm);

ALTER TABLE LOCATIONS
ADD CONSTRAINT fk_locations_clients FOREIGN KEY (CodeCli) REFERENCES CLIENTS(CodeCli);
