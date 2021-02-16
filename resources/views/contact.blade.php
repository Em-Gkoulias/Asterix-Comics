@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="bg-danger text-center">ERROR REPORTS</h1>
        <div style="display: flex;" class="mt-4">
            <h3 class="mt-4">We are working hard in order to make your spending time here as good as we can. 
            However there is always the possibility that we are missing something. 
            If that's the case and you faced any errors or unexpected functionality in our page please fill this form
            and we are going to fix it as soon as possible.</h3>
            <img style="display: block" src="https://www.pngkit.com/png/full/400-4009603_this-is-a-game-of-asterix-themed-mafia.png" alt="">
        </div>
        <form method="POST" action="" enctype="multipart/form-data" class="w-100 mt-4 mb-3 ml-3">
            @csrf
            <textarea class="form-control" name="comment" id="comment" cols="30" rows="5"></textarea>
            <input class="btn btn-success mt-2" type="submit" value="Report Error">
        </form>
        
        
    </div>
@endsection