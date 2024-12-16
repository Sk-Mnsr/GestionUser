<?php
require_once('./model/db.php');

function getAllProduits() {
    global $connexion;
    $sql = "SELECT p.*, c.libelle AS categories FROM products p JOIN categories c ON p.id_categorie = c.id";
    return pg_query($connexion, $sql);
}


function delete($id){
    global $connexion;
    $sql = "DELETE FROM products WHERE id = $id";
    return pg_query($connexion, $sql);
}

function add($nom,$descript, $quantite, $prix, $idcat){
    global $connexion;
    $sql = "INSERT INTO products (nom, descript,prix, quantite, id_categorie) VALUES 
            ('$nom','$descript',$prix,$quantite,$idcat)";
    return pg_query($connexion, $sql);
}

function updateProduit($id, $nom,$descript, $quantite, $prix, $idcat) {
    $connexion = pg_connect("host=localhost dbname=gestionDesUsersCatPro user=postgres password=passer");

    $query = "UPDATE products 
              SET nom = $1, descript = $2, quantite = $3, prix = $4,id_categorie = $5
              WHERE id = $6";

    $result = pg_query_params($connexion, $query, array($nom,$descript, $quantite, $prix, $idcat, $id));

    if ($result) {
        return true;
    } else {
        return false;
    }
}


function getById($id){
    global $connexion;
    $sql = "SELECT * FROM products WHERE id = $id";
    return pg_query($connexion, $sql);
}
?>
