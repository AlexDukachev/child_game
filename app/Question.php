<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class Question extends Model
{
    
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

}
