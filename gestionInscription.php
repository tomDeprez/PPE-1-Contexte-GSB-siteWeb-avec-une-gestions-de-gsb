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

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp1 = $_POST['mdp1'];
$mdp2 = $_POST['mdp2'];
$secteur = $_POST['secteur'];
$erreur = "";

$nom = trim($nom);
$prenom = trim($prenom);
$email = trim($email);
$mdp1 = trim($mdp1);
$mdp2 = trim($mdp2);
$secteur = trim($secteur);

$nom = htmlspecialchars($nom);
$prenom = htmlspecialchars($prenom);
$email = htmlspecialchars($email);
$mdp1 = htmlspecialchars($mdp1);
$mdp2 = htmlspecialchars($mdp2);
$secteur = htmlspecialchars($secteur);

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
    header('Location: validationDuMail.php');
}
else {
    $monfichier = fopen('echange.txt', 'r+');
    header('Location: inscription.php');
    fwrite($monfichier, $erreur);
    fclose($monfichier);
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