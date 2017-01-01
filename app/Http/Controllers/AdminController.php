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

        // Getting complete session data

        return $request->session()->get('custom_key');
    }
}
