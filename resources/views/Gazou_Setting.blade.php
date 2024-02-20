<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像設定</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>画像設定</h1>
        <form action="/gazouUpload" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="form-group">
                <label for="category">章：</label>
                <select class="form-control" id="category" name="category">
                    @foreach($categories as $category)
                    <option value="{{ $category->category_id}}">{{ $category->category_names}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="collection">節：</label>
                <select class="form-control" id="collection" name="collection">
                </select>
            </div>

            <div class="form-group">
                <label for="question">問題：</label>
                <select class="form-control" id="question" name="question">
                </select>
            </div>

            <div class="form-group">
                <label>選択：</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="chapterRadio" name="selection" value="chapter">
                    <label class="form-check-label" for="chapterRadio">章</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="sectionRadio" name="selection" value="section">
                    <label class="form-check-label" for="sectionRadio">節</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="problemRadio" name="selection" value="problem">
                    <label class="form-check-label" for="problemRadio">問題</label>
                </div>
            </div>

            <div class="form-group">
                <label for="image">画像アップロード：</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">完了</button>
                <a href="/back" class="btn btn-secondary">戻る</a>
            </div>
        </form>
    </div>
</body>
<script src="{{ asset('js/gazouSetting.js') }}"></script>
</html>
