// Navigācijas pogas
let btn1, btn2, btn3;
btn1 = document.getElementById('btn1');
btn2 = document.getElementById('btn2');
btn3 = document.getElementById('btn3');

let bloks1, bloks2, bloks3;
bloks1 = document.getElementById('bloks1');
bloks2 = document.getElementById('bloks2');
bloks3 = document.getElementById('bloks3');
//btn1.style.backgroundColor = 'lightslategray';

function btn1Click() 
{
    bloks1.hidden = false;
    bloks2.hidden = true;
    bloks3.hidden = true;

    btn1.innerText = '1 Tēma';
    btn1.style.width = '140px';
    btn2.innerText = '2';
    btn2.style.width = '50px';
    btn3.innerText = '3';
    btn3.style.width = '50px';

    event.preventDefault();
}
function btn2Click() 
{
    bloks1.hidden = true;
    bloks2.hidden = false;
    bloks3.hidden = true;

    btn1.innerText = '1';
    btn1.style.width = '50px';
    btn2.innerText = '2 Animatori';
    btn2.style.width = '170px';
    btn3.innerText = '3';
    btn3.style.width = '50px';

    event.preventDefault();
}
function btn3Click() 
{
    bloks1.hidden = true;
    bloks2.hidden = true;
    bloks3.hidden = false;

    btn1.innerText = '1';
    btn1.style.width = '50px';
    btn2.innerText = '2';
    btn2.style.width = '50px';
    btn3.innerText = '3 Informācija';
    btn3.style.width = '190px';

    event.preventDefault();
}

// pieteikt.php default values
function onLoadFunc() 
{
    let urlParams = new URLSearchParams(window.location.search);
    let temaParam = urlParams.get('tema');

    if (temaParam) 
    {
        // Set the selected value based on the URL parameter
        document.getElementById("temaSelect").value = temaParam;
    }

    btn1.style.width = '140px';
    document.getElementById('inp_date').valueAsDate = new Date();
}

function updateURL() 
{
    let selectedValue = document.getElementById("temaSelect").value;
    let newURL = window.location.href.split('?')[0] + '?tema=' + selectedValue;
    window.location.href = newURL;
}
