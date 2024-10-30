@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <h2>Create A New Blog Category </h2>
        <form action="{{url('addCategory')}}" method="post">
            @csrf
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-group">
                <label for="postTitle">Category Name</label>
                <input type="text" class="form-control" name="name" id="postTitle" placeholder="Enter Category Name" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
@endsection