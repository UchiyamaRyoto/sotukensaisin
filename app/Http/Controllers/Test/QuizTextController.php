<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\test;
use Carbon\Carbon;

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

    public function post(Request $request)
    {
        if ($request->has('insert')){
            $this->store($request);
        }elseif ($request->has('update')){
            $this->update($request);
        }
    }

    public function store(Request $request)
    {
        $now = Carbon::now();

        $tes = new test;

        $tes->name=$request->input('name');
        $tes->tensu=$request->input('tensu');
        $tes->content=$request->input('content');
        $tes->deleted_flag=0;
        $tes->created_at=$now;
        $tes->updated_at=$now;

        $tes->save();

        return redirect('test');

    }

    public function update($id)
    {
        $now = Carbon::now();

        $tes = test::find($request->input('id'));

        $tes->name=$request->input('name');
        $tes->tensu=$request->input('name');
        $tes->content=$request->input('content');
        $tes->updated_at= $now;

        $tes->save();

        return redirect('test');
    }
    
}
