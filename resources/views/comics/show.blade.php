@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <img src="/storage/{{ $comic->image }}" alt="image" class="col-3">
        <div class="container">
            <h1 style="display: inline"><u>{{ $comic->title }}</u></h1>            
            <h5 class="text-danger">AUTHORS: <span class="text-dark">{{ $comic->authors }}</span></h5>
            <h5 class="text-danger">ARTISTS: <span class="text-dark">{{ $comic->artists }}</span></h5>
            <div class="">
                <h5 class="text-danger">DESCRIPTION:
                <span class="text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam ratione, quibusdam nemo voluptatibus 
                    harum corporis? Excepturi tempore in sint, odit autem saepe omnis sit quos a recusandae culpa sequi 
                    aperiam quae fugit dolores atque nulla dolor aliquam? Eos explicabo, officiis laborum voluptates, 
                    obcaecati laudantium doloribus dolor accusantium fuga sapiente neque.</span>
                    </h5>
            </div>
            <a class="btn btn-success" href="/comics/{{ $comic->id }}/edit">Edit</a>            
        </div>
    </div>

    <div class="container p-0  mt-5 border">
        <div class="bg-light">
            <h4 class="p-0 pl-4 m-0 bg-primary text-light">{{ $commentsCount }} COMMENTS ON {{ $comic->title }}</h4>
            @if (Auth::check())
            <div class="commentSection d-flex w-100 mt-3 mb-3">
                <div class="pl-3">
                    <h4 class="text-center">{{ Auth::user()->name }}</h4>
                    <img src="{{ Auth::user()->profile->profileImage() }}" alt="image here" style="height:100px; width:100px; border-radius:50%">
                </div>
                <form method="POST" action="/comics/{{ $comic->id }}" enctype="multipart/form-data" class="w-100 mb-3 ml-3">
                    @csrf
                    <textarea class="form-control" name="comment" id="comment" cols="30" rows="5"></textarea>
                    <input class="btn btn-success mt-2" type="submit" value="Add comment">
                </form>
            </div>
            <div class="comments mt-5">
                @foreach ($comments as $comment)
                <div class="d-flex mb-4">
                    <div class="details w-25">
                        <p class="text-center mb-0">{{ $comment->profile->name }}</p>
                        <div class="text-center">
                            <img style="border-radius: 50%; height:75px; width: 75px;" class="img-fluid" src="{{ $comment->profile->profileImage() }}" alt="image here">
                        </div>  
                    </div>
                    <div class="w-100 mr-3">
                        <p class="comment-text border rounded bg-white ml-0 p-3 mb-0">
                            {{ $comment->text }}
                        </p>
                        <p class="text-right">
                            {{ $comment->created_at }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
                <div class="p-2">
                    Sorry but you have to be signed in in order to see the comments. You can <a class="" href="/login">Login</a>
                    here if you have an account or <a class="" href="/register">Register</a> here to create a new one.
                </div>
            @endif
        </div>
        
    </div>
@endsection