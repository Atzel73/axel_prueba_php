<?php
include 'config.php';


$sql = "SELECT * FROM usuarios";
$stmt = $conn->prepare($sql);
$stmt->execute();


$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);


header('Content-Type: application/json');


echo json_encode($usuarios);
