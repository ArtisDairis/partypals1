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
            toggleButtonState();
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
}

function refreshList()
{
    if($('#search_val').val() == "")
    {
        $.ajax(
            {
                type: "get",
                url: "./php/animators/show_animators.php",
                dataType: "text",
                success: function (response) 
                {
                    $('#anim_list_show').html(response);
                    toggleButtonState();
                },
                error: function (xhr)
                {
                    console.error(xhr);
                }
            });
    }
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
            days: days_value //1,2
        },
        dataType: "text",
        success: function (response) 
        {
            $('#anim_list_show').html(response);
            toggleButtonState();
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
    console.log(days_value);
}

let themeValue = "";

function search_theme(elem) 
{
    themeValue = elem;

    if(themeValue == "all")
    {
        $.ajax(
        {
            type: "get",
            url: "./php/animators/show_animators.php",
            dataType: "text",
            success: function (response) 
            {
                $('#anim_list_show').html(response);
                toggleButtonState();
            },
            error: function (xhr) 
            {
                console.error(xhr);
            }
        });
    }
    else
    {
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
                toggleButtonState();
            },
            error: function (xhr) 
            {
                console.error(xhr);
            }
        });
    }
    
    $('#theme_input_value').val(elem);

    if (themeValue == "all" || themeValue.trim() == "") 
    {
        $('.btn_take').prop('disabled', true);
    } 
    else 
    {
        $('.btn_take').prop('disabled', false);
    }
    
    console.log($('#theme_input_value').val());
}

function toggleButtonState() 
{
    if (themeValue == "all" || themeValue == "") 
    {
        $('.btn_take').prop('disabled', true);
    } 
    else 
    {
        $('.btn_take').prop('disabled', false);
    }
}