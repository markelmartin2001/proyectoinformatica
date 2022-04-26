<?php
$servername = "localhost:3306";
$username = "root";
$pass = "";
$bdname = "base_trabajo";

try{
$conex = new PDO("mysql:host=$servername;dbname=$bdname;",$username,$pass);
} catch(PDOException $e) {
    die('Connected failed: '.$e -getMessage());
}
?>