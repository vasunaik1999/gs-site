@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header" id="ch">
            <h4 class="mb-0">Add Event</h4>
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
                            placeholder="Enter Event Name...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="e_image">Image</label>
                        <input type="file" name="e_image" class="form-control" id="e_imgage">
                    </div>
                </div>
                <input type="hidden" name="is_published" value="0">
                <input type="hidden" name="status" value="Upcoming">
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description"
                            placeholder="Enter Description..."></textarea>
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
        <!-- <div class="card-header">
            Add Event
        </div> -->
        <div class="card-body">
            <h4 class="card-title">Events</h4>
            <div class="row">
                <table class="table table-responsive-lg col-12">
                    <thead class="thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as  $key => $event)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$event->title}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->status}}
                                <br>
                                @if($event->is_published == 0)
                                    <span class="badge badge-danger">Not Published</span>
                                @else
                                    <span class="badge badge-success">Published</span>
                                @endif
                            </td>
                            <td><img src="{{ asset('images/events/'. $event->e_image)}}" width="50px"  alt="img"></td>
                            <td>
                               <a href="/edit-event/{{$event->id}}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit this Event">Edit</a>
                               <a href="/delete-event/{{$event->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete this Event">Delete</a>
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

@section('scripts')
<script>
//Summernote
$('#description').summernote({
    placeholder: 'Enter Event Description',
    tabsize: 2,
    height: 100
});
</script>
@endsection