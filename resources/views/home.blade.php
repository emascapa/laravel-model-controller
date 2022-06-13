@extends('layouts.app')

@section('pageName')
    Homepage
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="text-center">Movies in our DataBase:</h2>

        @forelse ($movies as $movie)

        <span>{{$movie->title}}</span>
            
        @empty

        <span class="lead text-center"> No movie found</span>
            
        @endforelse
    </div>
@endsection