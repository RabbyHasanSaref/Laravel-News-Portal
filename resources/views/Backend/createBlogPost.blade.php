@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <h2>Create New Blog Post</h2>
        <form action="{{url('addBlogPost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input type="text" class="form-control" name="Post_Title" id="postTitle" placeholder="Enter post title" required>
            </div>
            <div class="form-group">
                <label for="postContent">Post Content</label>
                <textarea class="form-control" name="Post_Content" id="postContent" rows="5" placeholder="Enter post content" required></textarea>
            </div>
            <div class="form-group">
                <label for="postCategory">Category</label>
                <select class="form-control" name="Category_Id" id="postCategory" required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="postStatus">Status</label>
                <select class="form-control" name="Status" id="postStatus" required>
                    <option value="">Select status</option>
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="postImage">Post Image</label>
                <input type="file" class="form-control-file" name="Post_Image" id="postImage" accept="image/*" >
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection