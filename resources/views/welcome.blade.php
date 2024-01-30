<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QaiZ</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <!-- Styles -->


       
    </head>
    <body class="antialiased">
        <div class="bgImage">
            <p class="qaiz">
                 <div>
                    <div class="logo">***</div>
                @if (Route::has('login'))
                <div class="button-container">
                        @auth
                            <a href="{{ url('/home') }}" class="button-home">問題画面</a>
                        @else
                            <a href="{{ route('login') }}" class="button">Log in</a>
                            <p class="aida"></p>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
            </p>
          </div>

    </body>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <script src="js/welcome.js"></script>
</html>
