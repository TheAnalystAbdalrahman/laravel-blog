

@extends('layouts.app')
@section('title') index @endsection
@section('content')
<div class="text-center">
    <button type="button" class="btn btn-success">Create Post</button>
</div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['posted_by']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>
                <button type="button" class="btn btn-primary">View</button>
                <button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>

            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

@endsection
