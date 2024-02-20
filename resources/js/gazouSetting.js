$(document).ready(function() {
    $('#category').change(function() {
        //選択された章のID取得
        var categoryId = $(this).val();

        //ajax処理
        $.ajax({
            //url: ルーティング先
            //data: 受け渡す値
            url: '/getCollections',
            type: 'GET',
            data: {
                category_id:categoryId
            },
            //success:成功したときの処理
            success: function(response) {
                //#collectionのクラスの中削除
                $('#collection').empty();

                //レスポンス
                $.each(response, function(key, value) {
                    $('#collection').append('<option value="' + value.collection_id + '">' + value.collection_names + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
    $('#collection').change(function() {
        //選択された章のID取得
        var collectionId = $(this).val();

        $.ajax({
            url: '/getQuestions',
            type: 'GET',
            data: {
                collection_id:collectionId
            },
            success: function(response) {
                $('#question').empty();

                $.each(response, function(key, value) {
                    $('#question').append('<option value="' + value.question_id + '">' + value.question_names + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});