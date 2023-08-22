@extends('main-layout');

@section('main')
    <div class="container mt-5">
        <div class="row row-cols-4 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <a href="{{ route('show', $movie->id) }}" class="card p-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
