<!-- Vista en donde se actualiza la contraseña, luego de que te llega el email, el link de reseteo de contraseña te direcciona a esta vista -->

@extends('quickmart')

@section('content')
<div class="contenedorLogin" style="text-align: center ; background:white; margin: 50px auto; width: 400px; heigth: 80px; border: 1px solid black">

    
            <div class="card">
                <div class="card-header"  style="background: #004d29; color:aliceblue; padding: 10px;border-bottom: 1px solid black">{{ __('Reset Password') }}</div>
                <br>
                @if (Session::has('flash_message'))
                    @if (Session::get('flash_message_class') <> "")
                        <div class="alert alert-{{Session::get('flash_message_class')}}">{{ Session::get('flash_message') }}</div>
                    @else
                        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                    @endif
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Email Address | User name') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ $email ?? old('email') }}" required autocomplete="login" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                            <br>
                        
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        <br><br>
                    </form>
                </div>
            </div>

</div>
@endsection