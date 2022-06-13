<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('pageName')
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    </head>
    <body>
        <header class="bg-light">
            <nav class="nav justify-content-center">
              <a class="nav-link active" href="{{route('index')}}">Home</a>
              <a class="nav-link" href="{{route('ratingPage')}}">Rate a Movie</a>
              {{-- <a class="nav-link disabled" href="#">Disabled link</a> --}}
            </nav>
        </header>

        <main class="bg-dark text-light">

            @yield('content')

        </main>

        <footer class="bg-light">

            <div class="py-3 d-flex align-items-center justify-content-center">
                <span>Awesome Footer &copy;</span>
            </div>

        </footer>

    </body>
</html>
