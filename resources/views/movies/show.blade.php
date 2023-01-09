@extends('templates.master')

@section('title', 'Home Page')

@section('content')

    <div class="banner bg-dark text-white">
        <img src={{ url('images/' . $movie->background_source) }} alt=""
            style="height: 500px; width: 100%; opacity: 0.5">

        <div class="content d-flex justify-content-evenly mx-5 mt-5">
            <div class="col">
                <div class="row m-2">
                    <h2>{{ $movie->title }}</h2>
                </div>

                <div class="row genre m-4">
                    <div class="col-sm-2">Genre</div>
                    <div class="col-sm-1">
                        {{-- @foreach ($genre as $genre) --}}
                        <span class="border border-1 rounded p-1">Genre</span>
                        {{-- @endforeach --}}
                    </div>
                </div>

                <div class="row m-4">
                    <div class="col-sm-2">Release Year</div>
                    <div class="col">{{ $movie->release_date }}</div>
                </div>

                <div class="row m-4">
                    <div class="col-sm-2">Storyline</div>
                    <div class="col">{{ $movie->description }}</div>
                </div>

                <div class="row m-4">
                    <div class="col-sm-2">Director</div>
                    <div class="col">Name Director</div>
                </div>

                @if (Gate::allows('admin', Auth::user()))
                    <div class="row m-4">
                        <div class="col">
                            <a href="{{ route('movies.edit', ['id' => $movie->id]) }}">
                                <button class="btn btn-secondary w-100">
                                    Edit
                                </button>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <form action="{{ route('movies.destroy', ['id' => $movie->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="id" value="{{ $movie->id }}">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Actor --}}
    <div class="mt-4 text-white">
        <div class="row mb-2 mx-5">
            <h4>Actor</h4>
        </div>

        <div class="row">
            @foreach ($actors as $actor)
                <div class="col-1 mx-5">
                    <div class="card bg-dark text-white border-0" style="width: 200px; ">
                        <img src="/images/encanto.jpeg" alt="" class="card-img-top">
                        <div class="card-body bg-danger">
                            <div class="actor-name card-title">{{ $actor->name }}</div>
                            <div class="actor-character d-flex justify-content-between">character name</div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- More --}}
            <div class="mt-4 text-white">
                <div class="row mx-5 mb-2">
                    <h4>More</h4>
                </div>
                <div class="row px-5">
                    @foreach ($movies as $movie)
                        <div class="card bg-dark text-white border-light mx-3 mt-3" style="width: 230px;">
                            <img src={{ url('images/' . $movie->thumbnail_source) }} alt=""
                                class="card-img-top mt-2" style="width:100%; height:300px">
                            <div class="card-body">
                                <div class="movie-title card-title">{{ $movie->title }}</div>
                                <div class="card-text d-flex justify-content-between">
                                    <div class="year">{{ $movie->release_date }}</div>
                                    <div class="add">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        @endsection
