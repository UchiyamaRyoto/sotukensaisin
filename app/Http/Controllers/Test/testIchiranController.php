<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Question;

class testIchiranController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $collections = Collection::all();
        $questions = Question::all();

        return view('test.testAcodion' , compact('categories', 'collections', 'questions'));
    }

    public function index2()
    {
        $categories = Category::all();
        $collections = Collection::all();
        $questions = Question::all();

        return view('test.testAcodion' , compact('categories', 'collections', 'questions'));
    }
}
