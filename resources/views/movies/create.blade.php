@extends('templates.master')

@section('title', 'Create Movie')

@section('content')
    <div class="container bg-dark mt-2">
        <h2 class="text-white">Add Movie</h2>
        <form method="POST" action="{{ route('movies.store') }}" class="inline-block" enctype="multipart/form-data">
            @csrf

            {{-- Title --}}
            <label for="title" class="form-label text-white">Title</label>
            <input type="text" name="title" id="title" class="form-control bg-dark text-white"
                value="{{ old('title') }}">

            {{-- Description --}}
            <label for="description" class="form-label text-white mt-3">Description</label>
            <textarea type="text" name="description" id="description" class="form-control bg-dark text-white"
                value="{{ old('description') }}"></textarea>

            {{-- Genres --}}
            <p class="text-white mt-3 mb-1">Genres</p>

            <div>
                @foreach ($genres as $genre)
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="{{ $genre->id }}" name="genres[]">
                        <label class="form-check-label text-white"> {{ $genre->genre }} </label>
                    </div>
                @endforeach
            </div>

            {{-- Actors --}}
            <p class="text-white mt-3 mb-1">Actors</p>

            <div class="margin-left: 1rem">
                <table class="table table-borderless" id="characters">
                    <tr>
                        <td>
                            <label class="form-label text-white">Actor Name</label>
                            <select name="actors[0][id]" class="form-select bg-dark text-white">
                                <option selected="selected" value="" disabled>-- Open this select menu --</option>
                                @foreach ($actors as $actor)
                                    <option value="{{ $actor->id }}">{{ $actor->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <label class="form-label text-white">Character Name</label>
                            <input type="text" name="characters[0][name]" class="form-control bg-dark text-white">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-label text-white">Actor Name</label>
                            <select name="actors[1][id]" class="form-select bg-dark text-white">
                                <option selected="selected" value="" disabled>-- Open this select menu --</option>
                                @foreach ($actors as $actor)
                                    <option value="{{ $actor->id }}">{{ $actor->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <label class="form-label text-white">Character Name</label>
                            <input type="text" name="characters[1][name]" class="form-control bg-dark text-white">
                        </td>
                    </tr>
                </table>
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-primary" id="add-character-btn">Add More</button>
                </div>
            </div>

            {{-- Director --}}
            <label for="director" class="form-label text-white mt-3">Director</label>
            <input type="text" name="director" id="director" class="form-control bg-dark text-white"
                value="{{ old('director') }}">

            {{-- Release Date --}}
            <label for="release_date" class="form-label text-white mt-3">Release Date</label>
            <input type="date" name="release_date" id="release_date" class="form-control bg-dark text-white"
                value="{{ old('release_date') }}">

            {{-- Image URL --}}
            <label for="thumbnail_file" class="form-label text-white mt-3">Image File</label>
            <input type="file" class="form-control bg-dark text-white" id="thumbnail_file" name="thumbnail_file">

            {{-- Background URL --}}
            <label for="background_file" class="form-label text-white mt-3">Bakground File</label>
            <input type="file" class="form-control bg-dark text-white" id="background_file" name="background_file">

            <button class="btn btn-primary w-100 mt-5" type="submit"
                style="background-color: #C43429; border-color: #C43429">
                Create
            </button>

        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    {{-- jQuery for dynamic form --}}
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

    {{-- add more characters --}}
    <script type="text/javascript" src="{{ URL::asset('js/create-movie.js') }}"></script>
@endsection
