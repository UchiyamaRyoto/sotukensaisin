<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\test;

//php artisan make:controller Test/HelloController フォルダごとコントローラ作成

//namespace App\Http/Controllers/Test　名前空間、同じメソッド内でも異なれば別のメソッド
//use Illuminate/Http/Request　指定した名前空間のインポート、APIのRequestを定義
//class QuizTextController extends Controller　定義したクラス名に、親クラスとしてControllerクラスを継承

//Route::get('msg','App/Http/Controllers/HelloController@message')　ＵＲＩがmsgにアクセスしたらHelloControllerのmessageメソッドを実行

class QuizTextController extends Controller
{
    public function index()
    {
        $tes = test::all();
        return view('test.test', compact('tes'));
    }
}
