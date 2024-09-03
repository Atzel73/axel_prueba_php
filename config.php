<?php
$host = 'localhost';
$db = 'gestion_usuarios';
$user = 'root';
$pass = 'admin123';
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
