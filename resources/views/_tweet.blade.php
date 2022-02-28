<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{$tweet->user->path()}}">
            <img src="{{auth()->user()->avatar}}" class="rounded-full mr-2" width="50" height="50" alt="">
        </a>
    </div>

    <div>
        <h5 class="font-semibold mb-4">
            <a href="{{$tweet->user->path()}}">
                {{$tweet->user->name}}
            </a>
        </h5>

        <p class="text-sm">
            {{$tweet->body}}
        </p>

        @auth
            <x-like-buttons :tweet="$tweet" />
        @endauth
    </div>
</div>
