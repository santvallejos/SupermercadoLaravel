@extends('quickmart')

@section('title , Preguntas Frecuentes')

    <link rel="stylesheet" href="{{ asset('css/preguntasFrecuentes.css') }}">
    <script src="{{asset('js/appPreguntasFrecuentes.js')}}"></script>
    

@section('content')
  <br>
    <button class="volverAtras" onclick="goBack()">Atrás</button>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <div class="accordion-body">
            <div class="accordion">
            <h1>Preguntas Frecuentes</h1>
            <hr>
            <div class="container">
                <div class="label">Cuál es el mínimo de compra?</div>
                <div class="content">El mínimo de compras es de $4000 en compras por la web.</div>
            </div>
            <hr>
            <div class="container">
                <div class="label"> ¿Qué pasa si un producto deja de estar disponible mientras estoy realizando mi compra?</div>
                <div class="content">El stock de los productos se actualiza constantemente de manera automática, es por eso que tal vez cuando llegues a finalizar el pedido puede que algún producto se haya quedado sin stock. Sólo tenes que eliminarlo para poder continuar con la compra.
            </div>
            </div>
            <hr>
            <div class="container">
                <div class="label"> ¿Tengo que ingresar los datos de mi tarjeta en el sitio?</div>
                <div class="content"> Si decidiste abonar con medio de pago "tarjeta de crédito/debito" deberás ingresar los datos de la tarjeta.
                Si tu medio de pago seleccionado es "Pago en tienda" no se solicitará ingresar ninguna otra información.
                No te preocupes, ¡tus datos están protegidos!</div>
            </div>
            <hr>
            <div class="container">
                <div class="label"> Compra Segura</div>
                <div class="content"> Tenemos un equipo que estará verificando los datos de pago y, por medidas de seguridad tu pedido puede estar sujeto a una aprobación adicional. Te contactaremos a los medios de comunicación declarados al registrarte y necesitaremos de tu colaboración para verificar tus datos. No te preocupes, esto es para prevenir posibles fraudes.
                Tené en cuenta que en ningún momento se te solicitará la numeración completa de tu tarjeta de crédito ni código de seguridad.
                Haremos varios intentos para contactarte dentro del plazo de 24 horas posteriores a la realización del pedido. Si no logramos verificar tus datos, procederemos a la cancelación de tu compra. </div>
            </div>
            <hr>
            <div class="container">
                <div class="label"> ¿Cuáles son los medios de pago habilitados?</div>
                <div class="content">  Podes pagar online o en la tienda con tarjetas prepagas, tarjetas de débito y tarjetas de crédito, Mercado Pago y Modo*.

                No aceptamos pagos en efectivo.

                Procesamos tus pagos de manera 100% segura a través de Fiserv y Mercado Pago.

                *Modo solo aplica a compras con Pago en Tienda.</div>
            </div>
            <hr>
            <div class="container">
                <div class="label">  ¿Cuáles son las promociones bancarias vigentes?</div>
                <div class="content">  Podes consultar nuestras promociones vigentes acá</div>
            </div>
                <hr>
            <div id="cambios">
                <div class="container">
                    
                    <div class="label"> Cambios y devoluciones</div>
                    <div class="content">
                            QuikMart S.R.L

                            <p>Queremos que estés satisfecho con tu compra, por eso podes solicitar a nuestro equipo de Atención al Cliente de nuestras tiendas el cambio o devolución de un producto adquirido en nuestro sitio. A continuación, describimos nuestra Política de cambios y devoluciones, con plazos y condiciones para que puedas gestionar tu caso.</p>
                        
                            MOTIVOS VÁLIDOS PARA CAMBIOS Y DEVOLUCIONES
                            Los motivos por los cuales podes gestionar el cambio o la devolución de un producto son los siguientes:
                            <ul>
                            <li> Producto fallado, dañado o vencido.</li>
                            <li>El tamaño no es correcto.</li>
                            <li>Me equivoqué en la compra.</li>
                            <li>Recibí algo que no pedí (o un producto diferente).</li> 
                            </ul>
                        </div>
                    </div>
            </div>
            <hr>
            <div class="container">
                <div class="label">¿CÓMO GESTIONAR UN CAMBIO, UNA DEVOLUCIÓN O CANCELAR TU PEDIDO?</div>
                    <div class="content">
                    Si necesitas gestionar un cambio o devolución, deberás comunicarte con nuestro Centro de Atención al cliente (0800-1044-956) para coordinar el proceso. Se podrá cancelar la compra o gestionar la devolución del producto, hasta 10 días corridos computados desde la entrega del pedido. En caso de que el pedido aún no hubiera sido entregado, también se podrá gestionar la cancelación del mismo seleccionando el “botón de arrepentimiento” disponible en la página principal de nuestra web.

                    Para que la devolución sea efectiva, te solicitarán los datos del titular de la compra, el número de pedido y el ticket o factura.

                    Recordá que, según el motivo del cambio o devolución, el producto debe estar sin utilizar/en su empaque original.

                    Si el producto tiene fallas y las mismas se verifican una vez abierto y/o instalado, debe gestionarse la garantía legal con el fabricante del mismo. Para obtener información sobre este proceso, puede comunicarse a nuestro centro de atención al cliente al 0800-1044-956.

                    Si se trata de alimentos, los mismos deben estar intactos y dentro de su fecha de vencimiento.

                    No se aceptará el cambio o devolución de productos vencidos, si estos hubieran estado dentro de la fecha de vigencia al realizar la compra. Los productos perecederos no tienen cambio ni devolución.

                    El dinero será devuelto por el mismo medio de pago utilizado, dentro de los diez (10) días hábiles de cancelada la compra o gestionada la devolución. A partir de ese plazo, comenzará a correr aquel que estipule la empresa del medio de pago utilizado para su acreditación puede variar según la fecha de cierre de la tarjeta de crédito y demás condiciones del servicio de su medio de pago. QuikMart SRL no es responsable por los inconvenientes generados por el medio de pago para la acreditación de la devolución.

                    Si el producto llegó equivocado, fallado, dañado, vencido o le falta alguno de sus accesorios, podrá solicitar el cambio del mismo contactándose con nuestro centro de atención al cliente al número 0800-1044-956, dentro de las 72 hs. de recibida la compra. Cumplido ese plazo, se entiende que el cliente aceptó el pedido y no se recibirán reclamos por estas causas. El
                    producto deberá encontrarse intacto y en su empaque original.
                    </div>
            </div>
            <hr>
            <div class="container">
                <div class="label">  CAMBIOS INDUMENTARIA</div>
                    <div class="content">  
                        Si tu compra incluye productos de indumentaria, podrás realizar el cambio de estos por cualquier motivo, dentro de los treinta (30) días de recibido, siempre que la prenda se encuentre en las mismas condiciones que se recibió, con la etiqueta puesta y que no haya sido utilizada.

                        La ropa interior y los trajes de baño no tienen cambio.

                        Los cambios se realizan únicamente de forma presencial en la tienda que elegiste al realizar la compra, que también surgirá en el ticket. Para ello, deberás acercarte con la prenda en las condiciones indicadas, el número de pedido y el ticket, al mostrador de atención al cliente de la tienda correspondiente y podrás cambiarlo por cualquier producto de igual o mayor valor, abonando la diferencia en la caja si fuese necesario. Para abonar la diferencia se acepta los medios de pagos disponibles en la caja de la tienda.

                        En caso de que quieras cambiar tu pedido y este fue un regalo que recibiste, cómo excepción, podremos realizar el cambio sin ser el titular de la compra. Para esto debés seguir los procedimientos indicados y acercarte con el nro. de pedido o el nro. de Ticket de la compra junto con el producto en mismas condiciones indicadas anteriormente y podrás generar el cambio.

                        No hace falta realizar ninguna gestión previa, simplemente acercarse a la tienda cumpliendo los requisitos de arriba detallados.
                        </div>
            </div>
            <hr>
            <div class="container">
                <div class="label">  DEVOLUCIONES</div>
                    <div class="content"> 
                        Conforme a la normativa vigente contas con diez (10) días corridos desde realizada la compra y/o recibido el producto, para cancelar/devolver la compra, siempre que la prenda se encuentre en las mismas condiciones que se recibió y no haya sido utilizada.

                        La devolución se tramitará por el mismo medio que se eligió para la entrega de la compra.

                        Si elegiste envío a domicilio, podrás elegir hacer la devolución por ese medio o directamente en la tienda seleccionada al realizar la compra. Si optaste por el retiro en tienda o pickup, sólo podrás gestionar la devolución acercándote a la tienda presencialmente
                        Para realizar esta gestión, podrás seleccionar el “Botón de arrepentimiento” ubicado en la página principal de nuestro sitio web o acercarte directamente a la tienda correspondiente con el ticket de compra y el número de pedido, o bien comunicarte con atención al cliente al 0800-1044-956.

                        El reintegro del dinero se realizará al mismo medio de pago dentro de los diez (10) días hábiles desde la confirmación de la gestión. A partir de esa fecha, la demora en la acreditación queda a cargo del medio de pago elegido.
                        QuikMart SRL no es responsable de las demoras que terceras empresas puedan ocasionar.
                    </div>
            </div>
            <hr>
                <div class="container">
                <div class="label"> GARANTIA</div>
                <div class="content"> 
                    Los productos tienen garantía de SEIS (6) meses por defectos de fabricación. El producto no deberá presentar signos de mal uso, conservación y/o lavado.
                    Para gestionar la garantía podrás acercarte a la tienda que seleccionaste al realizar la compra, con el ticket y el número de pedido, o bien comunicarte con atención al cliente al 0800-1044-956. 
                    
                    ¿Los envases retornables tienen costo extra?
                    El precio publicado en los productos retornables no contiene el cobro del envase. En caso de que tu pedido contenga productos retornables, al momento de retirarlo/recibirlo deberás entregar la misma cantidad de envases que los productos retornables adquiridos en la compra.
                    Si elegís como método de entrega Retiro en tienda o PickUp y no tenés la misma cantidad de envases que los productos retornables que compraste, podes abonarlos acercándote a Atención al Cliente al momento del retiro.
                    En cambio, si elegiste Envío a Domicilio, el chofer del delivery sólo te entregará la cantidad de productos retornables correspondientes a los envases entregados en ese momento. El valor de los productos no entregados se te devolverá automáticamente a través del mismo medio de pago que utilizaste para la compra. Los plazos de devolución dependerán de los mismos.
                </div>
                </div>
            <hr>
            <br>
            <div id="app">
                <a href="{{ url('preguntasFrecuentes') }}" id="back-to-top" v-if="showButton" @click="scrollToTop">Volver arriba</a>
              </div>
            </div>
            </div>
            <script>
                new Vue({
                  el: '#app',
                  data: {
                    showButton: false
                  },
                  mounted() {
                    window.addEventListener('scroll', this.handleScroll);
                  },
                  methods: {
                    handleScroll() {
                      this.showButton = window.scrollY > 200;
                    },
                    scrollToTop() {
                      window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                      });
                    }
                  }
                });
              </script>
   </div>
                 
@endsection