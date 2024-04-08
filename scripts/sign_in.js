window.onload = function() 
{
    const searchParams = new URLSearchParams(window.location.search);
    const boolParam = searchParams.get('bool');

    const container = document.getElementById('container');

    if (boolParam === 'false') 
    {
        container.classList.add("active");
    } 
    else 
    {
        container.classList.remove("active");
    }
};



const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => 
{
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => 
{
    container.classList.remove("active");
});

$('#auth_btn').click(function(event) 
{
    event.preventDefault();
        
    let e_mail = $('#e_mail_auth').val();
    let pass = $('#pass_auth').val();
    
    $.ajax(
    {
        type: "post",
        url: "php/auth.php",
        data: {
            e_mail: e_mail,
            pass: pass
        },
        dataType: "text",
        success: function (response) 
        {
            window.location.replace("home");
        },
        error: function(xhr, status, error) 
        {
            console.error('Error logging out:', error);
        }
    });
});

$('#register_btn').click(function(event) 
{
    event.preventDefault();
        
    let username = $('#username_reg').val();
    let e_mail = $('#e_mail_reg').val();
    let pass = $('#pass_reg').val();
    
    $.ajax(
    {
        type: "post",
        url: "php/register.php",
        data: {
            username: username,
            e_mail: e_mail,
            pass: pass
        },
        dataType: "text",
        success: function (response) 
        {
            window.location.replace("home");
            console.log(response);
        },
        error: function(xhr, status, error) 
        {
            console.error('Error logging out:', error);
        }
    });
});

// forgot password

function openModal()
{
    document.getElementById('modal').hidden = false;
}

function closeModal()
{
    document.getElementById('modal').hidden = true;
}

function moveToNextInput(currentInput, nextInputId)    
{
    let maxLength = parseInt(currentInput.getAttribute('maxlength'));
    let currentLength = currentInput.value.length;

    if (currentLength >= maxLength) 
    {
        let nextInput = document.getElementById(nextInputId);
        if (nextInput) 
        {
            nextInput.focus();
        }
    }
}