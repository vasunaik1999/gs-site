@extends('layouts.app')
@section('title')
    <title>Girl Script | Edit Team Member</title>
@endsection
@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header shadow-sm" id="ch">
            <h4 class="mb-0">Edit Member</h4>
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
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="name">Member Name:</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Enter Member Name..." value="{{$team->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4">
                            <img src="{{ asset('images/team/'. $team->image)}}" height="150px" alt="img">
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-md-4 form-group">
                        <label for="section">Section Title :</label>
                        <input type="text" name="section_title" class="form-control" value="{{$team->section_title}}"
                            id="section" placeholder="Enter Section Title...">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="role">Role :</label>
                        <input type="text" name="role" class="form-control" value="{{$team->role}}" id="role"
                            placeholder="Enter Member Role...">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="status">status :</label>
                        <select name="status" id="status" class="form-select">
                            <option value="1" @if($team->status == 1) selected @endif>Published</option>
                            <option value="0" @if($team->status == 0) selected @endif> Not Published</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="linkedin">Linked In URL :</label>
                        <input type="link" name="linkedin" class="form-control" id="linkedin"
                            value="{{$team->linkedin}}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="twitter">Twitter URL :</label>
                        <input type="text" name="twitter" class="form-control" id="twitter" value="{{$team->twitter}}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="insta">Instagram URL :</label>
                        <input type="link" name="insta" class="form-control" id="insta" value="{{$team->insta}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection