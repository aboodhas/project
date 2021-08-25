@extends('layouts.app')
@section('content')
<style>
h5{
    color:#6decb9e3;
   
}
</style>
    <div class="container">
        <div class="row justify-content-center">
             <div class="col-md-8"> 
             <div class="main_div" style="background-image: url({{asset('/img/01.png')}});">       
        <Center>
            <div><img src="../img/logo.png"style="width:120px;height:120px;margin-bottom:20px" alt=""></div>
        
                    @if (session('resent'))
                        <div class="alert alert-success" style="width:50%;text-align:center;padding:1%;margin:10px 0px 10px 0px" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
        
                    <h5 style="margin-top:10px">{{ __('Before proceeding, please check your email for a verification link.') }}</h5>
                    <h5>{{ __('If you did not receive the email') }},</h5>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button style="border:#6decb9e3 2px solid;margin-bottom:50px;margin-top:30px" type="submit" class="btn"><h5 style="margin-top:10px">{{ __('click here to request another') }}<h5></button>.
                    </form>
                    </Center>
            </div>
        </div>
    </div>
</div>    
@endsection
