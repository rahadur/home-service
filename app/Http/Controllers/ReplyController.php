<?php

namespace App\Http\Controllers;

use App\ProblemReply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    //
    public function create(Request $request)
    {
        $request->validate([
          'problem_id' => 'required',
          'from_user_id' => 'required',
          'to_user_id' => 'required',
          'message' => 'required'
        ]);

        ProblemReply::create($request->all());


        return redirect('/users/problems/'.$request->problem_id);
    }




    public function adminCreate(Request $request)
    {
        $request->validate([
          'problem_id' => 'required',
          'from_user_id' => 'required',
          'to_user_id' => 'required',
          'message' => 'required'
        ]);

        ProblemReply::create($request->all());


        return redirect('/admin/problems/'.$request->problem_id);
    }
}
