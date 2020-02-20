<?php
require("ConnexionBDD.php");
require("checkIfSessionTrue.php");

if (isset($_POST['id'])) {
    $utilisateurId = $_POST['id'];
} else {
    $utilisateurId = "";
}
$utilisateurName;

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
    $Bmi = round($Poids / ($Taille*2), 2);
}




$retourBack = "<div class='menu-column'>
<ul class='nav'>
  <li class='pulse' id='pulse'></li>
  <li class='clipboard' onclick='window.location.href = \"sessionAdd.php\";' id='clipboard'></li>
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
    <div class='split first'>6h 12m
      <p>Deep</p>
    </div>
    <div class='split'>2h 13m
      <p>Light</p>
    </div>
  </div>
  <div class='sleep-graph'>
    <div class='sleep-graph-container'>
      <h2> Sleep Analytics</h2>
      <div class='sleep-select-wrapper'>
        <select>
          <option value='today'>Today</option>
        </select>
      </div>
      <div class='chart-container'>
        <canvas id='sleepChart'></canvas>
      </div>
    </div>
  </div>
</div>
<div class='float-none'></div>
<div class='split-container'>
  <div class='split bottom'>
    <h2>Appointments</h2>
    <div class='appointments'>
      <div class='calendar-container'>
        <div class='calendar'>25<span class='date'>th</span><span class='month'>Jul</span></div>
        <div class='content'>
          <table class='appointment-table'>
            <tr>
              <td id='time'>13:00</td>
            </tr>
            <tr>
              <td id='title'>Dentist</td>
            </tr>
            <tr>
              <td id='name'>Jozef Novotny</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class='split bottom'>
    <div id='map'></div>
    <div class='map-overlay'>
      <h2>Steps today</h2><span class='steps'>4578</span><span class='distance'>1.7 km</span>
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
