
/*MOUSE EVENTS */

const mousemove = document.querySelector(".mousemove");
console.log(mousemove);
window.addEventListener("mousemove", (e) => {

    mousemove.style.left = e.pageX + "px";
    mousemove.style.top = e.pageY + "px";

});


window.addEventListener("mousedown", () => {
mousemove.style.transform ="scale(2) translate(-25%, -25%)";
});


window.addEventListener("mouseup", () => {
mousemove.style.transform ="scale(1) translate(-50%, -50%)";
mousemove.style.border = "2px solid teal";
});






/* mise en page de titre h1 en java-script */


//click event btn-1

const questionContainer = document.querySelector(".click-event");
console.log(questionContainer);
const btn1 = document.querySelector("#btn-1");
const response = document.querySelector('h4','h5');


questionContainer.addEventListener("click", () => {
questionContainer.classList.toggle("question-clicked")
});


btn1.addEventListener('click', () => {
response.classList.add("show-response");
    
});







//click event btn-2

const concoursPresentation = document.querySelector(".presentation");
console.log(concoursPresentation);


const btn2 = document.querySelector("#btn-2");
console.log(btn2);

const affichage = document.querySelector("h3");
console.log(affichage);

const paragraphe = document.getElementById("article_fm");
console.log(paragraphe);

btn2.addEventListener('click', () => {
affichage.classList.add("resultat");
paragraphe.classList.add("resultat-2");

    
});





//click event btn-3

const concoursActualites = document.querySelector(".Actualites");
console.log(concoursActualites);

const btn3 = document.querySelector("#btn-3");
console.log(btn3);

const concoursResultat = document.querySelector(".actu");
console.log(concoursResultat);

const evenement = document.querySelector(".even");
console.log(evenement);

const evenement1 = document.querySelector(".titre_1");
console.log(evenement1);

const evenement2 = document.querySelector(".titre_2");
console.log(evenement2);

const evenement3 = document.querySelector(".titre_3");
console.log(evenement3);


btn3.addEventListener('click', () => {
concoursResultat.classList.add("resultat-1");
evenement1.classList.add("resultat-3");
evenement1.classList.add("resultat-3");
evenement1.classList.add("resultat-3");

    
});





/* page auteur.html */

const passWordSecure = document.querySelector(".passe");
console.log(passWordSecure);


 
    
    

   

   