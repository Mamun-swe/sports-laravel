@extends('layouts.client')
@section('title')
TiTAN ESPORTS
@endsection
@section('content')
<!-- header -->
<div class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 banner-img-column">
                <img src="{{asset('static/banner_bg.png')}}" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="custom-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-6 content-column">
                    <h1 class="mb-4">Best Highlights Of The Latest</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum</p>
                    <a href="{{url('/about')}}" class="btn unique-btn shadow-none">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About -->
<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0 text-center">
                <img src="{{asset('static/logo.png')}}" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 pt-lg-5 content">
                <h1 class="mb-4">Find out about us in history</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="{{url('/about')}}" class="btn unique-btn shadow-none">Read more</a>
            </div>
        </div>
    </div>
</div>

<!-- Striming -->
<div class="striming-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-4">
                <h1 class="mb-5">Latest War Fight</h1>
            </div>
            <div class="col-12 m-auto">
                @foreach($streaming as $stream)
                <div class="strim-box">
                    <img src="/stream-files/{{$stream->image}}" class="img-fluid" alt="no image found">
                    <div class="strim-overlay">
                        <div class="flex-center flex-column">
                            <h4 class="mb-3 text-capitalize">{{$stream->title}}</h4>
                            <h5 class="mb-3">{{$stream->start_time}}</h5>
                            <h3>Let's enjoy</h3>
                        </div>
                    </div>
                    <div class="second-strim-overlay">
                        <div class="flex-center flex-column">
                            <button type="button" class="btn unique-btn shadow-none" onclick="showVideo()">Watch
                                Video</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- team -->
<div class="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-4">
                <h1 class="mb-5">All Fighter</h1>
            </div>
        </div>
        <div class="row">

            @foreach($teams as $team)
            <div class="col-12 col-sm-6 col-lg-4 py-3">
                <a href="{{url('show-team/'.$team->id)}}">
                    <div class="team-box">
                        <img src="/teams/{{$team->image}}" class="img-fluid">
                        <div class="team-overlay">
                            <div class="flex-center flex-column">
                                <img src="{{asset('icon/search.svg')}}" class="icon">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach


        </div>
    </div>
</div>


<!-- News -->
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-4">
                <h1 class="mb-5">Latest News</h1>
            </div>
        </div>
        <div class="row">

            @foreach($events as $event)
            <div class="col-12 col-md-6 col-lg-4 py-3">
                <div class="card rounded-0 border-0 news-card shadow">
                    <img src="/blogs/{{$event->image}}" class="card-img-top rounded-0 img-fluid">
                    <div class="card-body py-4">
                        <h6 class="mb-3 text-capitalize">{{$event->blog_title}}</h6>
                        <p>{{$event->blog_content}}</p>
                        <div class="text-right">
                            <a href="{{url('event/'.$event->id)}}" class="btn unique-btn-2 shadow-none">Read</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>


<!-- Striming modal -->
<div class="custom-modal" id="modal" onclick="closeVideo()">
    <i class="fas fa-times" onclick="closeVideo()"></i>
    <div class="flex-center flex-column">
        <div class="card border-0 rounded-0">
            <div class="card-body p-0">
                @foreach($streaming as $stream)
                <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height:100%;margin:auto;">
                    <iframe class="embed-responsive-item" src="{{$stream->video_link}}" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection