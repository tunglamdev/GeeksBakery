var slideIndex = 1;

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("sell__content");
    var dots = document.getElementsByClassName("sell__button");

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" button-active", "");
    }

    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " button-active";
}

showSlides(slideIndex);

function pushSlide(n){
    slideIndex += n;
    showSlides(slideIndex);
}

function currentSlide(n){
    slideIndex = n;
    showSlides(slideIndex);
}

