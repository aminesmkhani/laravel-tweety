<?php

namespace App\Models;

trait Followable
{

    public function following()
    {

    }

    public function follows()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
}
