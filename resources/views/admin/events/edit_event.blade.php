@extends('layouts.app')
@section('title')
<title>Girl Script | Edit Event</title>
@endsection
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
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="Title">Event Title</label>
                                <input type="title" name="title" class="form-control" id="title"
                                    placeholder="Enter Event Name..." value="{{$event->title}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="e_image">Image</label>
                                <input type="file" name="e_image" class="form-control" id="e_imgage">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                            <img src="{{ asset('images/events/'. $event->e_image)}}" height="150px" alt="img">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="is_p">Is Published :</label>
                        <select name="is_published" id="is_p" class="form-select">
                            <option value="1" @if($event->is_published == 1) selected @endif>Published</option>
                            <option value="0" @if($event->is_published == 0) selected @endif> Not Published
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status">Status :</label>
                        <select name="status" id="status" class="form-select">
                            <option value="Upcoming" @if($event->status == 'Upcoming') selected @endif>Upcoming
                            </option>
                            <option value="Ongoing" @if($event->status == 'Ongoing') selected @endif> Ongoing
                            </option>
                            <option value="Cancelled" @if($event->status == 'Cancelled') selected
                                @endif>Cancelled
                            </option>
                            <option value="Completed" @if($event->status == 'Completed') selected
                                @endif>Completed
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description_summer" rows="5"
                            placeholder="Enter Description...">{{$event->description}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label for="reg_link">Registration Link</label>
                        <input type="text" name="reg_link" class="form-control" id="reg_link"
                            value="{{$event->reg_link}}" placeholder="Enter Registration Link...">
                    </div>
                    <div class="col-md-5 form-group">
                        <label for="yt_link">YouTube Link</label>
                        <input type="text" name="yt_link" class="form-control" id="yt_link" value="{{$event->yt_link}}"
                            placeholder="Enter YouTube Link...">
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="link_status">Link Status :</label>
                        <select name="link_status" id="link_status" class="form-select">
                            <option value="1" @if($event->link_status == '1') selected @endif>Publish</option>
                            <option value="0" @if($event->link_status == '0') selected @endif>Don't Publish</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
$('#description_summer').summernote({
    placeholder: 'Enter Description',
    tabsize: 2,
    height: 100
});
</script>
@endsection