 
{include file="./header.tpl"}

{if isset($smarty.session.login)}
  Bienvenue {$smarty.session.login}

   <div class="header">
    <button class="button" onclick="window.location.href = '../Tidal/index.php?pages=deconnexion';">Deconnexion</button>
    <div class="col-10 col-s-10 menu">
     
      <ul>
        <li>Accueil</li>
        <li><a href="../template/listesymptome.php"> Symptomes </a> </li> 
        <li><a href="../template/filtre.php"> Filtre Pathologie </a> </li>
      </ul>
    </div>
  </div>
  <img class="image" src="images/a.jpg" alt="erreur">

  
  {include file="./footer.tpl"}

{else}
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

  {include file="./footer.tpl"}
  {/if}