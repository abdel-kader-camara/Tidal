<?php
require_once("controller.php");
$pages = $_GET['pages'];
session_start();

if($pages == "accueil" ) {
   
    accueil();
}
if($pages == "inscription" ) {
    
    inscription();
}

if($pages == "connexion" ) {
    
    connexion();    
}

if($pages == "deconnexion" ) {
    session_unset();
    session_destroy();
    accueil();    
}

?>
