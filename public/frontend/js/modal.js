//open modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal-2");
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn-2");
var span = document.getElementsByClassName("btn btn-normal auth-form__control-back")[0];
var btnclose = document.querySelector('#close-2');


if (btn != null) {
    btn.onclick = function() {
        modal.style.display = "flex";
    }
}

if (btn2 != null) {
    btn2.onclick = function() {
        modal2.style.display = "flex";
    }
}

if (span != null) {
    span.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
}

if (btnclose != null) {
    btnclose.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
}

// slide show
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {

    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    var slidebuttons = document.getElementsByClassName("slide-button");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        slidebuttons[i].className = slidebuttons[i].className.replace(" slide-button-active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    slidebuttons[slideIndex - 1].className += " slide-button-active";
}
setInterval(function() {
    plusSlides(1);
}, 3500);