@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
  <link href="{{ asset('css/header.css') }}" rel="stylesheet"> 

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <title>結果確認</title>
</head>
<body>
<header>@include('layouts.app')</header>
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

  <!-- 問題と得点のテーブル表示 -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">問題</th>
        <th scope="col">得点</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="quizTable">
      <!-- テーブルの内容は選択肢に応じて動的に生成 -->
    </tbody>
  </table>
</div>

<script>
  function updateScore() {
    var selectedQuiz = document.getElementById("quizSelect").value;
    var score = 0;
    var quiz = '';

    // ロジックを追加
    if (selectedQuiz === "中世") {
      score = '80点';
      quiz = 'ルネサンス革命：';
    } else if (selectedQuiz === "近世") {
      score = '90点';
      quiz = 'ルネサンス革命：';
    } else if (selectedQuiz === "近代") {
      score = '60点';
      quiz = 'ルネサンス革命：';
    } else if (selectedQuiz === "古代") {
      score = '70点';
      quiz = 'ルネサンス革命：';
    }

    // テーブル表示を更新
    var quizTable = document.getElementById("quizTable");
    quizTable.innerHTML = ''; // テーブルをクリア

    // テーブルに行を追加
    var row = quizTable.insertRow(0);

    // セルを追加
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    // セルに内容を追加
    cell1.innerHTML = quiz;
    cell2.innerHTML = score;
    cell3.innerHTML = '<button onclick="showDetails()">詳細</button>';
  }

  function showDetails() {
    // 詳細を表示するロジックを追加
    alert("詳細ボタンがクリックされました！");
    // ここに詳細表示のための処理を追加
  }
</script>
</body>
</html>
