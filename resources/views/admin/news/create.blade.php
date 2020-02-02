@extends('layouts.admin')
@section('content')

<div class="new-team">
    <div class="container py-3">
        <div class="row">
            <div class="col-12 mb-2">
                <h5>New Event</h5>
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
                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-0 shadow-none border-0"
                            placeholder="Enter news title" name="blog_title">
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control rounded-0 shadow-none border-0" rows="8"
                            placeholder="Write news content" name="blog_content"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-block rounded-0 shadow-none unique-btn">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection