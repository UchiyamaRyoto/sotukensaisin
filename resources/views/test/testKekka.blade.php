<!-- resources/views/test/testIchiran.blade.php -->
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/testKekka.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
    <title>Question List</title>
</head>
<body>
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
                @foreach(range(1, 5) as $number)
                    <tr>
                        <td style="border: 1px solid black;">{{ $number }}</td>
                        <td style="border: 1px solid black;">16世紀ドイツで、贖宥状を批判し、九十五か条の論題を提起したのは誰？</td>
                        <td style="border: 1px solid black;">×</td>
                        <td style="border: 1px solid black;">ルター</td>
                        <td style="border: 1px solid black;">ウィクリフ</td>
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
