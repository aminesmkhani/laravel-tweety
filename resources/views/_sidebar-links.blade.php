<ul>
    <li><a href="{{route('home')}}" class="font-semibold text-lg mb-4 block">Home</a></li>
    <li><a href="/explore" class="font-semibold text-lg mb-4 block">Explore</a></li>
    <li><a href="{{route('profile',auth()->user())}}" class="font-semibold text-lg mb-4 block">Profile</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text-lg">Logout</button>
        </form>
    </li>
</ul>
