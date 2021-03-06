<?php
require("ConnexionBDD.php");
session_start();

if (isset($_SESSION['idUtilisateur'])) {
    $idUtilisateur = $_SESSION['idUtilisateur'];
} else {
    $idUtilisateur = "";
}

if (isset($_SESSION['id'])) {
    $utilisateurId = $_SESSION['id'];
} else {
    $utilisateurId = 0;
}

if (isset($_POST['value'])) {
    $value = $_POST['value'];
} else {
    $value = "";
}
if (isset($_POST['Nom'])) {
    $Nom = $_POST['Nom'];
} else {
    $Nom = "";
}

if (isset($_POST['Prenom'])) {
    $Prenom = $_POST['Prenom'];
} else {
    $Prenom = "";
}
if (isset($_POST['Age'])) {
    $Age = $_POST['Age'];
} else {
    $Age = "";
}
if (isset($_POST['Sexe'])) {
    $Sexe = $_POST['Sexe'];
} else {
    $Sexe = "";
}
if (isset($_POST['Poids'])) {
    $Poids = $_POST['Poids'];
} else {
    $Poids = "";
}
if (isset($_POST['Taille'])) {
    $Taille = $_POST['Taille'];
} else {
    $Taille = "";
}
if (isset($_POST['Fat'])) {
    $Fat = $_POST['Fat'];
} else {
    $Fat = "";
}
if (isset($_POST['Temperature'])) {
    $Temperature = $_POST['Temperature'];
} else {
    $Temperature = "";
}
if (isset($_POST['Calories'])) {
    $Calories = $_POST['Calories'];
} else {
    $Calories = "";
}
if (isset($_POST['Coeur'])) {
    $Coeur = $_POST['Coeur'];
} else {
    $Coeur = "";
}
if (isset($_POST['Sommeil'])) {
    $Sommeil = $_POST['Sommeil'];
} else {
    $Sommeil = "";
}

$retourBack = "";

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

