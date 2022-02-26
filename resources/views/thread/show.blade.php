<x-default-layout>
    <x-slot name="header">
        {{ __('掲示板') }}
    </x-slot>

    <div class="2xl:mx-auto 2xl:container w-full md:mx-24 md:px-12 px-4 my-4">
        <div class="my-5 text-4xl text-center">
            {{ $thread->title }}
        </div>
        <div class="my-2">
            @if (isset($responses))
                @foreach ($responses as $response)
                    <x-response :number="$response->response_number" :content="$response->content">
                    </x-response>
                @endforeach
            @else
                <p>レスが一つもついていないよ</p>
            @endif
        </div>
        <form action="/response" method="POST" class="flex gap-1">
            @csrf
            <input type="hidden" value="{{ request()->id }}" name="thread_id">
            <input type="text" name="content"
                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline flex-1">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">投稿</button>
        </form>
    </div>
</x-default-layout>
