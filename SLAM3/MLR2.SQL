-- -----------------------------------------------------------------------------
--             Génération dune base de données pour
--                      Oracle Version 10g
--                        (12/9/2019 10:26:28)
-- -----------------------------------------------------------------------------
--      Nom de la base : MESGUEN
--      Projet : 
--      Auteur : BTSSIO
--      Date de dernière modification : 12/9/2019 10:21:43
-- -----------------------------------------------------------------------------

DROP TABLE CHAUFFEUR CASCADE CONSTRAINTS;

DROP TABLE COMMUNE CASCADE CONSTRAINTS;

DROP TABLE DOCUMENTATION CASCADE CONSTRAINTS;

DROP TABLE ETAPE CASCADE CONSTRAINTS;

DROP TABLE LIEU CASCADE CONSTRAINTS;

DROP TABLE PHOTO CASCADE CONSTRAINTS;

DROP TABLE TOURNEE CASCADE CONSTRAINTS;

DROP TABLE TYPEDOCUMENTATION CASCADE CONSTRAINTS;

DROP TABLE VEHICULE CASCADE CONSTRAINTS;

-- -----------------------------------------------------------------------------
--       CREATION DE LA BASE 
-- -----------------------------------------------------------------------------


-- -----------------------------------------------------------------------------
--       TABLE : CHAUFFEUR
-- -----------------------------------------------------------------------------

