<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SentenceController extends Controller
{
    public function showSentenceRegister()
    {
        return view('Sentence_Register');
    }
}