CREATE DATABASE gestion_etudiants;
USE gestion_etudiants;

CREATE TABLE Etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    date_naissance DATE
    
);

CREATE TABLE Cours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    professeur VARCHAR(100),
    horaire TIME,
    salle VARCHAR(50)
);

CREATE TABLE Inscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_etudiant INT,
    id_cours INT,
    date_inscription DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (id_etudiant) REFERENCES Etudiants(id) ON DELETE CASCADE,
    FOREIGN KEY (id_cours) REFERENCES Cours(id) ON DELETE CASCADE
);
