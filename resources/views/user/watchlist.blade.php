@extends('templates.master')

@section('title', 'Login')

@section('content')

    <div class="row">My Watchlist</div>
    
    <div class="row mx-5">
        <form action={{ route('search watch') }} method="get">
            <input type="submit" name="search" id="" class="form-control" placeholder="Search your watchlist..">
        </form>
    </div>

    <div class="row mt-4 mx-5 text-white d-flex ">
        <div class="col-sm-1 align-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
              </svg>
        </div>
        <div class="col-sm-2">
            <select name="" id="" class="form-control bg-dark border-white text-white">
                <option value="all">All</option>
                <option value="planned">Planned</option>
                <option value="watching">Watching</option>
                <option value="finished">Finished</option>
            </select>
        </div>
    </div>

    <table class="table m-5">
        <thead>
            <tr class="text-white">
                <th scope="col">Poster</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        {{-- @foreach ($collection as $item)
            <tr>
                <td>Poster</td>
                <td>Title</td>
                <td>Status</td>
                <td>...</td>
            </tr>
        @endforeach --}}
    </table>

@endsection