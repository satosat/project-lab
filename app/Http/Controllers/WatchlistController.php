<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class WatchlistController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is.not.admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // check for filter query
        if ($request->status && $request->status !== "All") {
            $request->validate([
                'status' => Rule::in(['Planned', 'Watching', 'Finished'])
            ]);

            return view('user.watchlist', [
                'watchlists' => Watchlist::where([
                    ['user_id', Auth::id()],
                    ['status', $request->status]
                ])->paginate(4),
                'filter' => $request->status,
            ]);
        }

        // check for title search
        if ($request->title !== "") {
            $movie_ids = Movie::where('title', 'LIKE', "%$request->title%")->get(['id']);

            return view('user.watchlist', [
                'watchlists' => Watchlist::where('user_id', Auth::id())
                    ->whereIn('movie_id', $movie_ids)
                    ->paginate(4),
                'filter' => 'All',
            ]);
        }

        return view('user.watchlist', [
            'watchlists' => Watchlist::where('user_id', Auth::id())->paginate(4),
            'filter' => 'All',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Watchlist::firstOrCreate(
            [
                'user_id' => Auth::id(),
                'movie_id' => $id,
            ],
            [
                'status' => 'Planned'
            ]
        );

        return redirect(route('watchlists.search'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => ['required', 'exists:watchlists,id'],
            'status' => [
                'required',
                Rule::in([
                    'Planned',
                    'Watching',
                    'Finished',
                    'Remove'
                ])
            ],
        ]);

        switch ($request->status) {
            case 'Remove':
                Watchlist::destroy($id);
                break;

            default:
                Watchlist::find($id)->update(['status' => $request->status]);
                break;
        }

        return redirect(route('watchlists.search'));
    }
}
