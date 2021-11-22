<?php
require_once('template_bdd.php');

if (isset ($_GET['filtre'])) {
$filtre = $_GET['filtre'];
$sql = 'SELECT S.desc AS symptome, P.desc AS pathologie FROM `keywords` AS KW JOIN keySympt AS KS on KW.idK = KS.idK JOIN symptome AS S on KS.idS = S.idS JOIN symptPatho AS SP on S.idS = SP.idS JOIN patho AS P on SP.idP = P.idP WHERE KW.name LIKE :filtre ';
$query = $db->prepare($sql);
$query->execute(array(':filtre'=>$filtre));
$results = $query->fetch(PDO::FETCH_ASSOC);
foreach ($results as $field => $value){
    echo json_encode($field,JSON_PRETTY_PRINT);

}
}

else { 
$sql = "SELECT * FROM symptome";
$query = $db->prepare($sql);
$query->execute();
$results = $query->fetch(PDO::FETCH_ASSOC);
foreach ($results as $field => $value){
    echo json_encode($field,JSON_PRETTY_PRINT);
}
}

?>