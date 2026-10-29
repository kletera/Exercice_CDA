DROP DATABASE shop;
CREATE DATABASE IF NOT EXISTS shop CHARSET utf8mb4;

USE shop;

CREATE TABLE IF NOT EXISTS category(
	id INT AUTO_INCREMENT,
    `name` VARCHAR(50) UNIQUE NOT NULL,
    CONSTRAINT pk_category PRIMARY KEY (id),
    CONSTRAINT ck_entre_2et50_name CHECK ( CHAR_LENGTH( `name` ) BETWEEN 3 AND 49)
);

CREATE TABLE IF NOT EXISTS article(
	id INT AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    price REAL NOT NULL,
    id_category INT NOT NULL,
    CONSTRAINT pk_article PRIMARY KEY (id),
    CONSTRAINT fk_article_category FOREIGN KEY (id_category) REFERENCES category(id),
    CONSTRAINT ck_caract_sup2_title CHECK ( CHAR_LENGTH(title)>2 )
);

CREATE TABLE IF NOT EXISTS seller(
	id INT AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    CONSTRAINT pk_seller PRIMARY KEY (id),
    CONSTRAINT ck_cart_entre_2et25_firstname CHECK( CHAR_LENGTH(firstname) BETWEEN 3 AND 24 )
);

CREATE TABLE IF NOT EXISTS receipt(
	id INT AUTO_INCREMENT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_seller INT NOT NULL,
    CONSTRAINT pk_receipt PRIMARY KEY (id),
    CONSTRAINT fk_receipt_seller FOREIGN KEY (id_seller) REFERENCES seller(id),
    CONSTRAINT ck_sup_moment_created_at CHECK ( created_at >='2026-10-15' )
);

CREATE TABLE IF NOT EXISTS article_receipt(
	id_article INT NOT NULL,
    id_receipt INT NOT NULL,
    quantity INT NOT NULL,
    CONSTRAINT pk_article_receipt PRIMARY KEY (id_article,id_receipt),
    CONSTRAINT fk_ar_article FOREIGN KEY (id_article) REFERENCES article(id),
    CONSTRAINT fk_ar_receipt FOREIGN KEY (id_receipt) REFERENCES receipt(id)
);
-- INSERT INTO seller (firstname, lastname) VALUES ("Je", "Ford");
INSERT INTO seller (firstname, lastname) VALUES ("Jea", "Ford");
-- INSERT INTO receipt (created_at,id_seller) VALUES ("2026-10-10",1);
INSERT INTO receipt (id_seller) VALUES (1);