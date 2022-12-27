@extends('templates.master')

@section('title', '{{ $actor->name }}')

@section('content')
    <div class="container bg-dark mt-2">
        <h2 class="text-white">Add Actor</h2>

        <form action="{{ route('actors.update', ['id' => $actor->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" value="{{ $actor->id }}" name="id">

            {{-- Name --}}
            <div class="mt-3">
                <label for="name" class="form-label text-white">Name</label>
                <input type="text" name="name" id="name" class="form-control bg-dark text-white"
                    value="{{ $actor->name }}">
            </div>

            {{-- Gender --}}
            <div class="mt-3">
                <label class="form-label text-white" for="gender">Gender</label>
                <select name="gender" id="gender" class="form-select bg-dark text-white">
                    <option value="Male" {{ $actor->gender === 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female"{{ $actor->gender === 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            {{-- Biography --}}
            <div class="mt-3">
                <label for="biography" class="form-label text-white">Biography</label>
                <textarea name="biography" id="biography" class="form-control bg-dark text-white">{{ $actor->biography }}</textarea>
            </div>

            {{-- DOB --}}
            <div class="mt-3">
                <label for="dob" class="form-label text-white mt-3">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control bg-dark text-white"
                    value="{{ $actor->dob }}">
            </div>

            {{-- Birthplace} --}}
            <div class="mt-3">
                <label for="birthplace" class="form-label text-white">Birthplace</label>
                <input type="text" name="birthplace" id="birthplace" class="form-control bg-dark text-white"
                    value="{{ $actor->birthplace }}">
            </div>

            {{-- Image URL --}}
            <div class="mt-3">
                <label for="image_file" class="form-label text-white mt-3">Image</label>
                <input type="file" class="form-control bg-dark text-white" id="image_file" name="image_file">
            </div>

            {{-- Popularity --}}
            <div class="mt-3">
                <label for="popularity" class="form-label text-white mt-3">Popularity</label>
                <input type="number" step="0.01" class="form-control bg-dark text-white" id="popularity"
                    name="popularity" value="{{ $actor->popularity }}">
            </div>

            <div class="mt-5">
                <button class="btn btn-danger w-100" type="submit">Edit</button>
            </div>

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
@endsection
