DROP DATABASE IF EXISTS BD2;

CREATE DATABASE IF NOT EXISTS BD2;
USE BD2;
# -----------------------------------------------------------------------------
#       TABLE : PERSONNE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERSONNE
 (
   ID CHAR(32) NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENOM CHAR(32) NULL  ,
   DTENAISSANCE CHAR(32) NULL  
   , PRIMARY KEY (ID) 
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
#       TABLE : REALISE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS REALISE
 (
   IDFILM CHAR(32) NOT NULL  ,
   ID CHAR(32) NOT NULL  
   , PRIMARY KEY (IDFILM,ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE REALISE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_REALISE_FILM
     ON REALISE (IDFILM ASC);

CREATE  INDEX I_FK_REALISE_PERSONNE
     ON REALISE (ID ASC);

# -----------------------------------------------------------------------------
#       TABLE : JOUE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS JOUE
 (
   ID CHAR(32) NOT NULL  ,
   IDFILM CHAR(32) NOT NULL  
   , PRIMARY KEY (ID,IDFILM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE JOUE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_JOUE_PERSONNE
     ON JOUE (ID ASC);

CREATE  INDEX I_FK_JOUE_FILM
     ON JOUE (IDFILM ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE REALISE 
  ADD FOREIGN KEY FK_REALISE_FILM (IDFILM)
      REFERENCES FILM (IDFILM) ;


ALTER TABLE REALISE 
  ADD FOREIGN KEY FK_REALISE_PERSONNE (ID)
      REFERENCES PERSONNE (ID) ;


ALTER TABLE JOUE 
  ADD FOREIGN KEY FK_JOUE_PERSONNE (ID)
      REFERENCES PERSONNE (ID) ;


ALTER TABLE JOUE 
  ADD FOREIGN KEY FK_JOUE_FILM (IDFILM)
      REFERENCES FILM (IDFILM) ;

