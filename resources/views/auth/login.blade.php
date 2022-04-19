@extends('layouts.app')

@push('custom-css')
<link href="{{asset('css/sign_in.css')}}" rel="stylesheet">
@endpush
@section('title')
Login
@endsection
@section('content')


<div class="container">

    <div class="box1">
      <img src="images/mockup2.PNG" alt="">
    </div>

      <div class="box1">
              <div class="box">
                <div class="heading"></div>
                    <form class="login-form" method="POST" action="{{route('login')}}">
                        @csrf
                      <div class="field">
                        <input id="email" type="email" name="email" placeholder="Telefono, Username o Correo" required
                        autocomplete="email"
                        autofocus>
                        <!-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror' -->
                      </div>
                      <div class="field">
                        <input id="password" name="password" type="password" placeholder="Contraseña" required autocomplete="current-password"/>

                        <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                      </div>
                      <button class="login-button" type="submit" title="login">Inicia Sesion</button>
                      <div class="separator">
                        <div class="line"></div>
                        <p>O</p>
                        <div class="line"></div>
                      </div>
                      <div class="other">
                        
                        <!-- @if (Route::has('password.request'))
                        <a class="forgot-password" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif -->
                        <a class="forgot-password" href="#">¿Olvidaste tu contraseña?</a>
                      </div>
                    </form>
              </div>
          <div class="box" id="lastlogin">
            <!-- @if (Route::has('register')) -->
            <p>¿No tienes una cuenta? <a class="signup" href="{{route('register')}}">Registrate</a></p>
            <!-- @endif -->
          </div>
      </div>
  </div>

      <div class="footer">
        <ul>
          
        </ul>
        <p>© 2022 Instagram</p>
      </div>


@endsection
