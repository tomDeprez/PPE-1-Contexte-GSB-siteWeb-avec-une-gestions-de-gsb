<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/source.css">
  <link rel="stylesheet" href="css/chargement.css">
  <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <title>GSB - Connexion</title>

</head>

<body>
  <h3>Connexion</h3>
  <div>

    <form method="POST" id="form">
      <label for="email">Adresse email*</label>
      <input type="text" id="email" name="email" placeholder="Votre adresse email..">
      <br />
      <label for="mdp">Mot de passe*</label>
      <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe..">

      <input type="submit" onclick="" id="myCheckbox" value="Submit">
    </form>
  </div>
</body>
<!-- <div class="frame">
   <div class="center"> -->

<div id="products" name="products">
</div>

<!-- </div>
</div> -->
<script>
  $("#myCheckbox").click(function(event) {
    var form = $("#form");
    event.preventDefault();
    $.ajax({
      url: 'Chargement.php', // Le nom du fichier indiqué dans le formulaire
      type: "POST", // La méthode indiquée dans le formulaire (get ou post)
      dataType: 'html',
      success: function(response) { // Je récupère la réponse du fichier PHP
        $('#products').html(response);
      }
    });
    $.ajax({
      url: 'gestionsConnection.php', // Le nom du fichier indiqué dans le formulaire
      type: "POST", // La méthode indiquée dans le formulaire (get ou post)
      data: form.serialize(),
      dataType: 'html',
      success: function(response) { // Je récupère la réponse du fichier PHP
        $('#products').html(response);
        redirection(response);
      }
    });
  });

  function redirection(response) {
    var result = response.indexOf("*");
    if (result == 0) {
      location.replace("sesionHome.php")
    }
  }
</script>

</html>