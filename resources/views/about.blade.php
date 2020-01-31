@extends('layouts.client')
@section('title')
TiTAN ESPORTS | About
@endsection
@section('content')

<div class="about">
    <div class="banner text-center">
        <img src="{{asset('static/logo.png')}}" class="img-fluid">
        <div class="overlay">
            <div class="flex-center flex-column">
                <h1 class="mb-0">About TiTAN ESPORTS</h1>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-6 py-3 py-lg-5">
                <h4 class="mb-0">TiTAN ESPORTS</h4>
                <h1 class="mb-0">FOUNDED IN 2019</h1>
                <h4 class="mb-4 mb-lg-5">BY TAWSIF MAHBUB</h4>
                <p>TiTAN ESPORTS is about growth through competition. It’s about being the best. About elevating the
                    game and each other. Do you want to dominate your friends? Be the shining crown atop the
                    leaderboards? Or change the meta as the new champion? Then join the elite. Join TiTAN ESPORTS.
                    #TeamTitan </p>
            </div>
        </div>
    </div>

</div>

@endsection