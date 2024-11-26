@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h2>Comment</h2>
            </div>
            <div class="col-auto">

            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->comment}}</td>
                <td>
                    <form action="{{url('deleteComment', $item->id)}}" method="post" style="display:inline;" >
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