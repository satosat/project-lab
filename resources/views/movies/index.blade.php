@extends('templates.master')

@section('title', 'Home Page')

@section('content')

    {{-- Banner --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/background_greatest.jpeg" alt="Matrix" class="d-block" style="width:100%; height:500px">
                <div class="carousel-caption text-white mb-lg-5 text-right">
                    <div class="row-sm-2 mb-3 d-flex">Action | 2021</div>
                    <div class="row-sm-2 mb-3 d-flex">
                        <h3>The Greatest Showman</h3>
                    </div>
                    <div class="row-sm-2 mb-lg-5 d-flex">
                        <p>Description</p>
                    </div>

                    <div class="row-sm-2 mb-lg-5 d-flex">
                        <button class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path
                                    fill-rule="evenodd"d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                            Add To WatchLists
                        </button>
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <img src="/images/background_spiderman.webp" alt="Matrix" class="d-block"
                    style="width:100%; height:500px">
                <div class="carousel-caption text-white mb-lg-5 text-right">
                    <div class="row-sm-2 mb-3 d-flex">Action | 2021</div>
                    <div class="row-sm-2 mb-3 d-flex">
                        <h3>Spiderman : No Way Home</h3>
                    </div>
                    <div class="row-sm-2 mb-lg-5 d-flex">
                        <p>To find out if his reality is a physical or mental construct</p>
                    </div>
                    <div class="row-sm-2 mb-lg-5 d-flex">
                        <button class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                            Add To WatchLists
                        </button>
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <img src="/images/background_spiderman.webp" alt="Matrix" class="d-block"
                    style="width:100%; height:500px">
                <div class="carousel-caption text-white mb-lg-5 text-right">
                    <div class="row-sm-2 mb-3 d-flex">Action | 2021</div>
                    <div class="row-sm-2 mb-3 d-flex">
                        <h3>Spiderman : No Way Home</h3>
                    </div>
                    <div class="row-sm-2 mb-lg-5 d-flex">
                        <p>To find out if his reality is a physical or mental construct</p>
                    </div>
                    <div class="row-sm-2 mb-lg-5 d-flex">
                        <button class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                            Add To WatchLists
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next text-dark" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="content">
        <div class="popular text-white d-flex m-5 align-self-center">
            <div class="logo-popular px-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fire"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                </svg>
            </div>
            <p class="text-popular" style="font-size: 150%">Popular</p>
        </div>

        {{-- Popular Movie --}}
        <div class="row px-5">
            @foreach ($movies as $movie)
                <div class="card bg-dark text-white border-0 m-3" style="width: 230px">
                    <a href={{ 'movies/' . $movie->id }} style="text-decoration:none;color:white">
                        <img src={{ 'images/' . $movie->thumbnail_source }} alt="" class="card-img-top mt-2"
                            style="width:100%; height:300px">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>{{ $movie->title }}</h5>
                            </div>
                            <div class="card-text">{{ date('Y', strtotime($movie->release_date)) }}</div>
                        </div>
                    </a>
                </div>
            @endforeach

            <div class="m-2 d-flex justify-content-center page-item disabled">
                {{ $movies->links() }}
            </div>
        </div>

        {{-- Show + search --}}
        <div class="mt-3 d-flex justify-content-between">
            <div class="logo-text text-white d-flex m-5 align-self-center">
                <div class="logo px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-window" viewBox="0 0 16 16">
                        <path
                            d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                        <path
                            d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z" />
                    </svg>
                </div>
                <p class="text" style="font-size: 150%">Show</p>
            </div>
            <div class="search-movie mx-5 align-self-center">
                <form action={{ route('home') }}>
                    <div class="form-outline btn-secondary d-flex">
                        <input type="search" id="" class="form-control bg-dark text-white mx-3"
                            placeholder="Search movie..." name="search" />
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </form>
            </div>
        </div>

        {{-- Genre --}}
        <div class="text-white row mx-5">
            @foreach ($genres as $genre)
                <div class="col m-2">
                    <button type="button" class="btn btn-secondary" style="width:150px;"
                        onclick="">{{ $genre->genre }}</button>
                </div>
            @endforeach
        </div>

        {{-- Sort by --}}
        <div class="text-white row mt-5 mx-5 align-middle">
            <p style="font-size: 150%">Sort By</p>
            <div class="col-1"><a class="btn btn-secondary" style="width:100px">Lastest</a></div>
            <div class="col-1"><a class="btn btn-secondary" style="width:100px">A-Z</a></div>
            <div class="col-1"><a class="btn btn-secondary" style="width:100px">Z-A</a></div>
        </div>

        {{-- Admin only --}}
        @if (Gate::allows('admin', Auth::user()))
            <div class="mt-4 mb-3 mx-5 d-flex justify-content-end">
                <a href="{{ route('movies.create') }}">
                    <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                        Add Movie
                    </button>
                </a>
            </div>
        @endif

        {{-- Movie Search Guest --}}
        <div class="row px-5">
            @foreach ($movies as $movie)
                <div class="card bg-dark text-white border-0 m-3" style="width: 230px">
                    <a href={{ 'movies/' . $movie->id }} style="text-decoration:none;color:white">
                        <img src={{ 'images/' . $movie->thumbnail_source }} alt="" class="card-img-top mt-2"
                            style="width:100%; height:300px">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>{{ $movie->title }}</h5>
                            </div>
                            <div class="card-text d-flex justify-content-between">
                                <div class="year">{{ $movie->release_date }}</div>
                                {{-- Movie Search Login --}}
                                <div class="add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
