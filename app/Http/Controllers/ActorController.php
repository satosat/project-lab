<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actors = null;

        if ($request->get('q')) {
            $actor = $request->get('q');
            $actors = Actor::where('name', 'LIKE', "%$actor%")->get();
        } else {
            $actors = Actor::all();
        }

        return view('actors.index', [
            'actors' => $actors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required'],
            'gender' => ['required', Rule::in(['Male', 'Female'])],
            'biography' => ['required', 'string', 'max:510'],
            'dob' => ['required', 'date'],
            'birthplace' => ['required'],
            'image_file' => ['required'],
            'popularity' => ['required', 'numeric'],
        ]);

        $image_file = $request->file('image_file');
        $image_filename = time() . "." . $image_file->getClientOriginalExtension();

        Storage::putFileAs("/public/images/actor", $image_file, $image_filename);

        $actor = Actor::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'biography' => $request->biography,
            'dob' => $request->dob,
            'image_source' => $image_filename,
            'popularity' => $request->popularity,
            'birthplace' => $request->birthplace,
        ]);

        return redirect(route('actors.show', ['id' => $actor->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('actors.show', [
            'actor' => Actor::findOrFail($id),
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
        //
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
