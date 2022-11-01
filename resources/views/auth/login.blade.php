@extends('templates.master')

@section('title', 'Login')

@section('content')
    <div class="container d-flex justify-content-center bg-dark">
        <div>
            <div class="mt-5 d-flex">
                <p class="text-white fs-1 fw-semibold">Hello, Welcome back to MovieList</p>
            </div>
            <div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    {{-- Email --}}
                    <div>
                        <x-input-label for="email" class="text-white form-label" :value="__('Email')" />

                        <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                            :value="old('email')" required autofocus />

                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-white" />
                    </div>

                    {{-- Password --}}
                    <div class="mt-4">
                        <x-input-label for="password" class="text-white form-label" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-white" />
                    </div>

                    {{-- Remember Me --}}
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center text-white">
                            <input id="remember_me" type="checkbox"
                                class="form-check-input rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember" style="height: 20px; width: 20px">
                            <span class="ml-2 text-sm text-gray-600 align-middle">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    {{-- Submit --}}
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
