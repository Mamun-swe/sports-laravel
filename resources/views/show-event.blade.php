@extends('layouts.client')
@section('title')
TiTAN ESPORTS | Event
@endsection
@section('content')

<div class="event">
    <div class="container">
        @if(isset($details))
        <div class="row">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center">
                <img src="/blogs/{{$details->image}}" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 pl-lg-5">
                <h5 class="mb-3 mb-lg-4">{{$details->blog_title}}</h5>
                <p>{{$details->blog_content}}</p>
            </div>
        </div>
        @elseif(isset($message))
        <div class="row">
            <div class="col-12 text-center py-5">
                <h5 class="text-danger">{{ $message }}</h5>
            </div>
        </div>

        @endif
    </div>
</div>

@endsection