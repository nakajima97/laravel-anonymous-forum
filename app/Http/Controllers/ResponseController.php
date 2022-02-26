<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\Thread;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function store(Request $request)
    {
        $content = $request->input('content');

        $response = new Response();

        $thread = Thread::find($request->thread_id);
        $last_response_number = $thread->get_last_response_number();

        $response->content = $content;
        $response->thread_id = $request->input('thread_id');
        $response->response_number = $last_response_number + 1;
        $response->handle_name = "";
        $response->save();

        return redirect("/thread/show/1");
    }
}
