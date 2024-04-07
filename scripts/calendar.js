//https://partypals1.000webhostapp.com/kalendars.php
const CalendarBody = document.querySelector(".calendar tbody");
let cur_month = new Date().getMonth();
let cur_year = new Date().getFullYear();

const months = ["Janvāris","Februāris","Marts","Aprīlis","Maijs","Jūnijs","Jūlijs","Augusts","Septembris","Oktobris","Novembris","Decembris"];
let datums = document.getElementById("current_date");

function UpdateCalendar() 
{
    const firstDay = new Date(cur_year, cur_month, 1);
    const lastDay = new Date(cur_year, cur_month + 1, 0);
    const daysInMonth = lastDay.getDate();
    const startDay = firstDay.getDay();

    // Calculate the number of days to display from the previous month
    const daysInPreviousMonth = new Date(cur_year, cur_month, 0).getDate();
    const daysFromPreviousMonth = (startDay + 6) % 7;

    // Calculate the number of days to display from the next month
    const daysFromNextMonth = (7 - (daysFromPreviousMonth + daysInMonth) % 7) % 7;

    CalendarBody.innerHTML = '';
    datums.innerText = months[cur_month] + ' ' + cur_year;

    let dayCounter = 1;

    for (let i = 0; i < 6; i++) 
    {
        const row = document.createElement('tr');

        for (let d = 0; d < 7; d++) 
        {
            const cell = document.createElement('td');

            if (i === 0 && d < startDay) 
            {
                cell.textContent = daysInPreviousMonth - daysFromPreviousMonth + d;
            } 
            else if (dayCounter <= daysInMonth) 
            {
                cell.textContent = dayCounter;
                cell.classList.add("dienas");
                dayCounter++;
            } 
            else 
            {
                // Display days from the next month
                cell.textContent = dayCounter - daysInMonth;
                cell.classList.add('next-month-day');
                dayCounter++;
            }

            row.appendChild(cell);
        }
        CalendarBody.appendChild(row);

        if (dayCounter > daysInMonth + daysFromPreviousMonth) 
        {
            break;
        }
    }
}

function Previous() {
    cur_month--;
    if (cur_month < 0) {
        cur_month = 11;
        cur_year--;
    }
    UpdateCalendar();
}

function Next() {
    cur_month++;
    if (cur_month > 11) {
        cur_month = 0;
        cur_year++;
    }
    UpdateCalendar();
}

UpdateCalendar();
