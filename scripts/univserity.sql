-- Script DDL pour la création de la base de données university 
-- Developer: YEL
-- Date: 20200106

CREATE TABLE etudiant 
(
    cne VARCHAR(20),
    nom VARCHAR(30),
    adresse VARCHAR(100)
);

CREATE TABLE module 
(
    id INT,
    designation VARCHAR(30),
    date_debut DATE,
    date_fin DATE,
    coefficient DECIMAL
);

CREATE TABLE enseignant
(
    matricule VARCHAR(10),
    nom VARCHAR(30),
    grade VARCHAR(10)
)


