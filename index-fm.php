
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
   <div class="mousemove">
       
   </div>

   <div class="logo-5">
       <h1 class="Mon-initial">Bienvenue !</h1>
       <p class="date-22">Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
   </div>

    <div class="img-3">
      <div class="img-4"><img src="Images/fond-blocs-vo.jpg" alt="séparation" width="200px" height="10px"/>
      </div> 
    </div> 

    <div class="bordure-attachement">
        <img src="Images/liseret.jpg" alt="image" width="10px" height="30px">
    </div>


    <div>
        <a href="#"><img class="img2" src="Images/bibliothèque.jpg" alt="image" width="150px" height="150px"></a>
    </div>



    <div class="bordure-attachement">
        <img src="Images/liseret.jpg" alt="image" width="10px" height="30px">
    </div>

   <div class="img-3">
     <div class="img">
        <img src="Images/fond-blocs-vo.jpg" alt="séparation" width="600px" height="10px">
     </div> 
   </div> 





    <div class="slide-1">
	   <div class="bibliotheque">
         <a href="#"><img class="img1" src="Images/bibliothèque1.jpg" alt="séparation" width="350px" height="230px"></a>
         <a href="#"><img class="img-1" src="Images/library-book.jpg" alt="séparation" width="350px" height="230px"></a>
       <div> 
    </div>

    <br/>
    <br/>
    <br/>

    <div class="click-event box">
        <h4>Bienvenue sur mon nouveau site !</h4>
        <button id="btn-1" >Clickez !</button>
    </div>

    
    <ul class="menu">

        <li class="dropdown">
             <a href="#" class="dropbtn">Bibliothèque</a>
             <div class="dropdown-content">
                 <a href="Roman.html">Catégorie: Meilleur roman français</a>
                 <a href="Roman-etranger.html">catégorie: Meilleur roman étranger</a>
                 <a href="Documentaire.html">catégorie: Meilleur documentaire</a>
                 <a href="Biographie.html">catégorie: Meilleure biographie</a>
             </div>
        </li>

        <li><a href="historique.html">Historique</a></li>
        <li><a href="formulaire-fm.php">Inscription</a></li>

        <li class="dropdown">
             <a href="#" class="dropbtn">Connexion</a>
             <div class="dropdown-content">
                <a href="admin.html">Compte Admin</a>
                <a href="Jury.html">Compte Jury</a>
                <a href="auteur.html">Compte Auteur</a>
            </div>
        </li>
    </ul> 



</header>





    <section class="caroussel">
	  <div class="slider">
        <div class="slides"> 
            <div class="slide"><img src="Images/bibliothèque-1.jpg" width="500" height="350" alt="carousel "/></div>
            <div class="slide"><img src="Images/bibliothèque-2.jpg" width="500" height="350" alt="carrousel "/></div>
            <div class="slide"><img src="Images/bibliothèque-3.jpg" width="500" height="350" alt="carrousel "/></div>
            <div class="slide"><img src="Images/bibliothèque-4.jpg" width="500" height="350" alt="carrousel "/></div>
            <div class="slide"><img src="Images/bibliothèque-5.jpg" width="500" height="350" alt="carrousel "/></div>
            <div class="slide"><img src="Images/bibliothèque-6.jpg" width="500" height="350" alt="carrousel "/></div>
        </div>
      </div>
    </section>

