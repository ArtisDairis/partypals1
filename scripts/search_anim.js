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

let days_value = "";
let days_array;

function search_days(elem) 
{
    if (days_value.length >= 2) 
    {
        days_array = days_value.split(',');
        if (days_array.includes(elem)) 
        {
            days_array = days_array.filter(item => item !== elem);
        } 
        else 
        {
            days_array.push(elem);
        }
        days_value = days_array.join(',');
    } 
    else 
    {
        if (days_value == "") 
        {
            days_value = elem;
        } 
        else if(days_value == elem)
        {
            days_value = "";
        }
        else
        {
            days_value += ',' + elem;
        }
    }
    $.ajax(
    {
        type: "post",
        url: "./php/animators/show_animators.php",
        data: 
        {
            days: days_value
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
    console.log(days_value);
}

let theme_value = "";
let theme_array;

function search_theme(elem) 
{
    if (theme_value.length >= 2) 
    {
        theme_array = theme_value.split(',');
        if (theme_array.includes(elem)) 
        {
            theme_array = theme_array.filter(item => item !== elem);
        } 
        else 
        {
            theme_array.push(elem);
        }
        theme_value = theme_array.join(',');
    } 
    else 
    {
        if (theme_value == "") 
        {
            theme_value = elem;
        } 
        else if(theme_value == elem)
        {
            theme_value = "";
        }
        else
        {
            theme_value += ',' + elem;
        }
    }
    $.ajax(
    {
        type: "post",
        url: "./php/animators/show_animators.php",
        data: 
        {
            theme_id: theme_value
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
    console.log(theme_value);
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