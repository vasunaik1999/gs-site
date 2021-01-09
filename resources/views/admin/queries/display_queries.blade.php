@extends('layouts.app')
@section('title')
    <title>Girl Script | Queries</title>
@endsection
@section('content')
<!-- Display -->
<div class="container-fluid mt-2">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title">Queries</h4>
            <div class="row">
                <table class="table table-responsive-lg col-12">
                    <thead class="thead">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($queries as $key => $query)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>
                                {{$query->name}} <br>
                                {{$query->email}}
                            </td>
                            <td>{{$query->subject}}</td>
                            <td>{{$query->message}}</td>
                            <td>
                                <a href="/solve-query/{{$query->id}}" @if($query->is_solved == 1)
                                    class="btn btn-success btn-sm"> Solved
                                    @else
                                    class="btn btn-warning btn-sm"> Unsolved
                                    @endif
                                </a>
                                <a href="/delete-query/{{$query->id}}" class="btn btn-danger btn-sm"
                                    data-toggle="tooltip" data-placement="top" title="Delete this Query">Delete</a>
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