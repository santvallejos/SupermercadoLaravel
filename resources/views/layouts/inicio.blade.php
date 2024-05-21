@extends('quickmart'){{-- Esta vista extiende de quickmart --}}

{{-- Titulo --}}
@section('title', 'Inicio')

{{-- Contenido principal de la pagina --}}
@section('content')

    <section class="carrusel">
        <div class="mySlides">
            <img src="{{ asset('img/carruselImg1.jpg') }}" alt="imagen-1">
        </div>
        <div class="mySlides">
            <img src="{{ asset('img/carruselImg2.jpg') }}" alt="">
        </div>
        <div class="mySlides">
            <img src="{{ asset('img/carruselImg3.jpg') }}" alt="">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>

    <div class="containerHome">

        <section class="infoHome">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
            </svg>
            <h3><a href="{{ url('sucursales') }}">Nuestas sucursales</a></h3>

            <p>|</p>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-message-circle-question">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M15.02 19.52c-2.341 .736 -5 .606 -7.32 -.52l-4.7 1l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c1.649 1.407 2.575 3.253 2.742 5.152" />
                <path d="M19 22v.01" />
                <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
            </svg>
            <h3><a href="">Atención al cliente</a></h3>

            <p>|</p>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-building-store">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l18 0" />
                <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                <path d="M5 21l0 -10.15" />
                <path d="M19 21l0 -10.15" />
                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
            </svg>
            <h3><a href="">¿Cómo comprar?</a></h3>

            <p>|</p>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                <path d="M3 10l18 0" />
                <path d="M7 15l.01 0" />
                <path d="M11 15l2 0" />
            </svg>
            <h3><a href="">Metodos de pago</a></h3>
        </section>

        <section class="masEleguidos">
            <div class="productoMasEleguido">
                <img src="https://dcdn.mitiendanube.com/stores/001/108/127/products/aceite-cocinero-girasol-900mlbyb1-d180f4b5935ecfbda815881176915719-640-0.png"
                    alt="">
                <div class="infoMasEleguidos">
                    <h4>Aceite Cocinero 900ml</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://dcdn.mitiendanube.com/stores/001/108/127/products/caserita-harina-0001-d353732837e611af8d15899876041936-240-0.png"
                    alt="">
                <div class="infoMasEleguidos">
                    <h4>Harina Caserita</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://d287z5784cyr3t.cloudfront.net/s3fs-public/productos/integral.png" alt="">
                <div class="infoMasEleguidos">
                    <h4>Pan Bimbo</h4>
                    <p>$3,99</p>
                    <button>
                        <div class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://www.mamalucchetti.com.ar/wp-content/uploads/2020/04/TIRABUZON-1.png" alt="">
                <div class="infoMasEleguidos">
                    <h4>Fideos Lucchetti</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://www.mamalucchetti.com.ar/wp-content/uploads/2020/07/largo.png.webp" alt="">
                <div class="infoMasEleguidos">
                    <h4>Arroz Lucchetti</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://i.pinimg.com/originals/19/e2/da/19e2da7f17560b9e182d821170d8d132.png" alt="">
                <div class="infoMasEleguidos">
                    <h4>Gaseosa Cocacola</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://dcdn.mitiendanube.com/stores/001/108/127/products/saltena-noquis1-00e07cbdf4232dc80115961481919959-480-0.png"
                    alt="">
                <div class="infoMasEleguidos">
                    <h4>Ñoquis La Salteña</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://dcdn.mitiendanube.com/stores/001/108/127/products/paty-express-x4byb1-9df3317fc7baef782a15888173648696-240-0.png"
                    alt="">
                <div class="infoMasEleguidos">
                    <h4>Hamburgesas Paty</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://www.granjadelsol.com.ar/wp-content/uploads/2017/10/patitas-400g.webp" alt="">
                <div class="infoMasEleguidos">
                    <h4>Patitas grangas de sol</h4>
                    <p>$3,99</p>
                    <button>
                        <div class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <div class="productoMasEleguido">
                <img src="https://dulcilandia.com.ar/par/wp-content/uploads/sites/4/2020/05/13714057.png" alt="">
                <div class="infoMasEleguidos">
                    <h4>Puré de tomamte De La huerta</h4>
                    <p>$3,99</p>
                    <button>
                        <div data-tooltip="Price:-$20" class="buttonMasEleguidos">
                            <div class="button-wrapper">
                                <div class="texBotonMasEleguidos">Buy Now</div>
                                <span class="carritoMasEleguidos">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>

        </section>

        <section class="containerBento1">
            <div><img
                    src="https://newpap.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/05/12191743/MasOnline_Logo_-18.png"
                    alt=""></div>
            <div><img
                    src="https://scontent.fcnq2-2.fna.fbcdn.net/v/t39.30808-6/274857679_4835150446592745_4890295049975605508_n.png?stp=dst-png_s1080x2048&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=-yOLfv0RbLEQ7kNvgGaCFBW&_nc_oc=Adiki_4b1vhauOksnN0E_sLJ3gwjC6yFPOwCvDMAMuu80dz81naXKbDKuWeGzqceOxE&_nc_ht=scontent.fcnq2-2.fna&oh=00_AYCDx0XSavAdH5b8OY2CHXYgF6vSKcURiPrxJtb8Wkyarw&oe=66515A4B"alt="">
            </div>
            <div><img src="https://i.ytimg.com/vi/aDuflivVI6c/maxresdefault.jpg" alt=""></div>
        </section>

    </div>

    <section>
        <div class="banner"></div>
    </section>

    <div class="containerHome" style="margin-top: 3rem;">
        <section class="containerBento1">
            <div><img
                    src="https://newpap.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/05/12191743/MasOnline_Logo_-18.png"
                    alt=""></div>
            <div><img
                    src="https://scontent.fcnq2-2.fna.fbcdn.net/v/t39.30808-6/274857679_4835150446592745_4890295049975605508_n.png?stp=dst-png_s1080x2048&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=-yOLfv0RbLEQ7kNvgGaCFBW&_nc_oc=Adiki_4b1vhauOksnN0E_sLJ3gwjC6yFPOwCvDMAMuu80dz81naXKbDKuWeGzqceOxE&_nc_ht=scontent.fcnq2-2.fna&oh=00_AYCDx0XSavAdH5b8OY2CHXYgF6vSKcURiPrxJtb8Wkyarw&oe=66515A4B"alt="">
            </div>
            <div><img src="https://i.ytimg.com/vi/aDuflivVI6c/maxresdefault.jpg" alt=""></div>
        </section>
    </div>
@endsection
