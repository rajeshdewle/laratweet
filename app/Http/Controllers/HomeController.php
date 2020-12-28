<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class HomeController extends Controller
{
    public function index()
    {
        // $tweets = Tweet::latest()->get();

        return view('home', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
}
