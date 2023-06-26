<?php
$servername = 'cf8j9.myd.infomaniak.com';
$username = 'cf8j9_tnt';
$password = 'RP8zhDxsGDdNau7';

try {
    $conn = new PDO("mysql:host=$servername;dbname=cf8j9_tnt", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $status = "Connexion Réussie";
}catch (PDOException $e){
    echo "Erreur : ".$e->getMessage();
}


?>