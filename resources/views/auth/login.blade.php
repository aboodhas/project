@extends('layouts.app')
@section('content')

    <div class="main_div" style="background-image: url({{asset('/img/01.png')}});">
        <Center>
            <div><img src="img/logo.png"style="width:120px;height:120px" alt=""></div>
        </Center>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="input_box">
                    <input id="email" type="text" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus placeholder="Enter your Email" >
                    <div class="icon"><i class="fas fa-user"></i></div>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="input_box">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password" >
                    <div class="icon"><i class="fas fa-lock" ></i></div>
                    <div class="pass-icon"><i class="bi bi-eye-slash pass-eye" id="togglePassword"  style="text-align:right;"></i></div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="form-check" style="text-align:left">
                    <label class="form-check-label" for="remember" style="font-size:13px;">
                        <strong>{{ __('Remember Me') }}</strong>
                    </label>
                    <input class="form-check-input" style="margin-left:4px;width:4.1%;margin-top:6px" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>   
                    </div>
        <Center>
            <div class="input_submit button">
                <button type="submit" class="btn" style="color:white">
                   {{ __('Login') }}
                </button>
            </div>
        </Center>
            <div class="forget_div" style="margin-bottom: 10px;margin-top: 10px;">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #6decb9;">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            </div>
            <div class="sign_up">
                <h6>Not a member?</h6>
                 @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </div>
                <div id="ack"></div>
            </form>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
    const pass = document.querySelector('#password');
    togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = pass.getAttribute('type') === 'password' ? 'text' : 'password';
  pass.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
  });
    </script>
     
@endsection
