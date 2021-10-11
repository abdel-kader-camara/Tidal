<?php
include("template/template_bdd.php");

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');

$smarty->setTemplateDir('/var/www/html/projet/Tidal/Tidal/smarty/templates');
$smarty->setCompileDir('/var/www/html/projet/Tidal/Tidal/smarty/templates_c');
$smarty->setCacheDir('/var/www/html/projet/Tidal/Tidal/smarty/cache');
$smarty->setConfigDir('/var/www/html/projet/Tidal/Tidal/smarty/configs');
$smarty->assign('styles', array('/var/www/html/projet/Tidal/Tidal/CSS/stylecss.css'));


function patho() {
$smarty = new Smarty();
$smarty->display('index.tpl');
}

?>
