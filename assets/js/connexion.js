let connexion = document.getElementById("redirection-click-connexion");
let containerConnexion = document.getElementById("container-connexion");
let titleConnexion = document.getElementById("title-connexion");
let textConnexion = document.getElementById("text-connexion");

let inscription = document.getElementById("redirection-click-inscription");
let containerInscription = document.getElementById("container-inscription");
let titleInscription = document.getElementById("title-inscription");
let textInscription = document.getElementById("text-inscription");

connexion.addEventListener("click", function()
{
    containerInscription.style.display = "none";
    titleInscription.style.display = "none";
    textInscription.style.display = "none";
    containerConnexion.style.display = "block";
    titleConnexion.style.display = "block";
    textConnexion.style.display = "block";
});

inscription.addEventListener("click", function()
{
    containerConnexion.style.display = "none";
    titleConnexion.style.display = "none";
    textConnexion.style.display = "none";
    containerInscription.style.display = "block";
    titleInscription.style.display = "block";
    textInscription.style.display = "block";
});