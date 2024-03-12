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

function show_reg_form() {
    $('#anim_reg_form').animate({ left: (window.innerWidth - 350) + "px" }, "slow", function() 
    {
        size = 350;
    });
}

function close_form() {
    $('#anim_reg_form').animate({ left: window.innerWidth + "px" }, "slow", function() 
    {
        size = 0;
    });
}

$('#send_data').click(function () 
{ 
    let name = $('#name').val();
    let surname = $('#surname').val();
    let adress = $('#adress').val();
    let phone_num = $('#phone_number').val();
    let e_mail = $('#e_mail').val();
    let about_me = $('#about_me').val();

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
    
});