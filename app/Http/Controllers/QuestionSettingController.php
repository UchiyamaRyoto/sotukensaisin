<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionSettingController extends Controller
{
    public function index(){
        $question_id = 1;

        return view('Question_Setting',['question_id'=>$question_id]);
    }

    public function update(Request $request){
        $publicStatus = $request->input('publicStatus');
        $questionCount = $request->input('questionCount');

        if($request->has('changeTextButton')) {

        }

        if($request->has('deleteQuestionButton')) {

        }

        if($request->has('backButton')) {

        }

        if($request->has('completeButton')) {
            $question = Question::find($request->question_id);
            $question->update([
                "public_flg" => $publicStatus,
                "question_number" => $questionCount,
            ]);

            return redirect()->route('test2.index');
        }
    }
}
