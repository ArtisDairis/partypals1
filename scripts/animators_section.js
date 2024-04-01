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
  for (let j = 0; j < tabcontent.length; j++) 
  {
      tabcontent[j].hidden = true;
      document.getElementById("ch_down_" + (elem)).classList.replace("fa-chevron-up", "fa-chevron-down");

  }

  if (this_elem.classList.contains("none")) 
  {
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

