<?php
$host = "localhost";
$dbname = "cvtheque";
$username = "root";
$password = "";

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} 

// ERROR
catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    return null;
}