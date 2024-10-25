<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('questions.create', compact('subjects'));
    }

    public function store(Request $request){
        $request->validate(
            [
                'subject_id' => 'required|integer|exists:subjects,id',
                'question_text' => 'required|string|max:255',
                'answers'=> 'required|array|min:2|max:4',
                'answers.*.is_correct' => 'required|boolean',
            ],
        );

        $question = Question::create([
            'subject_id' => $request->subject_id,
            'question_text' => $request->question_text,
        ]);

        foreach ($request->answers as $answer) {
            if(isset($answer['answer_text']) && $answer['answer_text'] != ''){  
                Answer::create([
                    'question_id' => $question->id,
                    'answer_text' => $answer['answer_text'],
                    'is_correct' => $answer['is_correct'],
                ]);
            }
        }

        
        return redirect()->back()->with('success', 'Question stored.');
    }

    public function anita(){
        $questions = Question::all();
        return view('questions.anita', compact('questions'));
    }

    public function update(){

    }
    public function destroy(){

    }

}
