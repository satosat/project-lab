<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'phone' => 'required|min:10|max:13',
        ]);

        User::where('id', $id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'dob' => $request->dob,
            'phone' => $request->phone,
        ]);

        return redirect('/profile');
    }

    public function updateImage(Request $request, $id)
    {

        $request->validate([
            'image_source' => 'required',
        ]);

        User::where('id', $id)->update([
            'image_source' => $request->image_source
        ]);

        return redirect('/profile');
    }
}
