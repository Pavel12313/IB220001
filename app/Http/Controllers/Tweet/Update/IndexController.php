<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Tweet;

class IndexController extends Controller
{
    public function c(Request $request)
    {
        $tweetId = (int) $request->route('tweetId');
        $tweet = Tweet::where('id', $tweetId)->firstOrFail();

        if (is_null($tweet)) {
            throw new NotFoundHttpException('存在しないつぶやきです');
        }

        return view('tweet.update', compact('tweet'));
    }
}
