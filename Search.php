<?php
require("ConnexionBDD.php");
$search = $_POST['search'];

$search = trim($search);
$search = htmlspecialchars($search);
$get = "";

$search = "%".$search."%";
$retour = "<div class='activity'>
<div class='image-container'><img src='https://placeimg.com/40/40/face' /></div>
<div class='text'><span class='name'>Peter Smith </span>added a new appointment to your calendar.<span class='time-ago'>2 hours ago</span></div>
</div>";

$stmt = $dbh->prepare("SELECT DISTINCT nom,id FROM patient WHERE nom LIKE :nom OR prenom LIKE :prenom ORDER BY nom LIMIT 10");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$nom = $search;
$prenom = $search;
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $key => $value) {
    // echo $result['nom'][0];
    // var_dump($value);
    $get .= "<div class='activity'>
    <div class='image-container'><img src='https://placeimg.com/40/40/face' /></div>
    <div class='text' onclick='getUtilisateurById(\"".$value['id']."\");'><span class='name'>".$result[$key]['nom']." </span>added a new appointment to your calendar.<span class='time-ago'>2 hours ago</span></div>
    </div>";
}
echo $get;
