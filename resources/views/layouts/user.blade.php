<!DOCTYPE html>
<html>
<head>
    <title>ユーザープロファイル</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <header>
            @include('parts.header')
        </header>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top:3em">
                <div class="text-center">
                    <img src="{{ asset('images/kkrn_icon_user_3.png') }}" alt="ユーザーアバター" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-white" id="username">ユーザー名: 開発チーム</h4>
                    <button class="btn btn-primary btn-xs" onclick="openModal()">変更</button>
                </div>
                <!-- ここにモーダルを定義 -->
                <div class="modal fade" id="usernameModal" tabindex="-1" aria-labelledby="usernameModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="usernameModalLabel">新しいユーザー名を入力</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" id="newUsername" class="form-control" placeholder="新しいユーザー名を入力">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">キャンセル</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="changeUsername()">保存</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- モーダル終わり -->
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-white">メールアドレス: QAIZKaihatsu@example.com</p>
                    <button class="btn btn-primary btn-xs">変更</button>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-white">パスワード: ******</p>
                    <button class="btn btn-primary btn-xs">変更</button>
                </div>
                <p class="text-white">履歴</p>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            var myModal = new bootstrap.Modal(document.getElementById('usernameModal'), {});
            myModal.show();
        }

        function changeUsername() {
            var newUsername = document.getElementById('newUsername').value;
            document.getElementById('username').innerText = 'ユーザー名: ' + newUsername;
            // ここで新しいユーザー名を保存またはアップデートする処理を実行する
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>