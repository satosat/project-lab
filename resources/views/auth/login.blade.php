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

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- Password --}}
                    <div class="mt-4">
                        <x-input-label for="password" class="text-white form-label" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
