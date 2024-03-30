function sortDataBy(data_name, btn_id) 
{
    let up_down_btn = document.getElementById(btn_id);
    let order_a_d;

    if(up_down_btn.classList.contains("fa-caret-down"))
    {
        order_a_d = "ASC";
        up_down_btn.classList.replace("fa-caret-down", "fa-caret-up");
    }
    else
    {
        order_a_d = "DESC";
        up_down_btn.classList.replace("fa-caret-up", "fa-caret-down");
    }

    $.ajax(
    {
        type: "post",
        url: "./php/show_events.php",
        data: 
        {
            column: data_name,
            asc_desc: order_a_d
        },
        dataType: "text",
        success: function (response) 
        {
            $("#show_data1").html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
}

function searchName() 
{
    $.ajax(
    {
        type: "post",
        url: "./php/show_events.php",
        data:
        {
            event_name: $("#name_value").val()
        },
        dataType: "text",
        success: function (response) 
        {
            $("#show_data1").html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
}

function searchDate() 
{
    $.ajax(
    {
        type: "post",
        url: "./php/show_events.php",
        data:
        {
            event_date: $("#date_value").val()
        },
        dataType: "text",
        success: function (response) 
        {
            $("#show_data1").html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });

    console.log($("#date_value").val());
}

function filter_status() 
{
    $.ajax(
    {
        type: "post",
        url: "./php/show_events.php",
        data:
        {
            event_status: $("#filter_status").val()
        },
        dataType: "text",
        success: function (response) 
        {
            $("#show_data1").html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });

    console.log($("#filter_status").val());
}