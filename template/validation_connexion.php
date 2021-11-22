<?php
require_once('template_bdd.php');


if ($_POST){
$form = $_POST;
$login = $form['login'];
$password = $form['password'];
$hash_pwd = password_hash($password, PASSWORD_DEFAULT); // On hash le password pour le tester. 

$sql = "SELECT mdp FROM inscription WHERE nom=:nom";
$query = $db->prepare($sql);
$query->execute(array(':nom'=>$login));
$results = $query->fetch(PDO::FETCH_ASSOC);
$MDP_BASE = $results["mdp"]; //  On récupère le mdp hashé dans la base de donnée 

if (password_verify($password,$MDP_BASE))  {
    //echo "Password OK ! "; 
    // Si le login est bon on connecte le client et on crée la session. 
    
    session_start();
    $_SESSION['login']= $_POST["login"]; 
    header('Location: ../index.php?pages=accueil');
    
}
else echo "password NOK ! ";


} 
?>