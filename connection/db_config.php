<?php
session_start();
// session_unset();    
$server = "mysql:host=localhost;dbname=project_saloon";
$username = "root";
$password = "";
$pdo = new PDO($server,$username,$password);
?>