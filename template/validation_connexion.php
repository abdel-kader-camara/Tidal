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
var_dump($results);
$MDP_BASE = $results["mdp"];
echo "<br>";
echo "Resultat de la requete SQL : ";
echo $MDP_BASE;
echo "<br>";
echo "resultat du hash du password dans le FORM : ";
echo $hash_pwd;
echo "<br>";
if (password_verify($password,$MDP_BASE))  echo "Password OK ! "; 
else echo "password NOK ! ";


//login here
} 
?>