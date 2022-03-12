<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(Request $request)
    {
        $threads = Thread::paginate(5);

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

        $thread = new Thread();
        $thread->title = $title;
        $thread->save();

        $id = $thread->id;

        return redirect("/thread/show/${id}");
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $threads = Thread::where('title', 'LIKE', "%$keyword%")->paginate(20);

        return view('thread.search', ['threads' => $threads]);
    }
}
