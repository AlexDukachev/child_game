<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;

class HomeController extends Controller
{
    
    public function signup(Request $request)
    {
        dd($request->all());
    }

}
