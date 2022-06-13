@extends('layouts.app')

@section('pageName')
    Homepage
@endsection

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-4">Movies in our DataBase:</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            @forelse ($movies as $movie)

                <div class="col">
                    <div class="card h-100">
                        <img class="img-fluid" src="https://betravingknows.com/wp-content/uploads/2017/06/video-movie-placeholder-image-grey.png" alt="{{ $movie->title }}">
                    
                        <div class="card-body text-dark">
                            <h4 class="text-center mb-3">{{ $movie->title  }}</h4>
                            <ul class="list-unstyled">

                                <li>Original Title: {{ $movie->original_title }}</li>
                                <li>Nationality: {{ $movie->nationality }}</li>
                                <li>Release date: {{ $movie->date }}</li>
                                <li>Rating: {{ $movie->vote }}/10</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

            @empty

                <span class="lead text-center"> No movie found</span>
            @endforelse
        </div>
    </div>
@endsection
