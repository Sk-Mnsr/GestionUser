<?php
require_once "model/db.php";
function getAllUsers() {
    global $connexion;
     $query = "SELECT * FROM users";
    return pg_query($connexion, $query);
}

function addUser($nom, $prenom, $email, $password) {
    global $connexion;
      $query = "INSERT INTO users (nom, prenom, email, password) VALUES ($1, $2, $3, $4)";
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Hash du mot de passe
    return pg_query_params($connexion, $query, array($nom, $prenom, $email, $hashedPassword));
}

function getUserById($id) {
    global $connexion;
    $query = "SELECT * FROM users WHERE id = $1";
    return pg_query_params($connexion, $query, array($id));
}

function updateUser($id, $nom, $prenom, $email, $password) {
    global $connexion;
    $query = "UPDATE users SET nom = $1, prenom = $2, email = $3, password = $4 WHERE id = $5";
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    return pg_query_params($connexion, $query, array($nom, $prenom, $email, $hashedPassword, $id));
}

function deleteUser($id) {
    global $connexion;
    $query = "DELETE FROM users WHERE id = $1";
    return pg_query_params($connexion, $query, array($id));
}
?>
