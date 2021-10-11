<?php
require_once("controller.php");

$pages = $_GET['pages'];
echo $pages;
if($pages == "patho" ) {
    patho();
}

?>
