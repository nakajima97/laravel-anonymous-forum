<x-default-layout>
    <x-slot name="header">
        {{ __('掲示板') }}
    </x-slot>

    <div class="2xl:mx-auto 2xl:container w-full md:mx-24 md:px-12 px-4 my-4">
        <div class="w-full flex items-center justify-center">
            <div class="bg-gray-800 bg-opacity-80 md:py-16 w-full flex flex-col items-center justify-center z-40">
                <h1 class="text-4xl font-semibold leading-9 text-white text-center">匿名掲示板へようこそ！！</h1>
                <p class="text-base leading-normal text-center text-white mt-6">

                </p>
            </div>
        </div>

        <div class="my-5">
            <div class="flex justify-center">
                {{-- <form action="get" class="flex justify-center"> --}}
                <input type="text"
                    class="grow shadow appearance-none border border-red-500 rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <input type="submit" value="検索"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{-- </form> --}}
            </div>
        </div>

        <div>
            @if (isset($threads) && !$threads->isEmpty())
                @foreach ($threads as $thread)
                    <x-forum-list-item link="http://localhost/thread/show/{{ $thread->id }}"
                        text="{{ $thread->title }}">
                    </x-forum-list-item>
                @endforeach
            @else
                <p>スレッドが１件も無いよ</p>
            @endif
        </div>
    </div>
</x-default-layout>

<script src="{{ mix('js/thread.js') }}"></script>
