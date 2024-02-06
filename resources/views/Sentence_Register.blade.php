<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/Sentence_Register.css') }}" rel="stylesheet">
    <link rel="stylesheet">
    <title>問題入力 </title>
</head>
<body>
<main>
        <h1>問題文を入力してください</h1>
    <div>
        <textarea rows="20" cols="80" class="inputText" placeholder="ここに文章を入力してください"></textarea>
        <br>
        <button class ="sentencebutton" onclick="submitForm()">送信</button>
    </div>

    <script>
        function submitForm() {
            // ボタンがクリックされた時の処理をここに記述
            var inputTextValue = document.getElementById("inputText").value;
            alert("入力された文章: " + inputTextValue);
            // 他の処理を追加する場合はここに記述
        }
    </script>

</main>
</body>
