
<!DOCTYPE html>
<html>

	<head>
	    <meta charset="utf-8"/>
	    <link rel="stylesheet" href="style-fm.css"/>
		<title>Page d'Accueil</title>
        <script src="https://kit.fontawesome.com/aea7e8ce79.js" crossorigin="anonymous"></script>
	</head>

<body>

        Votre sex:
         <?php echo $_POST['Sexe']; ?>
		<br>
		<br>
		<br>

   

   
    <h1 class="confirmation1">Votre formrulaire à été bien envoyer !</h1>
    <h2 class="confirmation2">Votre dossier sera traité dans un délai de 21 jours</h2>

    <fieldset class="récapitulatif">
    	<legend class="récapitulatif1"><h2>Votre récapitulatif d'information :</h2></legend>
    	<h2 class="inforation-formulaire">Votre sex:<?php echo $_POST['Sexe']; ?></h2>
    	<h2 class="inforation-formulaire">Votre nom:<?php echo $_POST['nom']; ?></h2>
    	<h2 class="inforation-formulaire">Votre prénom:<?php echo $_POST['prenom']; ?></h2>
    	<h2 class="inforation-formulaire">Votre date de naissance :<?php echo $_POST['date']; ?></h2>
    	<h2 class="inforation-formulaire">Votre email::<?php echo $_POST['email']; ?></h2>
    	<h2 class="inforation-formulaire">Votre pays:<?php echo $_POST['pays']; ?></h2>
    	<h2 class="inforation-formulaire">Votre numéro de téléphone:<?php echo $_POST['telephone']; ?></h2>
    	<h2 class="inforation-formulaire">Votre statut:<?php echo $_POST['Statut']; ?></h2>
    	<h2 class="inforation-formulaire">Votre message:<?php echo $_POST['precisions']; ?></h2>
    </fieldset>

</body>
</html>