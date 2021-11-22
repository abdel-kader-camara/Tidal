<?php
/* Smarty version 3.1.39, created on 2021-11-22 15:41:47
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bac2b3e5d34_45130330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0197cd10839899a77adc83e8cbd418f0f690a696' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/index.tpl',
      1 => 1637592104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 2,
  ),
),false)) {
function content_619bac2b3e5d34_45130330 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['login']))) {?>
  Bienvenue <?php echo $_SESSION['login'];?>


   <div class="header">
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=deconnexion';">Deconnexion</button>
    <div class="col-10 col-s-10 menu">
     
      <ul>
        <li><a href="../Tidal/index.php?pages=accueil">Accueil</a></li>
        <li><a href="../Tidal/template/listesymptome.php">Symptomes</a></li>
        <li><a href="../Tidal/template/filtre.php">Pathologie</a></li>
      </ul>
    </div>
  </div>
  <img class="image" src="images/a.jpg" alt="erreur">

  
  <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
 <div class="header">
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=connexion';">Connexion</button>
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=inscription';">Inscription</button>
    <div class="col-10 col-s-10 menu">
     
      <ul>
        <li>Accueil</li>
      </ul>
    </div>
  </div>
  <img class="image" src="images/a.jpg" alt="erreur">

  <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php }
}
}
