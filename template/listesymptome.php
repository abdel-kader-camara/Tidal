<?php
require_once('template_bdd.php');
//create connection
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