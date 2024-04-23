(function()
{
    emailjs.init(
    {
        publicKey: "_85BUx3upvIWu6DTM",
    });
})();

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

    let proceed = true;

    if (this_elem == "order_event") 
    {
        e_name = $('#event_name').val();
        e_theme = $('#event_theme').val();
        e_date = $('#event_date').val();
        e_time_start = $('#time_start_h').val() + ":" + $('#time_start_m').val();
        e_time_end = $('#time_end_h').val() + ":" + $('#time_end_m').val();

        if (!check_e_name() || !check_e_theme() || !check_e_date()) 
        {
            proceed = false;
        }
    }

    if (this_elem == "order_anim") 
    {
        e_anims = $('#event_anim').val();

        if (!e_anims) 
        {
            alert("Lūdzu izvēlaties vismaz vienu animatoru.");
            proceed = false;
        }
    }

    if (this_elem == "order_private_info") 
    {
        u_name = $('#u_name').val();
        u_surname = $('#u_surname').val();
        u_e_mail = $('#u_e_mail').val();
        u_phone_num = $('#u_phone_num').val();
        u_adress = $('#u_adress').val();
        u_about_e = $('#u_about_e').val();

        if (!check_u_name() || !check_u_surname() || !check_u_e_mail() || !check_u_phone_num() || !check_u_adress() || !check_u_about_e())
        {
            proceed = false;
        }
    }

    if (proceed) 
    {
        if (elem == "order_event") 
        {
            move(parseInt(width_proc[0]), 30);
        }
        if (elem == "order_anim") 
        {
            move(parseInt(width_proc[0]), 50);
            document.getElementById("anim").hidden = false;
            loadActiveAnim();
        }
        if (elem == "order_private_info") 
        {
            move(parseInt(width_proc[0]), 80);
            document.getElementById("private_info").hidden = false;
        }
        if (elem == "order_info") 
        {
            move(parseInt(width_proc[0]), 100);
            document.getElementById("all_info").hidden = false;
            
            const themes = ['Pilsētas svētki','Pieaugušo dzimšanas diena','Bērna dzimšanas diena','Korporatīvi','Kāzas','Pasākumi bērniem','Skolu pasākumi','Jubilejas'];

            $('#order_theme').text(themes[(e_theme-1)]);
            $('#order_e_name').text(e_name);
            $('#order_e_date').text(e_date);
            $('#order_e_time_start').text(e_time_start);
            $('#order_e_time_end').text(e_time_end);
            $.ajax(
                {
                type: "post",
                url: "./php/get_char_names.php",
                data: {
                    e_anims: e_anims
                },
                dataType: "json",
                success: function (response) 
                {
                    var animators = response.join(", ");
                    $('#order_anims').text(animators);
                },
                error: function(xhr, status, error) 
                {
                    console.error(xhr.responseText);
                }
            });
            $('#order_u_full_name').text(u_name + " " + u_surname);
            $('#order_u_phone_num').text(u_phone_num);
            $('#order_u_e_mail').text(u_e_mail);
            $('#order_adress').text(u_adress);
            $('#order_about_e').text(u_about_e);
        }

        document.getElementById(this_elem).hidden = true;
        document.getElementById(elem).hidden = false;
    }
}

function submitOrder()
{
    if(check_e_name() && check_e_theme() && check_e_date() && check_u_name() && check_u_surname() && check_u_e_mail() && check_u_phone_num() && check_u_adress() && check_u_about_e() && e_anims)
    {
        $.ajax(
        {
            type: "post",
            url: "./php/pieteikt_ievade.php",
            data: 
            {
                event_name: e_name,
                inp_date: e_date,
                event_time_start: e_time_start,
                event_time_end: e_time_end,
                selectedAnimators: e_anims.split(","),
                name: u_name,
                surname: u_surname,
                address: u_adress,
                e_mail: u_e_mail,
                about_event: u_about_e,
                phone_number: u_phone_num,
                selAnimLength: e_anims.split(",").length
            },
            dataType: "text",
            success: function (response) 
            {
                console.log(response);
                sendMail(u_name, u_surname, e_name, u_e_mail, u_adress, u_phone_num)
                .then(function() 
                {
                    window.location.replace("http://partypals.webexteam.eu/home");
                })
                .catch(function(error) 
                {
                    console.error('Error sending email:', error);
                });
            }
        });
    }
}

