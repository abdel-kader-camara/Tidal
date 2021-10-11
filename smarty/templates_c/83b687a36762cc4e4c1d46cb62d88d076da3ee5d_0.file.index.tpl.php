<?php
/* Smarty version 3.1.39, created on 2021-10-11 15:17:04
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616439506df4d3_24009557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b687a36762cc4e4c1d46cb62d88d076da3ee5d' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.tpl',
      1 => 1633958222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616439506df4d3_24009557 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



 <div class="header">
    <button class="button" onclick="window.location.href = 'connexion.html';">Connexion</button>
    <button class="button" onclick="window.location.href = 'inscription.html';">Inscription</button>
    <div class="col-10 col-s-10 menu">
     
      <ul>
        <li>Accueil</li>
        <li>Symptomes</li>
        <li>Pathologie</li>
      </ul>
    </div>
  </div>
  <img class="image" src="images/a.jpg" alt="erreur">

  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
