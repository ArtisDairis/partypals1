let reg_form = document.getElementById('anim_reg_form');
let size = 0;

reg_form.style.left = window.innerWidth + "px";
reg_form.style.height = window.innerHeight + "px";

$(document).ready(function() 
{
    setTimeout(function() 
    {
        reg_form.hidden = false;
    }, 1000);
});

function show_reg_form() 
{
    $('#anim_reg_form').animate({ left: (window.innerWidth - 350) + "px" }, "slow", function() 
    {
        size = 350;
    });
}

function close_form() 
{
    $('#anim_reg_form').animate({ left: window.innerWidth + "px" }, "slow", function() 
    {
        size = 0;
    });
}

function checksize() 
{
    let about_me_length = $('#about_me').val().length;
    $('#numbervalue').text(about_me_length);
}

function registerAnim() 
{ 
    let name = $('#name').val();
    let surname = $('#surname').val();
    let adress = $('#adress').val();
    let phone_num = $('#phone_number').val();
    let e_mail = $('#e_mail').val();
    let about_me = $('#about_me').val();

    if(checkName() & checkSurname() & checkAdress() & checkPhone_number() & checkE_mail() & checkAbout_me())
    {
        $.ajax(
        {
            type: "post",
            url: "./php/animators/register_animators.php",
            data: 
            {
                name: name,
                surname: surname,
                adress: adress,
                phone_num: phone_num,
                e_mail: e_mail,
                about_me: about_me
            },
            dataType: "text",
            success: function (response) 
            {
                window.location.href = 'home';
            },
            error: function (xhr) 
            {
                console.error(xhr);
            }
        });
    }
};

function checkName() 
{
    let name = $('#name').val();
    let regex = /[^0-9]/;

    if (regex.test(name)) 
    {
        $('#name').removeClass('is-invalid').addClass('is-valid');
        return true;
    } 
    else 
    {
        $('#name').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
}

function checkSurname()
{
    let surname = $('#surname').val();
    let regex = /[^0-9]/;

    if (regex.test(surname)) 
    {
        $('#surname').removeClass('is-invalid').addClass('is-valid');
        return true;
    } 
    else 
    {
        $('#surname').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
}

function checkAdress()
{
    let adress = $('#adress').val();
    let regex = /[a-zA-Z0-9]/;

    if (regex.test(adress)) 
    {
        $('#adress').removeClass('is-invalid').addClass('is-valid');
        return true;
    } 
    else 
    {
        $('#adress').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
}

function checkPhone_number()
{
    let phone_number = $('#phone_number').val();
    let regex = /[+0-9]/;

    if (regex.test(phone_number)) 
    {
        $('#phone_number').removeClass('is-invalid').addClass('is-valid');
        return true;
    } 
    else 
    {
        $('#phone_number').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
}

function checkE_mail()
{
    let e_mail = $('#e_mail').val();
    let regex = /[.@a-zA-Z0-9]/;

    if (regex.test(e_mail)) 
    {
        $('#e_mail').removeClass('is-invalid').addClass('is-valid');
        return true;
    } 
    else 
    {
        $('#e_mail').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
}

function checkAbout_me()
{
    let about_me = $('#about_me').val();
    let regex = /[a-zA-Z0-9]/;

    if (regex.test(about_me)) 
    {
        $('#about_me').removeClass('is-invalid').addClass('is-valid');
        return true;
    } 
    else 
    {
        $('#about_me').removeClass('is-valid').addClass('is-invalid');
        return false;
    }
}