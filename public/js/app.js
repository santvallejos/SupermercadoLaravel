//creación de constantes
const navbar = document.querySelector("#navbar");
const abrirMenu = document.querySelector("#abrirMenu");
const cerrarMenu = document.querySelector("#cerrarMenu");
const body = document.body;

//Cuando se haga click en el boton sucedere el evento
abrirMenu.addEventListener("click", () => {
    //En este caso hacer visible el navbar
    navbar.classList.add("visible");
    body.style.overflow = "hidden";
});

cerrarMenu.addEventListener("click", () => {
    //removir la visibilidad del navbar
    navbar.classList.remove("visible");
    body.style.overflow = "auto";
});

/* Carrusel de imagenes */

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.querySelectorAll(".mySlides");

    if (n > slides.length) slideIndex = 1;
    if (n < 1) slideIndex = slides.length;
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

/* Carrusel de categorias */

const gap = 16;

const carrusel = document.getElementById("carrusel"),
    tarjetas = document.getElementById("tarjetas"),
    siguiente = document.getElementById("siguiente"),
    anterior = document.getElementById("anterior");

siguiente.addEventListener("click", (e) => {
    carrusel.scrollBy(width + gap, 0);
    if (carrusel.scrollWidth !== 0) {
        anterior.style.display = "flex";
    }
    if (tarjetas.scrollWidth - width - gap <= carrusel.scrollLeft + width) {
        siguiente.style.display = "none";
    }
});

anterior.addEventListener("click", (e) => {
    carrusel.scrollBy(-(width + gap), 0);
    if (carrusel.scrollLeft - width - gap <= 0) {
        anterior.style.display = "none";
    }
    if (!tarjetas.scrollWidth - width - gap <= carrusel.scrollLeft + width) {
        siguiente.style.display = "flex";
    }
});

let width = carrusel.offsetWidth;
window.addEventListener("resize", (e) => (width = carrusel.offsetWidth));
