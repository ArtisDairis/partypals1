function loadImage() {
    const image = document.getElementById('profile_image');
    const file = image_value.files[0];
    const fileName = file.name;
    const uploadUrl = './php/upload_img.php';
    let photo_Value = document.getElementById('photoValue');

    const imageDirectory = "kursa_darbs/css/img/user_img";
    const randomParam = Math.random(); // Random parameter

    if (file) {
        const formData = new FormData();
        formData.append('photo', file);

        fetch(uploadUrl, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Log the server response
            const photoValue = `${imageDirectory}/${fileName}?${randomParam}`;
            image.src = `../${photoValue}`;
            console.log(image.src);

            photo_Value.value = fileName;
            console.log(photo_Value.value);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}





// show password
function passwordChecked() 
{
    let showPassword = document.getElementById('show_password');
    let passwordInput = document.getElementById('password');

    if(showPassword.checked)
    {
        passwordInput.type = 'text';
    }
    else
    {
        passwordInput.type = 'password';
    }
}
// Buttons (days)
let button;

let hiddenValue1;
let getArray1;
let hiddenValue2;
let getArray2;

function changeColor(buttonId) 
{
    button = document.getElementById(buttonId);
    if (button.style.backgroundColor == "")
    {
        button.style.backgroundColor = "lightcoral";
    }
    else
    {
        button.style.backgroundColor = ""; 
    }
}

function btnChecked1(eid) 
{
    let regexp1 = /[0-9]/g;
    let button_id = regexp1.exec(eid);
    hiddenValue1 = document.getElementById('theme_value').value;

    if (hiddenValue1 === "") 
    {
        hiddenValue1 = button_id;
    } 
    else 
    {
        if (hiddenValue1.includes(button_id)) 
        {
            hiddenValue1 = hiddenValue1.split(',').filter(item => item !== button_id).join(',');
        } 
        else 
        {
            hiddenValue1 = hiddenValue1 + ',' + button_id;
        }
    }

    console.log(hiddenValue1);
}

function btnChecked2() 
{
    let regexp1 = /[0-9]/g;
    let button_id = regexp1.exec(button.id);
    hiddenValue2 = document.getElementById('w_days_value').value;

    let buttonDigit = button_id ? button_id[0] : '';

    if (hiddenValue2 === "") 
    {
        hiddenValue2 = buttonDigit;
    } 
    else 
    {
        if (hiddenValue2.includes(buttonDigit)) 
        {
            hiddenValue2 = hiddenValue2.split(',').filter(item => item !== buttonDigit).join(',');
        } 
        else 
        {
            hiddenValue2 += ',' + buttonDigit;
        }
    }

    console.log(hiddenValue2);
}
function btnOnLoad() 
{
    hiddenValue1 = document.getElementById('theme_value').value;
    getArray1 = hiddenValue1.split(",");
    hiddenValue2 = document.getElementById('w_days_value').value;
    getArray2 = hiddenValue2.split(",");

    for (let i = 0; i < getArray1.length; i++) 
    {
        if (getArray1[i] !== '') 
        {
            let buttonId = 's' + getArray1[i];
            let buttonElement = document.getElementById(buttonId);

            if (buttonElement) 
            {
                buttonElement.style.backgroundColor = "lightcoral";
                
            }
        }
    }
    
    for (let i = 0; i < getArray2.length; i++) 
    {
        if (getArray2[i] !== '') 
        {
            let buttonId = 'd' + getArray2[i];
            let buttonElement = document.getElementById(buttonId);

            if (buttonElement) 
            {
                buttonElement.style.backgroundColor = "lightcoral";
            }
        }
    }
}