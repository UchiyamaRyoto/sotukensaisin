<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question_RegisterController extends Controller
{
    //
  public function showQuestion_Register ()
  {
    return view('/Question_Register');
  }

  public function showSentence_Register ()
  {
    return view('/Sentence_Register');
  }
}