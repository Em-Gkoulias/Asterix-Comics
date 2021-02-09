@extends('layouts.app')

@section('content')
    <div class="mainPart container">
        <div class="sidebar">
            
            <div>
                <ul class="list-group">
                    <li class="list-group-item bg-danger text-dark text-center">
                        <h5 class="m-0">ISSUES</h5>
                    </li>
                    @foreach ($comics as $comic)
                    <li class="list-title list-group-item">
                        <a 
                            href="/comics/{{ $comic->id }}" 
                            class="text-dark">{{$comic->id}}. {{ $comic->title }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            
        </div>

        <div class="comics d-flex flex-wrap">
            @foreach ($comics as $comic)
            <div class="col-sm text-center font-weight-bold p-3">
                <a href="{{ $comic->url }}" target="_blank">
                    <img src="/storage/{{ $comic->image }}" alt="{{ $comic->title }} εξώφυλλο" style="height: 250px;">
                        {{-- <img src="/storage/{{ $comic->image }}" alt="{{ $comic->title }}"> --}}
                    </a>
                <p class="font-weight-light">{{ $comic->title }}</p>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection