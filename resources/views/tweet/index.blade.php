<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきリスト</h1>
    <div>
        <p>投稿フォーム</p>
        <form action="{{ route('tweet.create') }}" method="get">
            @csrf
            <input type="text" name="tweet" placeholder="tweet here...">
            <button type="submit">投稿する</button>
        </form>
        <div>
            @foreach($tweets as $tweet)
            <details>
                <summary>{{ $tweet->content }}</summary>
                <div>
                    <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                    <form action="{{route('tweet.delete',['tweetId'=> $tweet->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">削除</button>
                    </form>
                </div>
            </details>
            @endforeach
        </div>
    </div>
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
</body>
</html>
