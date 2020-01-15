<?php
require("ConnexionBDD.php");

if (isset($_POST['idUtilisateur'])) {
    $idUtilisateur = $_POST['idUtilisateur'];
}
else {
    $idUtilisateur = "";
}

if (isset($_POST['Nom'])) {
    $Nom = $_POST['Nom'];
}
else {
    $Nom = "";
}

if (isset($_POST['Prenom'])) {
    $Prenom = $_POST['Prenom'];
}
else {
    $Prenom = "";
}
if (isset($_POST['Age'])) {
    $Age = $_POST['Age'];
}
else {
    $Age = "";
}
if (isset($_POST['Sexe'])) {
    $Sexe = $_POST['Sexe'];
}
else {
    $Sexe = "";
}
if (isset($_POST['Poids'])) {
    $Poids = $_POST['Poids'];
}
else {
    $Poids = "";
}
if (isset($_POST['Taille'])) {
    $Taille = $_POST['Taille'];
}
else {
    $Taille = "";
}
if (isset($_POST['Fat'])) {
    $Fat = $_POST['Fat'];
}
else {
    $Fat = "";
}
if (isset($_POST['Temperature'])) {
    $Temperature = $_POST['Temperature'];
}
else {
    $Temperature = "";
}
if (isset($_POST['Calories'])) {
    $Calories = $_POST['Calories'];
}
else {
    $Calories = "";
}
if (isset($_POST['Coeur'])) {
    $Coeur = $_POST['Coeur'];
}
else {
    $Coeur = "";
}
if (isset($_POST['Sommeil'])) {
    $Sommeil = $_POST['Sommeil'];
}
else {
    $Sommeil = "";
}


$idUtilisateur = trim($idUtilisateur);
$Nom = trim($Nom);
$Prenom = trim($Prenom);
$Age = trim($Age);
$Sexe = trim($Sexe);
$Poids = trim($Poids);
$Taille = trim($Taille);
$Temperature = trim($Temperature);
$Calories = trim($Calories);
$Coeur = trim($Coeur);
$Sommeil = trim($Sommeil);

$idUtilisateur = htmlspecialchars($idUtilisateur);
$Nom = htmlspecialchars($Nom);
$Prenom = htmlspecialchars($Prenom);
$Age = htmlspecialchars($Age);
$Sexe = htmlspecialchars($Sexe);
$Poids = htmlspecialchars($Poids);
$Taille = htmlspecialchars($Taille);
$Temperature = htmlspecialchars($Temperature);
$Calories = htmlspecialchars($Calories);
$Coeur = htmlspecialchars($Coeur);
$Sommeil = htmlspecialchars($Sommeil);

if ($Nom != "" && $Prenom != "" && $idUtilisateur != ""){
    $stmt = $dbh->prepare("SELECT * FROM patient WHERE nom = :nom and prenom = :prenom");
    $stmt->bindParam(':nom', $Nomr);
    $stmt->bindParam(':prenom', $emailr);
    $Nomr = $Nom;
    $Prenomr = $Prenom;
    
    if ($stmt->execute()) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result['prenom'] != ""){
            echo "*<center><h1>Compte trouvé ! \n Bienvenue ".$result['prenom']." !</h1></center>";
            require("redirectionSession.php");
        }
        else {
            echo "<div><center><h1>Compte introuvable nous sommes désolés !!</h1>";
            echo '<form action="inscription.php"><button class=\"button\">Créer un compte</button></center></div></form>';
        }
    }
}
else if ($Nom == "" || $Prenom = ""){
    echo "<div class='toggler'>
    <div id='effect' class='ui-widget-content ui-corner-all' >
      <h3 class='ui-widget-header ui-corner-all'>Erreur</h3>
      <p>
        Une erreur est arrivé.
        Le nom et le prénom est obligatoire pour ajouter un patient.
        ".$Nom." - ".$Prenom."
      </p>
    </div>
    </div>";
}
else {
    $stmt = $dbh->prepare("SELECT * FROM patient WHERE nom = :mdp and prenom = :email");
    $stmt->bindParam(':mdp', $mdp1r);
    $stmt->bindParam(':email', $emailr);
    $emailr = $email;
    $mdp1r = $mdp;
    
}

