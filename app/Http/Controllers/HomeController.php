<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Question;

class HomeController extends Controller
{
    
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fio'         => 'required|unique:users,fio',
            'subdivision' => 'required',
            'phone'       => 'required|unique:users,phone',
            'child_fio'   => 'required|unique:users,child_fio',
            'child_age'   => 'required',
        ]);

        if ($validator->fails()) {
            flash('Сотрудник с таким именем уже зарегистрирован.')->error();

            return redirect()->back();
        }

        $user = new User;
        $user->fio         = $request->fio;
        $user->subdivision = $request->subdivision;
        $user->phone       = $request->phone;
        $user->child_fio   = $request->child_fio;
        $user->child_age   = $request->child_age;

        if ($user->save()) {
            session(['uid' => $user->id]);
            flash('Вы успешно зарегистрировались, теперь можете приступить к выполнению задания.')->success();

            return redirect()->back();
        }
    }

    public function question()
    {
        if (!session('uid')) {
            return redirect()->to('/');
        }
        
        return view('question');
    }

}
