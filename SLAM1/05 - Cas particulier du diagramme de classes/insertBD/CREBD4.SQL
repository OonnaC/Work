DROP DATABASE IF EXISTS MLR3;

CREATE DATABASE IF NOT EXISTS MLR3;
USE MLR3;
# -----------------------------------------------------------------------------
#       TABLE : ACTEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ACTEUR
 (
   ID CHAR(32) NOT NULL  ,
   ID_PERE CHAR(32) NULL,
   NOM CHAR(32) NULL  ,
   PRENOM CHAR(32) NULL  ,
   DTENAISSANCE CHAR(32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ACTEUR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ACTEUR_ACTEUR
     ON ACTEUR (ID_PERE ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE ACTEUR 
  ADD FOREIGN KEY FK_ACTEUR_ACTEUR (ID_PERE)
      REFERENCES ACTEUR (ID) ;

