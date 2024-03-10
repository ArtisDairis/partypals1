var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) 
{
  acc[i].addEventListener("click", function() 
  {
      /* Toggle between adding and removing the "active" class,
      to highlight the button that controls the panel */
      this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
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
    let element = document.getElementById("c"+elem);

    let tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) 
    {
      tabcontent[i].hidden = true;
    }

    if(this_elem.classList.contains("none"))
    {
        this_elem.classList.replace("none", "show");
        element.hidden = false;
    }
    else
    {
        this_elem.classList.replace("show", "none");
        element.hidden = true;
    }
}