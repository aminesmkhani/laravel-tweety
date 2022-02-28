<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/200?u=". $this->email;
    }


    public function timeline()
    {
        // include all of the user's tweets
        // as well as the tweets of everyone
        // the follow .... in descending order by date

        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id',$friends)
            ->orWhere('user_id',$this->id)
            ->withLikes()
            ->latest()->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class) ->latest();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }


    public function getRouteKeyName()
    {
        return 'username';
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
}
