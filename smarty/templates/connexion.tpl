{include file="./header.tpl"}

<center>
    <h2>Connexion</h2>
        <fieldset>
            <form action="../template/validation_connexion.php" method="post">
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

  
{include file="./footer.tpl"}  