<template>
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

    </div>    
</div>
</template>

<style>
    /* Importación de fuentes de google fonts */ 
.atencionAlCliente{
    background-color: #f2eeE4;
   }
   
.barraAC {
   display: flex;
   justify-content: center;
  
   list-style-type: none;
}
     
.barraAC a {
   text-decoration: none;
   color:#ffde59 ;
   padding: 10px 15px;
   border: 1px solid #004d29;
   border-radius: 5px;
   margin-right: 100px;
    /* Espacio entre  elementos */
   background-color: #004d29;
}
     
.barraAC a:last-child {
   margin-right: 70px; /* Elimina el margen derecho del último elemento li */
}
     
.barraAC a:hover {
  background-color: #ffde59;
  color: black;
}
@import url(https://fonts.googleapis.com/css?family=Noto+Sans);

.bodyAC{
	font-family: 'Noto Sans', sans-serif;
  background-color: #004d29; 
}

.contact_form{	
	width: 460px; 
  margin: 0px auto;
	border-radius: 10px;  
	padding-top: 30px;
	padding-bottom: 20px;  
  background-color: #f2eeE4; 
  padding-left: 30px; 
}
hr{
  color: #f7f7f7;
  border:  2px solid;
}

input{
	background-color: #f7f7f7; 
	width: 408px; 
	height: 40px; 
	border-radius: 5px;  
	border-style: solid; 
	border-width: 1px; 
	border-color: #004d29; 
	margin-top: 10px;  
	padding-left: 10px;
  margin-bottom: 20px; 
}

textarea{
  background-color: #f7f7f7; 
	width: 405px; 
	height: 150px; 
	border-radius: 5px;  
	border-style: solid; 
	border-width: 1px; 
	border-color: #004d29; 
	margin-top: 10px;  
	padding-left: 10px;
  margin-bottom: 20px; 
  padding-top: 15px; 
}

label{
  display: block; 
	float: center; 	
}

#enviar{
	height: 45px; 
	padding-left: 5px;
	padding-right: 5px; 	
	margin-bottom: 20px; 
	margin-top: 10px; 	
	text-transform: uppercase;
	background-color: #004d29; 
	border-color: #ffde59; 
	border-style: solid; 
	border-radius: 10px;	
	width: 420px;   
  cursor: pointer;
}

button p{
	color: #f2eeE4; 
}

span{
	color: #004d29; 
}

.aviso{
	font-size: 13px;  
	color: #0e0e0e;  
}

.tituloAc{
	font-size: 39px;  
	text-align: letf; 
	padding-bottom: 20px; 
	color: #004d29;
}

.textAC{
	font-size: 16px; 
	padding-bottom: 30px;
	color: #0e0e0e;   
}

.form{
	font-size: 14px; 
	color: #0e0e0e; 
}

::-webkit-input-placeholder {
 color: #000000;
}

::-webkit-textarea-placeholder {
 color: #000000;
}

.formulario input:focus{
	outline:0;
	border: 1px solid #ffde59;
}

.formulario textarea:focus{
	outline:0;
	border: 1px solid #ffde59;
}

/* creado por javiniguez.com, Julio 2019 */ 
@media (max-width: 576px) {
 .barraAC {
   flex-direction: column; /* Cambiar la dirección de los elementos a columna */
    align-items: flex-start; /* Alinear los elementos a la izquierda */
}
.barraAC li {
  padding: 3px 5px; /* Reducir el padding de los elementos li */
  margin: 1%; /* Eliminar el margen derecho entre los elementos li */
          margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
        }
.barraAC a {
   font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
   padding: 5px 10px; /* Reducir el padding de los elementos */
 }
   }
  /*pantallas medianas*/   
@media only screen and (min-width: 577px) and (max-width: 768px) {
  .barraAC {
    flex-direction: column; /* Cambiar la dirección de los elementos a columna */
    align-items: flex-start; /* Alinear los elementos a la izquierda */
  }
  .barraAC li {
    padding: 5px 5px; /* Reducir el padding de los elementos li */
    margin:2%;
    margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
  }
  .barraAC a {
    font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
     padding: 5px 10px; /* Reducir el padding de los elementos */
  }
}
        
  /*pantallas grandes*/
