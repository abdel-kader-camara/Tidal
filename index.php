<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/Tidal/smarty/templates');
$smarty->setCompileDir('/var/www/html/Tidal/smarty/templates_c');
$smarty->setCacheDir('/var/www/html/Tidal/smarty/cache');
$smarty->setConfigDir('/var/www/html/Tidal/smarty/configs');

$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');

?>
