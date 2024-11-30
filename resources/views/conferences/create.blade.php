@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Conference</h1>
        <form method="POST" action="{{ route('conferences.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Conference Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Conference Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Conference</button>
        </form>
    </div>
@endsection
