@extends('layouts.app')
@section('title')
    <title>Girl Script | Subscriptions</title>
@endsection
@section('content')
<!-- Display -->
<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title">Subscription List</h4>
            <div class="row">
                <table class="table table-responsive-lg col-12">
                    <thead class="thead">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subs as $key => $sub)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$sub->email}}</td>
                            <td>{{$sub->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection