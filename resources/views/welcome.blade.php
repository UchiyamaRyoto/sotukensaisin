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
                        <div class="col-md-6 text-center">
                        <div class="button-container">
                                @if (Auth::check())
                                    <a href="{{ route('test2') }}" class="button">問題一覧</a>
                                    <p class="aida"></p>
                                    <a href="{{ route('otherTop') }}" class="button">ユーザー問題追加</a>
                                @else
                                    <a href="{{ route('login') }}" class="button">ログイン</a>
                                    <p class="aida"></p>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="button">新規登録</a>
                                        <p class="aida"></p>
                                        <div class="centered-link">
                                            <a href="{{ route('newly') }}" class="">Googleでログイン</a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            </p>
          </div>

    </body>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <script src="js/welcome.js"></script>
</html>