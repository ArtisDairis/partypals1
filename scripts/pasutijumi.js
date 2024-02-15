// Send value to modal info
$('.pasutModal').click(function(e) 
{
    e.preventDefault();
    let m = $(this).attr('id');
    //console.log(m);

    $.ajax({
        type: "post",
        url: "php/pasutijumi_modal_info.php",
        data: {
            selID: m,
        },
        dataType: "text",
        success: function(response) 
        {
            $('.modal-content3').html(response);
        },
        error: function(xhr, status, error) 
        {
            console.error(xhr.responseText);
        }
    });
});
// Access and denied buttons
function accessEvent(eid)
{
    $(document).ready(function()
    {
        console.log(eid);
        $.ajax(
        {
            url: 'php/animators/pasutijumi_btn.php',
                type: 'POST',
                data: 
                {
                    eventID : eid,
                    status : 'Apstiprināts'
                },
                dataType: 'text',
                success: function(response) 
                {
                    console.log('Apstiprināts');
                    window.location.replace('http://localhost/kursa_darbs/pasutijumi.php');
                },
                error: function(xhr, status, error) 
                {
                    alert(xhr.status);
                }
        });
    });
};
function deniedEvent(eid)
{
    $(document).ready(function()
    {
        console.log(eid);
        $.ajax(
        {
            url: 'php/animators/pasutijumi_btn.php',
                type: 'POST',
                data: 
                {
                    eventID : eid,
                    status : 'Noraidīts'
                },
                dataType: 'text',
                success: function(response) 
                {
                    console.log('Noraidīts');
                    window.location.replace('http://localhost/kursa_darbs/pasutijumi.php');
                },
                error: function(xhr, status, error) 
                {
                    alert(xhr.status);
                }
        });
    });
};