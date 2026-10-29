CREATE USER 'vendeur'@'%' IDENTIFIED BY '1234';
GRANT SELECT ON shop.* TO 'vendeur'@'%';
GRANT INSERT ON shop.receipt TO 'vendeur'@'%';
GRANT INSERT ON shop.article_receipt TO 'vendeur'@'%';
FLUSH PRIVILEGES;

CREATE USER 'inventaire'@'%' IDENTIFIED BY '321';
GRANT SELECT ON shop.* TO 'inventaire'@'%';
FLUSH PRIVILEGES;

SELECT user FROM mysql.user;