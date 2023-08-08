@if(\Illuminate\Support\Facades\Auth::check())
    <div class="p-4 bg-white rounded-md shadow-md max-w-lg mx-auto mb-4">
        <form action="{{ route('tweet.create') }}" method="GET">
            @csrf
            <div class="flex flex-col space-y-4 mb-2">
                <textarea name="tweet" rows="4" class="focus:ring-blue-400 focus:border-blue-400 w-full py-2 px-4 border border-gray-300 rounded-md resize-none" placeholder="つぶやきを入力"></textarea>
                <p class="text-sm text-gray-500 text-right">
                    140文字まで
                </p>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">
                    つぶやき
                </button>
            </div>
        </form>
    </div>
@endif



@guest
<div class="flex flex-wrap justify-center mt-4">
    <div class="w-full sm:w-1/2 p-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center">
        <x-element.button-a :href="route('login')" class="flex items-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-md">
            <i class="bi bi-box-arrow-in-right mr-2"></i> ログイン
        </x-element.button-a>
        <x-element.button-a :href="route('register')" theme="secondary" class="flex items-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-3 px-6 rounded-md">
            <i class="bi bi-person-plus-fill mr-2"></i> 会員登録
        </x-element.button-a>
    </div>
</div>

@endguest

