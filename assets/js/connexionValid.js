let emailInputCnx = document.forms["connexion"]["email"];
let pwdInputCnx = document.forms["connexion"]["mdp"];

let messageCnxMail = document.getElementById('message-cnx-1');
let messageCnxPwd = document.getElementById('message-cnx-2');

function validateFormCnx()
{
    if(emailInputCnx.value.length < 8 && pwdInputCnx.value.length < 8)
    {
        emailInputCnx.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageCnxMail.style.display = "block";
        emailInputCnx.focus();
        pwdInputCnx.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageCnxPwd.style.display = "block";
        pwdInputCnx.focus();
        return false;
    }

    if(emailInputCnx.value.length < 8)
    {
        emailInputCnx.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageCnxMail.style.display = "block";
        emailInputCnx.focus();
        return false;
    }
    
    if(pwdInputCnx.value.length < 8)
    {
        pwdInputCnx.style.borderBottom = "solid 1px hsl(0, 100%, 50%)";
        messageCnxPwd.style.display = "block";
        pwdInputCnx.focus();
        return false;
    }
}

emailInputCnx.addEventListener("input", verifyMailCnx);
pwdInputCnx.addEventListener("input", verifyPwdCnx);

function verifyMailCnx()
{
    if(emailInputCnx.value.length >= 8) {
        emailInputCnx.style.borderBottom = "solid 1px hsl(0, 0%, 0%)";
        messageCnxMail.style.display = "none";
        return true;
    }
}

function verifyPwdCnx()
{
    if(pwdInputCnx.value.length >= 8) {
        pwdInputCnx.style.borderBottom = "solid 1px hsl(0, 0%, 0%)";
        messageCnxPwd.style.display = "none";
        return true;
    }
}