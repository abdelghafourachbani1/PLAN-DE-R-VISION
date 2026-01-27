1. Écrire la requête CREATE TABLE pour une table Produits (id, nom,
prix, stock).

CREATE TABLE Produits(
    id SERIAL primary key,
    nom varchar(100) NOT NULL,
    prix int NOT NULL,
    stock int not null
);

2. Challenge 2 : Écrire les requêtes INSERT pour ajouter 3 nouveaux produits dans
la table.

INSERT INTO Produits(nom,prix,stock) 
VALUES('p1',100,25),('p2',99,12),('p3',250,3);

3. Challenge 3 : Écrire une requête UPDATE pour augmenter le prix dun produit
spécifique de 10%, puis une requête DELETE pour supprimer un produit en
rupture de stock.

UPDATE Produits 
SET prix = prix + (prix*0.1)  
WHERE id = 2;


DELETE FROM Produits WHERE stock = 0;