<?php
/* Smarty version 3.1.39, created on 2021-11-08 16:18:13
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61893fb5b859f3_14204035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0197cd10839899a77adc83e8cbd418f0f690a696' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.tpl',
      1 => 1636384689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_61893fb5b859f3_14204035 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php ob_start();
echo $_SESSION['login'];
$_prefixVariable1 = ob_get_clean();
if ((isset($_prefixVariable1))) {?>
  Bienvenue <?php echo $_SESSION['login'];?>

<?php }?>
 <div class="header">
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=connexion';">Connexion</button>
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=inscription';">Inscription</button>
    <div class="col-10 col-s-10 menu">
     
      <ul>
        <li>Accueil</li>
        <li>Symptomes</li>
        <li>Pathologie</li>
      </ul>
    </div>
  </div>
  <img class="image" src="images/a.jpg" alt="erreur">

  <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
