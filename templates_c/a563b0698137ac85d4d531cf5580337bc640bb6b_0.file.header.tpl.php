<?php
/* Smarty version 3.1.39, created on 2021-10-11 16:53:13
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61644fd9ea8db0_65278454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a563b0698137ac85d4d531cf5580337bc640bb6b' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/header.tpl',
      1 => 1633958068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61644fd9ea8db0_65278454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Acupuncture</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149500914161644fd9ea79e1_10792847', 'css');
?>

</head>
<body>
<?php }
/* {block 'css'} */
class Block_149500914161644fd9ea79e1_10792847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_149500914161644fd9ea79e1_10792847',
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
