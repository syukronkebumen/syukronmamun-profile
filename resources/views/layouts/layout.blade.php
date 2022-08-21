<!doctype html>
<html lang="en" class="h-100">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap Bundle with Popper -->
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <title>Hallo Welcome to My Profile</title>
    </head>
    <body class="text-center">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
            <h3 class="masthead-brand">Cover</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Contact</a>
            </nav>
            </div>
        </header>
        <main class="px-1">
            @yield('content')
        </main>
        
        <footer class="mt-auto text-white-50">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="/experience" class="nav-link px-2 text-muted">Experience</a></li>
                <li class="nav-item"><a href="/education" class="nav-link px-2 text-muted">Education</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link px-2 text-muted">Contact</a></li>
            </ul>
            <p class="text-center text-muted">Copyright © 2022 Syukron Ma'mun Profile. All rights reserved</p>
        </footer>
        </div>
    </body>
</html>