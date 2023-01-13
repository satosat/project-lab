<nav class="navbar navbar-dark bg-dark navbar-expand py-3">
    <div class="d-flex justify-content-between px-3 w-100">
        <div class="d-flex">
            <a href="{{ route('home') }}" class="navbar-brand">MovieList</a>
        </div>
        <div class="">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Movies</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ route('actors') }}">Actors</a>
                </li>
                @auth
                    @can('user')
                        {{-- Watchlist --}}
                        <li class="nav-item me-2">
                            <a class="nav-link" href="{{ route('watchlists.search') }}">My Watchlist</a>
                        </li>
                    @endcan

                    {{-- Profile --}}
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{ route('user') }}">Profile</a>
                    </li>

                    {{-- Logout --}}
                    <li class="nav-item me-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-danger" type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    {{-- Register --}}
                    <li class="nav-item me-3">
                        <form method="GET" action="{{ route('register.create') }}">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </li>

                    {{-- Login --}}
                    <li class="nav-item">
                        <a href="{{ route('login') }}">
                            <button type="submit" class="btn btn-outline-primary">Login</button>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
