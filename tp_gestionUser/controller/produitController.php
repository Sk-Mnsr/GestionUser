<?php
require_once('./model/produitModel.php');
require_once('./model/categorieModel.php');

function index(){
   $produits = getAllProduits();
   require_once './view/produit/list.php';
}

function remove(){
    $id = $_GET['id'];
    delete($id);
    header('location:index.php?controller=produit');
}

function pageAdd(){
    $categories = getAllCategories(); 
    require_once './view/produit/add.php';
}

function save(){
    $nom = $_POST['nom'];
    $descript = $_POST['descript'];
    $qt = $_POST['quantite'];
    $pu = $_POST['prix'];
    $idcat = $_POST['id_categorie'];
    add($nom,$descript, $qt, $pu, $idcat);
    header('location:index.php?controller=produit');
}

function getProduit(){
    $id = $_GET['id'];
    $produit = pg_fetch_assoc(getById($id));
    $categories = getAllCategories(); 
    require_once './view/produit/edit.php';
}

function update(){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $descript = $_POST['descript'];
    $qt = $_POST['quantite'];
    $pu = $_POST['prix'];
    $idcat = $_POST['id_categorie'];
    updateProduit($id,$nom,$descript, $qt, $pu, $idcat);
    header('location:index.php?controller=produit');
}
?>
