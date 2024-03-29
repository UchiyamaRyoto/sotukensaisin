<!-- resources/views/test/testIchiran.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
    <title>Question List</title>
</head>
<body>
    <h1>QAIZ</h1>

    <div class="section s_07">
        <h2 class="section_midasi"><span>既存</span></h2>
        @foreach($questionCollections as $collection)
        <div class="accordion_one">
          <div class="accordion_header">{{ $collection->question_collection_names}}<div class="i_box"><i class="one_i"></i></div></div>
          <div class="accordion_inner">
            <div class="accordion_one">
                @foreach($questionGroups as $group)
                @if($group->question_collection_id == $collection->id)
              <div class="accordion_header">{{ $group->question_group_names }}<div class="i_box"><i class="one_i"></i></div></div>
                @endif
              <div class="accordion_inner">
                <div class="accordion_one">
                  <div class="accordion_header">宗教改革</div>
                  <div class="accordion_header">ルネサンス</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
        <p>
        <h2 class="section_midasi2"><span>ユーザー追加</span></h2>
        @foreach($questionCollections as $collection)
        <div class="accordion_one">
          <div class="accordion_header">{{ $collection->question_collection_names}}<div class="i_box"><i class="one_i"></i></div></div>
          <div class="accordion_inner">
            <div class="accordion_one">
                @foreach($questionGroups as $group)
                @if($group->question_collection_id == $collection->id)
              <div class="accordion_header">{{ $group->question_group_names }}<div class="i_box"><i class="one_i"></i></div></div>
                @endif
              <div class="accordion_inner">
                <div class="accordion_one">
                  <div class="accordion_header">宗教改革</div>
                  <div class="accordion_header">ルネサンス</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
    </div>








    <script src="{{ asset('js/test2.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>

</body>
</html>
