<div class="flex justify-center">
    <div class="max-w-screen-sm w-full">
        @auth
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <div class="flex justify-end p-4">
                <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">ログアウト
                </button>
            </div>
        </form>
        @endauth
    </div>
</div>
