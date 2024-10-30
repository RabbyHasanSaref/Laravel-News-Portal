@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h2>Blog Posts</h2>
            </div>
            <div class="col-auto">
                <a href="{{url('createBlogPost')}}" class="btn btn-primary">Create New Post</a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Post Title</th>
                <th>Post Content</th>
                <th>Category</th>
                <th>Status</th>
                <th>Publish Date</th>
                <th>Post Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogPost as $blog)
            <tr>
                <td>{{$blog->Post_Title}}</td>
                <td>{{$blog->Post_Content}}</td>
                <td>{{ $blog->category->name}}</td>
                <td>{{ $blog->Status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>{{ date('d-m-Y', strtotime($blog->created_at))}}</td>
                <td><img src="{{env('STORAGE_PATH')}}/{{$blog->Post_Image}}" alt="Image 1" style="width: 50px; height: auto;"></td>
                <td>
                    <a href="{{url('updateBlogPost', $blog->id)}}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{url('deleteBlogPost', $blog->id)}}" method="post" style="display:inline;" >
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