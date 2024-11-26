@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h2>General Setting</h2>
            </div>
            <div class="col-auto">
                <a href="{{url('createGeneralSetting')}}" class="btn btn-primary">Create New App Info</a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>App Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Develop By</th>
                <th>Facebook</th>
                <th>LinkedIn</th>
                <th>Instagram</th>
                <th>YouTube</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->app_name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->develop_by}}</td>
                <td>{{$item->facebook}}</td>
                <td>{{$item->linkedIn}}</td>
                <td>{{$item->instagram}}</td>
                <td>{{$item->youtube}}</td>
                <td>
                    <a href="{{url('editGeneralSetting', $item->id)}}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form action="{{url('deleteGeneralSetting', $item->id)}}" method="post" style="display:inline;" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection