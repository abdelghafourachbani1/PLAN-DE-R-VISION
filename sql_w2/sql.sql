1. Challenge 1 : (INNER JOIN) Afficher les commandes avec le nom du client
correspondant (tables Commandes et Clients).

SELECT  co.id AS commande_id,
    c.nom AS client_nom
FROM Commandes co
JOIN Clients c ON co.client_id = c.id;


2. Challenge 2 : (LEFT JOIN) Afficher tous les clients, et le montant de leur
commande s ils en ont une (afficher NULL sinon)

SELECT  c.nom AS client_nom,
    SUM(p.prix * lc.quantite) AS montant_commande
FROM Clients c
LEFT JOIN Commandes co ON c.id = co.client_id
LEFT JOIN Lignes_Commandes lc ON co.id = lc.commande_id
LEFT JOIN Produits p ON lc.produit_id = p.id
GROUP BY c.nom;


3. Challenge 3 : (JOIN 3 tables) Afficher le détail des commandes : nom du client,
nom du produit et quantité commandée (tables Clients, Commandes,
Produits, Lignes_Commandes).

SELECT c.nom AS client_nom,
    p.nom AS produit_nom,
    lc.quantite
FROM Clients c
JOIN Commandes co ON c.id = co.client_id
JOIN Lignes_Commandes lc ON co.id = lc.commande_id
JOIN Produits p ON lc.produit_id = p.id;
