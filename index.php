<?php
require_once("controller.php");
$pages = $_GET['pages'];
session_start();

if (isset({$smarty.session.login}) && isset({$smarty.session.pwd})) {

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
