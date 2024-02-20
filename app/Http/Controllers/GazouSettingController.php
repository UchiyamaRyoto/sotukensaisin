<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Question;

class GazouSettingController extends Controller
{
    public function index(){
        $categories = Category::all();
        $collections = Collection::all();
        $questions = Question::all();

        return view('Gazou_Setting' , compact('categories', 'collections', 'questions'));
    }

    //節プルダウン出現
    public function getCollections(Request $request){
        //ajaxリクエストから取得
        $collectionId = $request->input('category_id');
        $collections = Collection::where('category_id', $collectionId)->get();

        return response()->json($collections);
    }

    //問題プルダウン出現
    public function getQuestions(Request $request){
        //ajaxリクエストから取得
        $collectionId = $request->input('collection_id');
        $questions = Question::where('question_id', $collectionId)->get();

        return response()->json($questions);
    }

    //画像アップロード
    public function upload(Request $request){

    }

    public function store(Request $request){
        $request->file('file')->store('public/question');

        return redirect()->route('test2.index');

    }
}
