const signInModal = document.getElementById('signInModal');
const openSignInButton = document.getElementById('openSignIn');

const registerModal = document.getElementById('registerModal');
const openRegisterModalButton = document.getElementById('openRegisterModal');

const forgotPassModal = document.getElementById('forgotPassModal');
const openForgotPassModalButton = document.getElementById('openForgotPassModal');

// Open the sign-in modal
openSignInButton.addEventListener('click', openSignInModal);
openRegisterModalButton.addEventListener('click',openRegisterModal);
openForgotPassModalButton.addEventListener('click',openForgotPassModal);
// sign in
function openSignInModal() 
{
    signInModal.style.display = 'block';
    signInModal.style.zIndex = '700';
    document.body.style.overflowY = 'auto';
}

function closeSignInModal() 
{
    signInModal.style.display = 'none';
    document.body.style.overflowY = 'auto';
}
function signIn() 
{
    if(login_username & login_password)
    {
        closeSignInModal();
    }
    else
    {
        console.log("Sign in failed. Please check your input.");
    }
}

// check each input (login)
function login_username() 
{
    let log_username = document.getElementById('username_login');
    return log_username.value !== ''; 
}
function login_password() 
{
    let log_password = document.getElementById('password_login');
    return log_password !== '';
}

// register
function openRegisterModal()  
{
    registerModal.style.display = 'block';
    registerModal.style.zIndex = '800';
    document.body.style.overflowY = 'auto';
}
function closeRegisterModal() 
{
    registerModal.style.display = 'none';
    document.body.style.overflowY = 'auto';
}
// register buttons
let userReg = document.getElementById("userReg");
let animReg = document.getElementById("animReg");
let userReg_btn = document.getElementById("userReg_btn");
let animReg_btn = document.getElementById("animReg_btn");

document.addEventListener("DOMContentLoaded", function()
    {
        userReg_btn.style.backgroundColor = 'lightgreen';
        animReg_btn.style.backgroundColor = '';
    })

function registerAnimators()
{
    userReg.hidden = true;
    animReg.hidden = false;
    animReg_btn.style.backgroundColor = 'lightgreen';
    userReg_btn.style.backgroundColor = '';
}
function registerUser()
{
    userReg.hidden = false;
    animReg.hidden = true;
    userReg_btn.style.backgroundColor = 'lightgreen';
    animReg_btn.style.backgroundColor = '';
}
// check passwords input (register)
function checkPasswords() 
{
    let pass1 = document.getElementById('passvord_v1');
    let pass2 = document.getElementById('passvord_v2');

    return pass1 === pass2;
}

// forgot password
function openForgotPassModal()  
{
    forgotPassModal.style.display = 'block';
    forgotPassModal.style.zIndex = '800';
    document.body.style.overflowY = 'auto';
}
function closeForgotPassModal() 
{
    forgotPassModal.style.display = 'none';
    document.body.style.overflowY = 'auto';
}
function forgotPass() 
{
    if(username1 & e_mail1)
    {
        closeForgotPassModal();
    }
    else
    {
        console.log("Forgot password failed. Please check your input.");
    }
}

// check each input (forgot password)
function username1() 
{
    let username1 = document.getElementById('username1');
    return username1 !== '';    
}
function e_mail1() 
{
    let e_mail1 = document.getElementById('e_mail1');
    return e_mail1 !== '';    
}
// Close the all modals when clicking outside the modal or on the close button
window.addEventListener('click', function (event) 
{
    if (event.target === signInModal) 
    {
        closeSignInModal();
    }
    if (event.target === registerModal)
    {
        closeRegisterModal();
    }
    if (event.target === forgotPassModal)
    {
        closeForgotPassModal();
    }
});
// jquery write info in database
$(document).ready(function()
{
    $('#submitBtnUser').click(function()
    {
        if (checkPasswords()) 
        {
            var formData = $('#registrationFormUser').serialize();
            $.ajax(
            {
                url: 'php/users_file/users_register.php',
                type: 'POST',
                data: formData,
                success: function(response) 
                {
                    alert(response);
                    
                    window.location.replace("http://localhost/kursa_darbs/index.php");
                },
                error: function(xhr, status, error) 
                {
                    console.error(xhr.responseText);
                    alert('An error occurred. Please try again.');
                }
            });
        }
    });
    $('#submitBtnAnim').click(function()
    {
            var formData = $('#registrationFormAnim').serialize();
            $.ajax(
            {
                url: 'php/animators/register_animators.php',
                type: 'POST',
                data: formData,
                success: function(response) 
                {
                    alert(response);
                    
                    window.location.replace("http://localhost/kursa_darbs/index.php");
                },
                error: function(xhr, status, error) 
                {
                    console.error(xhr.responseText);
                    alert('An error occurred. Please try again.');
                }
            });
    });
});