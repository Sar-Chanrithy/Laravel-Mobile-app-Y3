@extends('layouts.layout1')
@section('title', 'បញ្ជីនិស្សិត')
@section('content')
<a href="{{ route('students.create') }}" class="btn btn-primary my-1">Create New</a>
<table class="table table-hover">
    <thead class="table-primary">
        <th>Id</th>
        <th>Full Name</th>
        <th>Actions</th>
    </thead>
    <tbody> 
        @foreach ($students as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->full_name }}</td>    
            <td>        
                <a href="{{ route('students.edit', $s->id) }}" class="btn btn-info">Edit</a>
                <form method="POST" action="{{ route('students.destroy', $s->id) }}" style="display:inline">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-danger btn-delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $students->links('pagination::bootstrap-5') }}
@endsection
