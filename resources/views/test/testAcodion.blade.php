<!-- resources/views/test/testIchiran.blade.php -->

@include('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet"> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    
  
    
</head>

<body>
  <header>
  </header>
  <main>
    <div class="section s_01">
        <div class="containerLabel">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="section_midasi"><span>既存</span></h2>
                </div>
                <div class="col-md-2">
                    <div class="btn-wrap">
                        <a href="" class="btn btn-border-shadow">追加</a>
                    </div>
                </div>
            </div>
        </div>
        @foreach($questionCollections ?? '' as $collection)
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
        <div class="containerLabel">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="section_midasi2"><span>ユーザー追加</span></h2>
                </div>
                <div class="col-md-2">
                    <div class="btn-wrap">
                        <a href="" class="btn btn-border-shadow">追加</a>
                    </div>
                </div>
            </div>
        </div>
        @foreach($questionCollections ?? '' as $collection)
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
</main>
    <script src="{{ asset('js/test2.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>

</body>
</html>
