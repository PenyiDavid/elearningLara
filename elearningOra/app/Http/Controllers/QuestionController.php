<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('questions.create', compact('subjects'));
    }

    public function store(Request $request){

    }
}
