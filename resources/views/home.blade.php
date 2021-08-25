@extends('layouts.header')
@section('content')

        @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
        @endif
        <p style="color:black">{{ __('You are logged in!') }}</p>
        <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
@endsection
