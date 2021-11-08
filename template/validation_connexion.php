<?php
require_once('template_bdd.php');

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];

if ($_POST){
$form = $_POST;
$login = $form['login'];
$password = $form['password'];
$hash_pwd = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT mdp FROM inscription WHERE nom=:nom";
$query = $db->prepare($sql);
$query->execute(array(':nom'=>$login));
$results = $query->fetch(PDO::FETCH_ASSOC);
$MDP_BASE = $results["mdp"];

if (password_verify($password,$MDP_BASE))  {
    echo "Password OK ! "; 
    session_start();
    $_SESSION['login']= $_POST["nom"]; 
    $_SESSION['pwd']= $_POST["mdp"];
    
}
else echo "password NOK ! ";


} 
?>