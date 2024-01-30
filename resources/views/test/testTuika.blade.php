<!-- resources/views/test/testIchiran.blade.php -->

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/testTuika.css') }}">
    <title>Question List</title>
</head>
<body>
<main>
    <div class="button-container">
        <button>ボタン</button>
        <button>ボタン</button>
    </div>
</main>
</body>
<style>
    .button-container {
        display:inline-block;
        flex-direction: column; /* Set the direction to column to align buttons vertically */
        align-items: center; /* Center items horizontally */
        margin-top: 400px;
    }

    button {
        margin-bottom: 10px; /* Add some margin between buttons for better spacing */
    }
</style>
</html>
