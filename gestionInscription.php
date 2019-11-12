<?php
require("ConnexionBDD.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];
$mdp1 = $_POST['mdp1'];
$mdp2 = $_POST['mdp2'];
$secteur = $_POST['secteur'];
$erreur = "";

$nom = trim($nom);
$prenom = trim($prenom);
$age = trim($age);
$email = trim($email);
$mdp1 = trim($mdp1);
$mdp2 = trim($mdp2);
$secteur = trim($secteur);

$nom = htmlspecialchars($nom);
$prenom = htmlspecialchars($prenom);
$age = htmlspecialchars($age);
$email = htmlspecialchars($email);
$mdp1 = htmlspecialchars($mdp1);
$mdp2 = htmlspecialchars($mdp2);
$secteur = htmlspecialchars($secteur);

$mdp1 = md5($mdp1 . $email);
$mdp2 = md5($mdp2 . $email);

$stmt = $dbh->prepare("SELECT * FROM utilisateur WHERE email = ?");
if ($stmt->execute(array($email))) {
    if ($stmt->fetch())
    {
        $erreur .= "L'email existe déjà ! \n";
    }
}
if(!is_numeric($age)){
    $erreur .= "Votre âge n'est pas correct ! \n";
}
if($nom == ""){
    $erreur .= "Le nom est obligatoire ! \n";
}
if($prenom == ""){
    $erreur .= "Le prenom est obligatoire ! \n";
}
if($email == ""){
    $erreur .= "Votre email est obligatoire ! \n";
}
if($mdp1 == ""){
    $erreur .= "Le mots de passe est obligatoire ! \n";
}
if($secteur == ""){
    $erreur .= "Le secteur est obligatoire ! \n";
}
if ($mdp1 != $mdp2){
    $erreur .= "Vos deux mots de passe ne sont pas les mêmes ! \n";
}
if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $erreur .= "Votre email n'est pas correcte ! \n";
}

if ($erreur == "") {

    $stmt = $dbh->prepare("INSERT INTO utilisateur (prenom, nom, age, email, mdp, secteur) VALUES (:prenom, :nom, :age, :email, :mdp, :secteur)");
    $stmt->bindParam(':prenom', $prenomr);
    $stmt->bindParam(':nom', $nomr);
    $stmt->bindParam(':age', $ager);
    $stmt->bindParam(':email', $emailr);
    $stmt->bindParam(':mdp', $mdp1r);
    $stmt->bindParam(':secteur', $secteurr);
    $prenomr = $prenom;
    $nomr = $nom;
    $ager = $age;
    $emailr = $email;
    $mdp1r = $mdp1;
    $secteurr = $secteur;
    var_dump($stmt);
    $stmt->execute();
    header('Location: validation.php');
}
else {
    echo "<center>ERREUR</center>\n<center><p style = 'color:red'>".$erreur."</p></center>";
}

//  $utilisateur = trim($utilisateur);
//  $mdp = trim($mdp);
//  $mail = trim($mail);
//  $utilisateur = htmlspecialchars($utilisateur);
//  $mdp = htmlspecialchars($mdp);
//  $mail = htmlspecialchars($mail);

//  if (!(filter_var($utilisateur, FILTER_VALIDATE_EMAIL))) {
//     //HASHE DU MDP
//     $mdp = md5($mdp . $utilisateur);
//     //HASHE DU MDP
//     $sql = 'SELECT * FROM `Utilisateurs` WHERE Utilisateur = "'.$utilisateur.'" and mdp = "'.$mdp.'"';
//     $reponse = $bdd->query($sql);
//     $donnees = $reponse->fetch();
//     }
//     else {
//         # code...
//     }
?>