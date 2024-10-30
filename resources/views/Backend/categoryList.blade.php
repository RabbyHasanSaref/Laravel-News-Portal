@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h2>Categories</h2>
            </div>
            <div class="col-auto">
                <a href="{{url('createCategory')}}" class="btn btn-primary">Create New Category</a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
           @foreach($categories as $category)
               <tr>
                   <td>{{$category->name}}</td>
                   <td>
                       <a href="{{url('updateCategory', $category->id)}}" class="btn btn-warning btn-sm" title="Edit">
                           <i class="fas fa-edit"></i>
                       </a>

                       <form action="{{url('deleteCategory', $category->id)}}" method="post" style="display:inline;" >
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