CREATE DATABASE IF NOT EXISTS vitrine CHARSET utf8mb4;

USE vitrine;

CREATE TABLE IF NOT EXISTS types_compte(
   id_types_compte INT AUTO_INCREMENT,
   nom_type VARCHAR(50) UNIQUE NOT NULL,
   CONSTRAINT pk_types_compte PRIMARY KEY(id_types_compte)
);

CREATE TABLE IF NOT EXISTS comptes(
   id_comptes INT AUTO_INCREMENT,
   pseudo VARCHAR(50) NOT NULL,
   email VARCHAR(100) NOT NULL UNIQUE,
   mot_de_passe VARCHAR(60) NOT NULL,
   statut VARCHAR(50) NOT NULL,
   create_at DATETIME NOT NULL,
   id_types_compte INT NOT NULL,
   CONSTRAINT pk_comptes PRIMARY KEY(id_comptes),
   CONSTRAINT fk_comptes_types_compte FOREIGN KEY(id_types_compte) REFERENCES types_compte(id_types_compte)
);

CREATE TABLE IF NOT EXISTS articles(
   id_articles INT AUTO_INCREMENT,
   titre VARCHAR(150) NOT NULL,
   contenu TEXT NOT NULL,
   date_creation DATETIME NOT NULL,
   date_modification DATETIME,
   id_comptes INT NOT NULL,
   CONSTRAINT pk_articles PRIMARY KEY(id_articles),
   CONSTRAINT fk_articles_comptes FOREIGN KEY(id_comptes) REFERENCES comptes(id_comptes)
);

CREATE TABLE IF NOT EXISTS commentaires(
   id_commentaires INT AUTO_INCREMENT,
   contenu TEXT NOT NULL,
   date_creation DATETIME NOT NULL,
   date_modification DATETIME,
   id_comptes INT NOT NULL,
   id_articles INT NOT NULL,
   CONSTRAINT pk_commentaires PRIMARY KEY(id_commentaires),
   CONSTRAINT fk_commentaires_comptes FOREIGN KEY(id_comptes) REFERENCES comptes(id_comptes) ON DELETE CASCADE,
   CONSTRAINT fk_commentaires_articles FOREIGN KEY(id_articles) REFERENCES articles(id_articles) ON DELETE CASCADE
);

ALTER TABLE comptes ADD CONSTRAINT ck_min3_carct_pseudo CHECK (LENGTH(pseudo)>=3);
ALTER TABLE comptes ADD CONSTRAINT ck_format_email CHECK (email LIKE "%@%");
