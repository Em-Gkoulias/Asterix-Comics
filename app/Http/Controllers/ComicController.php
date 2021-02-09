<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Comment;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store()
    {
        // dd('ok');
        $data = request()->validate([
            'title' => ['required'],
            'issueID' => ['required'],
            'image' => ['required', 'image'],
            'url' => ['required'],
            'authors' => ['required'],
            'artists' => ['required'],
            'published' => ['required'],
            'publisher' => ['required']
        ]);

        // $imagePath = request('image')->store('uploads', 'public');
        // $image = Image::
        $imagePath = request('image')->store('uploads', 'public');

        Comic::create([
            'title' => $data['title'],
            'issueID' => $data['issueID'],
            'image' => $imagePath,
            'url' => $data['url'],
            'authors' => $data['authors'],
            'artists' => $data['artists'],
            'published' => $data['published'],
            'publisher' => $data['publisher']
        ]);

        // $comic->title = request('title');
        // $comic->issueID = request('issueID');
        // $comic->image = request('image');
        // $comic->url = request('url');
        // $comic->authors = request('authors');
        // $comic->artists = request('artists');
        // $comic->published = request('published');
        // $comic->publisher = request('publisher');

        // $comic->save();

        // dd($comic);

        return redirect('/comics');
    }

    public function show($comicId)
    {
        $comic = Comic::where('id', $comicId)->firstOrFail();

        $comments = Comment::latest()->get();

        $commentsCount = Comment::all()->count();

        return view('comics.show', compact('comic', 'comments', 'commentsCount'));
    }

    public function edit($comicId)
    {
        $comic = Comic::findOrFail($comicId);

        // dd($comic);
        return view('comics.edit', compact('comic'));
    }

    public function update(Comic $comic)
    {
        // dd($comic->image);

        $data = request()->validate([
        // dd(Comic::where('id', $comicId)->firstOrFail());
            'title' => ['required'],
            'issueID' => ['required'],
            'image' => '',
            'url' => ['required'],
            'authors' => ['required'],
            'artists' => ['required'],
            'published' => ['required'],
            'publisher' => ['required']
        ]);

        if(request('image'))
        {
            $imagePath = request('image')->store('uploads', 'public');
        }

        // dd(request('image'));
        // $imagePath = request('image')->store('uploads', 'public');

        $comic->update([
            'title' => $data['title'],
            'issueID' => $data['issueID'],
            'image' => $imagePath,
            'url' => $data['url'],
            'authors' => $data['authors'],
            'artists' => $data['artists'],
            'published' => $data['published'],
            'publisher' => $data['publisher']
        ]);

        // dd($comic);

        return redirect('/comics');
    }
}
