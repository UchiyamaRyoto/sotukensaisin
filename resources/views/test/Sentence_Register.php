<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/Question_Register.css') }}" rel="stylesheet">
    <link rel="stylesheet">
    <title>Question List</title>
</head>
<body>
<main>
    <div>
      <h1>hello world</h1>
        <onclick="myFunction()" ><button><h2>文章から問題を作成</h2></button>
        <a href= "https://google.com/" ><button><h2>画像から問題を作成</h2></button>
    </div>
    <script>
    function myFunction() {
        alert("ボタンがクリックされました！");
    }
</script>
</main>
</body>
<style>
  button{
    display:block;
    margin: auto;
    width: 300px;
    margin-top: 40px;
    background-color: green;
    width: 70em;
   height:10em;
  }
  div{
    text-align:center;
    margin-top: 30px;
  }
  h1{
    margin-top: 50px;
    margin-bottom: 130px;
  }
</style>
