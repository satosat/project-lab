@extends('templates.master')

@section('title', 'Login')

@section('content')

    <div class="row mx-5 my-3 text-white">
        <h1>My Watchlist</h1>
    </div>

    <div class="row mx-5">
        <form action={{ route('watchlists.search') }} method="get">
            <input type="text" name="title" id="" class="form-control bg-dark text-white"
                placeholder="Search your watchlist.." autocomplete="off">
        </form>
    </div>

    <div class="row mt-4 mx-5 text-white d-flex ">
        <div class="col-sm-1 align-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filter"
                viewBox="0 0 16 16">
                <path
                    d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <div class="col-sm-2">
            <select id="filter" class="form-control bg-dark border-white text-white">
                @foreach (['All', 'Planned', 'Watching', 'Finished'] as $status)
                    @if ($status === $filter)
                        <option value="{{ $status }}" selected>{{ $status }}</option>
                    @else
                        <option value="{{ $status }}">{{ $status }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <table class="table m-5 text-white">
        <thead>
            <tr class="text-white">
                <th class="col-3">Poster</th>
                <th class="col-3">Title</th>
                <th class="col-3">Status</th>
                <th class="col-3">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($watchlists as $watchlist)
                <tr>
                    <td class="col-3">
                        <img src="{{ asset('storage/images/thumbnail/' . $watchlist->movie->thumbnail_source) }}"
                            style="height: 150px;">
                    </td>

                    <td class="align-middle col-3">{{ $watchlist->movie->title }}</td>
                    <td class="text-success align-middle col-3">{{ $watchlist->status }}</td>

                    <td class="align-middle col-3">
                        {{-- Modal Trigger --}}
                        <button type="button" style="border: none; background: none; color:white" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $watchlist->id }}">
                            ...
                        </button>

                        {{-- Modal --}}
                        <div class="modal fade" id="modal-{{ $watchlist->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark text-white">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Change Status</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('watchlists.update', ['id' => $watchlist->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')

                                            <input type="hidden" name="id" value="{{ $watchlist->id }}">
                                            <select name="status" class="form-select bg-dark text-white">
                                                @foreach (['Planned', 'Watching', 'Finished', 'Remove'] as $status)
                                                    @if ($status === $watchlist->status)
                                                        <option value="{{ $status }}" selected>
                                                            {{ $status }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $status }}">
                                                            {{ $status }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>

                                            <div class="modal-footer" style="border: none;">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-danger">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $watchlists->links() }}

    {{-- Filter watchlists   --}}
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            const filter = document.getElementById('filter')

            filter.addEventListener('change', () => {
                const status = filter.value
                window.location.href = `/watchlist?status=${status}`
            })
        })
    </script>

@endsection
