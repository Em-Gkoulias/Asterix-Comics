@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <form method="POST" action="/profiles/{{ $profile->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex">
                <div>
                    <div class="form-group pt-2">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ $profile->name }}" required>
                    </div>
                    <div class="form-group pt-2">
                        <label for="about_me">About me</label>
                        <textarea id="about_me" type="text" class="form-control" name="about_me">{{ $profile->about_me }}</textarea>
                    </div>
                    <div class="form-group pt-2">
                        <label for="image">Profile Image</label>
                        <input id="image" type="file" class="form-control" name="image" value="{{ $profile->profileImage() }}">
                    </div>
                    <button type="submit" class="btn btn-success mb-5">Αποθήκευση</button>
                </div>
            </div>
        </form>
    </div>
@endsection