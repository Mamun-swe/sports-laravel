@extends('layouts.admin')

@section('content')
<div class="container py-3">
    <div class="row mb-3">
        <div class="col-12 col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="card border-0 py-5">
                <div class="card-body">
                    <p class="mb-0">{{$teams}}</p>
                    <h5><b>Team</b></h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="card border-0 py-5">
                <div class="card-body">
                    <p class="mb-0">{{$events}}</p>
                    <h5><b>Events</b></h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3 mb-lg-0 text-center">
            <div class="card border-0 py-5">
                <div class="card-body">
                    <p class="mb-0">{{$admins}}</p>
                    <h5><b>Admin</b></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-12 mb-3">
        <h6 class="mb-0"><b>Hot Streaming</b></h6>
    </div>
        <div class="col-12">
        @foreach($streams as $stream)
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{$stream->video_link}}"
                    allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection