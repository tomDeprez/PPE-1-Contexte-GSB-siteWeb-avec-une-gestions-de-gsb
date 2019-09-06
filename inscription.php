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
    <input type="text" minlength="2" maxlength ="15" required="required" id="nom" name="nom" placeholder="Votre prénom..">

    <label for="nom">Nom*</label>
    <input type="text" minlength="2" maxlength ="15" required="required" id="prenom" name="prenom" placeholder="votre nom..">

    <label for="age">Age*</label>
    <input type="text" minlength="2" maxlength ="15" required="required" id="age" name="age" placeholder="Votre age..">

    <label for="email">Email*</label>
    <input type="text" minlength="2" maxlength ="15" required="required"id="email" name="email" placeholder="Votre email..">

    <label for="mdp1">Mot de passe*</label>
    <input type="text" id="mdp1" name="mdp1" placeholder="Votre mot de passe..">

    <label for="mdp2">confirmation de votre mot de passe*</label>
    <input type="text" id="mdp2" name="mdp2" placeholder="confirmer votre mot de passe..">

    <label for="secteur">Secteur*</label>
    <select id="secteur" name="secteur">
        <option value="australia">Medecin</option>
        <option value="canada">Docteur</option>
        <option value="usa">Autre</option>
      </select>
      <button class="button button2" onclick="Get()">TEST</button>
    <input type="submit" value="Submit">
  </form>
</div>
<script>
  function Get() {
     //On lance la requête pour récupérer le fichier
 var fichierBrut = new XMLHttpRequest();
 fichierBrut.open("GET", "echange.txt", false);
 //On utilise une fonction sur l'événement "onreadystate"
 fichierBrut.onreadystatechange = function ()
 {
 if(fichierBrut.readyState === 4)
 {
 //On contrôle bien quand le statut est égal à 0
 if(fichierBrut.status === 200 || fichierBrut.status == 0)
 {
 //On peut récupérer puis traiter le texte du fichier
 var texteComplet = fichierBrut.responseText;
  alert(texteComplet);
 }
 }
 }
 fichierBrut.send(null); 
  }
</script>
</body>
</html>