var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) 
{
    acc[i].addEventListener("click", function() 
    {
      this.classList.toggle("active");

      var panel = this.nextElementSibling;
      if (panel.style.display === "block") 
      {
        panel.style.display = "none";
      } 
      else 
      {
        panel.style.display = "block";
      }
    });
}

function openCharInfo(this_elem, elem) 
{
    let element = document.getElementById("c" + elem);
    let chevron = document.getElementById("ch_down_" + elem);
    let tabcontent = document.getElementsByClassName("tabcontent");
    let mydivs = document.getElementsByClassName("mydivs");
    
    if (this_elem.classList.contains("none")) 
    {
        for (let j = 0; j < tabcontent.length; j++) 
        {
            if (!tabcontent[j].hidden && mydivs[j].classList.contains("show")) 
            {
                mydivs[j].classList.replace("show", "none");
                tabcontent[j].hidden = true;
                document.getElementById("ch_down_" + (j + 1)).classList.replace("fa-chevron-up", "fa-chevron-down");
            }
        }
        this_elem.classList.replace("none", "show");
        chevron.classList.replace("fa-chevron-down", "fa-chevron-up");
        element.hidden = false;
    } 
    else 
    {
        this_elem.classList.replace("show", "none");
        chevron.classList.replace("fa-chevron-up", "fa-chevron-down");
        element.hidden = true;
    }
}

$(document).ready(function ()
{
    $.ajax(
    {
        type: "get",
        url: "./php/animators/show_animators.php",
        dataType: "text",
        success: function (response) 
        {
            $('#anim_list_show').html(response);
        },
        error: function (xhr)
        {
            console.error(xhr);
        }
    });

    $('.btn_take').prop('disabled', true);
});

function add_sel_info(character_id)
{
    let theme_id = $('#theme_input_value').val();
    window.location.replace("https://partypals.webexteam.eu/order?theme_id="+theme_id+"&char_id="+character_id);
}