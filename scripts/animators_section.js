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

function openCity(evt, cityName, darb_id) {
  console.log("openCity called with cityName:", cityName, "and darb_id:", darb_id);

  var i, tabcontent, tablinks, tabcontent1;

  tabcontent = document.getElementsByClassName("tabcontent" + darb_id);
  console.log("Tabcontent length:", tabcontent.length);
  for (i = 0; i < tabcontent.length; i++) {
    console.log("Setting tabcontent[" + i + "] display to none");
    tabcontent[i].style.display = "none";
  }

  tabcontent1 = document.getElementsByClassName("tabcontent_" + darb_id);
  for (i = 0; i < tabcontent1.length; i++) 
  {
    tabcontent1[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks" + darb_id);
  for (i = 0; i < tablinks.length; i++) 
  {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  var contentId = cityName + darb_id;
  var contentId_ = cityName + '_' + darb_id;
  var contentElement = document.getElementById(contentId);
  var contentElement_ = document.getElementById(contentId_);

  if (contentElement && contentElement_) 
  {
    contentElement.style.display = "block";
    contentElement_.style.display = "block";
  } 
  evt.currentTarget.className += " active";
}

