
<?php

// Database settings
$db = "acu";
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "tidal";
$dbpasswd = "tidal";

try {

    $pdo = new PDO('mysql:host=' . $dbhost . ';port=' . $dbport . ';dbname=' . $db . '', $dbuser, $dbpasswd);
    $pdo->exec("SET CHARACTER SET utf8");
    foreach ($dbh->query('SELECT * from patho') as $row) {
        print_r($row);
    }
    $pdo = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
