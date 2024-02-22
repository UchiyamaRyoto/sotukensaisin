<!-- resources/views/test/testIchiran.blade.php -->
@extends('layouts.header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Question List</title>
</head>
<body>
    <header>
      
    </header>
    <div class="tensu">
        点数：80点
    </div>
    <div class="kekka">
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="border: 1px solid black;">問題番号</th>
                    <th style="border: 1px solid black;">問題</th>
                    <th style="border: 1px solid black;">正誤</th>
                    <th style="border: 1px solid black;">答え</th>
                    <th style="border: 1px solid black;">解答</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                    <tr>
                        <td style="border: 1px solid black;">{{ $loop->iteration}}</td>
                        <td style="border: 1px solid black;">{{ $result->answer_texts}}</td>
                        <td style="border: 1px solid black;">{{ $result->answer_booleans}}</td>
                        <td style="border: 1px solid black;">{{ $result->correct1}}</td>
                        <td style="border: 1px solid black;">{{ $result->wrong1}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="button-container">
            <a href="{{route('test3')}}"><button>一覧へ</button></a>
        </div>

    </div>








    <script src="{{ asset('js/test2.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>

</body>
</html>
@endsection
