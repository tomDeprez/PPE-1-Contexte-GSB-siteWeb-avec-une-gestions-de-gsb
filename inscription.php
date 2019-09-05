<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="source.css">
    <title>GSB - Inscriptions</title>
</head>
<body>
    <h3>Inscription</h3>
<div>
  <form action="gestionInscription.php" method="post">
    <label for="prenom">Prénom*</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre prénom..">

    <label for="nom">Nom*</label>
    <input type="text" id="lname" name="lastname" placeholder="votre nom..">

    <label for="age">Age*</label>
    <input type="text" id="lname" name="lastname" placeholder="Votre age..">

    <label for="email">Email*</label>
    <input type="text" id="lname" name="lastname" placeholder="Votre email..">

    <label for="mdp1">Mot de passe*</label>
    <input type="text" id="lname" name="lastname" placeholder="Votre mot de passe..">

    <label for="mdp2">confirmation de votre mot de passe*</label>
    <input type="text" id="lname" name="lastname" placeholder="confirmer votre mot de passe..">

    <label for="secteur">Secteur*</label>
    <select id="secteur" name="secteur">
        <option value="australia">Medecin</option>
        <option value="canada">Docteur</option>
        <option value="usa">Autre</option>
      </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>