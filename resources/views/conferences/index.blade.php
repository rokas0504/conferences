@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "container d-flex justify-content-center align-items-center mt-0">
            <i class="fas fa-home fa-2x"></i>
            <h1>  Conferences</h1>
        </div>


    @if(Auth::check())
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
                    <a href="{{ route('conferences.create') }}" class="btn btn-primary">Create New Conference</a>
            </form>
        @else
            <div class="mt-3">
                <a href="{{ route('login') }}" class="btn btn-primary">
                    {{ __('Log in') }}
                </a>
            </div>
        @endif



        <div class="list-group mt-3">
            @foreach ($conferences as $conference)
                <div class="list-group-item">
                    <h5>{{ $conference->title }}</h5>
                    <p>{{ $conference->description }}</p>
                    <p><strong>Date <i class="fa-solid fa-calendar-days"></i>:</strong> {{ $conference->date }}</p>
                    <p><strong>Address:</strong> {{ $conference->address }}</p>

                    <a href="{{ route('conferences.show', $conference->id) }}" class="btn btn-info">View</a>

                    @if(auth()->check() && auth()->user()->is_admin)
                        <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
@endsection
