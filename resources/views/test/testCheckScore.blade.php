<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <title>結果確認</title>
</head>
<body>

<div class="container mt-5">
  <h1 class="text-center mb-4">結果確認</h1>

  <div class="form-group">
    <label for="quizSelect">問題集を選択してください：</label>
    <select class="form-control" id="quizSelect" onchange="updateScore()">
      <option value="中世">中世</option>
      <option value="近世">近世</option>
      <option value="近代">近代</option>
      <option value="古代">古代</option>
      <!-- 他の問題集も追加できます -->
    </select>
  </div>

  <div class="form-group">
  </div>
</div>

<script src="{{ mix('js/checkScore.js') }}"></script>
<!-- <script>
  function updateScore() {
    // ここに得点を更新するロジックを追加
    // 選択された問題集に基づいて適切な得点を設定してください
    var selectedQuiz = document.getElementById("quizSelect").value;
    var score = 0; // 仮の得点、実際のロジックに置き換えてください

    // 仮のロジック
    if (selectedQuiz === "quiz1") {
      score = 80;
    } else if (selectedQuiz === "quiz2") {
      score = 90;
    } else if (selectedQuiz === "quiz3") {
      score = 75;
    }

    // 得点を表示する要素に得点をセット
    document.getElementById("scoreDisplay").innerText = score;
  }
</script> -->

</body>
</html>
