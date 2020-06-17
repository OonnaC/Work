# -----------------------------------------------------------------------------
#       TABLE : T_AUTEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS T_AUTEUR
 (
   AUT_NO_ID INTEGER NOT NULL  ,
   AUT_NOM VARCHAR(128) NOT NULL  ,
   AUT_PRENOM VARCHAR(128) NOT NULL  ,
   AUT_DTE_NAISS DATE NULL  
   , PRIMARY KEY (AUT_NO_ID) 
 ) 
 ENGINE=InnoDB comment = "";

# -----------------------------------------------------------------------------
#       TABLE : T_LIVRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS T_LIVRE
 (
   LIV_ISBN_ID CHAR(32) NOT NULL  ,
   AUT_NO_ID INTEGER NOT NULL  ,
   LIV_TITRE VARCHAR(128) NOT NULL  ,
   LIB_NB_EX CHAR(32) NOT NULL  
   , PRIMARY KEY (LIV_ISBN_ID) 
 ) 
 ENGINE=InnoDB comment = "";

# -----------------------------------------------------------------------------
#       TABLE : T_COMMUNE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS T_COMMUNE
 (
   COM_INSEE_ID CHAR(5) NOT NULL  ,
   COM_CP CHAR(5) NOT NULL  ,
   COM_NOM VARCHAR(128) NOT NULL  
   , PRIMARY KEY (COM_INSEE_ID) 
 ) 
 ENGINE=InnoDB comment = "";

# -----------------------------------------------------------------------------
#       TABLE : T_USAGER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS T_USAGER
 (
   USG_NO_ID INTEGER NOT NULL  ,
   COM_INSEE_ID CHAR(5) NULL  ,
   COM_INSEE_ID1 CHAR(5) NULL  ,
   USG_NOM VARCHAR(128) NOT NULL  ,
   USG_PRENOM CHAR(32) NULL  ,
   HBT_ADR1 CHAR(32) NOT NULL  ,
   HBT_ADR2 CHAR(32) NULL  
   , PRIMARY KEY (USG_NO_ID) 
 ) 
 ENGINE=InnoDB comment = "";

# -----------------------------------------------------------------------------
#       TABLE : T_RETOUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS T_RETOUR
 (
   LIV_ISBN_ID CHAR(32) NOT NULL  ,
   USG_NO_ID INTEGER NOT NULL  
   , PRIMARY KEY (LIV_ISBN_ID,USG_NO_ID) 
 ) 
 ENGINE=InnoDB comment = "";

# -----------------------------------------------------------------------------
#       TABLE : T_EMPRUNTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS T_EMPRUNTER
 (
   LIV_ISBN_ID CHAR(32) NOT NULL  ,
   USG_NO_ID INTEGER NOT NULL  
   , PRIMARY KEY (LIV_ISBN_ID,USG_NO_ID) 
 ) 
 ENGINE=InnoDB comment = "";