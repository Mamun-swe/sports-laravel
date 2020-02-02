@extends('layouts.admin')
@section('content')

<div class="show-team">
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <img class="img-fluid" src="{{url('')}}/blogs/{{$data->image}}">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h4>{{$data->blog_title}}</h4>
                        <p class="mb-0"><b>News content:</b></p>
                        <p>{{$data->blog_content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection