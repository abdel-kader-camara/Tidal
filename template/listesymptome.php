<?php
$serveur = "localhost";
$dbname = "acu";
$user = "tidal";
$pass = "tidal";
//create connection
try{
    $db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch(PDOException $e){
        echo "Can't connect to the database";
    }
$sql = "SELECT * FROM symptomes";
$query = $db->prepare($sql);
$query->execute();
while ($results = $query->fetch(PDO::FETCH_ASSOC))
{
    echo'<input type="select">';
    echo '<option value="' . $results['idS'] . '">' . $donnees['desc'] . '</option>';
    echo '</input>';
    echo $donnees['desc'];
}   

?>