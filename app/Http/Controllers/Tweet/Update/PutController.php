<?php

namespace App\Http\Controllers\Tweet\Update;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Http\Controllers\Controller;

class PutController extends Controller
{
    public function c(Request $request, $tweetId)
    {
        // Retrieve tweet
        $tweet = Tweet::findOrFail($tweetId);

        // Validate and update tweet
        $validatedData = $request->validate([
            'tweet' => 'required|string|max:255',
        ]);

        $tweet->content = $validatedData['tweet'];
        $tweet->save();

        // Redirect with success message
        return redirect()->route('tweet.index')->with('success', 'Tweet updated successfully.');
    }
}


