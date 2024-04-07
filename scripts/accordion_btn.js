$(document).ready(function() {
    // Call openAcc function for each accordion item on page load
    $('.accordion-item').each(function() {
        let pid = $(this).attr('id');
        openAcc(this, pid);
    });
});

function openAcc(elem, pid) {
    let panel = document.getElementById(pid);
    let btn = elem.querySelector('i');

    if (btn.classList.contains("fa-caret-down")) {
        panel.hidden = false;
        btn.classList.replace("fa-caret-down", "fa-caret-up");
    } else {
        panel.hidden = true;
        btn.classList.replace("fa-caret-up", "fa-caret-down");
    }

    let elem_id = pid.replace(/[^0-9]/g, "");

    $.ajax({
        type: "post",
        url: "./php/animators/event_notes.php",
        data: {
            event_id: elem_id,
            status: "get"
        },
        dataType: "text",
        success: function(response) {
            $('#noteLength' + elem_id).text(response);
        },
        error: function(xhr) {
            console.error(xhr);
        }
    });
}
