$(document).ready(function () 
{
    load_table('animators');
    //create_backup()
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
            $('#posted_table').html(response);    
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });
}

function create_backup() 
{
    $.ajax(
    {
        type: "GET",
        url: "./php/admin/create_backup.php",
        dataType: "text",
        success: function(response) 
        {
            const file_name = 'partypals_backup_' + new Date().toISOString() + '.sql';

            const blob = new Blob([response], { type: 'text/plain' });

            const url = URL.createObjectURL(blob);

            const link = document.createElement('a');
            link.href = url;
            link.download = file_name;

            document.body.appendChild(link);
            link.click();

            URL.revokeObjectURL(url);
        },
        error: function(xhr) 
        {
            console.error(xhr);
        }
    });
}

function upload_database() 
{
    var formData = new FormData();
    formData.append('sql_file', $('#upload_bck')[0].files[0]);

    $.ajax(
    {
        type: "POST",
        url: "./php/admin/update_from_bck.php", 
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) 
        {
            console.log(response);
            window.location.href = 'http://localhost/Bootstrap5/kursa_darbs/tables';
        },
        error: function(xhr) 
        {
            console.error(xhr);
        }
    });
}

function updateData(value, column_name, table_name, id) 
{
    $.ajax(
    {
        type: "post",
        url: "./php/admin/update_data.php",
        data: 
        {
            value: value,
            column_name: column_name,
            table_name: table_name,
            id: id
        },
        dataType: "text",
        success: function (response) 
        {
            if(table_name == "animators_reg" & column_name == "recruit")
            {
                
            }
            console.log(response);    
        }
    });
}