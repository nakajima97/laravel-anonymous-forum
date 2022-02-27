<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(Request $request)
    {
        $threads = Thread::all();

        return view('thread.index', ['threads' => $threads]);
    }

    public function show(Request $request, $id)
    {
        $thread = Thread::find($id);
        $responses = $thread->responses;

        return view('thread.show', ['thread' => $thread, 'responses' => $responses]);
    }

    public function create()
    {
        return view('thread.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');

        $forum = new Thread();
        $forum->title = $title;
        $forum->save();

        return redirect('/');
    }
}
