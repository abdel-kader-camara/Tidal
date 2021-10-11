<?php
/* Smarty version 3.1.39, created on 2021-10-11 17:35:36
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616459c8be28f3_04944202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a25eb7985200b1a9753492b38d82e0c9710ce6' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.tpl',
      1 => 1633966463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616459c8be28f3_04944202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Acupuncture</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1327356898616459c8be04e0_67561525', 'css');
?>

</head>
<body>
<?php }
/* {block 'css'} */
class Block_1327356898616459c8be04e0_67561525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1327356898616459c8be04e0_67561525',
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
