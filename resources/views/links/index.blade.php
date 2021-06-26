@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Your links</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>URL</th>
                                <th>Visits</th>
                                <th>Last Visited</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($links as $link)
                                <tr>{{$link->name}}</tr>
                                <tr><a href="{{$link->link}}">{{$link->link}}</a></tr>
                                <tr>0</tr>
                                <tr>Aug 3, 2020 - 12:30pm</tr>
                                <tr><a href="/dashboard/links/{{$link->id}}">Edit</a></tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/dashboard/links/new" class="btn btn-primary">Add Link</a> 
                </div>
            </div>
        </div>
    </div>
@endsection