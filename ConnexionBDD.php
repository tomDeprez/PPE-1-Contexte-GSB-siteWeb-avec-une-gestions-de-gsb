<?php 
try{
    $dbh = new PDO('mysql:host=localhost;dbname=GSB;', "root", "root");
} catch (PDOException $e) {
       print "Erreur !: " . $e->getMessage() . "<br/>";
       die();
 }
 ?>