<?php
session_start();
// session_unset();    
$server = "mysql:host=localhost;dbname=saloonmanagement";
$user = "root";
$password = "";
$pdo = new PDO($server,$user,$password);
