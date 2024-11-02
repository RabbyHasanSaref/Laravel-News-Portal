@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <h2>Update A Blog Post</h2>
        <form action="{{url('updateBlogPost', $blogPost->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input type="text" class="form-control" name="Post_Title" value="{{$blogPost->Post_Title}}" id="postTitle" placeholder="Enter post title" required>
            </div>
            <div class="form-group">
                <label for="postContent">Post Content</label>
                <textarea class="form-control" name="Post_Content"   id="postContent" rows="5" placeholder="Enter post content" required>{{$blogPost->Post_Content}}</textarea>
            </div>
            <div class="form-group">
                <label for="postCategory">Category</label>
                <select class="form-control" id="postCategory" name="Category_Id" required>
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $blogPost->Category_Id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="postStatus">Status</label>
                <select class="form-control" name="Status" id="postStatus" required>
                    <option value="">Select status</option>
                    <option value="1" {{ $blogPost->Status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $blogPost->Status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <input type="checkbox" name="Feature" {{$blogPost->Feature ? 'checked' : ''}}> Feature Post Yes
                <input type="checkbox" name="Tranding" {{$blogPost->Tranding ? 'checked' : ''}}> Tranding Post Yes
            </div>
            <div class="form-group">
                <label for="postImage">Post Image</label>
                <input type="file" class="form-control-file" name="Post_Image" id="postImage" accept="image/*" >
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection