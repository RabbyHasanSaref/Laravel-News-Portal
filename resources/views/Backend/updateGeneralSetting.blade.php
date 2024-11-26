@extends('Backend.layout.master')
@section('content')
    <div class="container-fluid mt-5">
        <h2>App Information</h2>
        <form action="{{url('editGeneralSetting', $item->id)}}" method="post">
            @csrf
        <!-- App Name -->
            <div class="mb-3">
                <label for="appName" class="form-label">App Name</label>
                <input type="text" class="form-control" value="{{$item->app_name}}" name="app_name" id="appName" placeholder="Enter App Name" required>
            </div>
            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" value="{{$item->address}}" name="address" id="address" placeholder="Enter Address" required>
            </div>
            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" value="{{$item->phone}}" name="phone" id="phone" placeholder="Enter Phone Number" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{$item->email}}" name="email" id="email" placeholder="Enter Email" required>
            </div>
            <!-- Developed By -->
            <div class="mb-3">
                <label for="developer" class="form-label">Developed By</label>
                <input type="text" class="form-control" value="{{$item->develop_by}}" name="develop_by" id="developer" placeholder="Enter Developer's Name" required>
            </div>
            <!-- Social Media Links -->
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook Link</label>
                <input type="url" class="form-control" value="{{$item->facebook}}" name="facebook" id="facebook" placeholder="Enter Facebook URL">
            </div>

            <div class="mb-3">
                <label for="linkedin" class="form-label">LinkedIn Link</label>
                <input type="url" class="form-control" value="{{$item->linkedIn}}" name="linkedIn" id="linkedin" placeholder="Enter LinkedIn URL">
            </div>

            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram Link</label>
                <input type="url" class="form-control" value="{{$item->instagram}}" name="instagram" id="instagram" placeholder="Enter Instagram URL">
            </div>

            <div class="mb-3">
                <label for="youtube" class="form-label">YouTube Link</label>
                <input type="url" class="form-control" value="{{$item->youtube}}" name="youtube" id="youtube" placeholder="Enter YouTube URL">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection