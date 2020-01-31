@extends('layouts.admin')
@section('content')


<div class="add-about pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                <h5>Edit About & Conacts</h5>
            </div>
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
                <form action="{{route('about-contact.update',$data->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- About -->
                    <div class="form-group mb-4">
                        <small class="text-muted">About content</small>
                        <textarea class="form-control rounded-0 shadow-none border-0" rows="5"
                            name="about_content">{{$data->about_content}}</textarea>
                    </div>
                    <!-- Address -->
                    <div class="form-group mb-4">
                        <small class="text-muted">Address</small>
                        <input type="text" class="form-control rounded-0 shadow-none border-0" name="address"
                            value="{{$data->address}}">
                    </div>
                    <!-- email -->
                    <div class="form-group mb-4">
                        <small class="text-muted">E-mail</small>
                        <input type="text" class="form-control rounded-0 shadow-none border-0" name="email"
                            value="{{$data->email}}">
                    </div>
                    <!-- facebook -->
                    <div class="form-group mb-4">
                        <small class="text-muted">Facebook</small>
                        <input type="text" class="form-control rounded-0 shadow-none border-0" name="facebook"
                            value="{{$data->facebook}}">
                    </div>
                    <!-- instagram -->
                    <div class="form-group mb-4">
                        <small class="text-muted">Instagram</small>
                        <input type="text" class="form-control rounded-0 shadow-none border-0" name="instagram"
                            value="{{$data->instagram}}">
                    </div>
                    <!-- youtube -->
                    <div class="form-group mb-4">
                        <small class="text-muted">Youtube</small>
                        <input type="text" class="form-control rounded-0 shadow-none border-0" name="youtube"
                            value="{{$data->youtube}}">
                    </div>
                    <!-- discord -->
                    <div class="form-group mb-4">
                        <small class="text-muted">Discord</small>
                        <input type="text" class="form-control rounded-0 shadow-none border-0" name="discord"
                            value="{{$data->discord}}">
                    </div>


                    <button type="submit" class="btn btn-block rounded-0 shadow-none unique-btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection