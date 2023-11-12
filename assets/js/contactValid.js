let nomInput = document.forms["contact-form"]["name"];
let emailInput = document.forms["contact-form"]["email"];
let subjectInput = document.forms["contact-form"]["subject"];
let messageInput = document.forms["contact-form"]["message"];

let messageNom = document.getElementById("message-nom");
let messageEmail = document.getElementById("message-email");
let messageSubject = document.getElementById("message-subject");
let messageMsg = document.getElementById("message-msg");

function validateFormContact()
{

    if(nomInput.value.length < 1 && emailInput.value.length < 8 && subjectInput.value.length < 1 && messageInput.value.length < 1)
    {
        nomInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageNom.style.display = "block";
        nomInput.focus();
        emailInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageEmail.style.display = "block";
        emailInput.focus();
        subjectInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageSubject.style.display = "block";
        subjectInput.focus();
        messageInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageMsg.style.display = "block";
        messageInput.focus();
        return false;
    }

    if(nomInput.value.length < 1)
    {
        nomInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageNom.style.display = "block";
        nomInput.focus();
        return false;
    }

    if(emailInput.value.length < 8)
    {
        emailInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageEmail.style.display = "block";
        emailInput.focus();
        return false;
    }

    if(subjectInput.value.length < 1)
    {
        subjectInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageSubject.style.display = "block";
        subjectInput.focus();
        return false;
    }

    if(messageInput.value.length < 1)
    {
        messageInput.style.border = "solid 2px hsl(0, 100%, 50%)";
        messageMsg.style.display = "block";
        messageInput.focus();
        return false;
    }

}

nomInput.addEventListener("input", verifyNom);
emailInput.addEventListener("input", verifyEmail);
subjectInput.addEventListener("input", verifySubject);
messageInput.addEventListener("input", verifyMsg);

function verifyNom() 
{
    if(nomInput.value.length > 0)
    {
        if (darkModeCookie === 'on') 
        {
            nomInput.style.border = "solid 2px hsl(0, 0%, 100%)";
            messageNom.style.display = "none";
            return true;
        }
        else 
        {
            nomInput.style.border = "solid 2px hsl(0, 0%, 0%)";
            messageNom.style.display = "none";
            return true;
        }
    }
}

function verifyEmail() 
{
    if(emailInput.value.length > 8)
    {
        if (darkModeCookie === 'on') 
        {
            emailInput.style.border = "solid 2px hsl(0, 0%, 100%)";
            messageEmail.style.display = "none";
            return true;
        }
        else 
        {
            emailInput.style.border = "solid 2px hsl(0, 0%, 0%)";
            messageEmail.style.display = "none";
            return true;
        }
    }
}

function verifySubject() 
{
    if(subjectInput.value.length > 0)
    {
        if (darkModeCookie === 'on') 
        {
            subjectInput.style.border = "solid 2px hsl(0, 0%, 100%)";
            messageSubject.style.display = "none";
            return true;
        }
        else 
        {
            subjectInput.style.border = "solid 2px hsl(0, 0%, 0%)";
            messageSubject.style.display = "none";
            return true;
        }
    }
}

function verifyMsg() 
{
    if(messageInput.value.length > 0)
    {
        if (darkModeCookie === 'on') 
        {
            messageInput.style.border = "solid 2px hsl(0, 0%, 100%)";
            messageMsg.style.display = "none";
            return true;
        }
        else 
        {
            messageInput.style.border = "solid 2px hsl(0, 0%, 0%)";
            messageMsg.style.display = "none";
            return true;
        }
    }
}