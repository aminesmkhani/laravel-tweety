<x-app>
    <form method="post" action=""{{$user->path()}}>
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <lable class="block mb-2 text-uppercase font-semibold text-xs text-gray-700" for="name">Name</lable>
            <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}" required>
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <lable class="block mb-2 text-uppercase font-semibold text-xs text-gray-700" for="name">User Name</lable>
            <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" required>
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <lable class="block mb-2 text-uppercase font-semibold text-xs text-gray-700" for="email">Email</lable>
            <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{$user->email}}" required>
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <lable class="block mb-2 text-uppercase font-semibold text-xs text-gray-700" for="password">Password</lable>
            <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <lable class="block mb-2 text-uppercase font-semibold text-xs text-gray-700" for="password_confirmation">Password Confirmation</lable>
            <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

    </form>
</x-app>
