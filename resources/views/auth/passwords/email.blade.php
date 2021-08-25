@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="margin-top:100px"> 
            <div class="main_div" style="background-image: url({{asset('/img/01.png')}});" >       
            <Center>
            <div><img src="../img/logo.png"style="width:120px;height:120px;margin-bottom:20px" alt=""></div>
            
            @if (session('status'))
                <div class="alert alert-success" style="width:50%;text-align:center;padding:1%;margin:10px 0px 10px 0px" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                    <input style="width:80%;height:40px" id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <button style="border:#6decb9e3 2px solid;margin-bottom:50px;margin-top:30px;padding:0px 10px 0px 10px ;background-color:#6decb9e3" type="submit" class="btn btn-primary">
                    {{ __('Send Reset Link') }}
                    </button>
            </form>
            </Center>
            </div>
        </div>
    </div>
</div>    
@endsection


       