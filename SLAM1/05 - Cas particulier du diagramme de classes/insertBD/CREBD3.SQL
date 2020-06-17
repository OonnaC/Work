DROP DATABASE IF EXISTS MLR1;

CREATE DATABASE IF NOT EXISTS MLR1;
USE MLR1;
# -----------------------------------------------------------------------------
#       TABLE : INTERNAUTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INTERNAUTE
 (
   EMAIL CHAR(32) NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENOM CHAR(32) NULL  ,
   REGION CHAR(32) NULL  
   , PRIMARY KEY (EMAIL) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : JOUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS JOUR
 (
   DTE CHAR(32) NOT NULL  
   , PRIMARY KEY (DTE) 
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
#       TABLE : EVALUER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EVALUER
 (
   IDFILM CHAR(32) NOT NULL  ,
   EMAIL CHAR(32) NOT NULL  ,
   DTE CHAR(32) NOT NULL  ,
   NOTE CHAR(32) NULL  
   , PRIMARY KEY (IDFILM,EMAIL,DTE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE EVALUER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_EVALUER_FILM
     ON EVALUER (IDFILM ASC);

CREATE  INDEX I_FK_EVALUER_INTERNAUTE
     ON EVALUER (EMAIL ASC);

CREATE  INDEX I_FK_EVALUER_JOUR
     ON EVALUER (DTE ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE EVALUER 
  ADD FOREIGN KEY FK_EVALUER_FILM (IDFILM)
      REFERENCES FILM (IDFILM) ;


ALTER TABLE EVALUER 
  ADD FOREIGN KEY FK_EVALUER_INTERNAUTE (EMAIL)
      REFERENCES INTERNAUTE (EMAIL) ;


ALTER TABLE EVALUER 
  ADD FOREIGN KEY FK_EVALUER_JOUR (DTE)
      REFERENCES JOUR (DTE) ;

