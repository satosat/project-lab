<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
            $query = $request->get('q');
            $actors = Actor::where('name', 'LIKE', "%$query%")->get();
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

        $image_filename = $this->saveThumbnail($request->file('image_file'));

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
        return view('actors.edit', [
            'actor' => Actor::findOrFail($id),
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
        if ($request->id !== $id) {
            return abort(400, "Bad Request");
        }

        $request->validate([
            'id' => ['required', 'exists:actors,id'],
            'name' => ['required'],
            'gender' => ['required', Rule::in(['Male', 'Female'])],
            'biography' => ['required', 'string', 'max:510'],
            'dob' => ['required', 'date'],
            'birthplace' => ['required'],
            'image_file' => ['required'],
            'popularity' => ['required', 'numeric'],
        ]);

        $image_filename = $this->updateThumbnail($request->file('image_file'), Actor::findOrFail($id)->image_source);

        Actor::find($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'biography' => $request->biography,
            'dob' => $request->dob,
            'image_source' => $image_filename,
            'popularity' => $request->popularity,
            'birthplace' => $request->birthplace,
        ]);

        return redirect(route('actors.show', ['id' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Actor::destroy($id);

        return redirect(route('actors'));
    }

    /**
     * Save thumbnail to storage.
     */
    private function saveThumbnail($file)
    {
        $filename = Str::orderedUuid() . "." . $file->getClientOriginalExtension();

        Storage::putFileAs("/public/images/actor", $file, $filename);

        return $filename;
    }

    /**
     * Delete and update new thumbnail.
     */
    private function updateThumbnail($file, $old_route)
    {
        Storage::delete("public/images/actor" . $old_route);
        return $this->saveThumbnail($file);
    }
}
