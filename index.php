<?php
require_once("controller.php");
$pages = $_GET['pages'];
echo "toto";
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    echo $_SESSION['login'];
    echo $_SESSION['pwd'];
}


elseif($pages == "accueil" ) {
    accueil();
}
elseif($pages == "inscription" ) {
    
    inscription();
}

elseif($pages == "connexion" ) {
    
    connexion();
}

?>
