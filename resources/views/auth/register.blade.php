@extends('layouts.app')
@section('content')

<div class="main_div" style="background-image: url({{asset('/img/01.png')}});">
        <Center>
            <div><img src="img/logo.png"style="width:120px;height:120px" alt=""></div>
        </Center>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="input_box">
                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your mail">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="input_box">
                <input id="name" type="text" class="" name="name" required placeholder="Enter your full name">
                    <div class="icon"><i class="fas fa-user" ></i></div>
                </div>
                
                
                
                <div class="input_box">
                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your Password">
                    <div class="icon"><i class="fas fa-lock" ></i></div>
                    <div class="pass-icon"><i class="bi bi-eye-slash pass-eye" id="togglePassword"  style="text-align:right;"></i></div>
                </div>
                <div class="input_box">
                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                    <div class="icon"><i class="fas fa-lock" ></i></div>
                    <div class="pass-icon"><i class="bi bi-eye-slash pass-eye" id="toggle"  style="text-align:right;"></i></div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
        <Center>
            <div class="input_submit button">
            <button type="submit" class="btn " style="color:white">
                {{ __('Register') }}
            </button>
            </div>
        </Center>
            <div class="sign_up" style="margin-top:15px">
                <H6 style="font-size:15px">Already have an account?</H6>
                 @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
            </div>
            </form>
             </div>

             <script>
            const toggle = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
            });
            </script>
            
          
             
@endsection 