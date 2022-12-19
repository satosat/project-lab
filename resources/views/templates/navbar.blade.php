<nav class="navbar navbar-dark bg-dark navbar-expand py-3">
    <div class="d-flex justify-content-between px-3 w-100">
        <div class="d-flex">
            <a class="navbar-brand">MovieList</a>
        </div>
        <div class="">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Movies</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ route('actors') }}">Actors</a>
                </li>
                <li class="nav-item me-3">
                    <form method="GET" action="{{ route('register') }}">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="GET" action="{{ route('login') }}">
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
