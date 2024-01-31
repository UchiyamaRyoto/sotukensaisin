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
  <!-- 2024/01/30 結果確認（仮）小島 -->
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
    var quizData = getQuizData(selectedQuiz);

    // テーブル表示を更新
    var quizTable = document.getElementById("quizTable");
    quizTable.innerHTML = ''; // テーブルをクリア

    // 各問題を表示
    for (var i = 0; i < quizData.length; i++) {
      // テーブルに行を追加
      var row = quizTable.insertRow(i);

      // セルを追加
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);

      // セルに内容を追加
      cell1.innerHTML = quizData[i].question;
      cell2.innerHTML = quizData[i].score;
      cell3.innerHTML = '<button onclick="showDetails()">詳細</button>';
    }
  }

  function getQuizData(theme) {
    // 各テーマごとの問題データ
    var quizData = {
      '中世': [
        { question: 'ルネサンス革命1', score: '80点' },
        { question: 'ルネサンス革命2', score: '85点' },
        { question: 'ルネサンス革命3', score: '90点' },
      ],
      '近世': [
        { question: '産業革命1', score: '75点' },
        { question: '産業革命2', score: '80点' },
        { question: '産業革命3', score: '85点' },
      ],
      '近代': [
        { question: 'フランス革命1', score: '60点' },
        { question: 'フランス革命2', score: '65点' },
        { question: 'フランス革命3', score: '70点' },
      ],
      '古代': [
        { question: '古代ローマ帝国1', score: '70点' },
        { question: '古代ローマ帝国2', score: '75点' },
        { question: '古代ローマ帝国3', score: '80点' },
      ]
      // 他のテーマに対する問題も追加できます
    };

    return quizData[theme] || [];
  }

</script>
</body>
</html>
