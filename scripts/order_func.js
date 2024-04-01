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
        document.getElementById("anim").hidden = false;
        loadActiveAnim();
    }
    if(elem == "order_private_info")
    {
        move(parseInt(width_proc[0]), 80);
        document.getElementById("private_info").hidden = false;
    }
    if(elem == "order_info")
    {
        move(parseInt(width_proc[0]), 100);
        document.getElementById("all_info").hidden = false;
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

    let comparisonDate = new Date(year, month + type, text);

    const isToday =
        currentDate.getDate() === text &&
        currentDate.getFullYear() === year &&
        currentDate.getMonth() === month;

    const selected = selectedDate.getTime() === comparisonDate.getTime();

    const button = document.createElement("button");
    button.textContent = text;
    button.disabled = isDisabled;
    button.type = "button";
    button.classList.toggle("today", isToday);
    button.classList.toggle("selected", selected);
    return button;
};

displayDates();

