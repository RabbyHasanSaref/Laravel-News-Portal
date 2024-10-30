@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <h2>Update A Blog Category </h2>
        <form action="{{url('updateCategory', $category->id)}}" method="post">
            @csrf
{{--            @method('put')--}}
            <div class="form-group">
                <label for="postTitle">Category Name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" id="postTitle" placeholder="Enter Category Name" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
@endsection