<?php

if ($_POST){
$form = $_POST;
$symptome = $form['symptome'];
$patologie = $form['patologie']
$meridien = $form['meridien'];
$motcle = $form['motcle'];


try{
    $db = new PDO('mysql:host=localhost;dbname=acu', 'root', 'pdt1848!');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch(PODException $e){
        echo "Can't connect to the database";
    }
$sql = "SELECT desc, nom, FROM patho, meridien WHERE  nom=:meridien"
//$sql = "SELECT * FROM users WHERE username=:username";
$query = $db->prepare($sql);
$query->execute(array(':patologie'=>$patologie));
$results = $query->fetchAll(PDO::FETCH_ASSOC)

while ($row = $results)
{
    echo
     "<tr>
        <td>{$row['des']}</td>

      <tr>\n"
}

//login here
} 
else{
?>
<form name="login" action="login.php" method="POST">
<label for "username">Username: </label>
<input type="text" name="username"/><br />
<label for "password">Password: </label>
<input type="password" name="password"/><br />
<button type="submit">Submit</button>
<button type="reset">Reset Form</button>
</form>
<?php
}
?>