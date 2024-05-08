@extends('quickmart')

@section('title', 'Metodos de pagos')

            <link rel="stylesheet" href="{{ asset('css/metodosDePagos.css') }}">
           <script src="{{asset('js/metodosDePago.js')}}"></script>


            
@section('content') 

           
<div id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">

    <!-- Navigation -->
    <nav class="navbar navbarMP-default navbar-fixed-top navbarMP-shrink navbarMP">
        <div class="container MP">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbarMP-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbarMP-brand page-scroll" href="#page-top">Promociones Bancarias</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#lunes">Lunes</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#portfolio">Martes</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#miercoles">Miercoles</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#jueves">Jueves</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#viernes">Viernes</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#sabado">Sabado</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#domingo">Domingo</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container headerMP">
            <div class="intro-text">
             <!--   <div class="intro-lead-in">Bienvenido a QuickMark</div>-->

                <div class="intro-heading">Tenemos promociones con todos los bancos.</div>
            </div>
        </div>
    </header>

    <!-- Lunes Section -->
     <section id="lunes" >
        <div class="container MP-lunes">
            <div class="row MP-lunes">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Lunes</h2>
                    <h3 class="section-subheading text-muted">Promociones validas desde 1/5/2024 al 31/5/2024.</h3>
                </div>
            </div>
            <div class="row MP-lunes text-center">
                <div class="col-md-4 col-sm-6 portfolio-item">               
                        <img src="https://i.postimg.cc/6p6NqmnW/Screenshot-3.png" width="150" alt="bancocolumbia"><br><br>
                    <div class="portfolio-caption">
                      <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                      <h5 class="topeDescuento">Tope $3.500 por transacción</h5>
                       <p class="descriptionDescuento text-muted">Comprando con tarjeta de crédito ONLINE:comprando cualquier día y programando entrega/retiro los días de la promo.
                       </p>
                      <br>
                       <p>
                          <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                        </p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="https://i.postimg.cc/fRvmjJV7/Screenshot-4.png" width="150" alt="beneficiosanses"><br><br>
                     <div class="lunes-caption">
                      <h4 class="tituloPorcentajeDescuento">10% de descuento</h4><br>
                      <h5 class="topeDescuento">Tope $1.000 por transacción</h5>
                       <p class="descriptionDescuento text-muted">Del 01/03/2023 al 31/05/2024 <br>* Valido en todas las tiendas fisicas.
                       </p>
                      <br>
                       <p>
                          <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                        </p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="https://i.postimg.cc/Xq7YWYjW/prex.png" width="150" alt="prex"><br><br>
                     <div class="lunes-caption">
                      <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                      <h5 class="topeDescuento">Tope $3.000 por semana</h5>
                       <p class="descriptionDescuento text-muted">
                         Comprando los Lunes con Prex, la tarjeta debe ser ingresada como débito.
                       </p>
                      <br>
                       <p>
                          <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio es el Martes Grid Section -->
    <section id="portfolio">
        <div class="container MP-portfolio">
            <div class="row MP-portfolio">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Martes</h2>
                    <h3 class="section-subheading text-muted">Promociones validas desde 1/5/2024 al 31/5/2024.</h3>
                </div>
            </div>
            <div class="row MP-portfolio text-center">
                <div class="col-md-3 col-sm-6 portfolio-item">                     
                        <img src="https://i.postimg.cc/Xq7YWYjW/prex.png" width="150" alt="prex"><br><br>
                    <div class="portfolio-caption">
                      <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                      <h5 class="topeDescuento">Tope $3.000 por semana</h5>
                       <p class="descriptionDescuento text-muted">
                         Comprando los Martes con Prex, la tarjeta debe ser ingresada como débito.
                       </p>
                       <p>
                          <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                        </p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
                        <img src="https://i.postimg.cc/kgBF9Wwj/bancosol.png" width="150" alt="bancodelsol"><br><br>
                    <div class="portfolio-caption">
                      <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                      <h5 class="topeDescuento">TOPE $5.000 por mes</h5>
                       <p class="descriptionDescuento text-muted">
                         Del 01/02 al 30/06.
                       </p>              
                       <p>
                          <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                        </p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
                  <img src="https://i.postimg.cc/7h4rrHkV/uala.png" width="150" alt="beneficiosanses"><br><br>
                    <div class="portfolio-caption">
                     <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                     <h5 class="topeDescuento">Tope $1.500 por usuario</h5>
                     <p class="descriptionDescuento text-muted">
                       Del 12/07/2023 al 30/06/2024 pagando con tarjeta ualá o QR.             </p>
                     <p>
                          <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                     </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 portfolio-item">
                        <img src="https://i.postimg.cc/tTtFDkCg/CREDICOOP.png" width="150" alt="bancocredicoop"><br><br>
                    <div class="portfolio-caption">
                      <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                      <h5 class="topeDescuento">TOPE $3.000 por compra</h5>
                       <p class="descriptionDescuento text-muted">
                         Del 01/05/2023 al 31/05/2024 con tarjeta de débito.<br> * Valido en todas las tiendas físicas
                       </p>              
                       <p>
                          <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Miercoles Section -->
    <section id="miercoles">
      <div class="container MP-miercoles">
             <div class="row MP-miercoles">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Miercoles</h2>
                    <h3 class="section-subheading text-muted">Promociones validas desde 1/5/2024 al 31/5/2024.</h3>
                </div>
                <div class="row MP-miercoles text-center">
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/kgBF9Wwj/bancosol.png" width="150" alt="bancodelsol"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $5.000 por mes</h5>
                           <p class="descriptionDescuento text-muted">
                             Del 01/02 al 30/06.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/fRvmjJV7/Screenshot-4.png" width="150" alt="beneficiosanses"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">10% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $1.000 por transacción</h5>
                         <p class="descriptionDescuento text-muted">
                           Del 01/03/2023 al 31/05/2024 <br>* Valido en todas las tiendas fisicas.             </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/tTtFDkCg/CREDICOOP.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $3.000 por compra</h5>
                           <p class="descriptionDescuento text-muted">
                             Del 01/05/2023 al 31/05/2024 con tarjeta de débito.<br> * Valido en todas las tiendas físicas
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/Wb6b3yYz/mercadopago.png" width="150" alt="mercadopago"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $1.000 por usuario</h5>
                         <p class="descriptionDescuento text-muted">
                           Del 01/05/2023 al 31/05/2024. En tu primer pago con Dinero en Cuenta y Mercado Credito fisicas.             </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/G2yb1gsc/banconacion.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $ 10.000 en la primera compra</h5>
                           <p class="descriptionDescuento text-muted">
                             Tarjeta de Crédito programando entrega/retiro los miércoles.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>

    <!-- Jueves Section -->
    <section id="jueves">
        <div class="container MP-jueves">
            <div class="row MP-jueves">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Jueves</h2>
                    <h3 class="section-subheading text-muted">Promociones validas desde 1/5/2024 al 31/5/2024.</h3>
                </div>
            </div>
          <div class="row MP-jueves text-center">
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/k4cfDqSw/bancogalicia.png" width="150" alt="bancogalicia"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $15.000 por mes</h5>
                           <p class="descriptionDescuento text-muted">
                             Del 11/10/2023 al 31/05/2024 Tarjeta Visa Credito. Comprando los dias Jueves.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/6pvcndR8/eminet.png" width="150" alt="beneficiosanses"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $15.000 por mes</h5>
                         <p class="descriptionDescuento text-muted">
                           Del 11/10/2023 al 31/05/2024 . Tarjeta Visa Credito Eminent. Comprando los dias Jueves.             </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/tTtFDkCg/CREDICOOP.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $3.000 por compra</h5>
                           <p class="descriptionDescuento text-muted">
                             Del 01/05/2023 al 31/05/2024 con tarjeta de débito.<br> * Valido en todas las tiendas físicas
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/Wb6b3yYz/mercadopago.png" width="150" alt="mercadopago"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $1.000 por usuario</h5>
                         <p class="descriptionDescuento text-muted">
                           Del 01/05/2023 al 31/05/2024. En tu primer pago con Dinero en Cuenta y Mercado Credito fisicas.             </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/G2yb1gsc/banconacion.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $ 10.000 en la primera compra</h5>
                           <p class="descriptionDescuento text-muted">
                             Tarjeta de Crédito programando entrega/retiro los miércoles.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                </div>
           
        </div>
    </section>

    <!-- Viernes Aside -->
    <section id="viernes">
         <div class="container MP-viernes">
            <div class="row MP-viernes">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Viernes</h2>
                    <h3 class="section-subheading text-muted">Promociones validas desde 1/5/2024 al 31/5/2024.</h3>
                </div>
            </div>
          <div class="row MP-viernes text-center">
                    <div class="col-md-4  col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/6p6NqmnW/Screenshot-3.png" width="150" alt="bancocolumbia"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $3.500 por transaccion</h5>
                           <p class="descriptionDescuento text-muted">
                             Comprando con tarjeta de crédito ONLINE:comprando cualquier día y programando entrega/retiro los días de la promo.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-4  col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/6q42ghBR/santander.png" width="150" alt="bancosantander"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $15.000 por mes</h5>
                         <p class="descriptionDescuento text-muted">
                           Desde el 02/02 al 30/06.No aplica para pagos vía QR de Mercado Pago.  </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/kX8wtQWB/americanexpres.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $5.000 por mes</h5>
                           <p class="descriptionDescuento text-muted">
                             Aplica a tiendas de: Santa Fe, Córdoba, Entre Ríos, Jujuy y Salta. Vigencia: Del 01/03 al 31/08.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                </div>
        </div>
    </section>
  
    <section id="sabado">
        <div class="container MP-sabado">
            <div class="row MP-sabado">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sabado</h2>
                    <h3 class="section-subheading text-muted">Promociones validas desde 1/5/2024 al 31/5/2024.</h3>
                </div>
            </div>
          <div class="row MP-sabado text-center">
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/k4cfDqSw/bancogalicia.png" width="150" alt="bancogalicia"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $15.000 por mes</h5>
                           <p class="descriptionDescuento text-muted">
                             Del 11/10/2023 al 31/05/2024 Tarjeta Visa Credito. Comprando los dias Jueves.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/6pvcndR8/eminet.png" width="150" alt="beneficiosanses"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $15.000 por mes</h5>
                         <p class="descriptionDescuento text-muted">
                           Del 11/10/2023 al 31/05/2024 . Tarjeta Visa Credito Eminent. Comprando los dias Jueves.             </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/tTtFDkCg/CREDICOOP.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $3.000 por compra</h5>
                           <p class="descriptionDescuento text-muted">
                             Del 01/05/2023 al 31/05/2024 con tarjeta de débito.<br> * Valido en todas las tiendas físicas
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/Wb6b3yYz/mercadopago.png" width="150" alt="mercadopago"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $1.000 por usuario</h5>
                         <p class="descriptionDescuento text-muted">
                           Del 01/05/2023 al 31/05/2024. En tu primer pago con Dinero en Cuenta y Mercado Credito fisicas.             </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/G2yb1gsc/banconacion.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $ 10.000 en la primera compra</h5>
                           <p class="descriptionDescuento text-muted">
                             Tarjeta de Crédito programando entrega/retiro los miércoles.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/6q42ghBR/santander.png" width="150" alt="bancosantander"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $15.000 por mes</h5>
                         <p class="descriptionDescuento text-muted">
                           Desde el 02/02 al 30/06.No aplica para pagos vía QR de Mercado Pago.  </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/kX8wtQWB/americanexpres.png" width="150" alt="bancocredicoop"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">20% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $5.000 por mes</h5>
                           <p class="descriptionDescuento text-muted">
                             Aplica a tiendas de: Santa Fe, Córdoba, Entre Ríos, Jujuy y Salta. Vigencia: Del 01/03 al 31/08.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                </div>
           
        </div>
    </section>
  
    <section id="domingo">
        <div class="container MP-domingo">
            <div class="row MP-domingo">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Domingo</h2>
                    <h3 class="section-subheading text-muted">Promociones validas desde 1/5/2024 al 31/5/2024.</h3>
                </div>
            </div>
          <div class="row MP-domingo text-center">
                    <div class="col-md-6 col-sm-6 portfolio-item">
                            <img src="https://i.postimg.cc/k4cfDqSw/bancogalicia.png" width="150" alt="bancogalicia"><br><br>
                        <div class="portfolio-caption">
                          <h4 class="tituloPorcentajeDescuento">25% de descuento</h4><br>
                          <h5 class="topeDescuento">TOPE $15.000 por mes</h5>
                           <p class="descriptionDescuento text-muted">
                             Del 11/10/2023 al 31/05/2024 Tarjeta Visa Credito. Comprando los dias Jueves.
                           </p>              
                           <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 portfolio-item">
                      <img src="https://i.postimg.cc/6pvcndR8/eminet.png" width="150" alt="beneficiosanses"><br><br>
                        <div class="portfolio-caption">
                         <h4 class="tituloPorcentajeDescuento">30% de descuento</h4><br>
                         <h5 class="topeDescuento">Tope $15.000 por mes</h5>
                         <p class="descriptionDescuento text-muted">
                           Del 11/10/2023 al 31/05/2024 . Tarjeta Visa Credito Eminent. Comprando los dias Jueves.             </p>
                         <p>
                              <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver legales </a>
                         </p>
                        </div>
                    </div>
                </div>
           
        </div>
        
  </div>
