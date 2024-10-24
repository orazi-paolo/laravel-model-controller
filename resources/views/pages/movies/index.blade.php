@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<div class="container">
    <div class="row">
        @foreach($movies as $movie)
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-subtitle">{{ $movie->original_title }}</p>
                        <p class="card-text"> {{ $movie->nationality }}</p>
                        <p class="card-text">{{ $movie->date }}</p>
                        <p class="card-text">{{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
