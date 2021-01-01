@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header" id="ch">
            <h4 class="card-title mb-0">Edit Event</h4>
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
                        <label for="Title">Event Title</label>
                        <input type="title" name="title" class="form-control" id="title"
                            placeholder="Enter Event Name..." value="{{$event->title}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="e_image">Image</label>
                        <input type="file" name="e_image" class="form-control" id="e_imgage">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/events/'. $event->e_image)}}" width="50px" alt="img">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="is_p">Is Published :</label>
                        <select name="is_published" id="is_p" class="form-control">
                            <option value="1" @if($event->is_published == 1) selected @endif>Published</option>
                            <option value="0" @if($event->is_published == 0) selected @endif> Not Published</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="status">Status :</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Upcoming" @if($event->status == 'Upcoming') selected @endif>Upcoming</option>
                            <option value="Ongoing" @if($event->status == 'Ongoing') selected @endif> Ongoing</option>
                            <option value="Cancelled" @if($event->status == 'Cancelled') selected @endif>Cancelled
                            </option>
                            <option value="Completed" @if($event->status == 'Completed') selected @endif>Completed
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="5"
                            placeholder="Enter Description...">{{$event->description}}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
</div>


@endsection