@media only screen and (min-width: 769px) and (max-width: 900px) {
.barraAC {
    flex-wrap: wrap; /* Permite que los elementos se envuelvan en filas */
    justify-content: flex-start; /* Alinear los elementos a la izquierda */
 }
    
.barraAC li {
    flex: 0 0 48%; /* Establece el ancho de los elementos li */
    padding: 5px 5px; /* Ajusta el espaciado interno de los elementos li */
    margin: 1%; /* Ajusta el margen entre los elementos li */
    margin-bottom: 2px; /* Agrega margen inferior entre los elementos li */
 }
          
.barraAC a {
   font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
   padding: 5px 10px; /* Reducir el padding de los elementos */
 }
}
       
  /*Pantallas Extras*/  
@media only screen and (min-width: 901px) and (max-width: 1000px) {
  .barraAC {
    flex-direction: column; /* Cambiar la dirección de los elementos a columna */
    align-items: flex-start; /* Alinear los elementos a la izquierda */
  }
    
  .barraAC li {
    padding: 3px 5px; /* Reducir el padding de los elementos li */
    margin: 0; /* Eliminar el margen entre los elementos li */
    margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
    white-space: nowrap; /* Evitar que las palabras se rompan */
  }
    
  .barraAC a {
    font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
    padding: 5px 10px; /* Reducir el padding de los elementos */
  }
    }
  @media only screen and (min-width: 1001px) and (max-width: 1260px) {
   .barraAC {
      flex-direction: column; /* Cambiar la dirección de los elementos a columna */
      align-items: flex-start; /* Alinear los elementos a la izquierda */
   }
  
   .barraAC li {
      padding: 3px 5px; /* Reducir el padding de los elementos li */
      margin: 1%; /* Reducir el margen entre los elementos li */
      margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
      white-space: nowrap; /* Evitar que las palabras se rompan */
    }
  
    .barraAC a {
      font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
      padding: 5px 10px; /* Reducir el padding de los elementos */
    }
}   
</style>
<script>
export default {
  name: 'contacto',  // Definimos un nombre para el componente
  mounted() {
    console.log('Atencion al cliente montado.');
}}
</script>
<style>
    /* Importación de fuentes de google fonts */ 
.atencionAlCliente{
    background-color: #f2eeE4;
   }
   
.barraAC {
   display: flex;
   justify-content: center;
  
   list-style-type: none;
}
     
.barraAC a {
   text-decoration: none;
   color:#ffde59 ;
   padding: 10px 15px;
   border: 1px solid #004d29;
   border-radius: 5px;
   margin-right: 100px;
    /* Espacio entre  elementos */
   background-color: #004d29;
}
     
.barraAC a:last-child {
   margin-right: 70px; /* Elimina el margen derecho del último elemento li */
}
     
.barraAC a:hover {
  background-color: #ffde59;
  color: black;
}
@import url(https://fonts.googleapis.com/css?family=Noto+Sans);

.bodyAC{
	font-family: 'Noto Sans', sans-serif;
  background-color: #004d29; 
}

.contact_form{	
	width: 460px; 
  margin: 0px auto;
	border-radius: 10px;  
	padding-top: 30px;
	padding-bottom: 20px;  
  background-color: #f2eeE4; 
  padding-left: 30px; 
}
hr{
  color: #f7f7f7;
  border:  2px solid;
}

input{
	background-color: #f7f7f7; 
	width: 408px; 
	height: 40px; 
	border-radius: 5px;  
	border-style: solid; 
	border-width: 1px; 
	border-color: #004d29; 
	margin-top: 10px;  
	padding-left: 10px;
  margin-bottom: 20px; 
}

textarea{
  background-color: #f7f7f7; 
	width: 405px; 
	height: 150px; 
	border-radius: 5px;  
	border-style: solid; 
	border-width: 1px; 
	border-color: #004d29; 
	margin-top: 10px;  
	padding-left: 10px;
  margin-bottom: 20px; 
  padding-top: 15px; 
}

label{
  display: block; 
	float: center; 	
}

#enviar{
	height: 45px; 
	padding-left: 5px;
	padding-right: 5px; 	
	margin-bottom: 20px; 
	margin-top: 10px; 	
	text-transform: uppercase;
	background-color: #004d29; 
	border-color: #ffde59; 
	border-style: solid; 
	border-radius: 10px;	
	width: 420px;   
  cursor: pointer;
}

