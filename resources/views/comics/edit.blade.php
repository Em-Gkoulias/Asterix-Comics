@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <form method="POST" action="/comics/{{ $comic->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="d-flex">
                <div>
                    <div class="form-group pt-2">
                        <label for="title">TITLE</label>
                        <input id="title" type="text" class="form-control" name="title" value="{{ $comic->title }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="issueID">ISSUE NUMBER</label>
                        <input id="issueID" type="number" class="form-control" name="issueID" value="{{ $comic->issueID }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="image">COVER</label>
                        <input id="image" type="file" class="form-control" name="image" value="{{ $comic->image }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="url">URL</label>
                        <input id="url" type="text" class="form-control" name="url" value="{{ $comic->url }}" required>
                    </div>
                    <button type="submit" class="btn btn-success mb-5">SAVE</button>
                </div>

                <div class="ml-5">
                    <div class="form-group pt-2">
                        <label for="authors">AUTHORS</label>
                        <input id="authors" type="text" class="form-control" name="authors" value="{{ $comic->authors }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="artists">ARTISTS</label>
                        <input id="artists" type="text" class="form-control" name="artists" value="{{ $comic->artists }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="published">PUBLISHED</label>
                        <input id="published" type="number" class="form-control" name="published" value="{{ $comic->published }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="publisher">PUBLISHER</label>
                        <input id="publisher" type="text" class="form-control" name="publisher" value="{{ $comic->publisher }}" required>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection