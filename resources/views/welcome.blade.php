<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QaiZ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/test2.css">

        <!-- Styles -->


        <style>
            @import 'https://fonts.googleapis.com/css?family=Cinzel';

            /*背景画像の設定をする*/
            .bgImage{
            background: url(image/MicrosoftTeams-image.png) no-repeat center;
            background-size: cover;
            position: relative;
            z-index: 0;
            overflow: hidden;/*ブラー効果でボヤけた部分を非表示*/
            }
            .antialiased{
            height:100%
            }

            /*:beforeにぼかし効果を設定する*/
            .bgImage:before{
            content: '';
            background: inherit;/*.bgImageで設定した背景画像を継承する*/
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
            position: absolute;
            /*ブラー効果で画像の端がボヤけた分だけ位置を調整*/
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            z-index: -1;/*重なり順序を一番下にしておく*/
            }
            p{
            margin: 150px 0 200px;
            text-align: center;
            font-family: 'Cinzel', serif;
            font-size: 34px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0,0,0,.4);
            }
            a{
            box-sizing: border-box;
            display: block;
            width: 100%;
            height:100%
            color: #fff;
            text-decoration: none;
            position: absolute;
            bottom: 3%;
            padding: 0 3%;
            text-align: center;
            font-size: 12px;
            line-height: 1.3;
            text-shadow: 0 0 3px rgba(0,0,0,.5);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="bgImage">
            <p>
                 <div>
                @if (Route::has('login'))
                    <div >
                        @auth
                            <a href="{{ url('/home') }}" class="button-home">問題画面</a>
                        @else
                            <a href="{{ route('login') }}" class="button">Log in</a></button>
                            <p class="aida"></p>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
            </p>
          </div>

    </body>
</html>
