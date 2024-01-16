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
        <div class = "card-header p-0 position-relative mt-n4 mx-3 z-index-2">
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

    <script src="{{ asset('js/test.js') }}"></script>
</body>
</html>
