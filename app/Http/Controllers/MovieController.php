<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Character;
use App\Models\Genre;
use App\Models\GenreType;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $movies = null;

        if($request->get('search')){
            $mov = $request->get('search');
            $movies = Movie::where('title', 'LIKE', "%$mov%")->get();
        }else{
            $movies = Movie::all();
        }

        return view('movies.index', [
            'movies'=>$movies,
            'genres' => GenreType::all(),
        ]);
    }

    public function sortBy(){
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create', [
            'actors' => Actor::all()->sortBy('name'),
            'genres' => GenreType::all()->sortBy('genre'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'max:255'],
            'director' => ['required', 'max:255'],
            'thumbnail_file' => ['required'],
            'background_file' => ['required'],
            'release_date' => ['required'],
            'genres' => ['required', 'exists:genre_types,id'],
            'actors.*.id' => ['required', 'exists:actors,id',],
            'characters.*.name' => ['required'],
        ]);

        $time = time();

        $thumbnail_file = $request->file('thumbnail_file');
        $thumbnail_filename = $time . "." . $thumbnail_file->getClientOriginalExtension();

        $background_file = $request->file('background_file');
        $background_filename = $time . "." . $background_file->getClientOriginalExtension();

        Storage::putFileAs("/public/images/thumbnail", $thumbnail_file, $thumbnail_filename);
        Storage::putFileAs("/public/images/background", $background_file, $background_filename);

        DB::transaction(function () use ($request, $thumbnail_filename, $background_filename) {
            $movie = Movie::create([
                'title' => $request->title,
                'description' => $request->description,
                'release_date' => $request->release_date,
                'director' => $request->director,
                'thumbnail_source' => $thumbnail_filename,
                'background_source' => $background_filename,
            ]);

            foreach ($request->genres as $_ => $id) {
                Genre::create([
                    'movie_id' => $movie->id,
                    'genre_id' => $id,
                ]);
            }

            for ($i = 0; $i < count($request->actors); $i++) {
                Character::create([
                    'movie_id' => $movie->id,
                    'actor_id' => $request->actors[$i]['id'],
                    'name' => $request->characters[$i]['name'],
                ]);
            }
        });

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $id)
    {
        return view('movies.show', [
            'movie' => $id,
            'movies' => Movie::all(),
            'actors'=>Actor::get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('movies.edit', [
            'movie' => Movie::findOrFail($id),
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
