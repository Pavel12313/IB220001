<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie= ge">
    <title>TOP | つぶやきアプリ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-layout title="Top - つぶやきアプリ">
        <x-layouts.single>
        </x-layouts.single>
    </x-layout>

    <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">つぶやきアプリ</h2>

    <x-tweet.form.post></x-tweet.form.post>

    <div>
        @foreach ($tweets as $tweet)
            <x-tweet :tweet="$tweet"/>
        @endforeach
    </div>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
</body>
</html>