<br/>
<br/>
<br/>


    <div class="article-concours">

        <article class="presentation">
            <button id="btn-2">Clickez</button>
               <h2>Présentation du concours :</h2>
               <h3>Voici le Règlement du concours:</h3>
               <p id ="article_fm">  <span class="article-numero">Article 1 </span>
                    Ce livre peut raconter une histoire ou être le résultat d’une démarche ou d’un travail sur un thème 
                    choisi par l’auteur. 
                    L’auteur donne ainsi une unité à l’ensemble, c'est-à-dire une continuité dans les photographies avec 
                    homogénéité de celles-ci. Toute liberté est laissée quant au choix du ou des sujets traités. 
                    Néanmoins, si un livre porte atteinte au respect des personnes ou aux bonnes moeurs, il pourra être 
                    retiré du concours par le Commissaire responsable de la discipline, après décision du Responsable 
                    des Compétitions. Les autorisations concernant le droit à l’image de toutes personnes représentées, 
                    devront être garanties par l’auteur aux organisateurs. 
                    <br/>
                    <br/>
                   <span class="article-numero">Article 2 </span> 
                    Sont admis les livres composés de 32 feuilles recto-verso, soit de 64 pages imprimées au maximum. 
                    Le format est laissé libre dans la limite de 30 cm en hauteur et de 42 cm en largeur. Ce qui permet 
                    des formats A4 italien 21x29,7 cm horizontal, ou 21x29,7 cm vertical avec une couverture rigide, semi 
                    rigide ou une jaquette, mais également des formats panoramiques type XXL. 
                    Tout format carré allant jusqu’au 30 par 30 cm est admis. 
                    <br/>
                    <br/>
                    <span class="article-numero">Article 3 </span>
                    Les livres pourront contenir plusieurs images en Noir et Blanc et/ou Couleur par page. Il n’y a pas de 
                    contrainte dans la présentation des images à l’intérieur du livre. 
                    Le livre devra contenir également un texte de présentation de la démarche d’ensemble de l’auteur. Ce 
                    texte entrera dans les critères d’évaluation du livre au même titre que la présentation globale, mais 
                    celui-ci ne devra pas prendre une place prépondérante. La place prépondérante sera réservée à la 
                    photographie et au traitement de la démarche par la photographie. 
                    Le nom du photographe pourra figurer sur le dos ou sur la tranche du livre, pour le jugement le nom 
                    de l’auteur sera caché avec une protection non destructrice qui portera le numéro du livre à juger. Si 
                    les textes ne sont pas du photographe, le nom de l’auteur des textes cités pourra également figurer 
                    dans les mêmes conditions. 
                </p>

               
        </article>


        <aside class="Actualites">
            <button id="btn-3">Clickez</button>
               <h2>Actualités du concours :</h2>
               <h3 class="actu">Les évenements à venir :</h3>


        

               <div class="even-1"> 
                    <h2 class="titre_1">Concours Premier Roman :
                        <p class="line">Le 30 Semptembre 2021 à 18h00</p>
                    </h2>
                      
                    
               </div>

               <div class="even-2"> 
                    <h2 class="titre_2">Concours Premier Livre d'Or :
                       <p class="line">Le 30 Novembre 2021 à 18h00</p>
                    </h2>
                  
               </div>

               <div class="even-3"> 
                    <h2 class="titre_3">Concours Meilleurs Prix :
                       <p class="line">Le 01 Février 2022 à 18h00</p>
                    </h2>
               </div>

                <div class="even-4"> 
                    <h2 class="titre_4">Concours Premier Livre d'Or :
                       <p class="line">Le 30 Novembre 2021 à 18h00</p>
                    </h2>
                  
               </div>

               <div class="even-5"> 
                    <h2 class="titre_5">Concours Meilleurs Prix :
                       <p class="line">Le 01 Février 2022 à 18h00</p>
                    </h2>
               </div>

        </aside>
    </div>


     <br/>
     <br/>
     <br/>

   <div class="image-livre-or">

      <div class="images-coupée"> 
         <img class="img-dor-1" src="Images/livre-dor-3.PNG" alt="image" width="200" height="150">
         <img class="img-dor-2" src="Images/livre-dor-4.PNG" alt="image" width="200" height="150">
      </div>

      <div class="images-coupée-1">
        <img class="img-dor-3" src="Images/livre-dor-1.PNG" alt="image" width="200" height="150">
        <img class="img-dor-4" src="Images/livre-dor-2.PNG" alt="image" width="200" height="150">
      </div>

   </div>


    

<footer>

    <div class="pied-page">
      <p><a class="contact" href="contact.html"><span class="icone-1"><i class="fas fa-file-contract"></i></span>  Nous contacter</a></p>
      <p><a class="email" href="mailto:fatah.megdoud@outlook.fr"><span class="icone"><i class="fas fa-at"></i></span>  Envoyez-moi un e-mail !</a></p>
      <p><a class="reglement-2" href="Images/montage_PC.pdf"><span class="reglement-3"><i class="far fa-file-pdf"></i></span>  Règlement du concours à Télécharger</a></p>
      <p><a class="facebook" href="https://fr-fr.facebook.com/"><span class="facebook1"><i class="fab fa-facebook-square"></i></span>  Réseau social</a></p>
      <p><a class="facebook" href="https://twitter.com/?lang=fr"><span class="Twitter1"><i class="fab fa-twitter"></i></span>  Twitter</a></p>
      <p><a class="facebook" href="https://www.instagram.com/?hl=fr"><span class="Instragram1"><i class="fab fa-instagram-square"></i></i></span>  Instragram</a></p>
    </div>


    <div class="Mon-initial">
        <h1 class="Mon-initial_1">Photos</h1>
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




