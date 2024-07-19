@extends('layouts.app')
@section('title') create @endsection
@section('content')
<form>
    <div class="mb-3">
        <label class="form-label">title</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Post Creator</label>
        <select  class="form-control">
            <option value="1">Abdalrahman</option>
            <option value="2">Osman</option>
        </select>
    </div>dd

    <button class="btn btn-success">Submit</button>
</form>
@endsection

