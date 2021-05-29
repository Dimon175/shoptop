<?php

$user ='root';
$pass = 'root';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=goods', $user, $pass);
   $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}





?>