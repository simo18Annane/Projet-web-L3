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

/* form.addEventListener("submit", function(event)
{
    event.preventDefault();

    let inputs = document.querySelectorAll("input");
    let isValid = true;

    let alertMessage = document.getElementById("alert-message");
    let counter = 0;

    inputs.forEach((input) => 
    {
        if(input.value === "")
        {
            isValid = false;
            input.classList.add("invalid");
            counter += 1;
            //alertMessage.innerHTML = "Formulaire incomplet!";
        } else
        {
            input.classList.remove("invalid");
            counter -= 1;
        }
    });

    if(counter == 0)
    {
        alertMessage.innerHTML = "";
    }
    else
    {
        alertMessage.innerHTML = "Formulaire incomplet!";
    }

    if(isValid)
    {
        event.target.submit();
    }
}); */

/* let form = document.getElementById("inscription");

form.addEventListener("submit", function(event)
{
    event.preventDefault();

    let nomInput = document.getElementById("nom-input");
    let prenomInput = document.getElementById("prenom-input");
    let emailInput = document.getElementById("email-input");
    let pwd1Input = document.getElementById("pwd-input-1");
    let pwd2Input = document.getElementById("pwd-input-2");

    let alertMessage = document.getElementById("alert-message");
    let message = "";

    message += "* Les informations ( ";

    if(nomInput.value === "")
    {
        nomInput.style.backgroundColor = "hsl(243, 86%, 86%)";
        message += "Nom, ";
        return;
    }

    if(prenomInput.value === "")
    {
        prenomInput.style.backgroundColor = "hsl(243, 86%, 86%)";
        message += "Pr&eacute;om, ";
        return;
    }

    if(emailInput.value === "")
    {
        emailInput.style.backgroundColor = "hsl(243, 86%, 86%)";
        message += "Adresse &eacute;l&eacute;ctrique, ";
        return;
    }

    if(pwd1Input.value === "")
    {
        pwd1Input.style.backgroundColor = "hsl(243, 86%, 86%)";
        message += "Mot de passe, ";
        return;
    }

    if(pwd2Input.value === "")
    {
        pwd2Input.style.backgroundColor = "hsl(243, 86%, 86%)";
        message += "Confirmation de mot de passe ";
        return;
    }

    message += ") manquent &agrave; votre inscription!";
    alertMessage.innerHTML += message;
    alertMessage.display = "block";

    form.submit();
}); */

/* const form = document.getElementById("inscription");
const pwdInput = document.getElementById("pwd-input-1");
const pwdConfirmInput = document.getElementById("pwd-input-2");
const alertMessage = document.getElementById("alert-message");

form.addEventListener("submit", (event) => 
{
    event.preventDefault();

    const nomInput = document.getElementById("nom-input");
    const prenomInput = document.getElementById("prenom-input");
    const emailInput = document.getElementById("email-input");

    if(nomInput.value === "")
    {
        alertMessage.style.display = "block";
        return;
    }

    if(prenomInput.value === "")
    {
        alertMessage.style.display = "block";
        return;
    }

    if(!isValidEmail(emailInput.value))
    {
        alertMessage.style.display = "block";
        return;
    }

    if(pwdInput.value.length < 8)
    {
        alertMessage.style.display = "block";
        return;
    }

    if(pwdInput.value !== pwdConfirmInput.value)
    {
        alertMessage.style.display = "block";
        return;
    }

    form.submit();
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
} */