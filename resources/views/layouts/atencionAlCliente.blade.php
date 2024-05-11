@extends('quickmart')

@section('title', 'Atencion al Cliente')
        <link rel="stylesheet" href="{{ asset('css/atencionAlCliente.css')}}">
         <link href="https://fonts.google.com/specimen/DM+Sans?query=dm"> 
         <script src="app.js" type="text/javascript"></script>   
@section('content')
    
<div class="atencionAlCliente">
  <br>
    <button class="volverAtras" onclick="goBack()">Atrás</button>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
        <div class="encabezadoAC">
          <img src="https://i.postimg.cc/3xKP9kn6/Atencion-Al-Cliente.png" alt="atencionAlCliente">
        </div>
        <br>
        <div class="barraAC">
          <li><a href="{{ url('contacto') }}">Contacto</a></li>
          <li><a href="{{ url('preguntasFrecuentes') }}">Preguntas Frecuentes</a></li>
          <li><a href="{{ url('sucursales') }}">Sucursales</a></li>
          <li><a href="{{ url('preguntasFrecuentes#cambios') }}">Cambios y Devoluciones</a></li>
          <li><a href="{{ url('metodosDePago') }}">Metodos de pago</a></li>
        </div>
        <br><br>
    <hr>
    
  <div class="bodyAC">	
    <br>
    <!-- formulario de contacto -->  
    <div class="contact_form">
      <div class="formulario">			
        <h1 class="tituloAc">Formulario de contacto</h1>
          <h3 class="textAC">Escríbenos y en breve los pondremos en contacto contigo</h3>
            <form action="submeter-formulario.php" method="post">				
                 <p class="form">
                    <label for="nombre" class="colocar_nombre">Nombre
                      <span class="obligatorio">*</span>
                    </label>
                      <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                  </p>
                
                  <p class="form">
                    <label for="email" class="colocar_email">Email
                      <span class="obligatorio">*</span>
                    </label>
                      <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                  </p>
              
                  <p class="form">
                    <label for="telefone" class="colocar_telefono">Teléfono
                    </label>
                      <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                  </p>		
                
                  <p class="form">
                    <label for="website" class="colocar_website">Sitio web
                    </label>
                      <input type="url" name="introducir_website" id="website" placeholder="Escribe la URL de tu web">
                  </p>		
                
                  <p class="form">
                    <label for="asunto" class="colocar_asunto">Asunto
                      <span class="obligatorio">*</span>
                    </label>
                      <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                  </p>		
                
                  <p class="form">
                    <label for="mensaje" class="colocar_mensaje">Mensaje
                      <span class="obligatorio">*</span>
                    </label>                     
                                      <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                          </p>	  								
                
                  <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                  <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                  </p>					
              
            </form>
      </div>	
    </div>
    <br><br>
    <hr>
    
    <!-- creado por javiniguez.com, Julio 2019 -->
    </div>    
</div>
@endsection