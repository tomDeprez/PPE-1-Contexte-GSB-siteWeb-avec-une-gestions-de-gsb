<?php
try{
    $dbh = new PDO('mysql:host=localhost;dbname=GSB;', "root", "root");
    //$conn = new mysqli($serveur, $login, $pass, $login, $table);
    //$base->exec("SET CHARACTER SET utf8");
    //$retour = $base->query('requete');
    print "connecté !  ";
    } catch (PDOException $e) {
       print "Erreur !: " . $e->getMessage() . "<br/>";
       die();
 }

?>