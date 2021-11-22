 
{include file="./header.tpl"}

{if isset($smarty.session.login)}
  Bienvenue {$smarty.session.login}

   <div class="header">
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=deconnexion';">Deconnexion</button>
    <button class="button" onclick="window.location.href = '../Tidal/template/api.php';">API</button>
    <div class="col-10 col-s-10 menu">
     
      <ul>
        <li><a href="../Tidal/index.php?pages=accueil">Accueil</a></li>
        <li><a href="../Tidal/template/listesymptome.php">Symptomes</a></li>
        <li><a href="../Tidal/template/filtre.php">Pathologie</a></li>
      </ul>
    </div>
  </div>
  <img class="image" src="images/a.jpg" alt="erreur">

  
  {include file="./footer.tpl"}

{else}
 <div class="header">
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=connexion';">Connexion</button>
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=inscription';">Inscription</button>
    <button class="button" onclick="window.location.href = '../Tidal/template/api.php';">API</button>
    <div class="col-10 col-s-10 menu">
     
      <ul>
        <li><a href="../Tidal/index.php?pages=accueil">Accueil</a></li>
      </ul>
    </div>
  </div>
  <img class="image" src="images/a.jpg" alt="erreur">

  {include file="./footer.tpl"}
  {/if}