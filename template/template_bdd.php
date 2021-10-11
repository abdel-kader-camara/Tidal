<?php
$serveur = "localhost";
$dbname = "acu";
$user = "tidal";
$pass = "tidal";
try{
    $db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch(PDOException $e){
        echo "Can't connect to the database";
    }
?>