@extends('templates.master')

@section('title', 'Login')

@section('content')

    <div class="d-flex justify-content-around text-white">

        <div class="col-2 mt-5">
            <h4 class="row-3 m-3 text-center">My Profile</h4>
            <div class="row m-3"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </div>
            <p class="row-3 text-center m-2">Name</p>
            <p class="row-3 text-center m-2">email</p>
        </div>

        <div class="col-lg-8">
            <h4 class="m-4 text-danger">Update Profile</h4>

            <div class="row m-3 p-2">
                <div class="col-2 p-2"><b>Username</b></div>
                <input type="text" name="email" id="" class="col-5 p-2 bg-dark border border-white" placeholder="name">
            </div>

            <div class="row m-3 p-2">
                <div class="col-2 p-2"><b>Email</b></div>
                <input type="text" name="email" id="" class="col-5 p-2 bg-dark border border-white" placeholder="Email#mail.com">
            </div>

            <div class="row m-3 p-2">
                <div class="col-2 p-2"><b>DOB</b></div>
                <input type="date" name="email" id="" class="col-5 p-2 bg-dark border border-white" placeholder="dd/mm/yyyy">
            </div>


            <div class="row m-3 p-2">
                <div class="col-2 p-2"><b>Phone</b></div>
                <input type="text" name="email" id="" class="col-5 p-2 bg-dark border border-white" placeholder="08123456678">
            </div>


            <div class="submit btn btn-danger col-7 m-4">Save Changes</div>
        </div>
       
    </div>

@endsection