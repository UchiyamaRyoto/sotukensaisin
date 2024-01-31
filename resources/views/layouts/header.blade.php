<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
          <!--style-->  
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
            <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
            <link href="{{ asset('css/header.css') }}" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

          
        <!-- 24/01/24 ハンバーガーメニュー 小島 -->
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
        <ul class="menu">
            <li class="top"><a href="#home">home</a></li>
            <li><a href="#skills">問題選択</a></li>
            <li><a href="#projects">projects</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
        <!-- ハンバーガーメニューここまで --> 

            <h1>QAIZ</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('password.form') }}">
                                    {{ __('Change Password') }}
                                </a> -->

                                <form id="logout-form" action="{{ route('setting') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('setting') }}">
                                    {{ __('setting') }}
                                </a>

                                <!-- 点数確認 -->
                                <a class="dropdown-item" href="{{ route('setting') }}">
                                    {{ __('結果確認') }}
                                </a>

                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>






























