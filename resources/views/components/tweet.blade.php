<div class="flex p-4 border-b border-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img src="https://i.pravatar.cc/50?u={{ $tweet->user->email }}" alt="" class="rounded-full mr-2">
    </div>
    <div>
        <span>{{$tweet->user->name}}</span>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>