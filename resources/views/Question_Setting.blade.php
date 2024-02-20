<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webサイト作成</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- 自作のCSSファイル -->
    <link rel="stylesheet" href="questionSetting.css">
</head>
<body>
    <div class="container">
        <h1 class="mb-4">問題設定</h1>
        <form>
            <div class="form-group">
                <label>公開設定：</label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="publicStatus" value="public" checked>
                    <label class="form-check-label">公開</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="publicStatus" value="private">
                    <label class="form-check-label">非公開</label>
                </div>
            </div>

            <div class="form-group">
                <label>問題数設定：</label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="questionCount" value="5" checked>
                    <label class="form-check-label">5問</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="questionCount" value="10">
                    <label class="form-check-label">10問</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="questionCount" value="15">
                    <label class="form-check-label">15問</label>
                </div>
            </div>

            <div class="form-group">
                <label>文章変更：</label>
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">文章を変更する</button>
                </div>
            </div>

            <div class="form-group">
                <label>問題削除：</label>
                <div class="input-group">
                    <button type="submit" class="btn btn-danger">問題を削除する</button>
                </div>
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-secondary mr-2">戻る</button>
                <button type="submit" class="btn btn-success">完了</button>
            </div>
        </form>
    </div>
</body>
</html>
