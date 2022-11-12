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
                        <input type="email" class="mt-1 form-control w-full" name="email" id="email"
                            value="{{ old('email') }}">
                    </div>

                    {{-- Password --}}
                    <div class="mt-4">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" class="mt-1 form-control w-full" name="password"
                            id="password>
                    </div>

                    {{-- Remember Me --}}
                    <div class="block
                            mt-4">
                        <label for="remember_me" class="inline-flex items-center text-white">
                            <input id="remember_me" type="checkbox"
                                class="form-check-input rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember" style="height: 20px; width: 20px">
                            <span class="ml-2 text-sm text-gray-600 align-middle">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    @if ($errors->any())
                        <div class="mt-3">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    {{-- Submit --}}
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
