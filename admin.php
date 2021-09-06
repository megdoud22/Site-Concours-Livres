

<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['identifiant'] = 'Megdoud22';
$_SESSION['mode_pass'] = "Fatah.22@1981"
?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8"/>
	    <link rel="stylesheet" href="style-fm.css"/>
		<title>Page d'Accueil</title>
        <script src="https://kit.fontawesome.com/aea7e8ce79.js" crossorigin="anonymous"></script>
	</head>


	

<body>
      <h2 class="titre">
        <img class="mouve-1" src="Images/explosion-de-couleurs.jpg" height="200" width="200" alt="image">
        <p><span class="titre-1">Bienvenue cher Admin dans votre espace de connexion</span></p>
        <img class="mouve-1" src="Images/explosion-de-couleurs.jpg" height="200" width="200" alt="image">
      </h2>



<form method="post" action="Admin_gestion.php">

		  <div class="Auteur">
			 <fieldset class="fieldset-2">

			       <legend class="legend-2">Votre espace de connection:</legend>
			       <label class="identifiant" for="identifant"><span >Votre identifiant:</span></label>
			       <input class="nom" type="text" name="pseudo" id="pseudo"/>
			       <br/>
			      

                   <label class="pass-word"for="pass">Votre mot de passe :</label>
			       <input class="nom"  type="password" name="pass" id="pass"/>
             <br/>
			       <br/>
			       <div class="btn-4-1">
                   <button id="btn-4">Validez</button>
                   </div>
			       <br/>
			       <br/>
                   <br>
			       <a href="#"><p class="lien">Mot de passe oublié</p></a>

             </fieldset>
          </div>
</form>


      <br/>
      <br/>
      <br/>
     


<footer>

    <div class="pied-page">
      <p><a class="contact" href="contact.html"><span class="icone-1"><i class="fas fa-file-contract"></i></span> Nous contacter</a></p>
      <p><a class="email" href="mailto:fatah.megdoud@outlook.fr"><span class="icone"><i class="fas fa-at"></i></span> Envoyez-moi un e-mail !</a></p>
      <p><a class="reglement-2" href="Images/montage_PC.pdf"><span class="reglement-3"><i class="far fa-file-pdf"></i></span> Règlement du concours à Télécharger</a></p>
      <p><a class="facebook" href="https://fr-fr.facebook.com/"><span class="facebook1"><i class="fab fa-facebook-square"></i></span>  Réseau social</a></p>
      <p><a class="facebook" href="https://twitter.com/?lang=fr"><span class="Twitter1"><i class="fab fa-twitter"></i></span>  Twitter</a></p>
      <p><a class="facebook" href="https://www.instagram.com/?hl=fr"><span class="Instragram1"><i class="fab fa-instagram-square"></i></i></span>  Instragram</a></p>
    </div>


    <div class="photos">
        <h1>Photos</h1>
        <p><img class="ville-de-Nice" src="Images/ville-de-Nice.png" alt="" width="150" height="140" alt=""></p>
    </div>

   
    

    <div class="info-1">
        <p><span class="point"><i class="fas fa-circle"></i></span> Mentions légales</p>
        <p><span class="point"><i class="fas fa-circle"></i></i></span></span> Plan du site</p>
        <p><span class="point"><i class="fas fa-circle"></i></i></span> Données personnelles</p>
        <p><span class="point"><i class="fas fa-circle"></i></i></span> Aides</p>
    </div>

</footer>


<script src="js-fm.js"></script>
</body>
</html>

