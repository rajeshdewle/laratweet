<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex min-h-screen">
        <div class="w-1/6 border-r border-gray-400">
            @include('layouts.sidebar-links')
        </div>
        <div class="flex-1">
            <h1 class="p-4 font-bold text-lg">Home</h1>
            <div class="border-t border-b border-gray-400 p-2">
                <form action="/">
                    <textarea name="body" cols="30" rows="5" placeholder="What's happening?"
                        class="w-full border-0 resize-none shadow-none"></textarea>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="rounded-full bg-blue-400 text-white font-bold px-3 py-2">Tweet</button>
                    </div>
                </form>
            </div>
            <div></div>
        </div>
        <div class="w-1/4 border-l border-gray-400 p-4">
            @include('layouts.friends')
        </div>
    </div>
</x-app-layout>