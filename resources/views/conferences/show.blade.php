@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $conference->title }}</h1>
        <p>{{ $conference->description }}</p>
        <p><strong>Date <i class="fa-solid fa-calendar-days"></i> :</strong> {{ $conference->date }}</p>
        <p><strong>Address:</strong> {{ $conference->address }}</p>

        <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" class="delete-form" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger delete-button">Delete</button>
        </form>




            <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-warning">Edit</a>

        <a href="{{ route('conferences.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const form = this.closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>


