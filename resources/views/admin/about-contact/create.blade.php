@extends('layouts.admin')
@section('content')


<div class="add-about pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2">
                <h5>Add About & Conacts</h5>
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
                <form action="{{route('about-contact.store')}}" method="post">
                    @csrf
                    <!-- About -->
                    <div class="form-group mb-4">
                        <textarea class="form-control rounded-0 shadow-none border-0" rows="5"
                            placeholder="Write about content" name="about_content"></textarea>
                    </div>
                    <!-- Address -->
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-0 shadow-none border-0"
                            placeholder="Enter address" name="address">
                    </div>
                    <!-- email -->
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-0 shadow-none border-0" placeholder="Enter email"
                            name="email">
                    </div>
                    <!-- facebook -->
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-0 shadow-none border-0"
                            placeholder="Enter facebook link" name="facebook">
                    </div>
                    <!-- instagram -->
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-0 shadow-none border-0"
                            placeholder="Enter instagram link" name="instagram">
                    </div>
                    <!-- youtube -->
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-0 shadow-none border-0"
                            placeholder="Enter youtube link" name="youtube">
                    </div>
                    <!-- discord -->
                    <div class="form-group mb-4">
                        <input type="text" class="form-control rounded-0 shadow-none border-0"
                            placeholder="Enter discord link" name="discord">
                    </div>


                    <button type="submit" class="btn btn-block rounded-0 shadow-none unique-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection