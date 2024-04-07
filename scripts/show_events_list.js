window.onload = function() 
{
    $.ajax({
        type: "get",
        url: "./php/show_events.php",
        dataType: "text",
        success: function(response) 
        {
            $("#show_data1").html(response);
        }
    });
}
function reloadData() 
{
    $.ajax({
        type: "get",
        url: "./php/show_events.php",
        dataType: "text",
        success: function(response) 
        {
            $("#show_data1").html(response);
        }
    });    
}