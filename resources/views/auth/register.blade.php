@extends('templates.master')

@section('title', 'Register')

@section('content')
    <div class="container d-flex justify-content-center bg-dark">
        <div>
            <div class="mt-5 d-flex">
                <p class="text-white fs-1 fw-semibold">Hello, Welcome back to MovieList</p>
            </div>
            <div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    {{-- Username --}}
                    <div>
                        <label for="username" class="form-label text-white">Username</label>
                        <input type="text" class="mt-1 w-100 form-control" name="username" id="username">
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" class="mt-1 w-100 form-control" name="email" id="email">
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" class="mt-1 w-100 form-control" name="password" id="password">
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="form-label text-white">Confirm Password</label>
                        <input type="password" class="mt-1 w-100 form-control" name="password_confirmation"
                            id="password_confirmation">
                    </div>

                    @if ($errors->any())
                        <div class="mt-3">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <span class="text-white">Already have an account?
                    <a href="{{ route('login') }}" class="text-danger text-decoration-none">Login Now
                    </a>
                </span>
            </div>
        </div>
    </div>
@endsection
