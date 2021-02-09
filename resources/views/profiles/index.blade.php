@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        {{-- <img src="/storage/{{ $comic->image }}" alt="image" class="col-3""> --}}
        <div class="container">
            <img src="{{ $profile->profileImage() }}" alt="image" style="height:150px; width:150px; border-radius:50%">
            <h1>{{ $profile->name }}</h1>
            <div class="d-flex">
                <p><strong>About me:</strong></p>
                <p class="pl-4">{{ $profile->about_me }}</p>
            </div>
            <a href="/profiles/{{ $profile->id }}/edit" class="btn btn-success">Edit</a>
        </div>
    </div>
@endsection