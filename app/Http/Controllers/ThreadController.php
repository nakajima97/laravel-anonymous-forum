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
        $comments = $thread->comments();

        return view('thread.show', ['thread' => $thread, 'comments' => $comments]);
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

        return view('thread.index');
    }
}
