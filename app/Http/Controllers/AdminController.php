<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }

    public function index(Request $request) {

        // Setting session using request global

        // $request->session()->put(['custom_key' => 'custom_val']);

        // Setting session without request

        // session(['custom_key' => 'without request']);

        // Unset session

        // $request->session()->forget('custom_key');

        // Getting complete session data

        // $request->session()->all();

        // Getting specific session data

        // return $request->session()->get('custom_key');

        // Another way of retrieving

        // return session('custom_key');

        // $request->session()->flush();

        //$request->session()->flash('message', 'Some notification here');

        return $request->session()->get('message');
    }
}