button p{
	color: #f2eeE4; 
}

span{
	color: #004d29; 
}

.aviso{
	font-size: 13px;  
	color: #0e0e0e;  
}

.tituloAc{
	font-size: 39px;  
	text-align: letf; 
	padding-bottom: 20px; 
	color: #004d29;
}

.textAC{
	font-size: 16px; 
	padding-bottom: 30px;
	color: #0e0e0e;   
}

.form{
	font-size: 14px; 
	color: #0e0e0e; 
}

::-webkit-input-placeholder {
 color: #000000;
}

::-webkit-textarea-placeholder {
 color: #000000;
}

.formulario input:focus{
	outline:0;
	border: 1px solid #ffde59;
}

.formulario textarea:focus{
	outline:0;
	border: 1px solid #ffde59;
}

/* creado por javiniguez.com, Julio 2019 */ 
@media (max-width: 576px) {
 .barraAC {
   flex-direction: column; /* Cambiar la dirección de los elementos a columna */
    align-items: flex-start; /* Alinear los elementos a la izquierda */
}
.barraAC li {
  padding: 3px 5px; /* Reducir el padding de los elementos li */
  margin: 1%; /* Eliminar el margen derecho entre los elementos li */
          margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
        }
.barraAC a {
   font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
   padding: 5px 10px; /* Reducir el padding de los elementos */
 }
   }
  /*pantallas medianas*/   
@media only screen and (min-width: 577px) and (max-width: 768px) {
  .barraAC {
    flex-direction: column; /* Cambiar la dirección de los elementos a columna */
    align-items: flex-start; /* Alinear los elementos a la izquierda */
  }
  .barraAC li {
    padding: 5px 5px; /* Reducir el padding de los elementos li */
    margin:2%;
    margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
  }
  .barraAC a {
    font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
     padding: 5px 10px; /* Reducir el padding de los elementos */
  }
}
        
  /*pantallas grandes*/
@media only screen and (min-width: 769px) and (max-width: 900px) {
.barraAC {
    flex-wrap: wrap; /* Permite que los elementos se envuelvan en filas */
    justify-content: flex-start; /* Alinear los elementos a la izquierda */
 }
    
.barraAC li {
    flex: 0 0 48%; /* Establece el ancho de los elementos li */
    padding: 5px 5px; /* Ajusta el espaciado interno de los elementos li */
    margin: 1%; /* Ajusta el margen entre los elementos li */
    margin-bottom: 2px; /* Agrega margen inferior entre los elementos li */
 }
          
.barraAC a {
   font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
   padding: 5px 10px; /* Reducir el padding de los elementos */
 }
}
       
  /*Pantallas Extras*/  
@media only screen and (min-width: 901px) and (max-width: 1000px) {
  .barraAC {
    flex-direction: column; /* Cambiar la dirección de los elementos a columna */
    align-items: flex-start; /* Alinear los elementos a la izquierda */
  }
    
  .barraAC li {
    padding: 3px 5px; /* Reducir el padding de los elementos li */
    margin: 0; /* Eliminar el margen entre los elementos li */
    margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
    white-space: nowrap; /* Evitar que las palabras se rompan */
  }
    
  .barraAC a {
    font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
    padding: 5px 10px; /* Reducir el padding de los elementos */
  }
    }
  @media only screen and (min-width: 1001px) and (max-width: 1260px) {
   .barraAC {
      flex-direction: column; /* Cambiar la dirección de los elementos a columna */
      align-items: flex-start; /* Alinear los elementos a la izquierda */
   }
  
   .barraAC li {
      padding: 3px 5px; /* Reducir el padding de los elementos li */
      margin: 1%; /* Reducir el margen entre los elementos li */
      margin-bottom: 2px; /* Agregar margen inferior entre los elementos li */
      white-space: nowrap; /* Evitar que las palabras se rompan */
    }
  
    .barraAC a {
      font-size: 20px; /* Reducir el tamaño de fuente de los elementos */
      padding: 5px 10px; /* Reducir el padding de los elementos */
    }
}   
</style>