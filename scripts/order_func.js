window.onload = function()
{
    document.getElementById('myBar').style.width = 30+"%";
}

function move(width_now, width_need) 
{
    var elem = document.getElementById("myBar");
    var width = width_now;
    var id = setInterval(frame, 10);
    function frame() 
    {
        if(width < width_need)
        {
            width++;
            elem.style.width = width + "%";
            if (width >= width_need) 
            {
                clearInterval(id);
            } 
        }
        else
        {
            width--
            elem.style.width = width + "%";
            if (width <= width_need) 
            {
                clearInterval(id);
            } 
        }
    }
}

// Tēmas izvēle
let e_name, e_theme, e_date, e_time_start, e_time_end;
// Animatoru izvēle
let e_anims, anim_id;
// Personālā informācija
let u_name, u_surname, u_e_mail, u_phone_num, u_adress, u_about_e;

function goTo(elem, this_elem)
{
    let bar_width = document.getElementById('myBar').style.width;
    let width_proc = bar_width.match(/\d+/);
    
    if(this_elem == "order_event")
    {
        e_name = $('#event_name').val();
        e_theme = $('#event_theme').val();
        e_date = $('#event_date').val();
        e_time_start = $('#event_time_start').val();
        e_time_end = $('#event_time_end').val();
    }

    if(this_elem == "order_anim")
    {
        e_anims = $('#event_anim').val();
    }
    
    if(this_elem == "order_private_info")
    {
        u_name = $('#u_name').val();
        u_surname = $('#u_surname').val();
        u_e_mail = $('#u_e_mail').val();
        u_phone_num = $('#u_phone_num').val();
        u_adress = $('#u_adress').val();
        u_about_e = $('#u_about_e').val();
    }
    // Vai viss pareizi?
    if(this_elem == "order_info")
    {

    }

    if(elem == "order_event")
    {
        move(parseInt(width_proc[0]), 30);
    }
    if(elem == "order_anim")
    {
        move(parseInt(width_proc[0]), 50);
        loadActiveAnim();
    }
    if(elem == "order_private_info")
    {
        move(parseInt(width_proc[0]), 80);
    }
    if(elem == "order_info")
    {
        move(parseInt(width_proc[0]), 100);
    }

    document.getElementById(this_elem).hidden = true;
    document.getElementById(elem).hidden = false;
}

function loadActiveAnim() 
{
    $.ajax(
    {
        type: "post",
        url: "./php/orders_anim.php",
        data:
        {
            theme: e_theme
        },
        dataType: "text",
        success: function (response) 
        {
            $('#anim_list2').html('');
            $('#anim_list2').prepend(response);
        },
        error: function(xhr)
        {
            console.error(xhr);
        } 
    });
}