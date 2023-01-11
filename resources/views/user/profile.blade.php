@extends('templates.master')

@section('title', 'Login')

@section('content')

    <div class="d-flex justify-content-around text-white">

        <div class="row mt-5 d-flex justify-content-center">
            <h4 class="row-3 m-3 text-center">My Profile</h4>
            @if (Auth::user()->image_source !== null)
                <div class="w-50">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#uploadImage"
                        style="background: none; border: 0;">
                        <img src="{{ Auth::user()->image_source }}" alt="" style="width: 100%">
                    </button>
                </div>
            @else
                <div class="w-50">
                    <button type="button" class="row m-3 btn btn-dark" data-bs-toggle="modal"
                        data-bs-target="#uploadImage">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </button>
                </div>
            @endif
            @auth
                <p class="row-3 text-center m-2">{{ Auth::user()->username }}</p>
                <p class="row-3 text-center m-2">{{ Auth::user()->email }}</p>
            @endauth
        </div>

        <div class="col-lg-8">
            <h4 class="m-4 text-danger">Update Profile</h4>

            <form action="/profile/update/{{ Auth::id() }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row m-3 p-2">
                    <div class="col-2 p-2"><b>Username</b></div>
                    <input type="text" name="username" id=""
                        class="col-5 p-2 bg-dark border border-white text-white" value="{{ Auth::user()->username }}">
                </div>

                <div class="row m-3 p-2">
                    <div class="col-2 p-2"><b>Email</b></div>
                    <input type="text" name="email" id=""
                        class="col-5 p-2 bg-dark border border-white text-white" value="{{ Auth::user()->email }}">
                </div>

                <div class="row m-3 p-2">
                    <div class="col-2 p-2"><b>DOB</b></div>
                    @if (Auth::user()->dob === null)
                        <input type="date" name="dob" id=""
                            class="col-5 p-2 bg-dark border border-white text-white">
                    @else
                        <input type="date" name="dob" id=""
                            class="col-5 p-2 bg-dark border border-white text-white" value="{{ Auth::user()->dob }}">
                    @endif
                </div>

                <div class="row m-3 p-2">
                    <div class="col-2 p-2"><b>Phone</b></div>
                    <input type="text" name="phone" id=""
                        class="col-5 p-2 bg-dark border border-white text-white" value="{{ Auth::user()->phone }}">
                </div>

                <div class="row m-3 p-2">
                    @if ($errors->any())
                        <div class="mt-3">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-danger col-7 m-4">Save Changes</button>
            </form>

        </div>
    </div>

    {{-- Modal --}}
    <div class="modal" id="uploadImage">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <form action="/profile/image/update/{{ Auth::id() }}" method="POST" class="text-white"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title text-white">Update Image</h5>
                    </div>
                    <div class="modal-body text-white">
                        <input class="form-control bg-dark text-white" type="text" name="image_source" id=""
                            placeholder="Image URL" value="{{ Auth::user()->image_source }}"> <br>
                        <label class="form-label">Please upload your image to other sources first and use the URL</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
