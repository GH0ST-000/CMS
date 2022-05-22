<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{

    public function index()
    {

        return view('Landing.landing');

    }

    public function create()
    {
        return view('Landing.Authentication.register');
    }

    public function login_user()
    {
        return view('Landing.Authentication.login');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
