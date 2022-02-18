<x-default-layout>
    <x-slot name="header">
        {{ __('掲示板') }}
    </x-slot>

    <div class="2xl:mx-auto 2xl:container w-full md:mx-24 md:px-12 px-4 my-4">
        <div class="my-5">
            {{ $thread->title }}
        </div>
        <div>
            スレッドの内容
        </div>
    </div>
</x-default-layout>
