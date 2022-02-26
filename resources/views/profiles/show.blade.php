@extends('layouts.app')

@section('content')
       <h3>profile page for {{$user->name}}</h3>

        <hr>

        @include('_timeline',[
            'tweets' => $user->tweets
        ])
@endsection
