function search_anims()
{
    let search_value = $('#search_val').val();

    $.ajax(
    {
        type: "post",
        url: "./php/animators/show_animators.php",
        data: 
        {
            s_value: search_value
        },
        dataType: "text",
        success: function (response) 
        {
            $('#anim_list_show').html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
}

function search_days(elem)
{
    $.ajax(
    {
        type: "post",
        url: "./php/animators/show_animators.php",
        data: 
        {
            days: elem
        },
        dataType: "text",
        success: function (response) 
        {
            $('#anim_list_show').html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
}

$(document).ready(function ()
{
    $.ajax(
    {
        type: "get",
        url: "./php/animators/show_animators.php",
        dataType: "text",
        success: function (response) 
        {
            $('#anim_list_show').html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
});