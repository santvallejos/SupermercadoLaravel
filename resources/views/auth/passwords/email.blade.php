<!-- Vista donde procedes a colocar tu email o username para que te envie el email con el reset password -->
@extends('quickmart')

@section('content')
<div class="container class="contenedorLogin" style="text-align: center ; background:white; margin: 50px auto; width: 400px; heigth: 80px; border: 1px solid black">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="tituloLoginr" style="background: #004d29; color:aliceblue; padding: 10px;border-bottom: 1px solid black" >{{ __('Reset Password') }}</div>
                <br>
                <!-- Controla el envio de mensajes ya sea de ingreso exitoso o datos incorrectos -->
                <div class="card-body">
                    @if (Session::has('flash_message'))
                            @if (Session::get('flash_message_class') <> "")
                                <div class="alert alert-{{Session::get('flash_message_class')}}">{{ Session::get('flash_message') }}</div>
                            @else
                                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                            @endif
                        @endif
    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Controla que vamos a ingresar en el formulario, si es email o es username -->
                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Email Address | Username') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection