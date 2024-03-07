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
    
    $.ajax({
        type: "post",
        url: "php/auth.php",
        data: {
            e_mail: e_mail,
            pass: pass
        },
        dataType: "text",
        success: function (response) 
        {
            window.location.replace("http://localhost/Bootstrap5/kursa_darbs_backup/kursa_darbs/index.php");
        },
        error: function(xhr, status, error) 
        {
            console.error('Error logging out:', error);
        }
        });
    });
