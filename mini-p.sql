-- database.sql
CREATE DATABASE IF NOT EXISTS newsletter_db;
USE newsletter_db;
CREATE TABLE IF NOT EXISTS News (
    news_id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    resume  VARCHAR(500) NOT NULL,
    contenu TEXT NOT NULL,
    date_publication DATETIME DEFAULT NOW()
);

-- Table pour les abonnés à la newsletter
CREATE TABLE IF NOT EXISTS Internaute (
    internaute_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL
);

