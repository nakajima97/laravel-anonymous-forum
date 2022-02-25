<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function store(Request $request)
    {
        $comment_of_request = $request->input('comment');

        $comment = new Comment();
        $comment->comment = $comment_of_request;
        $comment->thread_id = $request->input('thread_id');
        $comment->comment_number = 1;
        $comment->handle_name = "";
        $comment->save();

        return redirect("/thread/show/1");
    }
}
