<?php

namespace App\Http\Controllers;

use App\Models\ForumDiscussion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $discussions = ForumDiscussion::latest()->paginate(10);
        return view('forum.index', compact('discussions'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $discussion = ForumDiscussion::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(), // Assuming user is authenticated
        ]);

        return redirect()->route('forum.index')
            ->with('success', 'Discussion created successfully.');
    }

    // Add other methods as needed (show, edit, update, delete)
}
