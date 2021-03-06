
<?php
    $serveur = "localhost";
    $dbname = "acu";
    $user = "tidal";
    $pass = "tidal";


    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $hash_pwd = password_hash($mdp, PASSWORD_DEFAULT);
  


    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO inscription(nom, prenom, email, mdp)
            VALUES(:nom, :prenom, :email, :mdp)");

        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':mdp',$hash_pwd);
        $sth->execute();

        //On renvoie l'utilisateur vers la page de connexion
        header("Location:../index.php?pages=connexion");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>