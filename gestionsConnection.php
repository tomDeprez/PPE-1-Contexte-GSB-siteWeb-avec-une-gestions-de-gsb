<?php
require("ConnexionBDD.php");

$email = "";
$mdp = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}else if (isset($_GET['email'])){
    $email = $_GET['email'];
}

if (isset($_POST['mdp'])) {
    $mdp = $_POST['mdp'];
}else if (isset($_GET['mdp'])){
    $mdp = $_GET['mdp'];
}



$email = trim($email);
$mdp = trim($mdp);

$email = htmlspecialchars($email);
$mdp = htmlspecialchars($mdp);

$mdp = md5($mdp . $email);
if ($email != "" && $mdp != "") {

    $stmt = $dbh->prepare("SELECT * FROM utilisateur WHERE mdp = :mdp and email = :email");
    $stmt->bindParam(':mdp', $mdp1r);
    $stmt->bindParam(':email', $emailr);
    $emailr = $email;
    $mdp1r = $mdp;

    if ($stmt->execute()) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result['prenom'] != "") {
            echo "*<center><h1>Compte trouvé ! \n Bienvenue " . $result['prenom'] . " !</h1></center>";
            session_start();
            $_SESSION['idUtilisateur'] = $result['id'];
            $_SESSION['utilisateurNom'] = $result['nom'];
            $_SESSION['utilisateurPrenom'] = $result['prenom'];
            
            if (isset($_GET['email'])){
                if (isset($_GET['mdp'])){
                    header('Location: sesionHome.php');
                }                             
            }
        } else {
            echo "<div><center><h1>Compte introuvable nous sommes désolés !!</h1>";
            echo '<form action="inscription.php"><button class=\"button\">Créer un compte</button></center></div></form>';
        }
    }
}
