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
                <th>Comment</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Rabby</td>
                <td>Good News</td>
                <td>10-29-24</td>
                <td>
                    <a href="#" class="btn btn-danger btn-sm" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tbody>
        </table>
    </div>
@endsection