<?php
require_once("controller.php");
$pages = $_GET['pages'];
session_start();


if($pages == "accueil" ) {
    echo "tata";
 
    accueil();
}
if($pages == "inscription" ) {
    
    inscription();
}

if($pages == "connexion" ) {
    
    connexion();    
}

?>
