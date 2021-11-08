<?php
include("template/template_bdd.php");

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');


function accueil() {
$smarty = new Smarty();
$smarty->display('smarty/templates/index.tpl');

}

function inscription() {
    $smarty = new Smarty();
    $smarty->display('smarty/templates/inscription.tpl');
    }

function connexion() {
    $smarty = new Smarty();
    $smarty->display('smarty/templates/connexion.tpl');
    }
    
?>
