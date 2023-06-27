var i = 0;
var image = [];
var time = 5000;

images[0] = 'alcazar.jpg';
images[1] = 'altroz.jpg';
images[2] = 'alcazar.jpg';
images[3] = 'altroz.jpg';

function changeImg() {
    document.slide.src = image[i];

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }

    setTimeout("changeImg()", time);
}

window.onload = changeImg;