</div>
                
            </div>
           
        </div>
    </section>

    <!-- jQuery Version 1.11.0 -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/classie.js"></script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jqBootstrapValidation.js"></script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/contact_me.js"></script>


<span style="height: 20px; width: 40px; min-height: 20px; min-width: 40px; position: absolute; opacity: 0.85; z-index: 8675309; display: none; cursor: pointer; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAADU0lEQVR42s2WXUhTYRjHz0VEVPRFUGmtVEaFUZFhHxBhsotCU5JwBWEf1EWEEVHQx4UfFWYkFa2biPJiXbUta33OXFtuUXMzJ4bK3Nqay7m5NeZq6h/tPQ+xU20zugjOxR/+7/O8539+5znnwMtNTExwJtMb3L/fiLv3botCSmUjeCaejTOb39AiFothfHxcFIrHY8RksZjBsckJcOIRMfFsHD/SsbExUYpnI8DR0dGUGjSb0byhEJp5Uqg5CTSzc2CQleJbMEj9/ywBcGRkJEk9DQqouEVQT1sK444yWI9UonmTjGqauVLEIlHa9x8lAMbj8SSpp0rwKGMVvg8P46vbg0C7na8z8JsMcgHe7jlEa+edRhiLy8n/TUMfu6EvLElk+U0WtGwrTrdfAGQf5J8iiK4LVzDU28t8JtMSocf8E+l68myaNFXm/6rXslLK7ay5TOunuRvZWpJuvwAYjUaTpOIWoquuAZ219RTaxKYp9BbjycoN5FvL9qH9TBX5rvoGdJythvXYSTxdtRnWylO/ZdqrLsGwszzhWQ593z2KlAwCYCQSSZJ6ehZ0W7bD9VBLgN0NCqr3qR7R2rBrL3pu3Sb/7nDlz2uy6cG0OXk0GTbZXzNp8trsPAQdTj6frlWzN2DcXZGKQQAMh8NJ6rpyHe+PnkCr/CAFdZyvpfpjuvkifLF9wIt1Wwlo0OHie1RvWrKa93RjzfzliTzPKz3ltB0/Tevmwp14wGUgHAzSOoUEwFAolFaaBSuhnslPRkJexUJtZ6v5HtUeLswl33n1BgEY5fvhs9sJ3FAiT+QYyyvoAQJuD0KBAFRTJNAuz5/s3gJgMBhMJwrVFRThM5tY5zUF/A4X1f2fvQTRLCuBreoim0YmAbqNJryvPEXeeq46kaNdkQ/1HCncbJKPs9ZSv2VHGfWsZ2hfkhKAfr8/pdxWKx4wwD69PmVfNSOL+lr2w+gYqHpWDtXt1xQ8AMlWU0e1lqLd/APRHoP8AJqWrQG9gYxcPMsvSJUvAA4MDKTUJ7MZLaVy8v+qT21tcDx/OemePr0RTkNrur4A6PP5xCgBsL+/X4wiQDpuuVxOeL1eMYmYeDY6sOp0z+B0OuHxeEQhxkJMFosJiSO/UinOI/8Pc+l7KKArAT8AAAAASUVORK5CYII=);"></span>
</div>
@endsection