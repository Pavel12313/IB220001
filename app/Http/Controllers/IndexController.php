<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Services\TweetService;

class IndexController extends Controller
{
    public function a(TweetService $tweetService)
    {
        $tweets = $tweetService->getTweets();
        return view('tweet.index', ['tweets' => $tweets]);
    }
}
