@extends('quickmart')

@section('title', 'Retiro-Cambios y Devoluciones')

            <link rel="stylesheet" href="{{ asset('css/retiro.css') }}">
            
@section('content')
<div class="retiro"> 
    <br>
            <button class="volverAtras" onclick="goBack()">Atrás</button>

        <script>
        function goBack() {
        window.history.back();
        }
        </script>
        <br>
        <div class="iconoRetiro">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24"><path d="M2.999,2.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5-1.119,2.5-2.5,2.5-2.5-1.119-2.5-2.5ZM22.628,15.789l-3.603,2.278v5.933h-2v-7.034l1.565-.99-1.216-6.398-1.348,2.275v5.147H8.025v-5.103l-1.379-2.326-1.236,6.389,1.589,1.005v7.034h-2v-5.933l-3.604-2.279C.347,15.126-.19,13.863,.061,12.646l.878-4.253c.287-1.387,1.522-2.394,2.938-2.394h1.267c1.054,0,2.042,.563,2.58,1.47l.907,1.53h6.759l.907-1.53c.538-.906,1.527-1.47,2.581-1.47h1.267c1.417,0,2.652,1.007,2.938,2.394l.878,4.253c.251,1.217-.285,2.479-1.335,3.143Zm-19.022-.969l1.308-6.82h-1.036c-.472,0-.884,.336-.979,.798l-.878,4.253c-.084,.406,.094,.826,.444,1.047l1.142,.722Zm10.419-3.82h-4v4h4v-4Zm7.979,2.051l-.878-4.253c-.095-.462-.507-.798-.979-.798h-1.038l1.287,6.835,1.165-.737c.35-.222,.529-.643,.445-1.048Zm-3.479-8.051c1.381,0,2.5-1.119,2.5-2.5s-1.119-2.5-2.5-2.5-2.5,1.119-2.5,2.5,1.119,2.5,2.5,2.5ZM.025,24H2.078l1.04-4.756-1.8-1.138L.025,24Zm20.881-4.756l1.04,4.756h2.053l-1.293-5.895-1.8,1.138Z"/></svg>
                <h2 class="retiroTitulo">Política de Retiro en Sucursal</h2>
                </p>
            </div>
            <br>
            <div class="contenedorSB">
                    <div class="textoRetiro">
                        <h3>Podés retirar tu compra en nuestra sucursal en el momento que prefieras. Antes de concretar la compra en la página web de Quickmart.com, consulte nuestras políticas de retiro en sucursal.
                        </h3>
                        <br>
                        <p>Horarios de Retiro en Sucursal: 
                        De Lunes a Sábado de 10 a 12hs y de 18 a 20 hs.</p>
                    </div>
            </div>
            <br>
            <div class="iconoRetiro">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                  <path d="m6.5,0C2.91,0,0,2.91,0,6.5s2.91,6.5,6.5,6.5,6.5-2.91,6.5-6.5S10.09,0,6.5,0Zm-1.479,5.24l3.286.548c1.271.211,2.193,1.3,2.193,2.588,0,1.447-1.177,2.624-2.624,2.624h-.376v1h-2v-1c-1.654,0-3-1.346-3-3h2c0,.551.449,1,1,1h2.376c.344,0,.624-.28.624-.624,0-.307-.22-.565-.521-.616l-3.286-.548c-1.27-.211-2.192-1.3-2.192-2.588,0-1.447,1.177-2.624,2.624-2.624h.376v-1h2v1c1.654,0,3,1.346,3,3h-2c0-.551-.448-1-1-1h-2.376c-.344,0-.624.28-.624.624,0,.307.219.565.521.616Zm17.975,8.38l-5,2.857-5-2.857,5-2.857,5,2.857Zm-10.996,1.803l5,2.857v5.72l-5-2.857v-5.72Zm7,2.857l5-2.857v5.72l-5,2.857v-5.72Zm-10.293.513c.39.391.39,1.024,0,1.414l-3.707,3.793v-3h-1.5c-1.93,0-3.5-1.57-3.5-3.5v-2.5h3v2.5c0,.275.224.5.5.5h1.5v-3l3.707,3.793Zm15.293-12.293v2.5h-3v-2.5c0-.275-.224-.5-.5-.5h-1.5v3l-3.707-3.793c-.39-.39-.39-1.024,0-1.414l3.707-3.793v3h1.5c1.93,0,3.5,1.57,3.5,3.5Z"/>
                </svg>
                
                <h2 class="retiroTitulo">Cambios o Devoluciones de Productos</h2>
               
            </div>
            <br>
            <div class="contenedorSB">
                    <div class="textoRetiro">
                        <p>Ante cualquier cambio o devolución que desee realizar de algún producto, por favor póngase en contacto con nosotros al teléfono siguiente: 0800-1054-956.

                            Para que tengas en cuenta, te informamos que los productos no perecederos podrán cambiarse o devolverse en un plazo de 30 días.
                            
                            En el caso de que haya un saldo a favor del comprador, lo contemplaremos en su próxima compra. Este saldo a favor tendrá vigencia durante 90 días desde su gestión.
                        </p>
                    </div><br>
                        <br>

            </div>
</div>
@endsection