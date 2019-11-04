<?php
require("ConnexionBDD.php");
fclose(fopen('connectionEchange.txt', 'w'));
$email = $_GET['email'];
$mdp = $_GET['mdp'];

$email = trim($email);
$mdp = trim($mdp);

$email = htmlspecialchars($email);
$mdp = htmlspecialchars($mdp);

$mdp = md5($mdp . $email);
if ($email != "" && $mdp != ""){
$stmt = $dbh->prepare("SELECT * FROM utilisateur WHERE mdp = ?");
if ($stmt->execute(array($mdp))) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result['prenom'] != ""){
        echo "*<center><h1>Compte trouvé ! \n Bienvenue ".$result['prenom']." !</h1></center>";
        require("redirectionSession.php");
    }
    else {
        echo "<div><center><h1>Compte introuvable nous sommes désolés !!</h1>";
        echo "<button class=\"button\">Mot de passe oublié ? </button></center></div>";
    }
 }
}
?>