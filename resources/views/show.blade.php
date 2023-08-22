@extends('main-layout');

@section('title')
    {{ $movie->title }}
@endsection

@section('main')
    <div class="card p-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center mb-3">{{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
            <p class="card-text">{{ $movie->nationality }}</p>
            <p class="card-text">{{ $movie->date }}</p>
            <p class="card-text">{{ $movie->vote }}</p>
        </div>
    </div>

    <h1><a href="{{ route('home') }}">TORNA ALLA HOME PAGE</a></h1>
@endsection
