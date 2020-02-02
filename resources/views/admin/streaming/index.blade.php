@extends('layouts.admin')
@section('content')

<div class="teams py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <div class="d-flex">
                    <div>
                        <h5 class="mt-3 mb-0">Streaming</h5>
                    </div>
                    <div class="ml-auto">
                        <a href="{{ url('admin/streaming/create') }}"
                            class="btn shadow-none border-0 unique-btn px-3">Add
                            New</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if(Session::has('success'))
                <p class="text-success">{{Session::get('success')}}</p>
                @endif

                <table class="table table-bordered table-responsive-lg">
                    <thead>
                        <tr>
                            <td>
                                <h5>ID</h5>
                            </td>
                            <td>
                                <h5>Title</h5>
                            </td>
                            <td class="text-center">
                                <h5>Image</h5>
                            </td>
                            <td class="text-center">
                                <h5>Start Time</h5>
                            </td>
                            <td class="text-center">
                                <h5>Video</h5>
                            </td>
                            <td class="text-center">
                                <h5>Action</h5>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>
                                <p class="text-capitalize">{{$row->id}}</p>
                            </td>
                            <td>
                                <p class="text-capitalize">{{$row->title}}</p>
                            </td>
                            <td class="text-center">
                                <img src="{{url('')}}/stream-files/{{$row->image}}">
                            </td>
                            <td class="text-center">
                                <p class="text-capitalize">{{$row->start_time}}</p>
                            </td>
                            <td class="text-center">
                                <div class="embed-responsive embed-responsive-16by9"
                                    style="width: 150px;height:80px;margin:auto;">
                                    <iframe class="embed-responsive-item" src="{{$row->video_link}}"
                                        allowfullscreen></iframe>
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="{{route('streaming.show',$row->id)}}"
                                    class="btn btn-sm btn-light rounded-0 shadow-none">
                                    <i class="fas fa-eye text-primary"></i>
                                </a>
                                <form action="{{route('streaming.destroy',$row->id)}}" method="post"
                                    onsubmit="return confirm('Are you sure ?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-light rounded-0 shadow-none">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-12 text-center">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

@endsection