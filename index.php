<?php
require_once("controller.php");
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    echo $_SESSION['login'];
    echo $_SESSION['pwd'];


 }


 else 


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

?>
