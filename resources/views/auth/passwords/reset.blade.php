@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-image: url({{asset('/img/01.png')}});margin-top:100px;">
            <Center>  
            <div><img src="../../img/logo.png"style="width:120px;height:120px;margin-top:15px" alt=""></div>

                <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">    
                    
                <input style="width:60%;height:40px;margin-top:25px;margin-left:10px" id="email" type="text" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus placeholder="Enter your Email" >
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input style="width:60%;height:40px;margin-top:15px" id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new--password" placeholder="Enter your password" >
                <i class="bi bi-eye-slash pass-eye" id="togglePassword"  style="text-align:right;posation:absolute;margin-left:-25px;margin-bottom:10px"></i>
                
                <input style="width:60%;height:40px;margin-top:15px;margin-bottom:20px;" id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
               <i class="bi bi-eye-slash pass-eye" id="togglePassword"  style="text-align:right;posation:absolute;margin-left:-25px;margin-bottom:10px"></i>
                
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <Center>
                    <div class="input_submit button" style="margin-bottom:40px">
                        <button type="submit" class="btn btn-primary" style="color:white;background-color:#6decb9;border:#6decb9">
                        {{ __('Reset Password') }}
                        </button>
                    </div>
                </Center>  
            </div>
            </div>  

             </Center>  
        <div class="col-md-4"></div>  
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
