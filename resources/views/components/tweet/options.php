<?php

namespace App\View\Components\Tweet;

use Illuminate\View\Component;

class Options extends Component
{
    /**
     * Create a new component instance.
     */
    private int $tweetId;
    private int $userId;

    public function __construct(int $tweetId, int $userId)
    {
        $this->tweetId = $tweetId;
        $this->userId = $userId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.tweet.options', [
            'tweetId' => $this->tweetId,
            'myTweet' => \Illuminate\Support\Facades\Auth::id() === $this->userId,
        ]);
    }
}
