let nomInputIns = document.forms["inscription"]["nom"];
let prenomInputIns = document.forms["inscription"]["prenom"];
let emailInputIns = document.forms["inscription"]["email"];
let pwdInputIns = document.forms["inscription"]["mdp"];
let pwdConfInputIns = document.forms["inscription"]["mdpConfirm"];

let messageInsNom = document.getElementById('message-cnx-3');
let messageInsPrenom = document.getElementById('message-cnx-4');
let messageInsMail = document.getElementById('message-cnx-5');
let messageInsPwd = document.getElementById('message-cnx-6');
let messageInsPwdConf = document.getElementById('message-cnx-7');

function validateFormIns()
{
    if(nomInputIns.value.length < 1 && prenomInputIns.value.length < 1  && emailInputIns.value.length < 8 && pwdInputIns.value.length < 8) 
    {
        console.error("error");
        nomInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsNom.style.display = "block";
        nomInputIns.focus();
        prenomInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsPrenom.style.display = "block";
        prenomInputIns.focus();
        emailInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsMail.style.display = "block";
        emailInputIns.focus();
        pwdInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsPwd.style.display = "block";
        pwdInputIns.focus();
        pwdConfInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsPwdConf.style.display = "block";
        pwdConfInputIns.focus();
        return false;
    }

    if(nomInputIns.value == "") 
    {
        nomInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsNom.style.display = "block";
        nomInputIns.focus();
        return false;
    }

    if(prenomInputIns.value == "") 
    {
        prenomInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsPrenom.style.display = "block";
        prenomInputIns.focus();
        return false;
    }

    if(emailInputIns.value.length < 8) 
    {
        emailInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsMail.style.display = "block";
        emailInputIns.focus();
        return false;
    }

    if(pwdInputIns.value.length < 8) 
    {
        pwdInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsPwd.style.display = "block";
        pwdInputIns.focus();
        return false;
    }
    
    if(pwdConfInputIns.value != pwdInputIns.value) 
    {
        pwdConfInputIns.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageInsPwdConf.style.display = "block";
        pwdConfInputIns.focus();
        return false;
    }
}

nomInputIns.addEventListener("input", verifyNomIns);
prenomInputIns.addEventListener("input", verifyPrenomIns);
emailInputIns.addEventListener("input", verifyMailIns);
pwdInputIns.addEventListener("input", verifyPwdIns);
pwdConfInputIns.addEventListener("input", verifyPwdConfIns);

function verifyNomIns()
{
    if(nomInputIns.value != "")
    {
        nomInputIns.style.borderBottom = "solid 1px hsl(0, 0%, 0%)";
        messageInsNom.style.display = "none";
        return true;
    }
}

function verifyPrenomIns()
{
    if(prenomInputIns.value != "")
    {
        prenomInputIns.style.borderBottom = "solid 1px hsl(0, 0%, 0%)";
        messageInsPrenom.style.display = "none";
        return true;
    }
}

function verifyMailIns()
{
    if(emailInputIns.value.length >= 8)
    {
        emailInputIns.style.borderBottom = "solid 1px hsl(0, 0%, 0%)";
        messageInsMail.style.display = "none";
        return true;
    }
}

function verifyPwdIns()
{
    if(pwdInputIns.value.length >= 8)
    {
        pwdInputIns.style.borderBottom = "solid 1px hsl(0, 0%, 0%)";
        messageInsPwd.style.display = "none";
        return true;
    }
}

function verifyPwdConfIns()
{
    if(pwdConfInputIns.value == pwdInputIns.value)
    {
        pwdConfInputIns.style.borderBottom = "solid 1px hsl(0, 0%, 0%)";
        messageInsPwdConf.style.display = "none";
        return true;
    }
}
