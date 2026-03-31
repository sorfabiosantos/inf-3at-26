<?php

// Conexão com o Banco de Dados com PDO



$host = "mysql";
$user = "root";
$password = "1234567";
$database = "db-acme-tarde";

$conn = new PDO(
    "mysql:host=$host;dbname=$database",
    $user,
    $password
);

var_dump($conn);
$user = $conn->query("SELECT * FROM users");
var_dump($user);
$users = $user->fetchAll(PDO::FETCH_OBJ);
var_dump($users);
