<nav class="navbar navbar-dark bg-dark navbar-expand">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-middle">
            <div class="d-flex">
                <a class="navbar-brand">MovieList</a>
            </div>
            <div class="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Actor</a>
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
    </div>
</nav>
