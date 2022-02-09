<x-default-layout>
    <x-slot name="header">
        {{ __('掲示板') }}
    </x-slot>

    <form class="2xl:mx-auto 2xl:container w-full md:mx-24 md:px-12 px-4 my-4" action="/thread" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="thread_title">
                タイトル
            </label>
            <input name="title"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="thread_title" type="text" placeholder="スレッドのタイトル">
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                作成
            </button>
        </div>
    </form>
</x-default-layout>
