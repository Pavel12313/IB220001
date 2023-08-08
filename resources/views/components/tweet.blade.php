<!DOCTYPE html>
<html>
<head>
    <!-- Make sure you have linked the Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="bg-white rounded-lg p-6 mb-4 shadow-lg flex flex-col justify-between items-start max-w-lg mx-auto">
    <div class="flex items-center justify-between w-full">
        <span class="bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">{{$tweet->user->name}}</span>
        @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
            <details class="relative">
                <summary class="text-blue-500 hover:text-blue-700 cursor-pointer">
                    <i class="bi bi-three-dots"></i>
                </summary>
                <div class="absolute right-0 mt-2 w-40 bg-white border rounded shadow-md text-left z-50">
                    <ul>
                        <li>
                            <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}" class="block w-full text-left px-4 py-2 text-blue-500 hover:bg-gray-200 hover:underline">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-200" onclick="return confirm('Are you sure you want to delete this?');">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="w-full text-left">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </details>
        @endif
    </div>
    <p class="text-xl font-bold mt-2">{{$tweet->content}}</p>
</div>

</body>
</html>
