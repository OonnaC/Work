DROP DATABASE IF EXISTS MLR5;

CREATE DATABASE IF NOT EXISTS MLR5;
USE MLR5;
# -----------------------------------------------------------------------------
#       TABLE : FOURNISSEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FOURNISSEUR
 (
   NUMERO_FOURNISSEUR CHAR(32) NOT NULL  ,
   NOM_FOURNISSEUR CHAR(32) NULL  ,
   ADRESSE_FOURNISSEUR CHAR(32) NULL  ,
   CODE_POSTAL CHAR(5) NULL  ,
   VILLE CHAR(32) NULL  ,
   TELEPHONE CHAR(32) NULL  ,
   FAX CHAR(32) NULL  
   , PRIMARY KEY (NUMERO_FOURNISSEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : LOGICIEL
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS LOGICIEL
 (
   NUMERO_LICENCE CHAR(32) NOT NULL  ,
   NOM_LOGICIEL CHAR(32) NULL  ,
   CATEGORIE_LOGICIEL CHAR(32) NULL  ,
   NUMERO_SERIE CHAR(32) NULL  ,
   NUMERO_VERSION CHAR(32) NULL  
   , PRIMARY KEY (NUMERO_LICENCE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CONTRAT_MAINTENANCE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONTRAT_MAINTENANCE
 (
   NUMERO_CONTRAT CHAR(32) NOT NULL  ,
   TYPE_GARANTIE CHAR(32) NULL  ,
   DATE_SIGNATURE DATE NULL  ,
   DATE_EXPIRATION DATE NULL  
   , PRIMARY KEY (NUMERO_CONTRAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MICRO_ORDINATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MICRO_ORDINATEUR
 (
   NUMERO_INVENTAIRE CHAR(32) NOT NULL  ,
   NUMERO_FOURNISSEUR CHAR(32) NOT NULL  ,
   NUMERO_CONTRAT CHAR(32) NULL  ,
   NOM_MACHINE CHAR(32) NULL  ,
   DATE_ACHAT DATE NULL  
   , PRIMARY KEY (NUMERO_INVENTAIRE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MICRO_ORDINATEUR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MICRO_ORDINATEUR_FOURNISSEUR
     ON MICRO_ORDINATEUR (NUMERO_FOURNISSEUR ASC);

CREATE  INDEX I_FK_MICRO_ORDINATEUR_CONTRAT_MAINTENANCE
     ON MICRO_ORDINATEUR (NUMERO_CONTRAT ASC);

# -----------------------------------------------------------------------------
#       TABLE : INSTALLER_SUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSTALLER_SUR
 (
   NUMERO_INVENTAIRE CHAR(32) NOT NULL  ,
   NUMERO_LICENCE CHAR(32) NOT NULL  
   , PRIMARY KEY (NUMERO_INVENTAIRE,NUMERO_LICENCE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INSTALLER_SUR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INSTALLER_SUR_MICRO_ORDINATEUR
     ON INSTALLER_SUR (NUMERO_INVENTAIRE ASC);

CREATE  INDEX I_FK_INSTALLER_SUR_LOGICIEL
     ON INSTALLER_SUR (NUMERO_LICENCE ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE MICRO_ORDINATEUR 
  ADD FOREIGN KEY FK_MICRO_ORDINATEUR_FOURNISSEUR (NUMERO_FOURNISSEUR)
      REFERENCES FOURNISSEUR (NUMERO_FOURNISSEUR) ;


ALTER TABLE MICRO_ORDINATEUR 
  ADD FOREIGN KEY FK_MICRO_ORDINATEUR_CONTRAT_MAINTENANCE (NUMERO_CONTRAT)
      REFERENCES CONTRAT_MAINTENANCE (NUMERO_CONTRAT) ;


ALTER TABLE INSTALLER_SUR 
  ADD FOREIGN KEY FK_INSTALLER_SUR_MICRO_ORDINATEUR (NUMERO_INVENTAIRE)
      REFERENCES MICRO_ORDINATEUR (NUMERO_INVENTAIRE) ;


ALTER TABLE INSTALLER_SUR 
  ADD FOREIGN KEY FK_INSTALLER_SUR_LOGICIEL (NUMERO_LICENCE)
      REFERENCES LOGICIEL (NUMERO_LICENCE) ;

