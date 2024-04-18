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

function addNote(elem, event_id) 
{
    console.log("Trying to update note length for event ID: " + event_id);
    $.ajax(
    {
        type: "post",
        url: "./php/animators/event_notes.php",
        data: 
        {
            status: 'add',
            notetext: elem.value,
            event_id: event_id
        },
        dataType: "text",
        success: function(response) 
        {
            var noteLengthElem = document.getElementById('noteLength' + event_id);
            if (noteLengthElem) 
            {
                noteLengthElem.innerText = elem.value.length;
            } 
            else 
            {
                console.error("Element with ID 'noteLength" + event_id + "' not found");
            }
        },
        error: function(xhr) {
            console.error(xhr);
        }
    });
}

function changeTime(id, type, elem) 
{
    $.ajax(
    {
        type: "post",
        url: "./php/animators/change_time.php",
        data: 
        {
            event_id: id,
            time_type: type,
            time_value: $(elem).val()
        },
        dataType: "text",
        success: function (response) 
        {
            $(elem).val(response);
        }
    });    
}

function deleteEvent(id) 
{
    $.ajax({
        type: "post",
        url: "./php/animators/delete_from_events.php",
        data: 
        {
            event_id: id
        },
        dataType: "text",
        success: function (response) 
        {
            console.log(response);    
            reloadData();
        }
    });
}

function reloadData() 
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