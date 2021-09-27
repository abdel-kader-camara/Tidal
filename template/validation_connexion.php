<?php
$serveur = "localhost";
$dbname = "acu";
$user = "tidal";
$pass = "tidal";


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];

if ($_POST){
$form = $_POST;
$login = $form['login'];
$password = $form['password'];
$hash_pwd = password_hash($password, PASSWORD_DEFAULT);

try{
    $db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch(PDOException $e){
        echo "Can't connect to the database";
    }
$sql = "SELECT mdp FROM inscription WHERE nom=:nom";
$query = $db->prepare($sql);
$query->execute(array(':nom'=>$login));
$results = $query->fetchAll(PDO::FETCH_ASSOC);
print_r($results);
echo $results['mdp'];
echo $hash_pwd;
if ($results['mdp'] == $hash_pwd )  echo "Password OK ! "; 
else echo "password NOK ! ";


//login here
} 
?>
