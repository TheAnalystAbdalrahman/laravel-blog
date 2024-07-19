@extends('layouts.app')
@section('title') show @endsection
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{$post['title']}}</h5>
            <p class="card-text">Description</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name</h5>
            <p class="card-text">Email</p>
            <p class="card-text">Created At</p>
        </div>
    </div>
@endsection

