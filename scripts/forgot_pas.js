(function()
{
    emailjs.init(
    {
        publicKey: "EOzJ7zTKUk_je9AQj",
    });
})();

var animatori;   
var users;      
var animatori_id;
var users_id;    
var resultCode;

$(document).ready(function()
{
    $('#send_code').click(function()
    {
        var username = $('#username1').val();
        var e_mail = $('#e_mail1').val();
        if(username !== '' & e_mail !== '')
        $.ajax({
            url: 'php/forgot_password/forgot_pas.php',
            type: 'POST',
            data: 
            {
                username1: username, 
                e_mail1: e_mail
            },
            dataType: 'json',
            success: function(response) 
            {
                console.log(response);
                document.getElementById('fp_user_info').hidden = true;
                document.getElementById('fp_pas_code').hidden = false;

                animatori = response.animatori;
                users = response.users;
                animatori_id = response.animatori_id;
                users_id = response.users_id;

                let forgetPasCode1 = parseFloat(Math.floor(Math.random() * 10));
                let forgetPasCode2 = parseFloat(Math.floor(Math.random() * 10));
                let forgetPasCode3 = parseFloat(Math.floor(Math.random() * 10));
                let forgetPasCode4 = parseFloat(Math.floor(Math.random() * 10));
                resultCode= forgetPasCode1+""+forgetPasCode2+""+forgetPasCode3+""+forgetPasCode4;
                console.log(resultCode);

                if(animatori)
                    sendMail(username, e_mail, resultCode);
                if(users)
                    sendMail(username, e_mail, resultCode);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred. Please try again.');
            }
        });
    });
});

$(document).ready(function()
{
    $('#accept_code').click(function()
    {
        let n1 = document.getElementById("n1").value;
        let n2 = document.getElementById("n2").value;
        let n3 = document.getElementById("n3").value;
        let n4 = document.getElementById("n4").value;
        let resultN = n1+""+n2+""+n3+""+n4;

        if(resultN === resultCode)
        {
            document.getElementById('fp_pas_code').hidden = true;
            document.getElementById('fp_new_pass').hidden = false;
        }
    })
})

$(document).ready(function() 
{
    $('#accept_pass').click(function() 
    {
        var newPass1 = $('#newPass1').val();
        var newPass2 = $('#newPass2').val();

        if (newPass1 === newPass2) 
        {
            console.log('usersFindId: '+ users_id);
            console.log('animFindId: '+ animatori_id);
            console.log('isAnim: '+ animatori);
            console.log('isUser: '+ users);
            console.log('writedPas: '+ newPass1);

            $.ajax(
            {
                url: 'php/forgot_password/pas_change.php',
                type: 'POST',
                data: 
                {
                    usersFindId: users_id,
                    animFindId: animatori_id,
                    isAnim: animatori,
                    isUser: users,
                    writedPas: newPass1
                },
                dataType: 'text',
                success: function(response) 
                {
                    console.log(response);
                    window.location.replace("http://localhost/kursa_darbs/index.php");
                },
                error: function(xhr, status, error) 
                {
                    console.error(xhr.responseText);
                    alert('An error occurred. Please try again.');
                }
            });
        } 
        else 
        {
            alert('Passwords do not match.');
        }
    });
});



function chageHidden()
{
    document.getElementById('fp_user_info').hidden = false;
    document.getElementById('fp_pas_code').hidden = true;
    document.getElementById('fp_new_pass').hidden = true;
}
function sendMail(user,mail,code)
{
    let parms = 
    {
        username : user,
        e_mail : mail,
        subject : "Paroles maiņa",
        message : code
    }

    emailjs.send("service_8col8pl","template_qxarzuq",parms).then(
    {

    })
}