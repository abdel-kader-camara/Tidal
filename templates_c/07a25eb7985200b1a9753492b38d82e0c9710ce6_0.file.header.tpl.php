<?php
/* Smarty version 3.1.39, created on 2021-11-22 14:58:26
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ba202e17025_18265379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a25eb7985200b1a9753492b38d82e0c9710ce6' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.tpl',
      1 => 1637589503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ba202e17025_18265379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Acupuncture</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_779331555619ba202e15d93_72265248', 'css');
?>

</head>
<body>
<?php }
/* {block 'css'} */
class Block_779331555619ba202e15d93_72265248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_779331555619ba202e15d93_72265248',
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
