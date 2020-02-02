@extends('layouts.admin')
@section('content')

<div class="show-stream py-3 py-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 mb-lg-4">
                <h5 class="text-capitalize mb-0">{{$data->title}}</h5>
                <small class="text-muted">Start time: {{$data->start_time}}</small>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 text-center mb-3 mb-lg-0">
                <div class="embed-responsive embed-responsive-16by9" style="margin:auto;width:100%;height:100%;">
                    <iframe class="embed-responsive-item" src="{{$data->video_link}}" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img src="{{url('')}}/streaming/{{$data->image}}" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>

@endsection