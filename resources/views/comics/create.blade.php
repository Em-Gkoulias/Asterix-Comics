@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <form method="POST" action="/comics" enctype="multipart/form-data">
            @csrf
            
            <div class="d-flex">
                <div>
                    <div class="form-group pt-2">
                        <label for="title">TITLE</label>
                        <input id="title" type="text" class="form-control" name="title" request>
                    </div>
                    <div class="form-group pt-2">
                        <label for="issueID">ISSUE NUMBER</label>
                        <input id="issueID" type="number" class="form-control" name="issueID" request>
                    </div>
                    <div class="form-group pt-2">
                        <label for="image">COVER</label>
                        <input id="image" type="file" class="form-control" name="image" request>
                    </div>
                    <div class="form-group pt-2">
                        <label for="url">URL</label>
                        <input id="url" type="text" class="form-control" name="url" request>
                    </div>
                    <button type="submit" class="btn btn-success mb-5">SAVE</button>
                </div>

                <div class="ml-5">
                    <div class="form-group pt-2">
                        <label for="authors">Authors</label>
                        <input id="authors" type="text" class="form-control" name="authors" request>
                    </div>
                    <div class="form-group pt-2">
                        <label for="artists">Artists</label>
                        <input id="artists" type="text" class="form-control" name="artists" request>
                    </div>
                    <div class="form-group pt-2">
                        <label for="published">Published</label>
                        <input id="published" type="number" class="form-control" name="published" request>
                    </div>
                    <div class="form-group pt-2">
                        <label for="publisher">Publisher</label>
                        <input id="publisher" type="text" class="form-control" name="publisher" request>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection