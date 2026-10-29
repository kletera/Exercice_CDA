USE shop;

CREATE VIEW vw_ticket AS 
	SELECT r.created_at `date`, s.lastname nom, s.firstname prenom, a.title nom_produit, a.price prix, q.quantity quantité, a.price*q.quantity total_HT FROM seller s
    INNER JOIN receipt r ON s.id=r.id_seller 
    INNER JOIN article_receipt q ON r.id=q.id_receipt
    INNER JOIN article a ON q.id_article=a.id;
    
SELECT * FROM vw_ticket;

CREATE VIEW vw_ticket_TTC AS
	SELECT r.created_at `date`, s.lastname nom, s.firstname prenom, SUM(a.price*q.quantity) TTC FROM seller s
    INNER JOIN receipt r ON s.id=r.id_seller 
    INNER JOIN article_receipt q ON r.id=q.id_receipt
    INNER JOIN article a ON q.id_article=a.id;
