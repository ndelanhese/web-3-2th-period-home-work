@extends('layout')

@section('title')
    Add Category
@endsection

@section('content')
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <button class="btn btn-primary mt-3">Add</button>
    </form>
@endsection
