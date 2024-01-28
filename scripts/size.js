let width = screen.width;
let box1 = document.getElementById("parmums").style.height;

if (width<1000)
{
    box1= "120px";
}
else
{
    box1= "250px";
};

// Use querySelector to select the element with the "header" class
const header = document.querySelector('.header');
let sk = 8;
let k = 1;

function removeHeader() 
{
    // Use document.documentElement.scrollTop for cross-browser compatibility
    const scrollTop = document.body.scrollTop || document.documentElement.scrollTop;

    if (scrollTop > 100) {
        header.style.top = '-' + sk * k + 'px';
        k++;
    } else {
        header.style.top = '0';
        k = 1;
    }
};

// Attach the scroll event listener to the window
// window.onscroll = removeHeader;

// register errors
document.addEventListener("DOMContentLoaded", function() 
{
    function changeColor() 
    {
        let password1 = document.getElementById('passvord_v1');
        let password2 = document.getElementById('passvord_v2');

        if (password1.value !== password2.value) 
        {
            password2.style.backgroundColor = 'lightcoral';
        }
        else 
        {
            password2.style.backgroundColor = 'lightgreen';
        }
    };

    let password2Input = document.getElementById('passvord_v2');
    if (password2Input) 
    {
        password2Input.addEventListener('input', changeColor);
    }
});