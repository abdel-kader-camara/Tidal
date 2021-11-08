<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

 }
 else 


require_once("controller.php");


$pages = $_GET['pages'];
if($pages == "accueil" ) {
    patho();
}
if($pages == "inscription" ) {
    
    inscription();
}

if($pages == "connexion" ) {
    
    connexion();
}

?>
