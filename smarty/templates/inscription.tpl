 {include file="./header.tpl"}
 
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

{include file="./footer.tpl"}
