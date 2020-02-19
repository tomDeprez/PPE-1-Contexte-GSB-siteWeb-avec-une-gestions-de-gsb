<!DOCTYPE html>
<html lang="fr">
<?php require("checkIfSessionTrue.php"); ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel='stylesheet' href='css/cssRoboto.css'>
  <link rel="stylesheet" href="css/styleSession.css">
  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/styleLoader.css">
</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="container" id="page">

  </div>
  <!-- partial -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js'></script>
  <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA5wVTk5SQ3alGnIqPchU9CmU7v__ypM6Q'></script> -->
  <!-- <script src="js/script.js"></script> -->
  <script>
    $(document).ready(function() {
      $.ajax({
        url: 'getPageUtilisateur.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        data: "id=",
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          $('#page').html(response);
        }
      });
      setTimeout(function() {
        $.ajax({
          url: 'Search.php', // Le nom du fichier indiqué dans le formulaire
          type: "POST", // La méthode indiquée dans le formulaire (get ou post)
          data: "search=",
          dataType: 'html',
          success: function(response) { // Je récupère la réponse du fichier PHP
            if (response == "") {
              $('#activity-list').html("<h3>Recent Activity</h3>" + "Aucun compte trouvé");
            } else {
              $('#activity-list').html("<h3>Recent Activity</h3>" + response);
            }
          }
        });
      }, 500)
    });

    function getUtilisateurById(id) {
      $.ajax({
        url: 'getPageUtilisateur.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        data: "id=" + id,
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          $('#page').html(response);
        }
      });
      setTimeout(function() {
        $.ajax({
          url: 'Search.php', // Le nom du fichier indiqué dans le formulaire
          type: "POST", // La méthode indiquée dans le formulaire (get ou post)
          data: "search=",
          dataType: 'html',
          success: function(response) { // Je récupère la réponse du fichier PHP
            if (response == "") {
              $('#activity-list').html("<h3>Recent Activity</h3>" + "Aucun compte trouvé");
            } else {
              $('#activity-list').html("<h3>Recent Activity</h3>" + response);
            }
          }
        });
      }, 500)
    }

    function cleRelachee(event) {
      event.preventDefault();
      var search = document.getElementById("Search").value;
      $.ajax({
        url: 'Loader.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        data: "search=",
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          $('#activity-list').html("<h3>Recent Activity</h3>" + response);
        }
      });
      $.ajax({
        url: 'Search.php', // Le nom du fichier indiqué dans le formulaire
        type: "POST", // La méthode indiquée dans le formulaire (get ou post)
        data: "search=" + search,
        dataType: 'html',
        success: function(response) { // Je récupère la réponse du fichier PHP
          if (response == "") {
            $('#activity-list').html("<h3>Recent Activity</h3>" + "Aucun compte trouvé");
          } else {
            $('#activity-list').html("<h3>Recent Activity</h3>" + response);
          }
        }
      });
    }
    $("#pulse").click(function(event) {
      window.location.href = "sesionHome.php";
    });
    $("#clipboard").click(function(event) {
      window.location.href = "sessionAdd.php";
    });
  </script>

</body>

</html>