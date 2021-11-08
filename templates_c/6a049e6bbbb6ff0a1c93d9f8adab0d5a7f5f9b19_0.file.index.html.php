<?php
/* Smarty version 3.1.39, created on 2021-10-11 17:34:00
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6164596877e499_25516589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a049e6bbbb6ff0a1c93d9f8adab0d5a7f5f9b19' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.html',
      1 => 1633966435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_6164596877e499_25516589 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

  <?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
