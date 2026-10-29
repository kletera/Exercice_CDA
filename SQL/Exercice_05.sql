DELIMITER //
CREATE PROCEDURE `insert_article`(
IN new_title VARCHAR(50),
IN new_price DOUBLE,
IN new_id_category INT
)
BEGIN 
	START TRANSACTION;
    IF (SELECT id FROM article WHERE title=new_title)>0 AND new_price>0 THEN
		ROLLBACK;
        SIGNAL SQLSTATE '10000' SET MESSAGE_TEXT = "Attention l'article existe déja";
	ELSE
		INSERT INTO article (title, price, id_category) VALUES (new_title, new_price, new_id_category);
	END IF;
END //
DELIMITER ;

CALL `insert_article`('Pomme',1.5,1);

