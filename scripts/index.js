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


document.getElementById('p1').setAttribute('data-val', '200');
document.getElementById('p2').setAttribute('data-val', '165');
document.getElementById('p3').setAttribute('data-val', '123');
document.getElementById('p4').setAttribute('data-val', '189');
document.getElementById('p5').setAttribute('data-val', '1001');
document.getElementById('p6').setAttribute('data-val', '124');
document.getElementById('p7').setAttribute('data-val', '111');
document.getElementById('p8').setAttribute('data-val', '234');


let valueDisplays = document.querySelectorAll(".num");
let interval = 5000;
valueDisplays.forEach((valueDisplay) => 
{
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () 
    {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) 
        {
            clearInterval(counter);
        }
    }, duration);
});