if ($Nom == "" || $Prenom == "") {
    $retourBack = "<div class='toggler'>
    <div id='effectErreur' class='ui-widget-content ui-corner-all' >
      <h3 class='ui-widget-header ui-corner-all'>Erreur</h3>
      <p>
        Une erreur est arrivé.
        Le nom et le prénom sont obligatoire pour ajouter un patient.
      </p>
    </div>
    </div>";
} else if ($value == 0) {
    $stmt = $dbh->prepare("SELECT * FROM patient WHERE nom = :nom and prenom = :prenom");
    $stmt->bindParam(':nom', $Nom);
    $stmt->bindParam(':prenom', $Prenom);
    $Nom = $Nom;
    $Prenom = $Prenom;
    if ($stmt->execute()) {
        if ($data = $stmt->fetch()) {
            $retourBack = "<div class='toggler'>
        <div id='effectErreur' class='ui-widget-content ui-corner-all' >
          <h3 class='ui-widget-header ui-corner-all'>Erreur</h3>
          <p>
            Une erreur est arrivé.
            Le nom et le prénom sont déjà utilisé.
            " . $Nom . " / " . $Prenom . "
          </p>
        </div>
        </div>";
        } else {
            $stmt = $dbh->prepare("INSERT INTO `patient`(`idUtilisateur`, `nom`, `prenom`, `age`, `sexe`, `poids`, `taille`, `fat`, `temperature`, `calories`, `coeur`, `sommeil`, `utiliser`) VALUES (:idUtilisateur, :Nom, :Prenom, :Age, :Sexe, :Poids, :Taille, :Fat, :Temperature, :Calories, :Coeur, :Sommeil, 0)");
            $stmt->bindParam(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);
            $stmt->bindParam(':Nom', $Nom);
            $stmt->bindParam(':Prenom', $Prenom);
            $stmt->bindParam(':Age', $Age);
            $stmt->bindParam(':Sexe', $Sexe);
            $stmt->bindParam(':Poids', $Poids);
            $stmt->bindParam(':Taille', $Taille);
            $stmt->bindParam(':Fat', $Fat);
            $stmt->bindParam(':Temperature', $Temperature);
            $stmt->bindParam(':Calories', $Calories);
            $stmt->bindParam(':Coeur', $Coeur);
            $stmt->bindParam(':Sommeil', $Sommeil);
            $idUtilisateur = $idUtilisateur;
            $Nom = $Nom;
            $Prenom = $Prenom;
            $Age = $Age;
            $Sexe = $Sexe;
            $Poids = $Poids;
            $Taille = $Taille;
            $Fat = $Fat;
            $Temperature = $Temperature;
            $Calories = $Calories;
            $Coeur = $Coeur;
            $Sommeil = $Sommeil;
            $stmt->execute();
            $retourBack = "<div class='toggler'>
            <div id='effect' class='ui-widget-content ui-corner-all' >
              <h3 class='ui-widget-header ui-corner-all'>Succes</h3>
              <p>
                Le compte " . $Nom . " à bien été ajouté
              </p>
            </div>
            </div>";
        }
    }
} else if ($value == 1) {
    $stmt = $dbh->prepare("SELECT * FROM patient WHERE id = :utilisateurId");
    $stmt->bindParam(':utilisateurId', $utilisateurId);
    $utilisateurId = $utilisateurId;
    if ($stmt->execute()) {
        if ($data = $stmt->fetch()) {
            try {
                $stmt = $dbh->prepare("UPDATE `patient` SET `nom`=:Nom,`prenom`=:Prenom,`age`=:Age,`sexe`=:Sexe,`poids`=:Poids,`taille`=:Taille,`fat`=:Fat,`temperature`=:Temperature,`calories`=:Calories,`coeur`=:Coeur,`sommeil`=:Sommeil WHERE id = :utilisateurId");
                $stmt->bindParam(':utilisateurId', $utilisateurId, PDO::PARAM_INT);
                $stmt->bindParam(':Nom', $Nom);
                $stmt->bindParam(':Prenom', $Prenom);
                $stmt->bindParam(':Age', $Age);
                $stmt->bindParam(':Sexe', $Sexe);
                $stmt->bindParam(':Poids', $Poids);
                $stmt->bindParam(':Taille', $Taille);
                $stmt->bindParam(':Fat', $Fat);
                $stmt->bindParam(':Temperature', $Temperature);
                $stmt->bindParam(':Calories', $Calories);
                $stmt->bindParam(':Coeur', $Coeur);
                $stmt->bindParam(':Sommeil', $Sommeil);
                $Nom = $Nom;
                $Prenom = $Prenom;
                $Age = $Age;
                $Sexe = $Sexe;
                $Poids = $Poids;
                $Taille = $Taille;
                $Fat = $Fat;
                $Temperature = $Temperature;
                $Calories = $Calories;
                $Coeur = $Coeur;
                $Sommeil = $Sommeil;
                $utilisateurId = $utilisateurId;
                $stmt->execute();
                $retourBack = "<div class='toggler'>
            <div id='effect' class='ui-widget-content ui-corner-all' >
              <h3 class='ui-widget-header ui-corner-all'>Succes</h3>
              <p>
                Le compte " . $Nom . " à bien été mise à jour
              </p>
            </div>
            </div>";
            } catch (\Throwable $th) {
                $retourBack = "<div class='toggler'>
                <div id='effectErreur' class='ui-widget-content ui-corner-all' >
                  <h3 class='ui-widget-header ui-corner-all'>Erreur</h3>
                  <p>
                    Mise à jour impossible.
                  </p>
                </div>
                </div>";
            }
        } else {
            $retourBack = "<div class='toggler'>
            <div id='effectErreur' class='ui-widget-content ui-corner-all' >
              <h3 class='ui-widget-header ui-corner-all'>Erreur</h3>
              <p>
                Merci de recharger la page
              </p>
            </div>
            </div>";
        }
    }
}


echo $retourBack;
