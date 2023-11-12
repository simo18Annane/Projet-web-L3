const toggleSwitch = document.querySelector('#toggle-switch');
let link = document.createElement("link");
link.rel = "stylesheet";

function setCookie(name, value, days) 
{
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/;SameSite=None;";
}

function getCookie(name) 
{
    const value = "; " + document.cookie;
    const parts = value.split("; " + name + "=");
    if (parts.length === 2) 
    {
      return parts.pop().split(";").shift();
    }
}

function toggleDarkMode() 
{
    if (toggleSwitch.checked) 
    {
        var links = document.getElementsByTagName("link");
        for (var i = 0; i < links.length; i++) 
        {
            if (links[i].href.endsWith("light.css")) 
            {
                links[i].parentNode.removeChild(links[i]);
            }
        }
        link.href = "style/dark.css";
        document.head.appendChild(link);    
        setCookie('darkMode', 'on', 365);
    } 
    else 
    {
        var links = document.getElementsByTagName("link");
        for (var i = 0; i < links.length; i++) 
        {
            if (links[i].href.endsWith("dark.css")) 
            {
                links[i].parentNode.removeChild(links[i]);
            }
        }
        link.href = "style/light.css";
        document.head.appendChild(link); 
        setCookie('darkMode', 'off', 365);
    }
}

// Check if the user has a preference stored in a cookie
const darkModeCookie = getCookie('darkMode');
if (darkModeCookie === 'on') 
{
    toggleSwitch.checked = true;
    var links = document.getElementsByTagName("link");
    for (var i = 0; i < links.length; i++) 
    {
        if (links[i].href.endsWith("light.css")) 
        {
            links[i].parentNode.removeChild(links[i]);
        }
    }
    link.href = "style/dark.css";
    document.head.appendChild(link);    
} 
else 
{
    toggleSwitch.checked = false;
    var links = document.getElementsByTagName("link");
    for (var i = 0; i < links.length; i++) 
    {
        if (links[i].href.endsWith("dark.css")) 
        {
            links[i].parentNode.removeChild(links[i]);
        }
    }
    link.href = "style/light.css";
    document.head.appendChild(link); 
    setCookie('darkMode', 'off', 365);
}

// Add event listener to toggle switch
toggleSwitch.addEventListener('change', toggleDarkMode);