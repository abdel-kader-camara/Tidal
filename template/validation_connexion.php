<?php

if ($_POST){
$form = $_POST;
$login = $form['login'];
$password = $form['password'];

try{
    $db = new PDO('mysql:host=localhost;dbname=phpproject', 'root', 'pdt1848!');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch(PODException $e){
        echo "Can't connect to the database";
    }
$sql = "SELECT * FROM users WHERE username=:username";
$query = $db->prepare($sql);
$query->execute(array(':username'=>$username, ':password'=>$stored_hash));
$results = $query->fetchAll(PDO::FETCH_ASSOC);


$check = $hash_obj->CheckPassword($password, $stored_hash);
if($check){
    print_r("Registered user");
}
else{
    print_r("Not a registered user");
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