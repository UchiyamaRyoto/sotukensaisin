<nav class="navbar navbar-light bg-light fixed-top">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- タイトル -->
    <div class="navbar-nav ml-auto mr-auto">
        <a class="navbar-brand" href="#">
            <span class="text-primary">Q</span>
            <span class="text-danger">A</span>
            <span class="text-primary">I</span>
            <span class="text-danger">Z</span>
        </a>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <!-- 画像付きボタン -->
            <a class="nav-link" href="#">
                <img src="{{ asset('images/kkrn_icon_user_3.png') }}" alt="ボタン画像" width="30" height="30">
            </a>
        </li>
    </ul>
    <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
    <!-- ナビゲーションメニュー -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">問題の追加</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">問題の削除</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">設定</a>
            </li>
        </ul>
    </div>
</nav>
