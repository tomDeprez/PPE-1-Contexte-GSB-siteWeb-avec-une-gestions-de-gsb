<?php
require("ConnexionBDD.php");
require("checkIfSessionTrue.php");


$retourBack = "";











$retourBack = "<div class='menu-column'>
<ul class='nav'>
    <li class='pulse' onclick='window.location.href = \"sesionHome.php\";' id='pulse'></li>
    <li class='clipboard' id='clipboard'></li>
    <li class='settings' onclick='window.location.href = \"exit.php\";' id='settings'></li>
</ul>
<div class='profile'></div>
</div>
<div class='summary-column'>
<div class='profile-img' id='profileImage'>
<div class='name'>" . $utilisateurPrenom . " <br> " . $utilisateurNom . "</div>
</div>
<div class='statistics'>
    <h2>summary</h2>
    <div class='age'><span class='title title-age'>0</span></div>
    <div class='weight'><span class='title title-weight'>0 kg</span></div>
    <div class='float-none'></div>
    <div class='height'>
        <div class='icon'></div>
        <div class='data'><span> cm</span></div>
    </div>
    <div class='bmi'><span class='title title-bmi'>0</span></div>
    <div class='fat'><span class='title title-fat'>0<span class='percentage'>%</span></span></div>
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
            <div class='input-block'>
                <label for=''>Nom</label>
                <input type='text' name='Nom' id='Nom' class='form-control'>
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='input-block'>
                <label for=''>Prénom</label>
                <input type='text' name='Prenom' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Age</label>
                <input type='text' name='Age' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Sexe</label>
                <input type='text' name='Sexe' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Poids</label>
                <input type='text' name='Poids' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Taille</label>
                <input type='text' name='Taille' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Fat</label>
                <input type='text' name='Fat' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Temperature</label>
                <input type='text' name='Temperature' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Calories</label>
                <input type='text' name='Calories' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Coeur</label>
                <input type='text' name='Coeur' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <div class='input-block'>
                <label for=''>Sommeil</label>
                <input type='text' name='Sommeil' class='form-control'>
            </div>
        </div>
        <div class='col-sm-12'>
            <input class='square-button' type='submit' onclick='update(0);' id='myCheckbox' value='Ajouter'>
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
