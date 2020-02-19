<?php
session_start();
if (isset($_SESSION['idUtilisateur'])) {
    $idUtilisateur = $_SESSION['idUtilisateur'];
} else {
    header('Location: connection.php');
}
if (isset($_SESSION['utilisateurNom'])) {
    $utilisateurNom = $_SESSION['utilisateurNom'];
} else {
    $utilisateurNom = "";
}
if (isset($_SESSION['utilisateurPrenom'])) {
    $utilisateurPrenom = $_SESSION['utilisateurPrenom'];
} else {
    $utilisateurPrenom = "";
}
