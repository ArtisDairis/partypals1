(function()
{
    emailjs.init(
    {
        publicKey: "_85BUx3upvIWu6DTM",
    });
})();

$(document).ready(function () 
{
    load_table('animators');
    create_backup()
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
            window.location.href = 'https://partypals.webexteam.eu/tables';
        },
        error: function(xhr) 
        {
            console.error(xhr);
        }
    });
}

function updateData(value, column_name, table_name, id) 
{
    $.ajax({
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
            if (table_name === "animators_reg" && column_name === "recruit") 
            {
                let pass = 'Anim';
                for (let i = 0; i < 5; i++) {
                    pass += Math.floor(Math.random() * 10);
                }

                $.ajax(
                {
                    type: "POST",
                    url: "./php/admin/check_data_anim_reg.php",
                    data: 
                    {
                        id: id,
                        pass: pass
                    },
                    dataType: "json",
                    success: function (response) 
                    {
                        if(response.data.recruit != "Izskata")
                            sendMail(response.data.name, response.data.surname, response.data.email, pass, response.data.recruit);
                    },
                    error: function(xhr)
                    {
                        console.error(xhr);
                    }
                });
            }
            console.log(response);
        },
        error: function(xhr)
        {
            console.error(xhr);
        }
    });
}

function searchValue()
{
    let table_name = $('#tables').val();
    let col_name = $('#table_column_val').val();
    let search_val = $('#searchInput').val();
    $.ajax({
        type: "POST",
        url: "./php/admin/search_data.php",
        data: 
        {
            table_name: table_name,
            col_name: col_name,
            search_val: search_val
        },
        dataType: "text",
        success: function (response) 
        {
            $('#table_data').html(response);
        },
        error: function (xhr,status,error)
        {
            console.error(xhr)
        }
    });
}

function renewTable(value)
{
    if(value == "")
    {
        load_table($('#tables').val())
    }
}

function sendMail(name, surname, email, pass, recruit) {
    let message;

    if (recruit === "Pienemts") {
        message = `
        Sveicināts ${name} ${surname},

        Mēs vēlamies pateikties Jums par interesi strādāt "PartyPals". Pēc rūpīgas izvērtēšanas mēs esam izlemti attiecībā uz Jūsu iesniegto anketu.
        
        Ar prieku vēlamies Jums paziņot, ka Jūsu anketas iesniegums ir pieņemts.
        Jūsu dati priekš pirmās pieslēgšanās sistēmai:

        E-pasts: ${email}
        Parole: ${pass}
        
        Ja Jums ir kādi jautājumi par turpmākajiem soļiem vai nepieciešama papildu informācija, lūdzu, nekautrējieties sazināties ar mums.
        
        Ar cieņu,
        
        "PartyPals"
        Administratīvā komanda`;
    } else {
        message = `
        Sveicināts ${name} ${surname},

        Pateicamies Jums par anketas iesniegšanu "PartyPals". Pēc rūpīgas izvērtēšanas mēs, diemžēl, esam nolēmuši, ka šoreiz mēs nevaram piedāvāt Jums iespēju strādāt pie mums.

        Mēs vērtējam Jūsu interesi un laiku, ko veltījāt anketas aizpildīšanai. Ja Jums ir jautājumi par mūsu izvēles kritērijiem vai citi jautājumi, lūdzu, nekautrējieties sazināties ar mums.

        Paldies vēlreiz par Jūsu interesi un laiku.

        Ar cieņu,

        "PartyPals"
        Administratīvā komanda`;
    }

    let params = {
        e_mail: email,
        subject: "Noslēgums par atsūtīto anķetu!",
        message: message
    };

    console.log("Sending email to:", email);

    emailjs.send("service_ner374x", "template_4cbjwzr", params).then(() => {
        console.log("Vēstule aizsūtīta!");
    }).catch((error) => {
        console.error("Error sending email:", error);
    });
}