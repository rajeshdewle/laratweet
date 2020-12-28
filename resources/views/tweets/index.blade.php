<x-app-layout>
    <div class="flex min-h-screen justify-between">
        <div class="w-1/6 border-r border-gray-400">
            @include('layouts.sidebar-links')
        </div>
        <div class="flex-1">
            <h1 class="p-4 font-bold text-lg">Home</h1>
            <x-tweet-form />
            @foreach ($tweets as $tweet)
            <x-tweet :tweet="$tweet" />
            @endforeach
        </div>
        <div class=" w-1/4 border-l border-gray-400 p-4">
            @include('layouts.friends')
        </div>
    </div>
</x-app-layout>