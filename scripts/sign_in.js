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
function register() 
{
    if (checkUsername() & checkName() & checkSurname() & checkGender() & checkAge() & checkPasswords() & checkPhone() & checkEmail()) 
    {
        closeRegisterModal();
    } 
    else 
    {
        console.log("Registration failed. Please check your input.");
    }
}
// register buttons
let userReg = document.getElementById("userReg");
let animReg = document.getElementById("animReg");

function registerAnimators()
{
    userReg.hidden = true;
    animReg.hidden = false;
}
function registerUser()
{
    userReg.hidden = false;
    animReg.hidden = true;
}
// check each input (register)
function checkUsername() 
{
    let username = document.getElementById("username_reg");
    return username.value > 4;   
}

function checkName() 
{
    let name = document.getElementById('name').value;
    return /^[A-Za-z]/.test(name); 
}

function checkSurname() 
{
    let surname = document.getElementById('surname').value;
    return /^[A-Za-z]/.test(surname);
}

function checkGender() 
{
    let male = document.getElementById('male').value;
    let female = document.getElementById('female').value;
    return male !== ''|female !=='';
}

function checkAge() 
{
    let age = document.getElementById('age');
    return age >= 18;
}

function checkPasswords() 
{
    let pass1 = document.getElementById('passvord_v1');
    let pass2 = document.getElementById('passvord_v2');

    return pass1 === pass2;
}

function checkPhone() 
{
    let phone = document.getElementById('phone');
    return length(phone.value)>5;
}

function checkEmail() 
{
    let e_mail = document.getElementById('e_pasts');
    return e_mail.value !== '';
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