@extends('templates.master')

@section('title', 'actors')

@section('content')
    <div class="px-3">
        <div class="d-flex justify-content-between">
            <h1 class="text-white">Actors</h1>

            <div class="d-flex gap-4">
                {{-- search form --}}
                <form action="{{ route('actors') }}" metho="get" class="d-flex">
                    <input type="text" placeholder="Search Actor" name="q" class="form-control bg-dark text-white"
                        style="margin-right: 1rem">
                    <input type="submit" class="btn btn-primary" value="Search">
                </form>

                {{-- Admin only --}}
                <button class="btn btn-danger">
                    <a href="{{ route('add actor') }}" class="text-white text-decoration-none">
                        Add Actor
                    </a>
                </button>
            </div>
        </div>

        <div class="d-flex row justify-content-evenly gap-4 mt-3">
            @foreach ($actors as $actor)
                <div class="card col-4 p-0 bg-dark" style="width: 18rem; border-color: white;">
                    <img src="{{ url('images/encanto.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="text-white card-title">{{ $actor->name }}</h5>
                        <p class="text-white card-text">their movie</p>
                        <a href="{{ route('show actor', ['id' => $actor->id]) }}"
                            class="text-white text-decoration-none btn btn-primary w-100">
                            Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
