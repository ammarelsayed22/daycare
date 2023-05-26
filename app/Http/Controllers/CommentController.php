<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{



    public function index()
    {
        $comments = comment::all();

        return view('backend.comments.all_comments' , compact('comments'));
    }
    public function create()
    {


        return view('backend.dad.comment');
    }



    public function store(Request $request)
    {
        $name    = $request->name;
        $email   = $request->email;
        $comment = $request->comment;
         $daycare_id =$request->daycare_id;

        $date    = date('Y-m-d');

        $posts = comment::create([
            'name' =>$name,
            'email' =>$email,
            'comment' =>$comment,
             'daycare_id'=>$daycare_id,
            'date' =>$date,
        ]);

        $posts->save();

       return redirect()->route('dad.dashboard');
    }


    public function edit($id)
    {
        $comments = comment::find($id);
        return view('backend.comments.edit_comment' , compact('comments'));
    }


    public function update(Request $request, $id)
    {
        $comments = comment::find($id);


        $validated = $request->validate([
            'comment' => 'required',
        ]);

        $comment = $request->comment;
        $comments->update([
            'comment' =>  $comment,
        ]);

        // $comments->save();

        return redirect()->route('dad.comments.all_comments');
    }


    public function destroy($id)
    {
        $comments = comment::find($id);
        $comments->delete();

        return redirect()->route('dad.comments.all_comments');
    }
}
