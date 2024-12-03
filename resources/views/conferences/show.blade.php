@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $conference->title }}</h1>
        <p>{{ $conference->description }}</p>
        <p><strong>Date <i class="fa-solid fa-calendar-days"></i> :</strong> {{ $conference->date }}</p>
        <p><strong>Address:</strong> {{ $conference->address }}</p>

        <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

            <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-warning">Edit</a>

        <a href="{{ route('conferences.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
