var i = 0;
function move() 
{
    if (i == 0) 
    {
        i = 1;
        var elem = document.getElementById("myBar");
        var width = 1;
        var id = setInterval(frame, 10);
        function frame() 
        {
            if (width >= 100) 
            {
                clearInterval(id);
                i = 0;
            } 
            else 
            {
                width++;
                elem.style.width = width + "%";
            }
        }
    }
}

function goTo(elem, this_elem)
{
    document.getElementById(this_elem).hidden = true;
    document.getElementById(elem).hidden = false;
}