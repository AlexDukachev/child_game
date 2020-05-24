<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $answer = Question::answer($request);

        if ($answer) return response()->json(['success' => true], 200);
        else return response()->json(['success' => false], 500);
    }

    public function success()
    {
        return view('success');
    }
}
