
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Create a new link</h2>
                    
                    <form action="/dashboard/links/new" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="My YouTube Channel">
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="/dashboard/links/new" class="btn btn-primary">Add Link</a> 
                </div>
            </div>
        </div>
    </div>
@endsection