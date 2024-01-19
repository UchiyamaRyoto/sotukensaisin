//アコーディオン
// .s_07 .accordion_one
$(function(){
    //.accordion_oneの中の.accordion_headerがクリックされたら
    $('.s_07 .accordion_one .accordion_header').click(function(){
      //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
      $(this).next('.accordion_inner').slideToggle();
      $(this).toggleClass("open");

      // A_a, A_bがクリックされた場合の画面遷移
      if ($(this).text().trim() === '宗教改革' || $(this).text().trim() === 'ルネサンス') {
        // 画面遷移先のURLやアクションを設定してください
        window.location.href = "testQuiz";
      }
    });
  });
