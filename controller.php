<?php
include("template/template_bdd.php");

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');


function patho() {
$smarty = new Smarty();
$smarty->display('smarty/templates/index.tpl');
}

?>
