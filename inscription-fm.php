<!DOCTYPE html>
<html>
	<head>
	     <meta charset="utf-8"/>
	     <link rel="stylesheet" href="style-formulaire.css"/>
	     <title>Page de formulaire</title>
		 <script type="text/javascript"> alert ("Bienvenue sur votre page de formulaire.");</script>
    </head>

   <body>
   	     </br>
         <img class="pelier-1" src="Images/liseret.jpg" alt="bordure rideau" width="30px" height="100px">
         <h1>Formulaire à remplir :</h1>
         <img class="pelier-1" src="Images/liseret.jpg" alt="bordure rideau" width="30px" height="100px">

   	<div class="block-formulaire">

  	    <form method="post" action="cible-fm.php" enctype="multipart/form-data">
         
        <fieldset class="fieldset">
 
       	    </br>

            <legend class="legend"><h2>Vos coordonnées :</h2></legend> 
            <div class="tooltip">
            <span class="tooltiptext">Ici</span>
            
		     <p>
		    </br>
		    </br>
             Veuillez indiquer votre Sexe :
             <br/>
             <br/>

	        <input type="radio" name="Sexe" value="Sexe" id="masculin" checked />
	        <label for="masculin">Masculin</label><br />
	        <input type="radio" name="Sexe" value="Sexe" id="feminin" />
	        <label for="feminin">Féminin</label>
	        </br>
	        </br>
            
            <label for="nom">votre nom :</label>


            <input type="text" name="nom" id="nom"  maxlength="25" placeholder="ici" autofocus/>
	        
	        </br>
	        </br>
            <label for="prenom">votre prénom :</label>
	        <input type="text" name="prenom" id="prenom"  maxlength="25" placeholder="ici"/>
	        </br>
	        </br>
            <label for="prenom">votre date de naissance:</label>
	        <input type="date" name="date" id="date" size="15" maxlength="20" placeholder="ici"/>
	        </br>
	        </br>
	        <label for="email">votre e-mail :</label>
	        <input type="email" name="email" id="email" size="25" maxlength="25" placeholder="Ex: Fatah.megdoud@yahoo.fr" />
	        </br>
	        </br>
	        <label for="telephone">votre numéro de téléphone :</label>
	        <input type="tel"/>
	        </br>
	        </br>

	      
            <label for="pays">Dans quel pays habitez-vous :</label><br/>
            
	        <select name="pays" id="pays">

	       	  <optgroup label="Europe">
		           <option value="Allemagne" >Allemagne</option>
		           <option value="France"selected>France</option>
		           <option value="Italie">Italie</option>                                                 
		           <option value="Royaume-Uni">Royaume-Uni</option>
		           <option value="canada">Canada</option>
		           <option value="etats-unis">États-Unis</option>
		           <option value="chine">Chine</option>
		           <option value="japon">Japon</option>                                                     
	          </optgroup>

	          <optgroup label="Afrique">
		           <option value="france" >Algerie</option>
		           <option value="espagne"selected>Maroc</option>
		           <option value="italie">Tunisie</option>
		           <option value="royaume-uni">Egypte</option>
		           <option value="canada">Senegal</option>
		           <option value="etats-unis">États-Unis</option>
		           <option value="chine">Chine</option>
		           <option value="japon">Japon</option>
	          </optgroup>

	          <optgroup label="Asie">
		           <option value="france" >Chine</option>
		           <option value="espagne"selected>Russie</option>
		           <option value="italie">Italie</option>
		           <option value="royaume-uni">Royaume-Uni</option>
		           <option value="canada">Canada</option>
		           <option value="etats-unis">États-Unis</option>
		           <option value="chine">Chine</option>
		           <option value="japon">Japon</option>
	          </optgroup>

	          <optgroup label="Amérique">
		           <option value="france" >Espagne</option>
		           <option value="espagne"selected>France</option>
		           <option value="italie">Italie</option>
		           <option value="royaume-uni">Royaume-Uni</option>
		           <option value="canada">Canada</option>
		           <option value="etats-unis">États-Unis</option>
		           <option value="chine">Chine</option>
		           <option value="japon">Japon</option>
	           </optgroup>
	          
	           <optgroup label="Australie">
		           <option value="france" >Espagne</option>
		           <option value="espagne"selected>France</option>
		           <option value="italie">Italie</option>
		           <option value="royaume-uni">Royaume-Uni</option>
		           <option value="canada">Canada</option>
		           <option value="etats-unis">États-Unis</option>
		           <option value="chine">Chine</option>
		           <option value="japon">Japon</option>
	           </optgroup>

	        </select>
	        </div>
	</fieldset>
        </br>
        </br>

    
    <label for="Profil"><h2>Quel est votre Statut:</h2></label><br/>   
    <select name="Statut" id="Statut">
        <option value="Juré">Juré</option>
		<option value="Auteur">Auteur</option>
		<option value="Auteur">Condidat libre pour le statut Juré</option>
    </select>
   

     <p>Votre Oeuvre à envoyer en fichier XML important!</p>
     <input type="file" name="monfichier"/>
    
     <br>
     <br>
     <br>
    <fieldset class="fieldset">
          
        <legend class="legendF"><h2>Votre message :</h2></legend> 
        </br>
        </br>
         <textarea class="textarea" name="precisions" id="precisions" cols="70" rows="10"></textarea>
        </p>
        </br>
        </br>
        
    </fieldset>
        </br>
        </br>
        <input type="submit" name="envoyer">
        </br>
        </br>
       

       
    <button class="button" value="envoyer"><a href="cible-fm.php"/>Envoyer</button>
        </br>
        </br>
        </br>
        </br>

      </form>

    </div>
	

</body>
</html>
