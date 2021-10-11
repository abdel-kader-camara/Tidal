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
$sql = "SELECT * FROM symptome";
$query = $db->prepare($sql);
$query->execute();
echo'<select>';
while ($results = $query->fetch(PDO::FETCH_ASSOC))
{
    
    echo '<option value="' . $results['idS'] . '">' . $results['desc'] . '</option>';
    //echo '</input>';
    //echo $results['desc'];
    //echo '</select>';
}   

echo '</select>';
?>