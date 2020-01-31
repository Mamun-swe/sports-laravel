@extends('layouts.client')
@section('title')
TiTAN ESPORTS | Registration
@endsection
@section('content')

<div class="registration">
    <div class="banner text-center">
        <div class="overlay">
            <div class="flex-center flex-column">
                <h1 class="mb-0">PMLT Task</h1>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-6 py-3 py-lg-5">
                <h2 class="mb-4 mb-lg-5 text-uppercase">registration process</h2>
                <div class="d-flex mb-3">
                    <div><img src="{{asset('static/bullet.png')}}" class="bullet"></div>
                    <div class="pl-2">
                        <p class="mb-0">Every player should like our Facebook page, and take a screenshot.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div><img src="{{asset('static/bullet.png')}}" class="bullet"></div>
                    <div class="pl-2">
                        <p class="mb-0">Team leader collect all of screenshots and submit on our discord server,with
                            team name.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div><img src="{{asset('static/bullet.png')}}" class="bullet"></div>
                    <div class="pl-2">
                        <p class="mb-0">Then we will check all of your screenshots and if screenshots are ok then we
                            will approved your team. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection