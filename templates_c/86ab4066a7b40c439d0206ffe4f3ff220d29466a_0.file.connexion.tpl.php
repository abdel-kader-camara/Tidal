<?php
/* Smarty version 3.1.39, created on 2021-11-08 14:41:24
  from '/var/www/html/projet/Tidal/Tidal/smarty/templates/connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618929042ba915_52245090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ab4066a7b40c439d0206ffe4f3ff220d29466a' => 
    array (
      0 => '/var/www/html/projet/Tidal/Tidal/smarty/templates/connexion.tpl',
      1 => 1636378708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_618929042ba915_52245090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center>
    <h2>Connexion</h2>
        <fieldset>
            <form action="../Tidal/template/validation_connexion.php" method="post">
                <label for="login">Login</label>
                <input type="text" name="login" placeholder="entrez votre e-mail" required>
            
                <br>
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" required>
                <br>
                <br>

                <input type="submit" value="Se connecter"> &nbsp;
                <input type="reset" value="Effacer">

            </form>
        </fieldset>
    </center>

  
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  <?php }
}
