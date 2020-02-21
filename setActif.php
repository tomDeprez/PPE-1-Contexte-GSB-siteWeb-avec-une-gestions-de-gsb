<?php
require("ConnexionBDD.php");
session_start();

if (isset($_SESSION['id'])) {
    $utilisateurId = $_SESSION['id'];
} else {
    $utilisateurId = 0;
}

if (isset($_POST['actif'])) {
    $actif = $_POST['actif'];
}
else {
    $actif = 0;
}


$stmt = $dbh->prepare("UPDATE `patient` SET `utiliser`=:actif WHERE id = :utilisateurId");
$stmt->bindParam(':utilisateurId', $utilisateurId, PDO::PARAM_INT);
$stmt->bindParam(':actif', $actif, PDO::PARAM_INT);
$utilisateurId = $utilisateurId;
$actif = $actif;
$stmt->execute();

echo $_SESSION['id'];