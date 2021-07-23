<?php

$server = 'localhost';
$userName = 'root';
$password = '';
$database = 'constructoracamposdechile';
try {
  $connectionTry = new PDO("mysql:host=$server;dbname=$database;", $userName, $password);
} catch (PDOException $error) {
  die('Conexion fallida:' . $error->getMessage());
}