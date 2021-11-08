<?php
require_once("controller.php");
$pages = $_GET['pages'];
session_start();
//echo $_SESSION['login'];

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    echo $_SESSION['login'];
    echo $_SESSION['pwd'];
}


elseif($pages == "accueil" ) {
    echo "tata";
    accueil();
}
elseif($pages == "inscription" ) {
    
    inscription();
}

elseif($pages == "connexion" ) {
    
    connexion();
}

?>
