@extends('quickmart')

@section('title', 'Metodos de pagos')

           <link rel="stylesheet" href="{{ asset('css/metodosDePagos.css') }}">
         

            
@section('content') 
<br>
<button class="volverAtras" onclick="goBack()">Atrás</button>

    <script>
    function goBack() {
    window.history.back();
    }
    </script>
<div id="page-top" data-pinterest-extension-installed="cr1.3.4">
  <div class="page-scroll">           
    <a class="page-scroll" href="#page-top">Promociones Bancarias</a>
  </div>
   
<div id="metodosDePago">
    <button class="botonMetodoDePago" onclick="mostrarContenido('lunes')">Lunes</button>
    <button class="botonMetodoDePago" onclick="mostrarContenido('martes')">Martes</button>
    <button class="botonMetodoDePago" onclick="mostrarContenido('miercoles')">Miercoles</button>
    <button class="botonMetodoDePago" onclick="mostrarContenido('jueves')">Jueves</button>
    <button class="botonMetodoDePago" onclick="mostrarContenido('viernes')">Viernes</button>
    <button class="botonMetodoDePago" onclick="mostrarContenido('sabado')">Sabado</button>
    <button class="botonMetodoDePago" onclick="mostrarContenido('domingo')">Domingo</button>
  </div>    
    <div id="lunes" class="contenido">
      <div class="contenidoPromocionPorDia">
      <div class="cardPromocionBanco">
  <div class="cardPromocionBanco-border-top">
  </div>
  <div class="imgCardPromocionBanco">
    <img src="https://i.postimg.cc/6p6NqmnW/Screenshot-3.png" width="150" alt="bancocolumbia">
  </div>
  <span class="descuentoCardPromocionBanco"> 10% de descuento</span>
  <p class="topeCardPromocionBanco"> Tope $1.000 por transacción</p>
  <p class="descriptionDescuentoCardPromocionBanco">Del 01/03/2023 al 31/05/2024 <br>* Valido en todas las tiendas fisicas.
                       </p>
  <button class="botonCardPromocionBanco"> Ver Legales
  </button>
</div>
      <div class="cardPromocionBanco">
  <div class="cardPromocionBanco-border-top">
  </div>
  <div class="imgCardPromocionBanco">
    <img src="https://i.postimg.cc/6p6NqmnW/Screenshot-3.png" width="150" alt="bancocolumbia">
  </div>
  <span class="descuentoCardPromocionBanco"> 10% de descuento</span>
  <p class="topeCardPromocionBanco"> Tope $1.000 por transacción</p>
  <p class="descriptionDescuentoCardPromocionBanco">Del 01/03/2023 al 31/05/2024 <br>* Valido en todas las tiendas fisicas.
                       </p>
  <button class="botonCardPromocionBanco"> Ver Legales
  </button>
</div>
      <div class="cardPromocionBanco">
  <div class="cardPromocionBanco-border-top">
  </div>
  <div class="imgCardPromocionBanco">
    <img src="https://i.postimg.cc/6p6NqmnW/Screenshot-3.png" width="150" alt="bancocolumbia">
  </div>
  <span class="descuentoCardPromocionBanco"> 10% de descuento</span>
  <p class="topeCardPromocionBanco"> Tope $1.000 por transacción</p>
  <p class="descriptionDescuentoCardPromocionBanco">Del 01/03/2023 al 31/05/2024 <br>* Valido en todas las tiendas fisicas.
                       </p>
  <button class="botonCardPromocionBanco"> Ver Legales
  </button>
</div>
      <div class="cardPromocionBanco">
  <div class="cardPromocionBanco-border-top">
  </div>
  <div class="imgCardPromocionBanco">
    <img src="https://i.postimg.cc/6p6NqmnW/Screenshot-3.png" width="150" alt="bancocolumbia">
  </div>
  <span class="descuentoCardPromocionBanco"> 10% de descuento</span>
  <p class="topeCardPromocionBanco"> Tope $1.000 por transacción</p>
  <p class="descriptionDescuentoCardPromocionBanco">Del 01/03/2023 al 31/05/2024 <br>* Valido en todas las tiendas fisicas.
                       </p>
  <button class="botonCardPromocionBanco"> Ver Legales
  </button>
</div>
      </div>
      <div style="display:"flex"; justify-content:"center";">
       <a class="botonSubir" href="#page-top" role="button"> Promociones Bancarias </a>
      </div>
    </div>
    
    <div id="martes" class="contenido">
        <h3>Tarjeta de Crédito</h3>
        <p>Ingrese los detalles de su tarjeta de crédito para realizar el pago.</p>
    </div>
    
    <div id="miercoles" class="contenido">
        <h3>Transferencia Bancaria</h3>
        <p>Realice una transferencia bancaria a nuestra cuenta para completar su pago.</p>
     
                       
    </div>
    
    <div id="jueves" class="contenido">
        <h3>PayPal</h3>
        <p>Realice el pago de forma segura a través de su cuenta de PayPal.</p>
    </div>
    
    <div id="viernes" class="contenido">
        <h3>Bitcoin</h3>
        <p>Realice el pago utilizando la criptomoneda Bitcoin.</p>
    </div>
    
    <div id="sabado" class="contenido">
        <h3>Apple Pay</h3>
        <p>Pague de forma rápida y segura con Apple Pay desde su dispositivo Apple.</p>
    </div>
    
    <div id="domingo" class="contenido">
        <h3>Google Pay</h3>
        <p>Pague de forma rápida y segura con Google Pay desde su dispositivo Android.</p>
    </div>
</div>
  

<script>
    function mostrarContenido(id) {
        // Ocultar todos los contenidos
        var contenidos = document.getElementsByClassName('contenido');
        for (var i = 0; i < contenidos.length; i++) {
            contenidos[i].classList.remove('visible');
        }
        
        // Mostrar solo el contenido correspondiente al botón presionado
        var contenido = document.getElementById(id);
        contenido.classList.add('visible');
    }
</script>

</div>

@endsection
