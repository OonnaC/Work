DROP DATABASE IF EXISTS GCM;

CREATE DATABASE IF NOT EXISTS GCM;
USE GCM;
# -----------------------------------------------------------------------------
#       TABLE : FOURNISSEUR
# -----------------------------------------------------------------------------

CREATE TABLE FOURNISSEUR
 (
   NUMERO_FOURNISSEUR CHAR(32) NOT NULL  ,
   NOM_FOURNISSEUR CHAR(32) NULL  ,
   ADRESSE_FOURNISSEUR CHAR(32) NULL  ,
   CODE_POSTAL CHAR(5) NULL  ,
   VILLE CHAR(32) NULL  ,
   TELEPHONE CHAR(32) NULL  ,
   FAX CHAR(32) NULL  
   , PRIMARY KEY (NUMERO_FOURNISSEUR) 
 ) engine = innodb
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MICRO_ORDINATEUR
# -----------------------------------------------------------------------------

CREATE TABLE MICRO_ORDINATEUR
 (
   NUMERO_INVENTAIRE CHAR(32) NOT NULL  ,
   NUMERO_FOURNISSEUR CHAR(32) NOT NULL  ,
   NUMERO_CONTRAT CHAR(32) NULL  ,
   NOM_MACHINE CHAR(32) NULL  ,
   DATE_ACHAT DATE NULL  
   , PRIMARY KEY (NUMERO_INVENTAIRE) 
 ) engine = innodb
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MICRO_ORDINATEUR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MICRO_ORDINATEUR_FOURNISSEUR
     ON MICRO_ORDINATEUR (NUMERO_FOURNISSEUR ASC);

CREATE  INDEX I_FK_MICRO_ORDINATEUR_CONTRAT_MAINTENANCE
     ON MICRO_ORDINATEUR (NUMERO_CONTRAT ASC);

# -----------------------------------------------------------------------------
#       TABLE : CONTRAT_MAINTENANCE
# -----------------------------------------------------------------------------

CREATE TABLE CONTRAT_MAINTENANCE
 (
   NUMERO_CONTRAT CHAR(32) NOT NULL  ,
   TYPE_GARANTIE CHAR(32) NULL  ,
   DATE_SIGNATURE DATE NULL  ,
   DATE_EXPIRATION DATE NULL  
   , PRIMARY KEY (NUMERO_CONTRAT) 
 ) engine = innodb
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE MICRO_ORDINATEUR 
  ADD FOREIGN KEY FK_MICRO_ORDINATEUR_FOURNISSEUR (NUMERO_FOURNISSEUR)
      REFERENCES FOURNISSEUR (NUMERO_FOURNISSEUR) ;


ALTER TABLE MICRO_ORDINATEUR 
  ADD FOREIGN KEY FK_MICRO_ORDINATEUR_CONTRAT_MAINTENANCE (NUMERO_CONTRAT)
      REFERENCES CONTRAT_MAINTENANCE (NUMERO_CONTRAT) ;

