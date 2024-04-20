const navbar = document.querySelector("#navbar");
const abrirMenu = document.querySelector("#abrirMenu");
const cerrarMenu = document.querySelector("#cerrarMenu");

abrirMenu.addEventListener("click", () =>{
    navbar.classList.add("visible");
})

cerrarMenu.addEventListener("click", () =>{
    navbar.classList.remove("visible");
})