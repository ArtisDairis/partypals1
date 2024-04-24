$(document).ready(function () 
{
    load_table('animators');
});

function load_table(table_name)
{
    $.ajax(
    {
        type: "post",
        url: "./php/admin/load_table.php",
        data: 
        {
            table_name: table_name
        },
        dataType: "text",
        success: function (response) 
        {
            console.log(response);
            $('#posted_table').html(response);    
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
}