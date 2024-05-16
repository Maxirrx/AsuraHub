create table Acteur (
codeAct int AUTO_INCREMENT,
nomAct VARCHAR(50) NOT NULL,
preAct VARCHAR(50) NOT NULL,
natAct VARCHAR(100) NOT NULL,
datnaissAct DATE NOT NULL,
CONSTRAINT Acteur_pk PRIMARY KEY (codeAct))
ENGINE = INNODB;

create table Realisateur(
codRea int AUTO_INCREMENT,
nomRea VARCHAR(50) NOT NULL,
prenomRea VARCHAR(50) NOT NULL,
natRea VARCHAR(100) NOT NULL,
recompenseRealisateur BOOLEAN NOT NULL,
CONSTRAINT Realisateur_pk primary key (codRea))
ENGINE = INNODB;

create table Classification (
classOC int AUTO_INCREMENT,
libclaOC varchar(100) NOT NULL,
CONSTRAINT Classification_pk primary key (classOC))
ENGINE = INNODB;

create table Genre (
codGenre int AUTO_INCREMENT,
libgOC varchar(150) NOT NULL,
CONSTRAINT Genre_pk primary key (codGenre))
ENGINE = INNODB;

create table OeuvreCinematographique (
codifOC int AUTO_INCREMENT, 
titreOriginal VARCHAR(250) NOT NULL,
titreFrancais VARCHAR(250) NOT NULL,
anneeSortie int NOT NULL,
resume VARCHAR(1000),
nbEpisode int NOT NULL,
codRea int NOT NULL,
classOC int NOT NULL,
codGenre int NOT NULL,
CONSTRAINT OeuvreCinematographique_pk primary key (codifOC),
CONSTRAINT OeuvreCinematographique_Realisateur_fk FOREIGN key (codRea) REFERENCES Realisateur (codRea),
CONSTRAINT OeuvreCinematographique_Classification_fk FOREIGN key (classOC) REFERENCES Classification (classOC),
CONSTRAINT OeuvreCinematographique_Genre_fk FOREIGN key (codGenre) REFERENCES  Genre (codGenre))
ENGINE = INNODB;

create table Jouer (
codeAct int,
codifOC int,
roleAct BOOLEAN NOT NULL,
CONSTRAINT Jouer_pk primary key (codeAct, codifOC),
CONSTRAINT Jouer_OeuvreCinematographique_fk FOREIGN KEY (codifOC) REFERENCES OeuvreCinematographique(codifOC),
CONSTRAINT Jouer_Acteur_fk FOREIGN key (codeAct) REFERENCES Acteur (codeAct))
ENGINE = INNODB;


create table Gestionnaire (
codeGest int AUTO_INCREMENT,
nomGest VARCHAR(50) NOT NULL,
prenomGest VARCHAR(50) NOT NULL,
mdpGest VARCHAR(100) NOT NULL,
CONSTRAINT Gestionnaire_pk primary key (codeGest))
ENGINE = INNODB;