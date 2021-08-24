



 //click event btn-5

const ModePassSecure = document.querySelector(".passe");
console.log(ModePassSecure);
const ModePass = document.querySelector(".groupe");
console.log(ModePass);
const btn5 = document.getElementById("btn-5");
console.log(btn5);
const affichage = document.querySelector('h5');
console.log(affichage);
const affichages = document.querySelector('h6');
console.log(affichages);
const affichagees = document.querySelector('h4');
console.log(affichagees);

btn5.addEventListener('click', () => {

var passWord = document.getElementById("pass").value;

if (passWord === "Fatah") {
affichages.classList.add("message");

} 


else if (passWord === "Megdoud.22@1981" && passWord != 10 || passWord === "Fatah.22@1981"  )

{
 affichagees.classList.add("message-1");
    } 
    else {
    affichage.classList.add("reponse");
    } 
     
    });
    



/* KeyPress event */ 


const KeypressContainer = document.querySelector(".keypress");
const key = document.getElementById("key");



document.addEventListener("keypress", (e) => {

key.textContent = e.key;

if (e.key === "f") {
    KeypressContainer.style.background ="yellow"
} else if (e.key === "r") {
    KeypressContainer.style.background ="blue"
}

});





















