<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Question;

class KekkaController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $collections = Collection::all();
        $questions = Question::all();

        return view('test.testCheckScore' , compact('categories', 'collections', 'questions'));
    }

    public function tuika()
    {
        
    }
}
