<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- style links -->
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

        <title>Restaurant Application</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light   ">
            <a style="margin-left:15px;" class="navbar-brand" href="/">Resto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="regester">Regester</a>
                    </li>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

