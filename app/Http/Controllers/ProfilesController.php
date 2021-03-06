<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show',[
            'user' => $user,
            'tweets' => $user
            ->tweets()
            ->withLikes()
            ->paginate(50)
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        return view('profiles.edit',compact('user'));
    }

    public function update()
    {
        return 'enjoy!';
    }
}
