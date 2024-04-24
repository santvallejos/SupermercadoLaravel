//creación de constantes
const navbar = document.querySelector("#navbar");
const abrirMenu = document.querySelector("#abrirMenu");
const cerrarMenu = document.querySelector("#cerrarMenu");

//Cuando se haga click en el boton sucedere el evento
abrirMenu.addEventListener("click", () =>{
    //En este caso hacer visible el navbar
    navbar.classList.add("visible");
})

cerrarMenu.addEventListener("click", () =>{
    //removir la visibilidad del navbar
    navbar.classList.remove("visible");
})