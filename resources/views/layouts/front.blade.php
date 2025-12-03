<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a href="/" class="navbar-brand">My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('demo.index') }}" class="nav-link">Home</a>
                </li>
                @if (session()->has('user_id'))
                    <li class="nav-item">
                        <a href="{{ route('demo.profile') }}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('demo.dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="/about" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    @if (session()->has('user_id'))
                        <form action="{{ route('demo.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                      @else
                        <a href="{{ route('demo.login') }}" class="nav-link">Login</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
    <main class="px-4 py-3">
        @yield('content')
    </main>
</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</html>
