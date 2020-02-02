@extends('layouts.client')
@section('title')
TiTAN ESPORTS | Team
@endsection
@section('content')

<div class="teams">
    <div class="banner">
        <div class="overlay">
            <div class="flex-center flex-column">
                <h1 class="mb-0">All Fighter</h1>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">

            @foreach($data as $row)
            <div class="col-12 col-md-6 col-lg-4 py-3">
                <a href="{{url('show-team/'.$row->id)}}">
                    <div class="card rounded-0 border-0 shadow team-card">
                        <img src="{{url('')}}/teams/{{$row->image}}" class="rounded-0 img-fluid">
                        <div class="overlay">
                            <div class="flex-center flex-column">
                                <img src="{{asset('icon/search.svg')}}" class="icon">
                            </div>
                        </div>
                    </div>
                </a>
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