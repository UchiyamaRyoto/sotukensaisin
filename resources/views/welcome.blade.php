<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QaiZ</title>

        <!-- Fonts -->

        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        


       
    </head>
    <body class="antialiased">
        <div class="bgImage">
            <p class="qaiz">
                 <div>
                    <div class="logo">***</div>
                @if (Route::has('login'))
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="button-container">
                                @auth
                                    <a href="{{ route('test2') }}" class="button-home">問題画面</a>
                                @else
                                    <a href="{{ route('login') }}" class="button">Log in</a>
                                    <p class="aida"></p>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="button">Register</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </p>
          </div>

    </body>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <script src="js/welcome.js"></script>
</html>
