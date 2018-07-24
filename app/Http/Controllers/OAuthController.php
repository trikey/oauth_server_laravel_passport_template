<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OAuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function clients() {
        return view('passport.clients');
    }

    public function authorizedClients() {
        return view('passport.authorized_clients');
    }

    public function tokens() {
        return view('passport.personal_access_tokens');
    }
}
