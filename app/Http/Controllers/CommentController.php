<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Comic;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Comic $comic)
    {
        $data = request()->validate([
            'comment' => ['required']
        ]);

        Comment::create([
            'comic_id' => $comic->id,
            'profile_id' => Auth::user()->id,
            'text' => $data['comment']
        ]);
        
        // dd($comic);

        return redirect('/comics/' . $comic->id);
    }
}
