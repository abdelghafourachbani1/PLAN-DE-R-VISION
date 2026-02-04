1. Écrire la requête CREATE TABLE pour une table Produits (id, nom,
prix, stock).


CREATE TABLE Produits (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
);

2. Challenge 2 : Écrire les requêtes INSERT pour ajouter 3 nouveaux produits dans
la table.

INSERT INTO Produits (nom, prix, stock) VALUES
('p1', 2.5, 100),
('p2', 5.0, 50),
('p3', 30.0, 20);


3. Challenge 3 : Écrire une requête UPDATE pour augmenter le prix dun produit
spécifique de 10%, puis une requête DELETE pour supprimer un produit en
rupture de stock.

UPDATE Produits 
SET prix = prix + (prix*0.1)  
WHERE id = 2;


DELETE FROM Produits WHERE stock = 0;

1. Challenge 1 : Écrire la requête pour afficher le nombre total de commandes.

SELECT COUNT(*) FROM commandes ;

2. Challenge 2 : Écrire la requête pour calculer le prix moyen de tous les produits.

SELECT AVG(produit_prix) FROM produit;

3. Challenge 3 : Écrire la requête pour trouver le montant de la commande la
plus chère.

SELECT MAX(commande_prix) FROM commande ; 

CREATE TABLE Clients (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100)
);

CREATE TABLE Commandes (
    id SERIAL PRIMARY KEY,
    client_id INT NOT NULL,
    montant DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (client_id) REFERENCES Clients(id)
);

CREATE TABLE Lignes_Commandes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    commande_id INT NOT NULL,
    produit_id INT NOT NULL,
    quantite INT NOT NULL,
    FOREIGN KEY (commande_id) REFERENCES Commandes(id),
    FOREIGN KEY (produit_id) REFERENCES Produits(id)
);

