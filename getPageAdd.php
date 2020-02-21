<?php
require("ConnexionBDD.php");
require("checkIfSessionTrue.php");


if (isset($_POST['id'])) {
    $utilisateurId = $_POST['id'];
} else {
    $utilisateurId = "";
}

$_SESSION['id'] = $utilisateurId;


$Nom = "";
$Prenom = "";
$Age = "";
$Sexe = "";
$Poids = "";
$Taille = "";
$Fat = "";
$Temperature = "";
$Calories = "";
$Coeur = "";
$Sommeil = "";
$Bmi = "";

$retourBack = "";




$stmt = $dbh->prepare("SELECT DISTINCT * FROM patient WHERE id = :utilisateurId");
$stmt->bindParam(':utilisateurId', $utilisateurId, PDO::PARAM_INT);
$utilisateurId = $utilisateurId;
$stmt->execute();
if ($result = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
    foreach ($result as $key => $value) {
        $Nom = $value['nom'];
        $Prenom = $value['prenom'];
        $Age = $value['age'];
        $Sexe = $value['sexe'];
        $Poids = $value['poids'];
        $Taille = $value['taille'];
        $Fat = $value['fat'];
        $Temperature = $value['temperature'];
        $Calories = $value['calories'];
        $Coeur = $value['coeur'];
        $Sommeil = $value['sommeil'];
        $Bmi = round($Poids / ($Taille * 2), 2);
    }
}





$Age = date('j-m-y');  
$Age = "2018-10-2";  


$retourBack = "<div class='menu-column'>
<ul class='nav'>
    <li class='pulse' onclick='window.location.href = \"sesionHome.php\";' id='pulse'></li>
    <li class='clipboard' id='clipboard'></li>
</ul>
<div class='profile'></div>
</div>
<div class='summary-column'>
<div class='profile-img' id='profileImage'>
<div class='name'>" . $utilisateurPrenom . " <br> " . $utilisateurNom . "</div>
</div>
<div class='statistics'>
    <h2>summary</h2>
    <div class='age'><span class='title title-age'>22</span></div>
    <div class='weight'><span class='title title-weight'>" . $Poids . " kg</span></div>
    <div class='float-none'></div>
    <div class='height'>
        <div class='icon'></div>
        <div class='data'><span>" . $Taille . " m</span></div>
    </div>
    <div class='bmi'><span class='title title-bmi'>" . $Bmi . "</span></div>
    <div class='fat'><span class='title title-fat'>" . $Fat . "<span class='percentage'>%</span></span></div>
    <div class='float-none'></div>
</div>
</div>

<div class='content-column'>
<h1> ajouter de nouveaux patients
</h1>
<section class='contact-wrap'>
    <form class='contact-form' id='Myform'>
    <div class='col-sm-12'>
    <input class='square-button' type='submit' onclick='nouveau();' id='myCheckbox' value='Nouveau'>
</div>
        <div class='col-sm-6'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;' style='top: 10px; font-size: 14px;'>Nom</label>
                <input type='text' name='Nom' id='Nom' value='" . $Nom . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Prénom</label>
                <input type='text' name='Prenom' value='" . $Prenom . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Age</label>
                <input type='date' name='Age' value='" . $Age . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Sexe</label>
                <input type='text' name='Sexe' value='" . $Sexe . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Poids</label>
                <input type='text' name='Poids' value='" . $Poids . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Taille</label>
                <input type='text' name='Taille' value='" . $Taille . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Fat</label>
                <input type='text' name='Fat' value='" . $Fat . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Temperature</label>
                <input type='text' name='Temperature' value='" . $Temperature . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Calories</label>
                <input type='text' name='Calories' value='" . $Calories . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Coeur</label>
                <input type='text' name='Coeur' value='" . $Coeur . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block focus'>
                <label for='' style='top: 10px; font-size: 14px;'>Sommeil</label>
                <input type='text' name='Sommeil' value='" . $Sommeil . "' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <input class='square-button' type='submit' onclick='update(1);' id='myCheckbox' value='Actualiser'>
        </div>
        <br />
    </form>

</section>
</div>



<div class='search-column'>
<div class='search-container'><img src='https://svgshare.com/i/56w.svg' />
    <input type='text' id='Search' onKeyUp='cleRelachee(event)' placeholder='Search' />
</div>
<div class='activity-list' id='activity-list' name='activity-list'>

</div>
</div>";


echo $retourBack;
