(function()
{
    emailjs.init(
    {
        publicKey: "EOzJ7zTKUk_je9AQj",
    });
})();

$(document).ready(function() 
{
    $('#add_to_events').click(function() 
    {
        let event_name = $('#event_name').val();
        let inp_date = $('#inp_date').val();
        let event_time_start = $('#event_time_start').val();
        let event_time_end = $('#event_time_end').val();
        let selectedAnimators = $('#selectedAnimators').val();
        let name = $('#name').val();
        let surname = $('#surname').val();
        let address = $('#adress').val();
        let e_mail = $('#e_mail').val();
        let about_event = $('#about_event').val();
        let phone_number = $('#phone_number').val();
        let is_global = $('#is_global').is(':checked') ? 1 : 0;

        console.log("event_name: ", event_name);
        console.log("inp_date: ", inp_date);
        console.log("event_time_start: ", event_time_start);
        console.log("event_time_end: ", event_time_end);
        console.log("selectedAnimators: ", selectedAnimators);
        console.log("name: ", name);
        console.log("surname: ", surname);
        console.log("address: ", address);
        console.log("e_mail: ", e_mail);
        console.log("about_event: ", about_event);
        console.log("phone_number: ", phone_number);
        console.log("is_global: ", is_global);

        console.log(selectedAnimators.split(",").length)
        $.ajax(
        {
            url: 'php/pieteikt_ievade.php',
            type: 'POST',
            data: 
            {
                event_name: event_name,
                inp_date: inp_date,
                event_time_start: event_time_start,
                event_time_end: event_time_end,
                selectedAnimators: selectedAnimators.split(","),
                name: name,
                surname: surname,
                address: address,
                e_mail: e_mail,
                about_event: about_event,
                phone_number: phone_number,
                is_global: is_global,
                selAnimLength: selectedAnimators.split(",").length
            },
            dataType: 'text',
            success: function(response) 
            {
                console.log(response);
                sendMail(name, surname, event_name, e_mail, address, phone_number)
                    .then(function()
                    {
                        goTo(); // Redirect only after email has been sent
                    })
                    .catch(function(error) 
                    {
                        console.error('Email sending error:', error);
                        alert('Email sending error. Please try again.');
                    });
            },
            error: function(xhr, status, error) 
            {
                console.error(xhr.responseText);
                alert('Pasūtījums neizdevās, aizpildiet laukus vēlreiz.');
            }
        });
    });
});

function goTo() 
{
    window.location.replace("http://partypals.webexteam.eu/home");
}

function sendMail(name, surname, event_name, e_mail, address, phone_number) 
{
    let parms = 
    {
        name: name,
        surname: surname,
        event_name: event_name,
        e_mail: e_mail,
        subject: "Pasūtījums ir saņemts",
        date: new Date(),
        address: address,
        phone_number: phone_number
    };

    return emailjs.send("service_8col8pl", "template_pbpdr6g", parms);
}
