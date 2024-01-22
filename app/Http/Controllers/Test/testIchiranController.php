<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testIchiranModel;
use App\Models\testQuestionGroups;

class testIchiranController extends Controller
{
    public function index()
    {
        $questionCollections = testIchiranModel::all();
        $questionGroups = testQuestionGroups::all();

        return view('test.testIchiran' , compact('questionGroups', 'questionCollections'));
    }

    public function index2()
    {
        $questionCollections = testIchiranModel::all();
        $questionGroups = testQuestionGroups::all();

        return view('test.testAcodion' , compact('questionGroups', 'questionCollections'));
    }
}
