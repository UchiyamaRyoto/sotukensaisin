<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>文章入力</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/backgroundimg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .btn-xs {
            padding: 3px 7px;
            font-size: 10px;
        }
        .text-white {
            color: white;
        }
        .title {
            margin-top: 3em;
        }
        /* テキストボックスのスタイル */
        .custom-textbox {
            background-color: #343a40; /* Bootstrapの暗い色: bg-dark */
            color: #fff; /* テキストの色を白に設定 */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <header>
            @include('parts.header')
        </header>
        <h1 class="text-center text-white title">問題文追加</h1>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <!-- Bootstrapのbg-darkクラスと自作のクラスを利用 -->
                        <textarea class="form-control custom-textbox" id="exampleTextarea" rows="8" placeholder="文章を入力してください"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">追加</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
