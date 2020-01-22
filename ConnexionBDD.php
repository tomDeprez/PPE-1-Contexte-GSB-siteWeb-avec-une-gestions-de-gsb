<?php 
try{
    // $dbh = new PDO('mysql:host=localhost;dbname=GSB;', "root", "root");
    $dbh = new PDO('mysql:host=localhost:3306;dbname=GSB;', "root", "");
} catch (PDOException $e) {
       print "Erreur !: " . $e->getMessage() . "<br/>";
       die();
 }
 ?>