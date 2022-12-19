@extends('templates.master')

@section('title', 'Home Page')

@section('content')

    <div class="banner bg-dark text-white">
        <div class="banner-bg d-flex align-items-middle carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/banner_matrix.jpeg" alt="Matrix" class="d-block" style="width:100%; height:500px">
                    <div class="carousel-caption text-white mb-lg-5 text-right">
                        <div class="row-sm-2 mb-3 d-flex">
                            <div class="col-sm-1">
                                Action
                            </div>
                            <div class="col-sm-1">
                                |
                            </div>
                            <div class="col-sm-1">
                                2021
                            </div>
                        </div>

                        <div class="row-sm-2 mb-3 d-flex">
                            <h3>The Matrix Reserrections</h3>
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

                <div class="carousel-item">
                    <img src="/images/banner_greatest.jpeg" alt="Greatest Show Man" class="d-block"
                        style="width:100%; height:500px">
                    <div class="carousel-caption text-white mb-lg-5 text-right">
                        <div class="row-sm-2 mb-3 d-flex">
                            <div class="col-sm-1">
                                Musical
                            </div>
                            <div class="col-sm-1">
                                |
                            </div>
                            <div class="col-sm-1">
                                2017
                            </div>
                        </div>

                        <div class="row-sm-2 mb-3 d-flex">
                            <h3>The Greatest Showman</h3>
                        </div>

                        <div class="row-sm-2 mb-lg-5 d-flex">
                            <p>After trying his hands at various jobs, P.T. turns to show business.</p>
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

                <div class="carousel-item">
                    <img src="/images/banner_spiderman.webp" alt="Black Panther" class="d-block"
                        style="width:100%; height:500px">
                    <div class="carousel-caption text-white mb-lg-5 text-right">
                        <div class="row-sm-2 mb-3 d-flex">
                            <div class="col-sm-1">
                                Action
                            </div>
                            <div class="col-sm-1">
                                |
                            </div>
                            <div class="col-sm-1">
                                2021
                            </div>
                        </div>

                        <div class="row-sm-2 mb-3 d-flex">
                            <h3>Spiderman : No Way Home</h3>
                        </div>

                        <div class="row-sm-2 mb-lg-5 d-flex">
                            <p>With Spider-Man's identity now revealed, our friendly neighborhood web-slinger is unmasked.
                            </p>
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
        </div>
    </div>

    <div class="content-popular">
        <div class="popular text-white d-flex m-5 align-self-center">
            <div class="logo-popular px-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fire"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                </svg>
            </div>
            <div class="text-popular" style="font-size: 150%">
                Popular
            </div>
        </div>

        <div class="popular-movie">
            <div class="box d-flex justify-content-around">

                <div class="arrow-left text-white align-self-center">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                        </svg>
                    </a>
                </div>

                <div class="movie-box">
                    <div class="movie">
                        <img src="images/matrix.jpg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            The Matrix Reserrections
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box">
                    <div class="movie">
                        <img src="images/encanto.jpeg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            Encanto
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box">
                    <div class="movie">
                        <img src="images/greatest.png" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            The Greatest Showman
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box">
                    <div class="movie">
                        <img src="images/spiderman.jpg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            Spiderman: No Way Home
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box">
                    <div class="movie">
                        <img src="images/minion.jpeg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            The Minions: The rise of gru
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box">
                    <div class="movie">
                        <img src="images/blackpanther.jpeg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            Black Panther
                        </div>
                        <div class="year">
                            2018
                        </div>
                    </div>
                </div>

                <div class="arrow-right text-white align-self-center">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="content-show mt-5">
            <div class="show d-flex justify-content-between">
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
                    <div class="text" style="font-size: 150%">
                        Show
                    </div>
                </div>

                <div class="search-movie mx-5 align-self-center">
                    <div class="form-outline btn-secondary">
                        <input type="search" id="form1" class="form-control bg-dark text-white"
                            placeholder="Search movie..." />
                    </div>
                </div>
            </div>
        </div>

        <div class="history-genre">
            <div class="text-white d-flex mx-5">
                <div class="genre col">
                    <button type="button" class="btn btn-secondary" style="width:150px;">Comedy</button>
                </div>

                <div class="genre col">
                    <button type="button" class="btn btn-secondary" style="width:150px">Crime</button>
                </div>

                <div class="genre col">
                    <button type="button" class="btn btn-secondary" style="width:150px">Family</button>
                </div>

                <div class="genre col">
                    <button type="button" class="btn btn-secondary" style="width:150px">Fantasy</button>
                </div>

                <div class="genre col">
                    <button type="button" class="btn btn-secondary" style="width:150px">Drama</button>
                </div>

                <div class="genre col">
                    <button type="button" class="btn btn-secondary" style="width:150px">History</button>
                </div>
            </div>
        </div>

        <div class="sort-by text-white d-flex mt-5 px-5 align-middle">
            <div class="sort" style="font-size: 150%">
                Sort By
            </div>
            <div class="sort d-flex justify-content-between px-5">
                <div class="sorted-by px-4">
                    <button type="button" class="btn btn-secondary" style="width:100px">Lastest</button>
                </div>
                <div class="sorted-by px-4">
                    <button type="button" class="btn btn-secondary" style="width:100">A-Z</button>
                </div>
                <div class="sorted-by px-4">
                    <button type="button" class="btn btn-secondary" style="width:100px">Z-A</button>
                </div>
            </div>
        </div>

        {{-- Admin only --}}
        <div class="add-movie mt-4 mx-5 d-flex justify-content-end">
            <button class="btn btn-danger d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
                <a href="{{ route('create new movie') }}" class="text-decoration-none text-white">Add Movie</a>
            </button>
        </div>

        <div class="sorted-movie mt-5 mb-5">
            <div class="box d-flex justify-content-around mx-5">

                <div class="movie-box col">
                    <div class="movie">
                        <img src="images/matrix.jpg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            The Matrix Reserrections
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box col">
                    <div class="movie">
                        <img src="images/encanto.jpeg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            Encanto
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box col">
                    <div class="movie">
                        <img src="images/greatest.png" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            The Greatest Showman
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box col">
                    <div class="movie">
                        <img src="images/spiderman.jpg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            Spiderman: No Way Home
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box col">
                    <div class="movie">
                        <img src="images/minion.jpeg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            The Minions: The rise of gru
                        </div>
                        <div class="year">
                            2021
                        </div>
                    </div>
                </div>

                <div class="movie-box col">
                    <div class="movie">
                        <img src="images/blackpanther.jpeg" alt=""
                            style="background-size: 90%; height: 300px; width : 200px ">
                    </div>
                    <div class="movie text-white align-self-right">
                        <div class="title">
                            Black Panther
                        </div>
                        <div class="year">
                            2018
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
