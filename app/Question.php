<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class Question extends Model
{

    public static function result($request)
    {
        $query = DB::table('user_success');
        return $query->insertGetId([
            'uid' => Auth::user()->id,
            'result' => $request->result == 'success' ? 1 : 0
        ]);
    }
    
    public static function answer($request)
    {
        // $query = DB::table('user_answers');
        // $query->where('uid', Auth::user()->id);
        // $query->where('question', $request->question);
        // $count = $query->count();

        // if ($count > 0) {
        //     $query = DB::table('user_answers');
        //     $query->where('uid', Auth::user()->id);
        //     $query->where('question', $request->question);
        //     $query->update([
        //         'uid'       => Auth::user()->id,
        //         'question'  => $request->question,
        //         'answer'    => $request->answer,
        //     ]);

        //     return true;
        // }
        // else {
            $query = DB::table('user_answers');
            return $query->insertGetId([
                'uid'       => Auth::user()->id,
                'question'  => $request->question,
                'answer'    => $request->answer,
            ]);
        // }
    }

    public static function results()
    {
        $query = DB::table('user_answers');
        $query->join('users', 'user_answers.uid', '=', 'users.id');
        $query->join('questions', 'user_answers.question', '=', 'questions.id');
        $query->select([
            'users.name',
            'users.subdivision',
            'users.child_name',
            'users.child_age',
            'questions.question',
            'questions.answer as correct',
            'user_answers.answer',
            DB::raw('DATE_ADD(user_answers.created_at, INTERVAL 6 HOUR) as created_at'),
        ]);
        $query->orderBy('user_answers.uid');
        $query->orderBy('user_answers.created_at');
        $query->orderBy('user_answers.id');
        return $query->get();
    }

}
