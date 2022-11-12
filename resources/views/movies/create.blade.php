@extends('templates.master')

@section('title', 'Create Movie')

@section('content')
    <div class="container bg-dark mt-2">
        <h2 class="text-white">Add Movie</h2>
        <form method="POST" action="{{ route('add movie') }}" class="inline-block">
            @csrf

            {{-- Title --}}
            <label for="title" class="form-label text-white">Title</label>
            <input type="text" name="title" id="title" class="form-control bg-dark text-white">

            {{-- Description --}}
            <label for="description" class="form-label text-white mt-3">Description</label>
            <textarea type="text" name="description" id="description" class="form-control bg-dark text-white"></textarea>

            {{-- Genres --}}
            <p class="text-white mt-3 mb-1">Genres</p>

            <div>
                @foreach ($genres as $genre)
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="{{ $genre->genre }}"
                            name="{{ $genre->genre }}" id="{{ $genre->genre }}">
                        <label class="form-check-label text-white" for="{{ $genre->genre }}"> {{ $genre->genre }} </label>
                    </div>
                @endforeach
            </div>

            {{-- Actors --}}
            <p class="text-white mt-3 mb-1">Actors</p>

            <div style="margin-left: 1rem">
                <div class="d-flex justify-content-between">
                    <div style="width: 48%">
                        <label class="form-label text-white" for="actor">Actor</label>
                        <select name="actor" id="actor" class="form-select bg-dark text-white">
                            <option selected="selected" disabled>-- Open this select menu --</option>
                            @foreach ($actors as $actor)
                                <option value="{{ $actor->name }}">{{ $actor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="width: 48%">
                        <label class="form-label text-white" for="character-name">Character Name</label>
                        <input type="text" name="character-name" id="character" class="form-control bg-dark text-white">
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <div style="width: 48%">
                        <label class="form-label text-white" for="actor">Actor</label>
                        <select name="actor" id="actor" class="form-select bg-dark text-white">
                            <option selected="selected" disabled>-- Open this select menu --</option>
                            @foreach ($actors as $actor)
                                <option value="{{ $actor->name }}">{{ $actor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="width: 48%">
                        <label class="form-label text-white" for="character-name">Character Name</label>
                        <input type="text" name="character-name" id="character" class="form-control bg-dark text-white">
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-primary">Add More</button>
                </div>
            </div>

            {{-- Director --}}
            <label for="director" class="form-label text-white mt-3">Director</label>
            <input type="text" name="director" id="director" class="form-control bg-dark text-white">

            {{-- Release Date --}}
            <label for="release-date" class="form-label text-white mt-3">Release Date</label>
            <input type="date" name="release-date" id="release-date" class="form-control bg-dark text-white">

            {{-- Image URL --}}
            <label for="image-url" class="form-label text-white mt-3">Image URL</label>
            <input type="file" class="form-control bg-dark text-white" id="image-url" name="image-url">

            {{-- Background URL --}}
            <label for="bakground-url" class="form-label text-white mt-3">Bakground URL</label>
            <input type="file" class="form-control bg-dark text-white" id="bakground-url" name="bakground-url">

            <button class="btn btn-primary w-100 mt-5" type="submit"
                style="background-color: #C43429; border-color: #C43429">Create</button>
        </form>
    </div>
@endsection
