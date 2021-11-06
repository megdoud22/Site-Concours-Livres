<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
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
<header>

  <div class="box-1">
   <h1 class="FM-1"><span><h2 class="FM-2"><p class="Bienvenue3">
   	<span class="Bienvenue4">S</span>
   	<span class="Bienvenue5">o</span>
   	<span class="Bienvenue6">Y</span>
   	<span class="Bienvenue7">e</span>
   	<span class="Bienvenue8">z</span>
   	<br>
   	<br>
   	<span class="Bienvenue9">l</span>
   	<span class="Bienvenue10">e</span>
   	<br>
   	<br>
   	<span class="Bienvenue11">B</span>
   	<span class="Bienvenue12">i</span>
   	<span class="Bienvenue13">e</span>
   	<span class="Bienvenue14">n</span>
   	<span class="Bienvenue15">v</span>
   	<span class="Bienvenue16">e</span>
   	<span class="Bienvenue17">n</span>
   	<span class="Bienvenue18">u</span>
   	<span class="Bienvenue19">e</span>
    </p></span></h2></h1>
  </div>


<div class="box-1">

    <h1 class="FM-1">
	    <span><h2 class="FM-2">
	    <p class="Bienvenue3">
	   	<span class="Bienvenue4">S</span>
	   	<span class="Bienvenue5">o</span>
	   	<span class="Bienvenue6">y</span>
	   	<span class="Bienvenue7">e</span>
	   	<span class="Bienvenue8">z</span>
	   	<br>
	   	<span class="Bienvenue9">l</span>
	   	<span class="Bienvenue10">e</span>
	   	<br>
	   	<span class="Bienvenue11">B</span>
	   	<span class="Bienvenue12">i</span>
	   	<span class="Bienvenue13">e</span>
	   	<span class="Bienvenue14">n</span>
	   	<span class="Bienvenue15">v</span>
	   	<span class="Bienvenue16">e</span>
	   	<span class="Bienvenue17">n</span>
	   	<span class="Bienvenue18">u</span>
	   	<span class="Bienvenue19">e</span>
	    </p>
	    </h2></span>
    </h1>
    
</div>


</header>

   <div>
    <h1 class="validation">Gestion et validation des inscriptions</h1>
   </div>
   

    <h2 class="juree">Profil Juré</h2>
    
    <div class="identifiant2">
       <h2>
      Bienvenue<span class="identifiant22" ><?php echo "//" . $_SESSION['identifiant'] . " //";?> </span>
       </h2>
    </div>

     <div class="grid-container">
	   <div class="grid-item">Profil du condidat</div>
	   <div class="grid-item">2</div>
	   <div class="grid-item"></div>  
	   <div class="grid-item">Juré</div>
	   <div class="grid-item">5</div>
	   <div class="grid-item">6</div>  
	   <div class="grid-item">Auteur</div>
	   <div class="grid-item"></div>
	   <div class="grid-item">9</div> 
	   <div class="grid-item">Conndidat libre</div>
	   <div class="grid-item"></div> 
	   <div class="grid-item">9</div> 
     </div>


 





</body>















<script src="js-fm.js"></script>

</body>
</html>

