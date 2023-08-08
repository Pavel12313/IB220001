<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200 py-10">
    <div class="max-w-2xl mx-auto bg-white p-5 rounded shadow">
        <h1 class="text-2xl font-bold mb-5 text-center">つぶやきを編集する</h1>
        <a href="{{ route('tweet.index') }}" class="block text-center mb-5 text-blue-500 hover:underline">戻る</a>
        @if (session('feedback.success'))
            <p class="mb-5 text-center text-green-500">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="tweet-content" class="block mb-2 font-semibold">つぶやき</label>
            <textarea name="tweet" id="tweet-content" rows="5" class="block w-full p-2 border border-gray-300 rounded mb-5" placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
            @error('tweet')
                <p class="mb-5 text-center text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit" class="block w-full py-2 px-4 bg-blue-500 text-white font-bold rounded hover:bg-blue-600">更新する</button>
        </form>
    </div>
</body>
</html>
