<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="source.css">
    <title>GSB - Connexion</title>
    <?php
    require("gestionsConnection.php");
    ?>
</head>
<body>
        <h3>Connexion</h3>
        <div>
          <form method="POST" id="form">
            <label for="email">Adresse email*</label>
            <input type="text" id="email" name="email" placeholder="Votre adresse email..">
        <br />
            <label for="mdp">Mot de passe*</label>
            <input type="text" id="mdp" name="mdp" placeholder="Votre mot de passe..">
                 
            <input type="submit" id="myCheckbox" value="Submit">
          </form>
        </div>
        <div id="products" name="products"></div>
</body>
<script>
window.onload = function(){
document.getElementById("myCheckbox").addEventListener("click", function(event){
  event.preventDefault()
  rquetePhp();
});
}
function rquetePhp() {
      $.ajax({
                 url: 'gestionsConnection.php', // Le nom du fichier indiqué dans le formulaire
                 type: "POST", // La méthode indiquée dans le formulaire (get ou post)
                 data: "html",
                 mimeType:"multipart/form-data",
                 contentType: false,
    	           cache: false,
        	       processData:false,
                 success: function(response) { // Je récupère la réponse du fichier PHP
                  $('#products').replaceWith(response)
                  $('#products').append(response);
                 }
             });
}
//  setTimeout(notif, 2000);
  
//  notif();


function createInstance()
{
  var req = null;
  if(window.XMLHttpRequest) {
    req = new XMLHttpRequest();
  }
  else if (window.ActiveXObject) {
    try {
      req = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
       try {
        req = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            alert("XHR not created");
          }
      }
    }
    return req;
}

function submitForm()
{ 
   var req = createInstance();
   req.onreadystatechange = function()
   { 
      if(req.readyState == 4)
      {
         if(req.status == 200)
         {
            document.ajax.dyn.value="Received:" + req.responseText;	
         }	
         else	
         {
            document.ajax.dyn.value="Error: returned status code " + req.status + " " + req.statusText;
         }	
      } 
   }; 
   req.open("GET", "gestionsConnection.php", true); 
   req.send(null);
   Get();
 } 


  function Get() {
     //On lance la requête pour récupérer le fichier
 var fichierBrut = new XMLHttpRequest();
 fichierBrut.open("GET", "connectionEchange.txt", false);
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
  var para = document.createElement("h1");
  para.innerText = texteComplet;
  para.setAttribute("class", "democlass");
  document.body.appendChild(para);
  var x = document.getElementsByClassName("democlass").style.textAlign = "center";
 }
 }
 }
 fichierBrut.send(null); 
  }
</script>
</html>