@extends('templates.master')

@section('title', 'Login')

@section('content')
    <div class="container d-flex justify-content-center bg-dark">
        <div>
            <div class="mt-5 d-flex">
                <p class="text-white fs-1 fw-semibold">Hello, Welcome back to MovieList</p>
            </div>
            <div>
                <form action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    {{-- Email --}}
                    <div>
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" class="mt-1 form-control w-full bg-dark text-white" name="email" id="email"
                            value="{{ old('email') }}" placeholder="Enter your email">
                    </div>

                    {{-- Password --}}
                    <div class="mt-4">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" class="mt-1 form-control w-full bg-dark text-white" name="password"
                            id="password" placeholder="Enter your password">
                    </div>

                    {{-- Remember Me --}}
                    <div class="block mt-4">
                        <label for="remember" class="inline-flex items-center text-white">
                            <input id="remember" type="checkbox" class="form-check-input rounded" name="remember"
                                style="height: 20px; width: 20px">
                            <span class="text-sm align-middle">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    {{-- Errors --}}
                    @if ($errors->any())
                        <div class="mt-3">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    {{-- Submit --}}
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-danger w-100">Login →</button>
                    </div>
                </form>

                <div class="mt-3">
                    <p class="text-white text-center">Dont have an account?
                        <a href="{{ route('register.create') }}" class="text-decoration-none text-danger">Register now!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
