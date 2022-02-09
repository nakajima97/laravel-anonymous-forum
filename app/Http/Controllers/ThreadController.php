<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function create()
    {
        return view('thread.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');

        $forum = new Forum();
        $forum->title = $title;
        $forum->save();

        return view('index');
    }
}
