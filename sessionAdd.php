<!DOCTYPE html>
<html lang="fr">
<?php require("checkIfSessionTrue.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESPONSIVE MATERIAL DESIGN CONTACT FORM </title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:200,300,400|Roboto:300,400,500'>
    <link rel="stylesheet" href="css/styleSession.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/styleLoader.css">
    <link rel="stylesheet" href="css/style.css"> -->


    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/styleAdd.css">
    <link rel='stylesheet' href='css/cssRoboto.css'>
    <link rel="stylesheet" href="css/styleSession.css">
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/styleLoader.css">

</head>

<body>
    <div class="products" id="products"></div>

    <div class="container" id="page">

    </div>
</body>

<script>
    $(document).ready(function() {
        $.ajax({
            url: 'Search.php', // Le nom du fichier indiqué dans le formulaire
            type: "POST", // La méthode indiquée dans le formulaire (get ou post)
            data: "search=",
            dataType: 'html',
            success: function(response) { // Je récupère la réponse du fichier PHP
                if (response == "") {
                    $('#activity-list').html("<h3>Patient</h3>" + "Aucun compte trouvé");
                } else {
                    $('#activity-list').html("<h3>Patient</h3>" + response);
                }
            }
        });
        $.ajax({
            url: 'getPageAddNew.php', // Le nom du fichier indiqué dans le formulaire
            type: "POST", // La méthode indiquée dans le formulaire (get ou post)
            dataType: 'html',
            success: function(response) { // Je récupère la réponse du fichier PHP
                $('#page').html(response);
            }
        });
        $.ajax({
            url: 'Loader.php', // Le nom du fichier indiqué dans le formulaire
            type: "POST", // La méthode indiquée dans le formulaire (get ou post)
            data: "search=",
            dataType: 'html',
            success: function(response) { // Je récupère la réponse du fichier PHP
                $('#activity-list').html("<h3>Patient</h3>" + response);
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
                        $('#activity-list').html("<h3>Patient</h3>" + "Aucun compte trouvé");
                    } else {
                        $('#activity-list').html("<h3>Patient</h3>" + response);
                    }
                }
            });
        }, 1000)
    });

    function cleRelachee(event) {
        event.preventDefault();
        var search = document.getElementById("Search").value;
        $.ajax({
            url: 'Loader.php', // Le nom du fichier indiqué dans le formulaire
            type: "POST", // La méthode indiquée dans le formulaire (get ou post)
            data: "search=",
            dataType: 'html',
            success: function(response) { // Je récupère la réponse du fichier PHP
                $('#activity-list').html("<h3>Patient</h3>" + response);
            }
        });
        $.ajax({
            url: 'Search.php', // Le nom du fichier indiqué dans le formulaire
            type: "POST", // La méthode indiquée dans le formulaire (get ou post)
            data: "search=" + search,
            dataType: 'html',
            success: function(response) { // Je récupère la réponse du fichier PHP
                if (response == "") {
                    $('#activity-list').html("<h3>Patient</h3>" + "Aucun compte trouvé");
                } else {
                    $('#activity-list').html("<h3>Patient</h3>" + response);
                }
            }
        });
    }



    function getUtilisateurById(id) {
        $.ajax({
            url: 'getPageAdd.php', // Le nom du fichier indiqué dans le formulaire
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
                        $('#activity-list').html("<h3>Patient</h3>" + "Aucun compte trouvé");
                    } else {
                        $('#activity-list').html("<h3>Patient</h3>" + response);
                    }
                }
            });
        }, 500)
    }


    $("#pulse").click(function(event) {
        window.location.href = "sesionHome.php";
    });
    $("#clipboard").click(function(event) {
        window.location.href = "sessionAdd.php";
    });
</script>
<script>
    function update(value) {
        event.preventDefault();
        var myForm = document.getElementById('Myform');
        var formData = new FormData(myForm);
        formData.append("value", value);
        //alert(form.serialize());
        $.ajax({
            url: 'AddPatients.php', // Le nom du fichier indiqué dans le formulaire
            type: "POST", // La méthode indiquée dans le formulaire (get ou post)
            data: formData,
            // dataType: 'html',
            processData: false, // indique à jQuery de ne pas traiter les données
            contentType: false,
            // contentType: false,
            success: function(response) { // Je récupère la réponse du fichier PHP
                $('#products').html(response);
                // setTimeout($('#products').html(""), 10000);
                setTimeout(function() {
                    $('#products').html("");
                }, 5000)
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
                        $('#activity-list').html("<h3>Patient</h3>" + "Aucun compte trouvé");
                    } else {
                        $('#activity-list').html("<h3>Patient</h3>" + response);
                    }
                }
            });
        }, 500)
    }

    function nouveau() {
        event.preventDefault();
        $.ajax({
            url: 'getPageAddNew.php', // Le nom du fichier indiqué dans le formulaire
            type: "POST", // La méthode indiquée dans le formulaire (get ou post)
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
                        $('#activity-list').html("<h3>Patient</h3>" + "Aucun compte trouvé");
                    } else {
                        $('#activity-list').html("<h3>Patient</h3>" + response);
                    }
                }
            });
        }, 500)
    }
</script>
<script src="js/FormulaireScript.js"></script>



</html>