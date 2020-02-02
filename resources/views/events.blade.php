@extends('layouts.client')
@section('title')
TiTAN ESPORTS | Events
@endsection
@section('content')

<div class="events">
    <div class="banner">
        <div class="overlay">
            <div class="flex-center flex-column">
                <h1 class="mb-0">Events</h1>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">

            @foreach($data as $row)
            <div class="col-12 col-md-6 col-lg-4 py-3">
                <div class="card rounded-0 border-0 news-card shadow">
                    <img src="{{url('')}}/blogs/{{$row->image}}" class="card-img-top rounded-0 img-fluid">
                    <div class="card-body py-4">
                        <h6 class="mb-3 text-capitalize">{{$row->blog_title}}</h6>
                        <p>{{ \Illuminate\Support\Str::words($row->blog_content, 20, '...') }}</p>
                        <div class="text-right">
                            <a href="{{url('event/'.$row->id)}}" class="btn unique-btn-2 shadow-none">Read</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-12 pt-3 text-right">
                {{ $data->links() }}
            </div>
        </div>
    </div>


</div>

@endsection