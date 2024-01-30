
$(function updateScore() {
// ここに得点を更新するロジックを追加
// 選択された問題集に基づいて適切な得点を設定してください
var selectedQuiz = document.getElementById("quizSelect").value;
var score = 0; // 仮の得点、実際のロジックに置き換えてください

// 仮のロジック
if (selectedQuiz === "中世") {
    score = 80;
} else if (selectedQuiz === "近世") {
    score = 90;
} else if (selectedQuiz === "近代") {
    score = 75;
} else if (selectedQuiz === "現代") {
    score = 75;
}

// 得点を表示する要素に得点をセット
document.getElementById("scoreDisplay").innerText = score;
}
)