<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class CreateController extends Controller
{
    public function b(Request $request)
    {
        $request->validate([
            'tweet' => 'required|max:140',
        ]);

        $tweet = new Tweet();
        $tweet->user_id = $request->user()->id;
        $tweet->content = $request->input('tweet');
        $tweet->save();

        $tweets = Tweet::orderByDesc('created_at')->get();

        return redirect()->route('tweet.index')->with('tweets', $tweets);
    }
}
