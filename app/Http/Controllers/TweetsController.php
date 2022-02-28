<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Http\Requests\StoreTweetRequest;
use App\Http\Requests\UpdateTweetRequest;

class TweetsController extends Controller
{

    public function index()
    {

        return view('tweets.index',[
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store(StoreTweetRequest $request)
    {
        Tweet::create([
            'user_id'  => auth()->id(),
            'body' => $request['body']
        ]);

        return redirect()->route('home');
    }
}
