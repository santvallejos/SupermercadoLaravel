//creación de constantes
const navbar = document.querySelector("#navbar");
const abrirMenu = document.querySelector("#abrirMenu");
const cerrarMenu = document.querySelector("#cerrarMenu");
const body = document.body;

//Cuando se haga click en el boton sucedere el evento
abrirMenu.addEventListener("click", () =>{
    //En este caso hacer visible el navbar
    navbar.classList.add("visible");
    body.style.overflow = 'hidden';
})

cerrarMenu.addEventListener("click", () =>{
    //removir la visibilidad del navbar
    navbar.classList.remove("visible");
    body.style.overflow = 'auto';
})

let slideIndex = 1;
showSlides(slideIndex)

function plusSlides(n){
    showSlides(slideIndex += n)
}

function currentSlide(n){
    showSlides(slideIndex = n)
}

function showSlides(n){
    let i;
    let slides = document.querySelectorAll(".mySlides");

    if(n > slides.length) slideIndex = 1
    if(n < 1) slideIndex = slides.length
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none"
    }
    slides[slideIndex-1].style.display = "block";
}