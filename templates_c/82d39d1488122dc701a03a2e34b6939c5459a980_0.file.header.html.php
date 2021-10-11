<?php
/* Smarty version 3.1.39, created on 2021-10-11 17:34:00
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61645968784ba2_97686266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82d39d1488122dc701a03a2e34b6939c5459a980' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.html',
      1 => 1633966147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61645968784ba2_97686266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Acupuncture</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62183083361645968783cd5_04149887', 'css');
?>

</head>
<body>
<?php }
/* {block 'css'} */
class Block_62183083361645968783cd5_04149887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_62183083361645968783cd5_04149887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="CSS/stylecss.css" />
    <?php
}
}
/* {/block 'css'} */
}
