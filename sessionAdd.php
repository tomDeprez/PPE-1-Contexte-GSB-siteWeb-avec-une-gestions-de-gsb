<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>RESPONSIVE MATERIAL DESIGN CONTACT FORM </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleAdd.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:200,300,400|Roboto:300,400,500'>
    <link rel="stylesheet" href="css/styleSession.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/styleLoader.css">


</head>

<body>
    <div class="products" id="products"></div>

    <div class="container">
        <div class="menu-column">
            <ul class="nav">
                <li class="pulse" id="pulse"></li>
                <li class="clipboard" id="clipboard"></li>
            </ul>
            <div class="profile"><img src="https://placeimg.com/100/100/face" /></div>
        </div>
        <div class="summary-column">
            <div class="profile-img" id="profileImage"><img src="https://placeimg.com/400/400/face" />
                <div class="name">Jana <br> Novakova</div>
            </div>
            <div class="statistics">
                <h2>summary</h2>
                <div class="age"><span class="title title-age">22</span></div>
                <div class="weight"><span class="title title-weight">53 kg</span></div>
                <div class="float-none"></div>
                <div class="height">
                    <div class="icon"></div>
                    <div class="data"><span>172 cm</span></div>
                </div>
                <div class="bmi"><span class="title title-bmi">20.4</span></div>
                <div class="fat"><span class="title title-fat">11<span class="percentage">%</span></span></div>
                <div class="float-none"></div>
                <h2 class="allergies">allergies</h2>
                <div class="row">peanuts
                    <div class="severity">
                        <div class="fill" style="width: 45%; height: inherit;"></div>
                    </div>
                </div>
                <div class="row">penicilin
                    <div class="severity">
                        <div class="fill" style="width: 80%; height: inherit;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-column">
            <h1> ajouter de nouveaux patients
            </h1>
            <section class="contact-wrap">
                <form class="contact-form" id="Myform">
                    <div class="col-sm-6">
                        <div class="input-block">
                            <label for="">Nom</label>
                            <input type="text" name="Nom" id="Nom" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block">
                            <label for="">Prénom</label>
                            <input type="text" name="Prenom" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Age</label>
                            <input type="text" name="Age" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Sexe</label>
                            <input type="text" name="Sexe" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Poids</label>
                            <input type="text" name="Poids" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Taille</label>
                            <input type="text" name="Taille" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Fat</label>
                            <input type="text" name="Fat" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Temperature</label>
                            <input type="text" name="Temperature" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Calories</label>
                            <input type="text" name="Calories" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Coeur</label>
                            <input type="text" name="Coeur" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Sommeil</label>
                            <input type="text" name="Sommeil" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <input class="square-button" type="submit" onclick="" id="myCheckbox" value="Ajouter">
                    </div>
                    <br />
                </form>

            </section>
        </div>



        <div class="search-column">
            <div class="search-container"><img src="https://svgshare.com/i/56w.svg" />
                <input type="text" id="Search" onKeyUp="cleRelachee(event)" placeholder="Search" />
            </div>
            <div class="activity-list" id="activity-list" name="activity-list">
                <h3>Recent Activity</h3>
                <div class="activity">
                    <div class="image-container"><img src="https://placeimg.com/40/40/face" /></div>
                    <div class="text"><span class="name">Peter Smith </span>added a new appointment to your calendar.<span class="time-ago">2 hours ago</span></div>
                </div>
                <div class="activity">
                    <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
                    <div class="text"><span class="name">Katarina Rychia </span>commented on your Results 09<span class="time-ago">2 hours ago</span></div>
                </div>
                <div class="activity">
                    <div class="image-container"><img src="https://placeimg.com/40/40/face" /></div>
                    <div class="text"><span class="name">Tereza Dvorak </span>added two attachments to Results 238.<span class="time-ago">6 days ago</span></div>
                </div>
                <div class="activity">
                    <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
                    <div class="text"><span class="name">Peter Smith </span>added a new appointment to your calendar.<span class="time-ago">7 days ago</span></div>
                </div>
                <div class="your-doctors">
                    <h3>Your Doctors</h3>
                    <div class="doctor">
                        <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
                        <div class="text"><span class="name-large">Peter Smith</span><span class="title">Dentist</span></div>
                    </div>
                    <div class="doctor">
                        <div class="image-container"><img src="https://placeimg.com/40/40/face" /></div>
                        <div class="text"><span class="name-large">Katarina Rychia </span><span class="title">Dentist</span></div>
                    </div>
                    <div class="doctor">
                        <div class="image-container"><img src="https://placeimg.com/40/40/person" /></div>
                        <div class="text"><span class="name-large">Tereza Dvorak </span><span class="title">Physician</span></div>
                    </div>
                    <button class="find-doctor">Find new doctor</button>
                </div>
            </div>
        </div>
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
                    $('#activity-list').html("<h3>Recent Activity</h3>" + "Aucun compte trouvé");
                } else {
                    $('#activity-list').html("<h3>Recent Activity</h3>" + response);
                }
            }
        });
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
<script>
    $("#myCheckbox").click(function(event) {
        event.preventDefault();
        var myForm = document.getElementById('Myform');
        var formData = new FormData(myForm);
        
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
                sleep(4000).then(() => {
                    $('#products').html("");
                });
            }
        });
    });

    function sleep(time) {
        return new Promise((resolve) => setTimeout(resolve, time));
    }

    $(function() {
        // run the currently selected effect
        function runEffect() {
            // get effect type from
            var selectedEffect = "fade";

            // Most effect types need no options passed by default
            var options = {};
            // some effects have required parameters
            if (selectedEffect === "scale") {
                options = {
                    percent: 50
                };
            } else if (selectedEffect === "size") {
                options = {
                    to: {
                        width: 280,
                        height: 185
                    }
                };
            }
            // Run the effect
            $("#effect").show(selectedEffect, options, 500, callback);
        };

        //callback function to bring a hidden box back
        function callback() {
            setTimeout(function() {
                $("#effect:visible").removeAttr("style").fadeOut();
            }, 500);
            setTimeout(function() {

                $('#products').html("");
            }, 1000);
        };

        // Set effect from select menu value
        $("#products").on("click", function() {
            runEffect();
        });

        $("#effect").hide();
    });
</script>
<script src="js/FormulaireScript.js"></script>



</html>