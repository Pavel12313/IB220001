@if(\Illuminate\Support\Facades\Auth::check())
    <div class="p-4">
        <form action="{{ route('tweet.create') }}" method="GET">
            @csrf
            <div class="mt-1">
                <textarea name="tweet" rows="3" class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2" placeholder="つぶやきを入力"></textarea>
            </div>
            <p class="mt-2 text-sm text-gray-500">
                140文字まで
            </p>
            <div class="flex flex-wrap justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    つぶやき
                </button>
            </div>
        </form>
    </div>
@endif
@guest
    <div class="flex flex-wrap justify-center mt-4">
        <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
            <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
            <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
        </div>
    </div>
@endguest
