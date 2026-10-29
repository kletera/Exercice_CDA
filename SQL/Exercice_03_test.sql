USE shop;
SELECT * FROM article;
SELECT * FROM article_receipt;
SELECT * FROM category;
SELECT * FROM receipt;
SELECT * FROM seller;

CREATE TABLE mama(
	id INT AUTO_INCREMENT,
    name_mama VARCHAR(50),
    CONSTRAINT pk_mama PRIMARY KEY (id)
);

INSERT INTO category VALUES("Meuble");
INSERT INTO article VALUES("Lit", 50,1);
INSERT INTO receipt VALUES ("2026-10-16",1);
INSERT INTO article_receipt VALUES (1,1);

UPDATE seller SET firstname="Bastien" WHERE id=1;
UPDATE receipt SET create_at="2026-11-01" WHERE id=1;

DELETE FROM seller WHERE id=1;
DELETE FROM receipt WHERE id=1;
DELETE FROM article WHERE id=1;