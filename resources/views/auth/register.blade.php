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
                        <x-input-label class="form-label text-white" for="username" :value="__('Username')" />

                        <x-text-input id="username" class="block mt-1 w-full form-control" type="text" name="username"
                            :value="old('username')" required autofocus />

                        <x-input-error :messages="$errors->get('username')" class="mt-2 text-white" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label class="form-label text-white" for="email" :value="__('Email')" />

                        <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                            :value="old('email')" required />

                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-white" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label class="form-label text-white" for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                            required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-white" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label class="form-label text-white" for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                            name="password_confirmation" required />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-white" />
                    </div>

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
