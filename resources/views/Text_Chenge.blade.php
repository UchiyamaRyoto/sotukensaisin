<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問題修正画面</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .content {
            width: 80%;
            max-width: 800px;
            height: 40%;
            overflow-y: auto; /* スクロールバーを表示 */
            border: 1px solid #ccc;
            padding: 20px;
            box-sizing: border-box;
        }
        .textarea-container {
            width: 100%;
            height: 100%;
        }
        textarea {
            width: 100%;
            height: 100%;
            border: none;
            resize: none; /* ユーザーがリサイズできないようにする */
            font-family: inherit;
            padding: 10px; /* テキストエリア内のテキストと境界線の間にスペースを設定 */
            box-sizing: border-box;
        }
        .button-container {
            margin-top: 20px;
            text-align: center;
        }
        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="textarea-container">
                <!-- 修正可能な文章の表示エリア -->
                <textarea rows="10">ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示ここに修正可能な文章を表示</textarea>
            </div>
        </div>
        <div class="button-container">
            <!-- 戻るボタン -->
            <button class="button" onclick="goBack()">戻る</button>
            <!-- 完了ボタン -->
            <button class="button" onclick="saveChanges()">完了</button>
        </div>
    </div>

    <script>
        // 戻るボタンの処理
        function goBack() {
            window.history.back();
        }

        // 完了ボタンの処理
        function saveChanges() {
            // 修正内容を保存する処理をここに追加
            alert("修正内容を保存しました。");
        }
    </script>
</body>
</html>
