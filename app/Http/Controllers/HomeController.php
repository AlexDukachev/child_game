<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function question()
    {
        $question = Question::paginate(1);

        return view('question', compact('question'));
    }

    public function answer(Request $request)
    {
        $question = Question::where('id', $request->question)->first();
        $answer = Question::answer($request);

        if ($answer) return response()->json(['success' => true, 'correct' => $question->answer], 200);
        else return response()->json(['success' => false], 500);
    }

    public function success()
    {
        return view('success');
    }

    public function result(Request $request)
    {
        $result = Question::result($request);

        if ($result) return response()->json(['success' => true], 200);
        else return response()->json(['success' => false], 500);
    }

    public function result()
    {
        $result = Question::results();

        dd($result);
    }
}
