#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: BOUTIQUE
#------------------------------------------------------------

CREATE TABLE BOUTIQUE(
        ID_PRODUIT          Int  Auto_increment  NOT NULL ,
        NOM_PRODUIT         Varchar (255) NOT NULL ,
        DESCRIPTION_PRODUIT Varchar (255) NOT NULL ,
        PRIX_PRODUIT        Int NOT NULL
	,CONSTRAINT BOUTIQUE_PK PRIMARY KEY (ID_PRODUIT)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CATEGORIE
#------------------------------------------------------------

CREATE TABLE CATEGORIE(
        ID_CATEGORIE  Int  Auto_increment  NOT NULL ,
        NOM_CATEGORIE Varchar (255) NOT NULL
	,CONSTRAINT CATEGORIE_PK PRIMARY KEY (ID_CATEGORIE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MEMBRE
#------------------------------------------------------------

CREATE TABLE MEMBRE(
        ID_MEMBRE          Int  Auto_increment  NOT NULL ,
        NOM_MEMBRE         Varchar (255) NOT NULL ,
        DESCRIPTION_MEMBRE Varchar (255) NOT NULL
	,CONSTRAINT MEMBRE_PK PRIMARY KEY (ID_MEMBRE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FOURNIR
#------------------------------------------------------------

CREATE TABLE FOURNIR(
        ID_CATEGORIE Int NOT NULL ,
        ID_PRODUIT   Int NOT NULL
	,CONSTRAINT FOURNIR_PK PRIMARY KEY (ID_CATEGORIE,ID_PRODUIT)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        ID_IDENTIFICATION  Int  Auto_increment  NOT NULL ,
        NOM                Varchar (100) NOT NULL ,
        PRENOM             Varchar (100) NOT NULL ,
        LOCALISATION       Varchar (255) NOT NULL ,
        ADRESSE_MAIL       Varchar (255) NOT NULL ,
        MOT_DE_PASSE       Varchar (255) NOT NULL ,
        CHECK_MOT_DE_PASSE Bool NOT NULL ,
        ID_ASSOCIATION     Int NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (ID_IDENTIFICATION)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMANDE
#------------------------------------------------------------

CREATE TABLE COMMANDE(
        ID_COMMANDE       Int  Auto_increment  NOT NULL ,
        DATE_COMMANDE     Date NOT NULL ,
        ID_IDENTIFICATION Int NOT NULL
	,CONSTRAINT COMMANDE_PK PRIMARY KEY (ID_COMMANDE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PHOTOS
#------------------------------------------------------------

CREATE TABLE PHOTOS(
        ID_PHOTO          Int  Auto_increment  NOT NULL ,
        Titre_photo       Varchar (255) NOT NULL ,
        Date_publication  Datetime NOT NULL ,
        Lien_publication  Varchar (255) NOT NULL ,
        ID_IDENTIFICATION Int NOT NULL ,
        ID_EVENEMENTS     Int NOT NULL ,
        ID_ASSOCIATION    Int NOT NULL
	,CONSTRAINT PHOTOS_PK PRIMARY KEY (ID_PHOTO)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: EVENEMENTS
#------------------------------------------------------------

CREATE TABLE EVENEMENTS(
        ID_EVENEMENTS          Int  Auto_increment  NOT NULL ,
        Nom_evenemts           Varchar (255) NOT NULL ,
        Description_evenements Varchar (255) NOT NULL ,
        Date_evenement         Date NOT NULL ,
        Eligibilite            Bool NOT NULL ,
        ID_IDENTIFICATION      Int NOT NULL
	,CONSTRAINT EVENEMENTS_PK PRIMARY KEY (ID_EVENEMENTS)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ASSOCIATION
#------------------------------------------------------------

CREATE TABLE ASSOCIATION(
        ID_ASSOCIATION        Int  Auto_increment  NOT NULL ,
        Nom_association       Varchar (255) NOT NULL ,
        Description_evenement Varchar (255) NOT NULL ,
        President_association Varchar (255) NOT NULL ,
        ID_PHOTO              Int NOT NULL
	,CONSTRAINT ASSOCIATION_PK PRIMARY KEY (ID_ASSOCIATION)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CONTENIR
#------------------------------------------------------------

CREATE TABLE CONTENIR(
        ID_PRODUIT  Int NOT NULL ,
        ID_COMMANDE Int NOT NULL ,
        Quantite    Int NOT NULL
	,CONSTRAINT CONTENIR_PK PRIMARY KEY (ID_PRODUIT,ID_COMMANDE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PANIER
#------------------------------------------------------------

CREATE TABLE PANIER(
        ID_PRODUIT        Int NOT NULL ,
        ID_IDENTIFICATION Int NOT NULL ,
        Quantite          Int NOT NULL
	,CONSTRAINT PANIER_PK PRIMARY KEY (ID_PRODUIT,ID_IDENTIFICATION)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: AIMER
#------------------------------------------------------------

CREATE TABLE AIMER(
        ID_PHOTO          Int NOT NULL ,
        ID_IDENTIFICATION Int NOT NULL
	,CONSTRAINT AIMER_PK PRIMARY KEY (ID_PHOTO,ID_IDENTIFICATION)
)ENGINE=InnoDB;






	=======================================================================
	   Désolé, il faut activer cette version pour voir la suite du script ! 
	=======================================================================
