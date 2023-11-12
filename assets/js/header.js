function showMenu()
{
    document.getElementById("dropdown-menu").classList.toggle("show");
}

window.onclick = function(event)
{
    if(!event.target.matches('.dropbtn'))
    {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        let i;
        for(i = 0; i < dropdowns.length; i++)
        {
            let openDropdown = dropdowns[i];
            if(openDropdown.classList.contains('show'))
            {
                openDropdown.classList.remove('show');
            }
        }
    }
    if(!event.target.matches('.dropbtn-1'))
    {
        let dropdowns_1 = document.getElementsByClassName("dropdown-content-1");
        let i;
        for(i = 0; i < dropdowns_1.length; i++)
        {
            let openDropdown_1 = dropdowns_1[i];
            if(openDropdown_1.classList.contains('show-1'))
            {
                openDropdown_1.classList.remove('show-1');
            }
        }
    }
}

function showMenu_1()
{
    document.getElementById("dropdown-menu-1").classList.toggle("show-1");
}