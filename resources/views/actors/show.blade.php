@extends('templates.master')

@section('title', $actor->name)

@section('content')
    <div class="px-5 d-flex gap-3">
        <div>
            <img src="{{ url('images/thumbnail_encanto.jpeg') }}" style="height: 30rem">

            {{-- Caption --}}
            <div class="mt-3">
                <h3 class="text-white">Personal Info</h3>
                <h5 class="text-white">Popularity</h5>
                <h5 class="text-white text-muted">{{ $actor->popularity }}</h5>
                <h5 class="text-white">Gender</h5>
                <h5 class="text-white text-muted">{{ $actor->gender }}</h5>
                <h5 class="text-white">Birthday</h5>
                <h5 class="text-white text-muted">{{ $actor->dob }}</h5>
                <h5 class="text-white">Place of Birth</h5>
                <h5 class="text-white text-muted">{{ $actor->birthplace }}</h5>

                {{-- Admin only --}}
                @if (Gate::allows('admin', Auth::user()))
                    <a href="{{ route('actors.edit', ['id' => $actor->id]) }}">
                        <button class="btn btn-secondary w-100 mt-3">Edit</button>
                    </a>
                    <div class="mt-3">
                        <form action="{{ route('actors.destroy', ['id' => $actor->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input type="hidden" name="id" value="{{ $actor->id }}">
                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
        <div>
            <h1 class="text-white">{{ $actor->name }}</h1>
            <h3 class="text-white">Biography</h3>
            <p class="text-white">{{ $actor->biography }}</p>
            <h3 class="text-white">Known For</h3>
            <div class="d-flex row justify-content-start gap-5 mt-3" style="margin-left: 2.25px">
                @foreach ($actor->characters as $character)
                    <div class="card col-4 p-0 bg-dark" style="width: 12rem; border-color: white;">
                        <img src="{{ url('images/thumbnail_encanto.jpeg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-white card-title">{{ $character->name }}</h5>
                            <p class="text-white card-text">{{ $character->movie->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
