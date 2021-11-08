<?php
/* Smarty version 3.1.39, created on 2021-11-08 14:38:42
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618928628b3f90_98935391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddefb2d0d65e7ad2a56fc552d1353239de4b6ae7' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/inscription.tpl',
      1 => 1636378688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_618928628b3f90_98935391 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
 <center>
        <h2>Afin de finaliser votre inscription, veuillez completer le formulaire ci-dessous </h2>
        <fieldset>
            <form action="../Tidal/template/traitement_inscription.php" method="post">

            <label for="nom">Nom</label>
            <input type="text" name="nom" required>
            <br>
            <br>

            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" required>
            <br>
            <br>

            <label for="E-mail">E-mail</label>
            <input type="email" name="email" required>
            <br>
            <br>

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="password" required>
            <br>
            <br>

            <label for="cmdp">Confirmation mot de passe</label>
            <input type="password" name="cmdp" id="cpassword" required>
            <br>
            <br>

            <input type="submit" value="S'inscrire">&nbsp;
            <input type="reset" value="Effacer">

            </form>
        </fieldset>
    </center>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