// Validation
function check_e_name() 
{
    let regexp = /^[a-zA-ZāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ\s]+$/;
    let event_name_input = $('#event_name');

    if (regexp.test(event_name_input.val())) 
    {
        event_name_input.addClass('is-valid');
        event_name_input.removeClass('is-invalid');
        return true;
    } 
    else 
    {
        event_name_input.removeClass('is-valid');
        event_name_input.addClass('is-invalid');
        return false;
    }
}

function check_e_theme() 
{
    let event_theme_input = $('#event_theme');

    if (event_theme_input.val() && event_theme_input.val() !== "") 
    {
        event_theme_input.addClass('is-valid');
        event_theme_input.removeClass('is-invalid');
        return true;
    } 
    else 
    {
        event_theme_input.removeClass('is-valid');
        event_theme_input.addClass('is-invalid');
        return false;
    }
}

function check_e_date()
{
    let event_date_input = $('#event_date');
    let regexp = /^[.0-9]+$/g

    if(event_date_input.val() != "" && regexp.test(event_date_input.val()))
    {
        event_date_input.addClass('is-valid');
        event_date_input.removeClass('is-invalid');
        return true;
    }
    else
    {
        event_date_input.removeClass('is-valid');
        event_date_input.addClass('is-invalid');
        return false;
    }
}

function check_u_name()
{
    let user_name_input = $('#u_name');
    let regexp = /^[a-zA-ZāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ\s]+$/;

    if(user_name_input.val() != "" && regexp.test(user_name_input.val()))
    {
        user_name_input.addClass('is-valid');
        user_name_input.removeClass('is-invalid');
        return true;
    }
    else
    {
        user_name_input.removeClass('is-valid');
        user_name_input.addClass('is-invalid');
        return true;
    }
}

function check_u_surname() 
{
    let user_surname_input = $('#u_surname');
    let regexp = /^[a-zA-ZāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ\s]+$/;

    if(user_surname_input.val() != "" && regexp.test(user_surname_input.val()))
    {
        user_surname_input.addClass('is-valid');
        user_surname_input.removeClass('is-invalid');
        return true;
    }
    else
    {
        user_surname_input.removeClass('is-valid');
        user_surname_input.addClass('is-invalid');
        return false;
    }    
}

function check_u_e_mail() 
{
    let user_e_mail_input = $('#u_e_mail');
    let regexp = /[.@]/g;

    if(user_e_mail_input.val() != "" && regexp.test(user_e_mail_input.val()))
    {
        user_e_mail_input.addClass('is-valid');
        user_e_mail_input.removeClass('is-invalid');
        return true;
    }
    else
    {
        user_e_mail_input.removeClass('is-valid');
        user_e_mail_input.addClass('is-invalid');
        return false;
    }    
}

function check_u_phone_num() 
{
    let user_phone_num_input = $('#u_phone_num');
    let regexp = /^[+0-9]+$/g;

    if(user_phone_num_input.val() != "" && regexp.test(user_phone_num_input.val()))
    {
        user_phone_num_input.addClass('is-valid');
        user_phone_num_input.removeClass('is-invalid');
        return true;
    }
    else
    {
        user_phone_num_input.removeClass('is-valid');
        user_phone_num_input.addClass('is-invalid');
        return false;
    }    
}

