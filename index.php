<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/projet/Tidal/Tidal/smarty/templates');
$smarty->setCompileDir('/var/www/html/projet/Tidal/Tidal/smarty/templates_c');
$smarty->setCacheDir('/var/www/html/projet/Tidal/Tidal/smarty/cache');
$smarty->setConfigDir('/var/www/html/projet/Tidal/Tidal/smarty/configs');
$smarty->assign('styles', array('/var/www/html/projet/Tidal/Tidal/CSS/stylecss.css'));

$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');

?>
