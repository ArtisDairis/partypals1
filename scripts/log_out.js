$("#log_out").click(function() 
{
    event.preventDefault();
    $.ajax(
    {
        type: "post",
        url: "php/log_out.php",
        dataType: "text",
        success: function (response) 
        {
            window.location.replace("home");
            console.log('Logout successful');
        },
        error: function(xhr, status, error) 
        {
            location.reload();
            console.error('Error logging out:', error);
        }
    });
});
