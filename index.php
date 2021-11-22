<?php
require_once("controller.php");
$pages = $_GET['pages'];


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
    session_destroy();
    accueil();    
}

?>
