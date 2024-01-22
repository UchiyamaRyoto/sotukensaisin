document.addEventListener('DOMContentLoaded', function() {
    var boxElements = document.querySelectorAll('.test');

    boxElements.forEach(function(boxElement) {
        boxElement.addEventListener('click', function() {
            var ulElement = this.querySelector('.test2');

            // selectedクラスの追加
            $(this).toggleClass('selected');
            // ul要素の表示・非表示を切り替え
            ulElement.style.display = (getComputedStyle(ulElement).display === 'none') ? 'block' : 'none';
        });
    });
});

//矢印回転
$(function(){
	$('.toggle_title').click(function(){
		$(this).toggleClass('selected');
		$(this).next().slideToggle();
	});
});

