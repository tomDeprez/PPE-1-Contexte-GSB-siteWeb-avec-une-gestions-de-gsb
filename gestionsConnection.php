<?php
require("ConnexionBDD.php");


$email = $_POST['email'];
$mdp = $_POST['mdp'];

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
            require("redirectionSession.php");
        } else {
            echo "<div><center><h1>Compte introuvable nous sommes désolés !!</h1>";
            echo '<form action="inscription.php"><button class=\"button\">Créer un compte</button></center></div></form>';
        }
    }
}
