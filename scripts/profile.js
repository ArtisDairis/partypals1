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
    let regexp1 = /\d+/g;
    let button_id = regexp1.exec(eid)[0];

    let hiddenValueArray = hiddenValue1.split(',');

    if (hiddenValueArray.includes(button_id)) 
    {
        hiddenValueArray = hiddenValueArray.filter(item => item !== button_id);
    } 
    else 
    {
        hiddenValueArray.push(button_id); // Add the new button ID
    }

    if(hiddenValue1 === "")
    {
        hiddenValue1 = button_id;
    }
    else
    {
        hiddenValue1 = hiddenValueArray.join(',');
    }
    
    document.getElementById('theme_value').value = hiddenValue1;
    console.log(document.getElementById('theme_value').value);
}

function btnChecked2(eid) 
{
    let regexp1 = /\d+/g;
    let button_id = regexp1.exec(eid)[0];

    let hiddenValueArray = hiddenValue2.split(',');

    if (hiddenValueArray.includes(button_id)) 
    {
        hiddenValueArray = hiddenValueArray.filter(item => item !== button_id);
    } 
    else 
    {
        hiddenValueArray.push(button_id); // Add the new button ID
    }

    if(hiddenValue2 === "")
    {
        hiddenValue2 = button_id;
    }
    else
    {
        hiddenValue2 = hiddenValueArray.join(',');
    }
    
    document.getElementById('w_days_value').value = hiddenValue2;
    console.log(document.getElementById('w_days_value').value);
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