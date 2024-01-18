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
    <h1>Question Groups and Collections</h1>

    @foreach($questionCollections as $collection)
    <div class="test">
        <div class = "card-header p-0 position-relative mt-n4 mx-3 z-index-2" id="card">
        <div class= "box2"><h2><p>{{ $collection->question_collection_name}}</p></h2></div>
        </div>
        <ul class="test2">
            @foreach($questionGroups as $group)
                @if($group->question_collection_id == $collection->id)

                    <li>{{ $group->question_group_names }}</li>
                @endif
            @endforeach
        </ul>
    </div>
    @endforeach

    <div class="section s_07">
        @foreach($questionCollections as $collection)
        <div class="accordion_one">
          <div class="accordion_header">{{ $collection->question_collection_name}}<div class="i_box"><i class="one_i"></i></div></div>
          <div class="accordion_inner">
            <div class="accordion_one">
                @foreach($questionGroups as $group)
                @if($group->question_collection_id == $collection->id)
              <div class="accordion_header">{{ $group->question_group_names }}<div class="i_box"><i class="one_i"></i></div></div>
                @endif
              <div class="accordion_inner">
                <div class="accordion_one">
                  <div class="accordion_header">A_a</div>
                  <div class="accordion_header">A_b</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
    </div>


        <p class="_a"><a href="https://125naroom.com/web/3046" target="_blank" class="link">View the note</a></p>
      </div>



    <script src="{{ asset('js/test2.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>

</body>
</html>
