@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Conference</h1>
        <form method="POST" action="{{ route('conferences.update', $conference->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Conference Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $conference->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $conference->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Conference Date <i class="fa-solid fa-calendar-days"></i></label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $conference->date }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $conference->address }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Conference</button>
        </form>
    </div>
@endsection
