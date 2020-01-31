@extends('layouts.admin')
@section('content')

<div class="edit-team py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{Session::get('success')}}</p>
                @endif
                <form action="{{route('team.update',$data->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-4">
                        <small class="text-muted">Team name</small>
                        <input type="text" class="form-control rounded-0 shadow-none border-0" name="name"
                            value="{{$data->name}}">
                    </div>
                    <div class="form-group mb-4">
                        <small class="text-muted">Team about</small>
                        <textarea class="form-control rounded-0 shadow-none border-0" rows="8"
                            name="about">{{$data->about}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-block rounded-0 shadow-none unique-btn">Update</button>
                </form>
                <div class="text-center py-4">
                    <a href="{{route('team.index')}}">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection