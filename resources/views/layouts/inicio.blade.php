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

        <section class="containerCategorias">
            <div class="carruselCategorias" id="carrusel">
                <div class="tarjetas" id="tarjetas">
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-meat">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M13.62 8.382l1.966 -1.967a2 2 0 1 1 3.414 -1.415a2 2 0 1 1 -1.413 3.414l-1.82 1.821" />
                            <path
                                d="M5.904 18.596c2.733 2.734 5.9 4 7.07 2.829c1.172 -1.172 -.094 -4.338 -2.828 -7.071c-2.733 -2.734 -5.9 -4 -7.07 -2.829c-1.172 1.172 .094 4.338 2.828 7.071z" />
                            <path d="M7.5 16l1 1" />
                            <path
                                d="M12.975 21.425c3.905 -3.906 4.855 -9.288 2.121 -12.021c-2.733 -2.734 -8.115 -1.784 -12.02 2.121" />
                        </svg>
                        <p>Carne</p>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dog">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M11 5h2" />
                            <path d="M19 12c-.667 5.333 -2.333 8 -5 8h-4c-2.667 0 -4.333 -2.667 -5 -8" />
                            <path d="M11 16c0 .667 .333 1 1 1s1 -.333 1 -1h-2z" />
                            <path d="M12 18v2" />
                            <path d="M10 11v.01" />
                            <path d="M14 11v.01" />
                            <path
                                d="M5 4l6 .97l-6.238 6.688a1.021 1.021 0 0 1 -1.41 .111a.953 .953 0 0 1 -.327 -.954l1.975 -6.815z" />
                            <path
                                d="M19 4l-6 .97l6.238 6.688c.358 .408 .989 .458 1.41 .111a.953 .953 0 0 0 .327 -.954l-1.975 -6.815z" />
                        </svg>
                        <p>Mascotas</p>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-carrot">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M3 21s9.834 -3.489 12.684 -6.34a4.487 4.487 0 0 0 0 -6.344a4.483 4.483 0 0 0 -6.342 0c-2.86 2.861 -6.347 12.689 -6.347 12.689z" />
                            <path d="M9 13l-1.5 -1.5" />
                            <path d="M16 14l-2 -2" />
                            <path d="M22 8s-1.14 -2 -3 -2c-1.406 0 -3 2 -3 2s1.14 2 3 2s3 -2 3 -2z" />
                            <path d="M16 2s-2 1.14 -2 3s2 3 2 3s2 -1.577 2 -3c0 -1.86 -2 -3 -2 -3z" />
                        </svg>
                        <p>Verduras</p>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-fish">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M16.69 7.44a6.973 6.973 0 0 0 -1.69 4.56c0 1.747 .64 3.345 1.699 4.571" />
                            <path d="M2 9.504c7.715 8.647 14.75 10.265 20 2.498c-5.25 -7.761 -12.285 -6.142 -20 2.504" />
                            <path d="M18 11v.01" />
                            <path d="M11.5 10.5c-.667 1 -.667 2 0 3" />
                        </svg>
                        <p>Mariscos</p>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-toilet-paper">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 10m-3 0a3 7 0 1 0 6 0a3 7 0 1 0 -6 0" />
                            <path d="M21 10c0 -3.866 -1.343 -7 -3 -7" />
                            <path d="M6 3h12" />
                            <path d="M21 10v10l-3 -1l-3 2l-3 -3l-3 2v-10" />
                            <path d="M6 10h.01" />
                        </svg>
                        <p>Limpieza</p>
                    </div>
                    <div class="item">
                    </div>
                    <div class="item">
                    </div>
                    <div class="item">
                    </div>
                    <div class="item">

                    </div>
                </div>
            </div>
            <button class="anteriorCategorias" id="anterior">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                </svg>
            </button>
            <button class="siguienteCategorias" id="siguiente">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                </svg>
            </button>
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
