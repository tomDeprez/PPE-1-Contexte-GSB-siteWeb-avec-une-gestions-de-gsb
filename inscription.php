<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="source.css">
  <link rel="stylesheet" href="styleChargement.css">
  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <title>GSB - Inscriptions</title>
</head>

<body>
  <h3>Inscription</h3>
  <div>
    <form method="POST" id="form">
      <label for="nom">nom*</label>
      <input type="text" minlength="2" maxlength="30" required="required" id="nom" name="nom" placeholder="Votre nom..">

      <label for="prenom">Prénom*</label>
      <input type="text" minlength="2" maxlength="30" required="required" id="prenom" name="prenom" placeholder="votre Prénom..">

      <label for="age">Age*</label>
      <input type="text" minlength="2" maxlength="5" required="required" id="age" name="age" placeholder="Votre age..">

      <label for="email">Email*</label>
      <input type="text" minlength="2" maxlength="50" required="required" id="email" name="email" placeholder="Votre email..">

      <label for="mdp1">Mot de passe*</label>
      <input type="text" id="mdp1" name="mdp1" placeholder="Votre mot de passe..">

      <label for="mdp2">confirmation de votre mot de passe*</label>
      <input type="text" id="mdp2" name="mdp2" placeholder="confirmer votre mot de passe..">

      <label for="secteur">Secteur*</label>
      <select id="secteur" name="secteur">
        <option value="Medecin">Medecin</option>
        <option value="Docteur">Docteur</option>
        <option value="Autre">Autre</option>
      </select>

      <input type="submit" id="myCheckbox" value="Submit">
        <div id="products" name="products">
        </div>
    </form>
  </div>
  <script>
    $("#myCheckbox").click(function(event) {
      event.preventDefault();
      var form = $("#form");
      $.ajax({
        url: 'chargement2.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          $('#products').html(response);
        }
      });
      $.ajax({
        url: 'gestionInscription.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        data: form.serialize(),
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          $('#products').html(response);
        }
      });
    });

    function Get() {
      //On lance la requête pour récupérer le fichier
      var fichierBrut = new XMLHttpRequest();
      fichierBrut.open("GET", "echange.txt", false);
      //On utilise une fonction sur l'événement "onreadystate"
      fichierBrut.onreadystatechange = function() {
        if (fichierBrut.readyState === 4) {
          //On contrôle bien quand le statut est égal à 0
          if (fichierBrut.status === 200 || fichierBrut.status == 0) {
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