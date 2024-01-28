let image_value = document.getElementById('image_value');
let profile_image = document.getElementById('profile_image');

function loadImage() {
    const image = document.getElementById('profile_image');
    const file = image_value.files[0];
    const fileName = file.name;
    const uploadUrl = './php/upload_img.php'; // Replace with the actual PHP script URL

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
function changeColor(buttonId) 
{
    let button = document.getElementById(buttonId);
    if (button.style.backgroundColor == "")
    {
        button.style.backgroundColor = "lightcoral";
    }
    else
    {
        button.style.backgroundColor = ""; 
    }
}
function btnChecked1() 
{
    let hiddenValue = document.getElementById('theme_value').value;
    let getArray = hiddenValue.split(",");

    for (let i = 0; i < getArray.length; i++) 
    {
        if (getArray[i] !== '') 
        {
            let buttonId = 's' + getArray[i];
            let buttonElement = document.getElementById(buttonId);

            if (buttonElement) 
            {
                buttonElement.style.backgroundColor = "lightcoral";
            }
        }
    }
}
function btnChecked2() 
{
    let hiddenValue = document.getElementById('w_days_value').value;
    let getArray = hiddenValue.split(",");

    for (let i = 0; i < getArray.length; i++) 
    {
        if (getArray[i] !== '') 
        {
            let buttonId = 'd' + getArray[i];
            let buttonElement = document.getElementById(buttonId);

            if (buttonElement) 
            {
                buttonElement.style.backgroundColor = "lightcoral";
            }
        }
    }
}
function btnOnLoad() 
{
    console.log(image.src);

    btnChecked1();
    btnChecked2();
}