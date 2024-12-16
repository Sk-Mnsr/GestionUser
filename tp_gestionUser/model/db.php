<?php

$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="passer";
$dbname="gestionDesUsersCatPro";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

?>