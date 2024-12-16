<?php

require_once('./model/db.php');

function getAllCategories() {
    global $connexion;
    $sql = "SELECT * FROM categories";
    return pg_query($connexion, $sql);
}


function deleteCategorie($id) {
    global $connexion;
    $sql = "DELETE FROM categories WHERE id = $id";
    return pg_query($connexion, $sql);
}

function addCategorie($libelle) {
    global $connexion;
    $sql = "INSERT INTO categories (libelle) VALUES ('$libelle')";
    return pg_query($connexion, $sql);
}

function updateCategorie($id,$libelle){
    global $connexion;
    $sql ="UPDATE categories SET libelle='$libelle' where id=$id";
   return pg_query($connexion,$sql);
}

function getCategorieById($id){
    global $connexion;
    $sql ="SELECT * FROM categories where id = $id";
    return pg_query($connexion,$sql);
}



?>


