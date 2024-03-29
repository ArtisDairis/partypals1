
function changeContainer(ename)
{
    let container_e = document.getElementById(ename);

    const elements = ['profile', 'character', 'work_days', 'about'];

    for(let i=0; i<elements.length; i++)
    {
        if(ename === elements[i])
        {
            container_e.hidden = false;
        }
        else
        {
            document.getElementById(elements[i]).hidden = true;
        }
    }
}

function openCity(evt, cityName) 
{
    var i, tabcontent, tablinks;
  
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) 
    {
        tabcontent[i].style.display = "none";
    }
  
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) 
    {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

document.querySelectorAll('.cursor_open').forEach(cursorOpen => 
{
    cursorOpen.addEventListener('mouseover', function() 
    {
        this.parentNode.querySelector('.cursor').style.opacity = 1;
    });

    cursorOpen.addEventListener('mouseout', function() 
    {
        this.parentNode.querySelector('.cursor').style.opacity = 0;
    });
});

// lomas btn
let theme_num, character_id;

function btnSettings(elem, charId)
{
    character_id = charId;
    var divs = document.getElementsByClassName("divs");
    for (var i = 0; i < divs.length; i++) 
    {
        divs[i].classList.remove("active");
    }
    
    elem.classList.add("active");

    for (let i = 1; i <= 8; i++) 
    {
        let icon = document.getElementById(i);
        icon.classList.replace("fa-minus", "fa-none");
        icon.classList.replace("fa-plus", "fa-none");
    }

    $.ajax(
    {
        type: "post",
        url: "./php/animators/get_chars.php",
        data: 
        { 
            charId: charId 
        },
        dataType: "text",
        success: function(response) 
        {
            let themes = response.split(",");
            theme_num = response;
            for(let themes_id = 0; themes_id < themes.length; themes_id++)
            {
                let theme_number = themes[themes_id];

                for (let icon_id = 1; icon_id <= 8; icon_id++) 
                {
                    let icon = document.getElementById(icon_id);
                    
                    
                    if (icon_id == theme_number) 
                    {
                        icon.classList.replace("fa-none", "fa-minus");
                        icon.classList.replace("fa-plus", "fa-minus");
                    } 
                    else 
                    {
                        icon.classList.replace("fa-none", "fa-plus");
                    }
                }
            }

        }
    });
}

function btnRemAdd(eid) 
{
    let theme_btn = eid;

    if (theme_btn.classList.contains("fa-plus")) 
    {
        $.ajax(
        {
            type: "post",
            url: "./php/animators/change_theme.php",
            data: 
            {
                what_do: "add",
                themes: theme_num,
                this_theme: eid.id,
                char_id: character_id
            },
            dataType: "text",
            success: function (response) 
            {
                theme_num = response;
                theme_btn.classList.replace("fa-plus", "fa-minus");
            }
        });
    } 
    else 
    {
        $.ajax(
        {
            type: "post",
            url: "./php/animators/change_theme.php",
            data: 
            {
                what_do: "remove",
                themes: theme_num,
                this_theme: eid.id,
                char_id: character_id
            },
            dataType: "text",
            success: function (response) 
            {
                theme_num = response;
                theme_btn.classList.replace("fa-minus", "fa-plus");
            }
        });
    }
}

function btnInfo(elem, char_id)
{
    var divs = document.getElementsByClassName("divs");
    for (var i = 0; i < divs.length; i++)
    {
        divs[i].classList.remove("active");
        divs[i].classList.replace("fa-eye-slash", "fa-eye");
    }
    
    elem.classList.add("active");
    elem.classList.replace("fa-eye", "fa-eye-slash");

    $.ajax(
    {
        type: "post",
        url: "./php/animators/character_info.php",
        data:
        {
            char_id: char_id
        },
        dataType: "text",
        success: function (response) 
        {
            $("#char_info").html(response);
        }
    });
}

function btndAddRem(elem, day_id)
{
    let days_btn = elem;
    let days_value = document.getElementById('days_value').value;
    
    if(days_btn.classList.contains("fa-plus"))
    {
        $.ajax(
            {
                type: "post",
                url: "./php/animators/change_w_days.php",
                data:
                {
                    what_do: "add",
                    day_id: day_id,
                    days_value: days_value
                },
                dataType: "text",
                success: function (response) 
                {
                    elem.classList.replace("fa-plus", "fa-minus");
                    document.getElementById('days_value').value = response;
                    showUpdated();
                }
            });
    }
    else
    {
        $.ajax(
            {
                type: "post",
                url: "./php/animators/change_w_days.php",
                data:
                {
                    what_do: "remove",
                    day_id: day_id,
                    days_value: days_value
                },
                dataType: "text",
                success: function (response) 
                {
                    elem.classList.replace("fa-minus", "fa-plus");  
                    document.getElementById('days_value').value = response;  
                    showUpdated();    
                }
            });
    }
}

window.onload = function()
{
    showUpdated();
}

function showUpdated()
{
    $.ajax(
        {
            type: "post",
            url: "./php/animators/show_w_days.php",
            dataType: "text",
            success: function (response) 
            {
                $("#show_days").html(response);
            }
        });
}