CREATE TABLE CHAUFFEUR
   (
    CHFID VARCHAR2(32)  NOT NULL,
    CHFNOM VARCHAR2(32) 
      DEFAULT NULL,
    CHFPRENOM VARCHAR2(32) 
      DEFAULT NULL,
    CHFTEL VARCHAR2(32) 
      DEFAULT NULL,
    CHFMAIL VARCHAR2(32) 
      DEFAULT NULL
,   CONSTRAINT PK_CHAUFFEUR PRIMARY KEY (CHFID)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : COMMUNE
-- -----------------------------------------------------------------------------

CREATE TABLE COMMUNE
   (
    VILID VARCHAR2(32)  NOT NULL,
    VILNOM VARCHAR2(32) 
      DEFAULT NULL
,   CONSTRAINT PK_COMMUNE PRIMARY KEY (VILID)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : DOCUMENTATION
-- -----------------------------------------------------------------------------

CREATE TABLE DOCUMENTATION
   (
    DOCID VARCHAR2(32)  NOT NULL,
    TRNNUM NUMBER(11)  NOT NULL,
    TYPDOCID VARCHAR2(32)  NOT NULL,
    DOCURL VARCHAR2(32) 
      DEFAULT NULL
,   CONSTRAINT PK_DOCUMENTATION PRIMARY KEY (DOCID)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : ETAPE
-- -----------------------------------------------------------------------------

CREATE TABLE ETAPE
   (
    TRNNUM NUMBER(11)  NOT NULL,
    ETPID NUMBER(11)  NOT NULL,
    LIEUID NUMBER(11)  NOT NULL,
    ETPHREMIN DATE 
      DEFAULT NULL,
    ETPHREMAX DATE 
      DEFAULT NULL,
    ETPHREDEBUT DATE 
      DEFAULT NULL,
    ETPHREFIN DATE 
      DEFAULT NULL,
    ETPNBPALLIV NUMBER(6) 
      DEFAULT NULL,
    ETPNBPALLIVEUR NUMBER(6) 
      DEFAULT NULL,
    ETPNBPALVARCHARG NUMBER(6) 
      DEFAULT NULL,
    ETPNBPALVARCHARGEUR DATE 
      DEFAULT NULL,
    ETPCHEQUE NUMBER(6) 
      DEFAULT NULL,
    ETPETATLIV VARCHAR2(32) 
      DEFAULT NULL,
    ETPCOMMENTAIRE VARCHAR2(32) 
      DEFAULT NULL,
    ETPVAL VARCHAR2(32) 
      DEFAULT NULL,
    ETPKM NUMBER(11) 
      DEFAULT NULL
,   CONSTRAINT PK_ETAPE PRIMARY KEY (TRNNUM, ETPID)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : LIEU
-- -----------------------------------------------------------------------------

CREATE TABLE LIEU
   (
    LIEUID NUMBER(11)  NOT NULL,
    VILID VARCHAR2(32)  NOT NULL,
    LIEUNOM VARCHAR2(32) 
      DEFAULT NULL,
    LIEUCOORDGPS VARCHAR2(32) 
      DEFAULT NULL
,   CONSTRAINT PK_LIEU PRIMARY KEY (LIEUID)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : PHOTO
-- -----------------------------------------------------------------------------

CREATE TABLE PHOTO
   (
    PHOID VARCHAR2(32)  NOT NULL,
    TRNNUM NUMBER(11)  NOT NULL,
    ETPID NUMBER(11)  NOT NULL,
    PHOURL VARCHAR2(32) 
      DEFAULT NULL
,   CONSTRAINT PK_PHOTO PRIMARY KEY (PHOID)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : TOURNEE
-- -----------------------------------------------------------------------------

CREATE TABLE TOURNEE
   (
    TRNNUM NUMBER(11)  NOT NULL,
    VEHIMMAT VARCHAR2(32)  NOT NULL,
    CHFID VARCHAR2(32)  NOT NULL,
    TRNCOMMENTAIRE VARCHAR2(32) 
      DEFAULT NULL,
    TRNPECCHAUFFEUR VARCHAR2(32) 
      DEFAULT NULL,
    TRNDTE DATE 
      DEFAULT NULL
,   CONSTRAINT PK_TOURNEE PRIMARY KEY (TRNNUM)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : TYPEDOCUMENTATION
-- -----------------------------------------------------------------------------

CREATE TABLE TYPEDOCUMENTATION
   (
    TYPDOCID VARCHAR2(32)  NOT NULL,
    TYPDOCLIB VARCHAR2(32) 
      DEFAULT NULL
,   CONSTRAINT PK_TYPEDOCUMENTATION PRIMARY KEY (TYPDOCID)  
   ) ;

-- -----------------------------------------------------------------------------
--       TABLE : VEHICULE
-- -----------------------------------------------------------------------------

CREATE TABLE VEHICULE
   (
    VEHIMMAT VARCHAR2(32)  NOT NULL,
    VEHNOM VARCHAR2(32) 
      DEFAULT NULL
,   CONSTRAINT PK_VEHICULE PRIMARY KEY (VEHIMMAT)  
   ) ;


-- -----------------------------------------------------------------------------
--       CREATION DES REFERENCES DE TABLE
-- -----------------------------------------------------------------------------


ALTER TABLE DOCUMENTATION ADD (
     CONSTRAINT DOCUMENTATION_IBFK_1
          FOREIGN KEY (TRNNUM)
               REFERENCES TOURNEE (TRNNUM))   ;

ALTER TABLE DOCUMENTATION ADD (
     CONSTRAINT DOCUMENTATION_IBFK_2
          FOREIGN KEY (TYPDOCID)
               REFERENCES TYPEDOCUMENTATION (TYPDOCID))   ;

ALTER TABLE ETAPE ADD (
     CONSTRAINT ETAPE_IBFK_1
          FOREIGN KEY (TRNNUM)
               REFERENCES TOURNEE (TRNNUM))   ;

ALTER TABLE ETAPE ADD (
     CONSTRAINT ETAPE_IBFK_2
          FOREIGN KEY (LIEUID)
               REFERENCES LIEU (LIEUID))   ;

ALTER TABLE LIEU ADD (
     CONSTRAINT LIEU_IBFK_1
          FOREIGN KEY (VILID)
               REFERENCES COMMUNE (VILID))   ;

ALTER TABLE PHOTO ADD (
     CONSTRAINT PHOTO_IBFK_1
          FOREIGN KEY (TRNNUM, ETPID)
               REFERENCES ETAPE (TRNNUM, ETPID))   ;

ALTER TABLE TOURNEE ADD (
     CONSTRAINT TOURNEE_IBFK_1
          FOREIGN KEY (VEHIMMAT)
               REFERENCES VEHICULE (VEHIMMAT))   ;

ALTER TABLE TOURNEE ADD (
     CONSTRAINT TOURNEE_IBFK_2
          FOREIGN KEY (CHFID)
               REFERENCES CHAUFFEUR (CHFID))   ;


-- -----------------------------------------------------------------------------
--                FIN DE GENERATION
-- -----------------------------------------------------------------------------