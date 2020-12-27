window.onload = function () {
    const nextbtn = document.getElementById("next");
    const prevbtn = document.getElementById("prev");
    nextbtn.addEventListener("click", function () {
        nextslide();
    });
    prevbtn.addEventListener("click", function () {
        prevslide();
    });
    setTimeout("Changeimg()", 500);


};
let SlidNumber = 0;


function Changeimg() {
    console.log(1);

    let slider = document.getElementById("Slider");
    let slides = slider.getElementsByClassName("slides");
    let currentslide = slider.getElementsByClassName("current");
    currentslide[0].classList.remove("current");
    if (SlidNumber < slides.length - 1) {
        SlidNumber++;;
    } else {
        SlidNumber = 0;
    }
    slides[SlidNumber].classList.add("current");


}


const nextslide = () => {
    const slider = document.getElementById("Slider");
    const slides = slider.getElementsByClassName("slides");
    const currentslide = slider.getElementsByClassName("current");

    currentslide[0].classList.remove("current");
    if (SlidNumber == (slides.length - 1)) {
        SlidNumber = 0;
    } else {
        SlidNumber += 1;
    }
    slides[SlidNumber].classList.add("current");
};
const prevslide = () => {

    const slider = document.getElementById("Slider");
    const slides = slider.getElementsByClassName("slides");
    const currentslide = slider.getElementsByClassName("current");

    currentslide[0].classList.remove("current");
    if (SlidNumber == 0) {
        SlidNumber = slides.length - 1;
    } else {
        SlidNumber -= 1;
    }
    slides[SlidNumber].classList.add("current");
};