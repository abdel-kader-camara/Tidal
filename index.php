<?php
require_once("controller.php");

$pages = $_GET['pages'];
if($pages == "patho" ) {
    echo $pages;
    patho();
}

?>
