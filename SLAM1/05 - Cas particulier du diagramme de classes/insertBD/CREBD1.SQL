DROP DATABASE IF EXISTS BD1;

CREATE DATABASE IF NOT EXISTS BD1;
USE BD1;
# -----------------------------------------------------------------------------
#       TABLE : CINEMA
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CINEMA
 (
   IDCINE CHAR(32) NOT NULL  ,
   NOM CHAR(32) NULL  ,
   ADRESSE CHAR(32) NULL  ,
   CP CHAR(32) NULL  ,
   VILLE CHAR(32) NULL  ,
   TEL CHAR(32) NULL  
   , PRIMARY KEY (IDCINE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FILM
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FILM
 (
   IDFILM CHAR(32) NOT NULL  ,
   TITRE CHAR(32) NULL  ,
   ANNEE CHAR(32) NULL  ,
   GENRE CHAR(32) NULL  
   , PRIMARY KEY (IDFILM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : SALLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SALLE
 (
   IDCINE CHAR(32) NOT NULL  ,
   IDSALLE CHAR(32) NOT NULL  ,
   CAPACITE CHAR(32) NULL  ,
   EQUIPEMENT CHAR(32) NULL  
   , PRIMARY KEY (IDCINE,IDSALLE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE SALLE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_SALLE_CINEMA
     ON SALLE (IDCINE ASC);

# -----------------------------------------------------------------------------
#       TABLE : PROJETER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PROJETER
 (
   IDFILM CHAR(32) NOT NULL  ,
   IDCINE CHAR(32) NOT NULL  ,
   IDSALLE CHAR(32) NOT NULL  
   , PRIMARY KEY (IDFILM,IDCINE,IDSALLE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PROJETER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PROJETER_FILM
     ON PROJETER (IDFILM ASC);

CREATE  INDEX I_FK_PROJETER_SALLE
     ON PROJETER (IDCINE ASC,IDSALLE ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE SALLE 
  ADD FOREIGN KEY FK_SALLE_CINEMA (IDCINE)
      REFERENCES CINEMA (IDCINE) ;


ALTER TABLE PROJETER 
  ADD FOREIGN KEY FK_PROJETER_FILM (IDFILM)
      REFERENCES FILM (IDFILM) ;


ALTER TABLE PROJETER 
  ADD FOREIGN KEY FK_PROJETER_SALLE (IDCINE,IDSALLE)
      REFERENCES SALLE (IDCINE,IDSALLE) ;

