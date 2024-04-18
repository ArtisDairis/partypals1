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

function search_days(elem) //2
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
            days: days_value //1,2
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

let themeValue = "";
let themeArray;

function search_theme(elem) 
{
    if (themeValue.length >= 2) 
    {
        themeArray = themeValue.split(',');
        if (themeArray.includes(elem)) 
        {
            themeArray = themeArray.filter(item => item !== elem);
        } 
        else 
        {
            themeArray.push(elem);
        }
        themeValue = themeArray.join(',');
    } 
    else 
    {
        if (themeValue === "") 
        {
            themeValue = elem;
        } 
        else if (themeValue == elem) 
        {
            themeValue = "";
        } 
        else 
        {
            themeValue += ',' + elem;
        }
    }
    $.ajax(
    {
        type: "post",
        url: "./php/animators/show_animators.php",
        data: 
        {
            theme_id: themeValue
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
    console.log(themeValue);
}