function check_u_adress()
{
    let user_adress_input = $('#u_adress');
    let regexp = /^[.,'"a-zA-ZāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ0-9\s]+$/;

    if(user_adress_input.val() != "" && regexp.test(user_adress_input.val()))
    {
        user_adress_input.addClass('is-valid');
        user_adress_input.removeClass('is-invalid');
        return true;
    }
    else
    {
        user_adress_input.removeClass('is-valid');
        user_adress_input.addClass('is-invalid');
        return false;
    }     
}

function check_u_about_e()
{
    let user_about_e_input = $('#u_about_e');
    let regexp = /^[.,!?'"a-zA-ZāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ0-9\s]+$/;

    if(user_about_e_input.val() != "" && regexp.test(user_about_e_input.val()))
    {
        user_about_e_input.addClass('is-valid');
        user_about_e_input.removeClass('is-invalid');
        return true;
    }
    else
    {
        user_about_e_input.removeClass('is-valid');
        user_about_e_input.addClass('is-invalid');
        return false;
    }    
}
// ----------

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

function cancelSearch() 
{
    if($('#search_anim_names').val() == "")
    {
        loadActiveAnim();
    }
}

function searchAnims() 
{
    let anim_name = $('#search_anim_names').val(); 

    if(anim_name != "" && test_anim_names())
    {
        $.ajax(
        {
            type: "post",
            url: "./php/orders_anim.php",
            data:
            {
                anim_name: anim_name,
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
}

function test_anim_names()
{
    let regexp = /^[0-9a-zA-ZāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+$/;
    let anim_name = $('#search_anim_names').val(); 
    if(regexp.test(anim_name))
        return true;
    else
        return false;
}

function addAnimsList(anim_id, elem) 
{
    if (elem.classList.contains('fa-plus')) 
    {
        $.ajax(
        {
            type: "post",
            url: "./php/add_to_order.php",
            data: 
            {
                first: true,
                anim_id: anim_id
            },
            dataType: "text",
            success: function(response) 
            {
                $('#anim_list1').prepend(response);
                elem.classList.replace('fa-plus', 'fa-minus');

                if($('#event_anim').val() == "")
                {
                    $('#event_anim').val(anim_id);
                    console.log($('#event_anim').val());
                }
                else
                {
                    $('#event_anim').val($('#event_anim').val() + ',' + anim_id);
                    console.log($('#event_anim').val());
                }
            },
            error: function(xhr) 
            {
                elem.classList.replace('fa-minus', 'fa-plus');
            }
        });
    } 
    else if (elem.classList.contains('fa-minus')) 
    {
        $('#anim_list1').find('#anim_' + anim_id).remove();
        elem.classList.replace('fa-minus', 'fa-plus');
    
        let currentValue = $('#event_anim').val();
        let values = currentValue.split(',');
        let index = values.indexOf(anim_id.toString());
        if (index !== -1) 
        {
            values.splice(index, 1);
        }
        let newValue = values.join(',');
            
        $('#event_anim').val(newValue);
        console.log($('#event_anim').val());
    }
}

$(window).on('load', function()
{
    const urlParams = new URLSearchParams(window.location.search);
    const charId = urlParams.get('char_id');

    if (charId) 
    {
        $.ajax(
        {
            type: "post",
            url: "./php/add_to_order.php",
            data: 
            {
                anim_id: charId
            },
            dataType: "text",
            success: function(response) 
            {
                $('#anim_list1').prepend(response);
            },
            error: function(xhr, status, error) 
            {
                console.error('Error:', error);
            }
        });
    }
})

function goToFromLink(elem) 
{
    const divArray = ['order_event','order_anim','order_private_info','order_info'];

    for(let i = 0; i < 4; i++)
    {
        if(elem == divArray[i])
            document.getElementById(divArray[i]).hidden = false;
        else
            document.getElementById(divArray[i]).hidden = true;
    }
}

function removeFromList(anim_id) 
{
    $('#anim_list1').find('#anim_' + anim_id).remove();
    document.getElementById('addbtn' + anim_id).classList.replace('fa-minus', 'fa-plus');
    let currentValue = $('#event_anim').val();
    let values = currentValue.split(',');
    let index = values.indexOf(anim_id.toString());
    if (index !== -1) 
    {
        values.splice(index, 1);
    }
    let newValue = values.join(',');
            
    $('#event_anim').val(newValue);
    console.log($('#event_anim').val());
}

function showInfoAnim(anim_id)
{
    let info_form = document.getElementById('char_info');
    if(info_form.hidden == true)
    {
        info_form.hidden = false;
    }

    $.ajax(
    {
        type: "post",
        url: "./php/show_anim_info_o.php",
        data: 
        {
            anim_id: anim_id
        },
        dataType: "text",
        success: function (response) 
        {
            $('#char_info').html(response);    
        }
    });
}

function close_about()
{
    document.getElementById('char_info').hidden = true;
}

function sendMail(name, surname, event_name, e_mail, address, phone_number) 
{
    let parms = 
    {
        name: name,
        surname: surname,
        event_name: event_name,
        e_mail: e_mail,
        subject: "Pasūtījums \"" + event_name + "\" ir saņemts",
        date: new Date(),
        address: address,
        phone_number: phone_number
    };

    return emailjs.send("service_ner374x", "template_qq2jz8w", parms);
}

// date picker
const datepicker = document.querySelector(".datepicker");
const dateInput = document.querySelector(".date-input");
const yearInput = datepicker.querySelector(".year-input");
const monthInput = datepicker.querySelector(".month-input");
const cancelBtn = datepicker.querySelector(".cancel");
const applyBtn = datepicker.querySelector(".apply");
const nextBtn = datepicker.querySelector(".next");
const prevBtn = datepicker.querySelector(".prev");
const dates = datepicker.querySelector(".dates");

let selectedDate = new Date();
selectedDate.setDate(selectedDate.getDate() + 1);
let year = selectedDate.getFullYear();
let month = selectedDate.getMonth();

dateInput.addEventListener("click", () => 
{
    datepicker.hidden = false;
});

cancelBtn.addEventListener("click", () => 
{
    datepicker.hidden = true;
});

applyBtn.addEventListener("click", () => 
{
    dateInput.value = selectedDate.toLocaleDateString("lv-LV", 
    {
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
    });

    datepicker.hidden = true;
});

nextBtn.addEventListener("click", () => 
{
    if (month === 11) year++;
    month = (month + 1) % 12;
    displayDates();
});

prevBtn.addEventListener("click", () => 
{
    if (month === 0) year--;
    month = (month - 1 + 12) % 12;
    displayDates();
});

monthInput.addEventListener("change", () => 
{
    month = monthInput.selectedIndex;
    displayDates();
});

yearInput.addEventListener("change", () => 
{
    year = yearInput.value;
    displayDates();
});

const updateYearMonth = () => 
{
    monthInput.selectedIndex = month;
    yearInput.value = year;
};

const handleDateClick = (e) => 
{
    const button = e.target;

    const selected = dates.querySelector(".selected");
    selected && selected.classList.remove("selected");

    button.classList.add("selected");

    selectedDate = new Date(year, month, parseInt(button.textContent));
};

const displayDates = () => 
{
    updateYearMonth();

    dates.innerHTML = "";

    const lastOfPrevMonth = new Date(year, month, 0);

    for (let i = 0; i <= lastOfPrevMonth.getDay(); i++) 
    {
        const text = lastOfPrevMonth.getDate() - lastOfPrevMonth.getDay() + i;
        const button = createButton(text, true, -1);
        dates.appendChild(button);
    }

    const lastOfMOnth = new Date(year, month + 1, 0);

    for (let i = 1; i <= lastOfMOnth.getDate(); i++) 
    {
        const button = createButton(i, false);
        button.addEventListener("click", handleDateClick);
        dates.appendChild(button);
    }

    const firstOfNextMonth = new Date(year, month + 1, 1);

    for (let i = firstOfNextMonth.getDay(); i < 7; i++) 
    {
        const text = firstOfNextMonth.getDate() - firstOfNextMonth.getDay() + i;

        const button = createButton(text, true, 1);
        dates.appendChild(button);
    }
};

const createButton = (text, isDisabled = false, type = 0) => 
{
    const currentDate = new Date();
    const comparisonDate = new Date(year, month + type, text);

    const isToday =
        currentDate.getDate() === text &&
        currentDate.getFullYear() === year &&
        currentDate.getMonth() === month;

    const selected = selectedDate.getTime() === comparisonDate.getTime();
    const isPastDate = comparisonDate < currentDate;

    const button = document.createElement("button");
    button.textContent = text;
    button.disabled = isDisabled || isPastDate;
    button.type = "button";
    button.classList.toggle("today", isToday);
    button.classList.toggle("selected", selected);
    return button;
};


displayDates();

