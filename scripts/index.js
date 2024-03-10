const video = document.getElementById('video-bg');

video.addEventListener('ended', function() 
{
  this.currentTime = 0;
  this.play();
});

const video1 = document.getElementById('video-bg1');

video1.addEventListener('ended', function() 
{
    this.currentTime = 0;
    this.play();
});

window.onload = function() 
{
    $.ajax(
    {
        type: "GET",
        url: "./php/order_numbers.php",
        dataType: "text",
        success: function(response) 
        {
            var orderNumbers = response.split(',');
            
            for (var i = 0; i < orderNumbers.length && i < 8; i++) 
            {
                var elementId = 'p' + (i + 1);
                var element = document.getElementById(elementId);
                if (element) 
                {
                    console.log(orderNumbers[i]);
                    element.setAttribute('data-val', orderNumbers[i].trim());
                    
                    animateNumber(element);
                }
            }
        },
        error: function(xhr, status, error) 
        {
            console.error('Error:', error);
        }
    });
};

function animateNumber(element) 
{
    let startValue = 0;
    let endValue = parseInt(element.getAttribute("data-val"));
    let duration = 5000;
    let interval = 50;
    let steps = Math.ceil(duration / interval);
    let stepValue = Math.ceil(endValue / steps);
    
    let counter = setInterval(function () {
        startValue += stepValue;
        if (startValue >= endValue) {
            startValue = endValue;
            clearInterval(counter);
        }
        element.textContent = startValue;
    }, interval);
}

