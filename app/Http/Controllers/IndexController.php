<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class IndexController extends Controller
{
    public function a()
    {
        $tweets = Tweet::orderByDesc('created_at')->get();
        return view('tweet.index', ['tweets' => $tweets]);
    }
    
}
