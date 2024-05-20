@extends('layouts.inicio')

@section('content')
<div class="contenedorLogin" style="text-align: center ; background:red; margin: 50px auto; width: 400px; heigth: 80px; border: 1px solid black">
            <div class="card">
                <div class="tituloLoginr" style="background: #004d29; color:aliceblue; padding: 10px;border-bottom: 1px solid black" ">{{ __('Login') }}</div>

                <div class="formularioLogin">
                        @if (Session::has('flash_message'))
                            @if (Session::get('flash_message_class') <> "")
                                <div class="alert alert-{{Session::get('flash_message_class')}}">{{ Session::get('flash_message') }}</div>
                            @else
                                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                            @endif
                        @endif
                    <form method="POST" action="{{ route('login') }}" style="background: white; padding: 50px">
                        @csrf

                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Email Address | Username') }}</label>
                            <br>
                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" >
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                    </form>
                </div>
            </div>
        
</div>
@endsection