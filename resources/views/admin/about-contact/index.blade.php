@extends('layouts.admin')
@section('content')

<div class="about-contact py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <div class="d-flex">
                    <div>
                        <h5>About & Contact</h5>
                    </div>
                    <div class="ml-auto">
                        <a href="{{ url('admin/about-contact/create') }}"
                            class="btn shadow-none border-0 unique-btn px-3">Add
                            New</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-12">
                @foreach($data as $row)
                <div class="card border-0">
                    <div class="card-body">
                        <!-- About -->
                        <div class="py-3 border-bottom">
                            <h6><b>About</b></h6>
                            <p class="mb-0">{{$row->about_content}}</p>
                        </div>
                        <div class="contacts py-3">
                            <h6><b>Contacts</b></h6>
                            <ul class="pl-4 mb-0">
                                <li>Address: {{$row->address}}</li>
                                <li>E-mail: {{$row->email}}</li>
                                <li>Facebook: {{$row->facebook}}</li>
                                <li>Instagram: {{$row->instagram}}</li>
                                <li>Youtube: {{$row->youtube}}</li>
                                <li>Discord: {{$row->discord}}</li>
                            </ul>
                        </div>
                        <div class="text-right pt-2">
                            <a href="{{route('about-contact.edit',$row->id)}}"
                                class="btn unique-btn shadow-none px-4 mt-2">Edit</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>



    </div>
</div>

@endsection