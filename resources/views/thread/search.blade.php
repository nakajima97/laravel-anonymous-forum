<x-default-layout>
    <x-slot name="header">
        {{ __('掲示板') }}
    </x-slot>
    <div class="2xl:mx-auto 2xl:container w-full md:mx-24 md:px-12 px-4 my-4">
        <div>検索結果</div>
        <div>
            @if (isset($threads) && !$threads->isEmpty())
                @foreach ($threads as $thread)
                    <x-forum-list-item link="http://localhost/thread/show/{{ $thread->id }}"
                        text="{{ $thread->title }}">
                    </x-forum-list-item>
                @endforeach

                {{ $threads->links() }}
            @else
                <p>ヒットするスレッドがなかったです</p>
            @endif
        </div>
    </div>
</x-default-layout>
