// Espera a que el contenido del documento esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
 const accordionContainers = document.getElementsByClassName('container'); 
  // Obtiene todos los elementos con la clase 'container' y los guarda en la variable accordionContainers

// Itera sobre cada contenedor del acordeón 
  for (let i = 0; i < accordionContainers.length; i++) { 
    // Agrega un evento de clic a cada contenedor
    accordionContainers[i].addEventListener('click', function () {
      this.classList.toggle('active'); // Alterna la clase 'active' en el contenedor actual al hacer clic, lo que activa o desactiva el acordeón
      const content = this.querySelector('.content');// Obtiene el contenido dentro del contenedor actual
      // Si el contenido tiene una altura máxima establecida, la elimina (lo que hace que se muestre)
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        // Si el contenido no tiene una altura máxima establecida, establece la altura máxima en la altura real del contenido (lo que hace que se oculte)
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  }
});
