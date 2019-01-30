@extends('layouts.master')

@section('content')

<form>
    <div class="form-group">
    <label for="tl">Title:</label>
    <input type="text" class="form-control" id="tl" placeholder="title:">
    </div>
    <div class="form-group">
    <label for="des">Description:</label>
    <input type="text" class="form-control" id="des" placeholder="description:">
    </div>
    <div class="form-group">
    <label for="url">URl:</label>
    <input type="text" class="form-control" id="url" placeholder="url:">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection