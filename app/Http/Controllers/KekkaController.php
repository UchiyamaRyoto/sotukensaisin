<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Question;

//use App\Models\Answer;
//use App\Models\AnswerGroup;
use App\Models\AnswerToAnswerGroup;

class KekkaController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $collections = Collection::all();
        $questions = Question::all();

        return view('test.testCheckScore' , compact('categories', 'collections', 'questions'));
    }

    public function index2()
    {
        $results = AnswerToAnswerGroup::join('answers', 'answerToAnswerGroup.answer_no', '=', 'answers.answer_no')
                                        ->where('answerToAnswerGroup.answer_group_id', 1)
                                        ->get();
        
        return view('test.testKekka', compact('results'));
    }
}
