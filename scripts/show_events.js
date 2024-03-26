window.onload = function() 
{
    $.ajax({
        type: "get",
        url: "./php/animators/show_events_info.php",
        dataType: "text",
        success: function(response) 
        {
            $("#show_data").html(response);
        }
    });
}

function statChange(id, elem) {
    var selectedValue = elem.value;

    $.ajax({
        type: "post",
        url: "./php/change_status.php",
        data: {
            id: id,
            status: selectedValue
        },
        dataType: "text",
        success: function(response) 
        {
            
        },
        error: function(xhr, status, error) 
        {
            console.log(xhr);
        }
    });
}