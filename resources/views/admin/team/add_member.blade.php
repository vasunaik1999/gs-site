@extends('layouts.app')
@section('title')
    <title>Girl Script | Team</title>
@endsection
@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header shadow-sm" id="ch">
            <h4 class="mb-0">Add Member</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session()->get('message') }}
            </div>
            @endif
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="name">Member Name:</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter Member Name...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="section">Section Title :</label>
                        <input type="text" name="section_title" class="form-control" id="section" placeholder="Enter Section Title...">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="role">Role :</label>
                        <input type="text" name="role" class="form-control" id="role" placeholder="Enter Member Role...">
                    </div>
                </div>
                <input type="hidden" name="status" value="0">
                <hr>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="linkedin">Linked In URL :</label>
                        <input type="link" name="linkedin" class="form-control" id="linkedin">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="twitter">Twitter URL :</label>
                        <input type="text" name="twitter" class="form-control" id="twitter">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="insta">Instagram URL :</label>
                        <input type="link" name="insta" class="form-control" id="insta">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>



<!-- Display -->
<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title">Team</h4>
            <div class="row">
                <table class="table table-responsive-lg col-12">
                    <thead class="thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th>Social</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as  $key => $team)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$team->name}}</td>
                            <td>{{$team->role}}</td>
                            <td>
                                @if($team->status == 0)
                                    <span class="badge badge-danger">Not Published</span>
                                @else
                                    <span class="badge badge-success">Published</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{$team->linkedin}}" id="social-icon" class="fab fa-linkedin"></a>
                                <a href="{{$team->twitter}}" id="social-icon" class="fab fa-twitter"></a>
                                <a href="{{$team->insta}}" id="social-icon" class="fab fa-instagram"></a>
                            </td>
                            <td><img src="{{ asset('images/team/'. $team->image)}}" width="50px"  alt="{{$team->name}}"></td>
                            <td>
                               <a href="/edit-member/{{$team->id}}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit this Event">Edit</a>
                               <a href="/delete-member/{{$team->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete this Event">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection