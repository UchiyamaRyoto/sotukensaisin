<!-- resources/views/test/testIchiran.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question List</title>
</head>
<body>
    <h1>Question Groups and Collections</h1>

    @foreach($questionCollections as $collection)
        <h2>{{ $collection->question_collection_name}}</h2>
        <ul>
            @foreach($questionGroups as $group)
                @if($group->question_collection_id == $collection->id)
                    <li>{{ $group->question_group_names }}</li>
                @endif
            @endforeach
        </ul>
    @endforeach
</body>
</html>
