@extends('templates.master')

@section('title', 'Home Page')

@section('content')

    <div class="banner bg-dark text-white">
        <img src="/images/banner_matrix.jpeg" alt="" style="height: 500px; width: 100%; opacity: 0.5">

        <div class="content d-flex justify-content-evenly mx-5 mt-5" >
            <div class="img col-sm-3">
                <img src="/images/matrix.jpg" alt="" style=" height: 300px; width : 200px; opacity: 1">
            </div>

            <div class="col">
                <div class="row m-2">
                    <h2>The Matrix Reserrections</h2>
                </div>

                <div class="row genre m-4">
                    <div class="col-sm-2">Genre</div>
                    {{-- @foreach ($collection as $item) --}}
                        <div class="col-sm-1">
                            <span class="border border-1 rounded p-1">Action</span>
                        </div>
                    {{-- @endforeach --}}
                </div>

                <div class="row year m-4">
                    <div class="col-sm-2">Release Year</div>
                    <div class="col">2021</div>
                </div>

                <div class="row storyLine m-4">
                    <div class="col-sm-2">Storyline</div>
                    <div class="col">description</div>
                </div>

                <div class="row director m-4">
                    <div class="col-sm-2">Director</div>
                    <div class="col">Name Director</div>
                </div>
            </div>
        </div>
    </div>

    <div class="actor mt-4 text-white">
        <div class="row mb-2 mx-5">
            <h4>Actor</h4>
        </div>
        
        <div class="row">
            {{-- @foreach ($collection as $item) --}}
            <div class="col-1 mx-5">
                <div class="card bg-dark text-white border-0" style="width: 200px; ">
                    <img src="/images/encanto.jpeg" alt="" class="card-img-top">
                    <div class="card-body bg-danger">
                        <div class="actor-name card-title">Keanu Reeves</div>
                        <div class="actor-character d-flex justify-content-between">Thomas A.Anderson</div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        <div>
    </div>

    <div class="more mt-5 text-white">
        <div class="row  mx-5 mb-2">
            <h4>More</h4>
        </div>
        <div class="row mx-5">
            {{-- @foreach ($collection as $item) --}}
            <div class="col-4 card bg-dark text-white border-light" style="width: 13rem;">
                <img src="/images/encanto.jpeg" alt="" class="card-img-top ">
                <div class="card-body">
                    <div class="movie-title card-title">Encanto</div>
                    <div class="card-text d-flex justify-content-between">
                        <div class="year">2021</div>
                        <div class="add">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>

@endsection