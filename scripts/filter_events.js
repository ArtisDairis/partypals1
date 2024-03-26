function sortDataBy(data_name) 
{
    $.ajax(
    {
        type: "post",
        url: "./php/animators/show_events_info.php",
        data: 
        {
            column: data_name
        },
        dataType: "text",
        success: function (response) 
        {
            console.log('Success')
            $("#show_data").html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
    console.log(data_name);
};