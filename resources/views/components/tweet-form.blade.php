<div class="border-t border-b border-gray-400 p-2 mb-4">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" cols="30" rows="5" placeholder="What's happening?"
            class="w-full border-0 resize-none shadow-none focus:outline-none"></textarea>

        <div class="flex justify-end">
            <button type="submit" class="rounded-full bg-blue-600 text-white font-bold px-3 py-2">
                Tweet
            </button>
        </div>
    </form>
    @error('body')
    <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>