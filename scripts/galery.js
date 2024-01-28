const img_names = ['party1.jpg', 'party2.jpg', 'party3.jpg', 'party4.jpg', 'party5.jpg', 'party6.jpg'];
const img = document.getElementById('galery_img');
let img_nr = 0;

function changeImage() {
    img.style.opacity = 0;
    img.style.zIndex = '0';
    setTimeout(() => {
        img.src = 'galerija/' + img_names[img_nr];
        img.style.opacity = 1;
    }, 400);

    if (img_names.length - 1 === img_nr) {
        img_nr = 0;
    } else {
        img_nr++;
    }

    setTimeout(changeImage, 5000); // Recursive setTimeout for the next image change
}

// Initial call to start the image transition
changeImage();
