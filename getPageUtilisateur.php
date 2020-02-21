<?php
require("ConnexionBDD.php");
require("checkIfSessionTrue.php");

if (isset($_POST['id'])) {
    $utilisateurId = $_POST['id'];
} else {
    $utilisateurId = "";
}
$utilisateurName;

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
$actif = 0;



$retourBack = "";


if ($utilisateurId == "") {
    $stmt = $dbh->prepare("SELECT id FROM patient ORDER BY rand() LIMIT 1");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $key => $value) {
        $utilisateurId = $value['id'];
    }
}

$stmt = $dbh->prepare("SELECT DISTINCT * FROM patient WHERE id = :utilisateurId");
$stmt->bindParam(':utilisateurId', $utilisateurId, PDO::PARAM_INT);
$utilisateurId = $utilisateurId;
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    $actif = $value['utiliser'];
    $Bmi = round($Poids / ($Taille*2), 2);
}

$night = 24 - intval($Sommeil);
$ratrapage = 8 - intval($Sommeil);

if ($ratrapage < 0) {
  $ratrapage = 0;
}

$retourBack = "<div class='menu-column'>
<ul class='nav'>
  <li class='pulse' id='pulse'></li>
  <li class='clipboard' onclick='window.location.href = \"sessionAdd.php\";' id='clipboard'></li>
  <li class='settings' onclick='window.location.href = \"exit.php\";' id='settings'></li>
</ul>
<div class='profile'></div>
</div>
<div class='summary-column'>
<div class='profile-img' id='profileImage'>
  <div class='name'>" . $utilisateurPrenom . " <br> " . $utilisateurNom . "</div>
</div>
<div class='statistics'>
  <h2>" . $Sexe . "</h2>
  <div class='age'><span class='title title-age'>" . $Age . "</span></div>
  <div class='weight'><span class='title title-weight'>" . $Poids . " kg</span></div>
  <div class='float-none'></div>
  <div class='height'>
    <div class='icon'></div>
    <div class='data'><span>" . $Taille . " m</span></div>
  </div>
  <div class='bmi'><span class='title title-bmi'>".$Bmi."</span></div>
  <div class='fat'><span class='title title-fat'>" . $Fat . "<span class='percentage'>%</span></span></div>
  <div class='float-none'></div>
</div>
</div>
<div class='content-column'>
<div class='header-container' id='headerContainer'>
  <div class='nav'>
    <div class='content'>
      <p>
        Bonjour <span class='name'>" . $utilisateurPrenom . "</span>, comment allez vous ?</p><span class='shape score'>" . $Prenom . "</span><span class='shape'> " . $Nom . "</span>
    </div>
  </div>
  <div class='float-none'></div>
  <div class='graph'>
    <canvas id='bpChart' style='position: relative; z-index: 100;'></canvas>
  </div>
</div>
<div class='split-container'>
  <div class='split'>
    <h3>Temperature</h3>
    <div class='temperature'>" . $Temperature . "</div>
    <div class='split-graph'>
      <canvas id='temperatureGraph'></canvas>
    </div>
  </div>
  <div class='split'>
    <h3>Calories burned</h3>
    <div class='calories'>" . $Calories . "</div>
    <div class='split-graph'>
      <canvas id='calorieGraph'></canvas>
    </div>
  </div>
  <div class='split'>
    <h3>Heart rate</h3>
    <div class='heart-rate'>" . $Coeur . "</div>
    <div class='split-graph'>
      <canvas id='heartRateGraph'></canvas>
    </div>
  </div>
</div>
<div class='sleep'>
  <div class='totals'>
    <div class='collective'><span class='hours'>" . $Sommeil . "</span>
      <p>Total sleep time</p>
    </div>
    <div class='split first'>" . $Sommeil . "h
      <p>Nuit</p>
    </div>
    <div class='split'>" . $night . "h
      <p>Jour</p>
    </div>
    <div class='split'>" . $ratrapage . "h
    <p>Ratraper</p>
  </div>
  </div>
  <div class='sleep-graph'>
    <div class='sleep-graph-container'>
      <h2> BMI Analytics</h2>
      <div class='sleep-select-wrapper'>
        <select onchange='functionActif(this.value);'>";
        if ($actif == '0') {
          $retourBack .= "<option value='0' selected>Actif</option>
          <option value='1'>Inactif</option>";
        }
        else {
          $retourBack .= "<option value='0'>Actif</option>
          <option value='1' selected>Inactif</option>";
        }
        $retourBack .= "</select>
      </div>
      <div class='chart-container'>
        <canvas id='sleepChart'></canvas>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<div class='search-column'>
<div class='search-container'><img src='https://svgshare.com/i/56w.svg' />
  <input type='text' id='Search' onKeyUp='cleRelachee(event)' placeholder='Search' />
</div>
<div class='activity-list' id='activity-list' name='activity-list'>
</div>
</div>";



echo $retourBack;
