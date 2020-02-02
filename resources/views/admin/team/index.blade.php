@extends('layouts.admin')
@section('content')

<div class="teams py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <div class="d-flex">
                    <div>
                        <h5>Team's</h5>
                    </div>
                    <div class="ml-auto">
                        <a href="{{ url('admin/team/create') }}" class="btn shadow-none border-0 unique-btn px-3">Add
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
                                <h5>Name</h5>
                            </td>
                            <td>
                                <h5>Image</h5>
                            </td>
                            <td>
                                <h5>About</h5>
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
                                <p class="text-capitalize">{{$row->name}}</p>
                            </td>
                            <td>
                                <img src="{{url('')}}/teams/{{$row->image}}">
                            </td>
                            <td>
                                <p class="text-capitalize">{{$row->about}}</p>
                            </td>
                            <td class="text-center">
                                <a href="{{route('team.edit',$row->id)}}"
                                    class="btn btn-sm btn-light rounded-0 shadow-none">
                                    <i class="fas fa-pen text-info"></i>
                                </a>
                                <a href="{{route('team.show',$row->id)}}"
                                    class="btn btn-sm btn-light rounded-0 shadow-none">
                                    <i class="fas fa-eye text-primary"></i>
                                </a>
                                <form action="{{route('team.destroy',$row->id)}}" method="post"
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