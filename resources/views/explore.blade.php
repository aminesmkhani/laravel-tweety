<x-app>
    <div>
        @foreach($users as $user)
          <a href="{{$user->path()}}" class="flex items-center mb-5">
              <img class="mr-4 rounded" src="{{$user->avatar}}" alt="" width="60">
              <div>
                  <h4 class="font-semibold">{{'@'.$user->username}}</h4>
              </div>
          </a>
        @endforeach

        {{$users->links()}}
    </div>
</x-app>
