<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Http\Requests\StoreTweetRequest;
use App\Http\Requests\UpdateTweetRequest;

class TweetsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(StoreTweetRequest $request)
    {
        Tweet::create([
            'user_id'  => auth()->id(),
            'body' => $request['body']
        ]);

        return redirect('/home');
    }

    public function show(Tweet $tweet)
    {
        //
    }


    public function edit(Tweet $tweet)
    {
        //
    }


    public function update(UpdateTweetRequest $request, Tweet $tweet)
    {
        //
    }

    public function destroy(Tweet $tweet)
    {
        //
    }
}