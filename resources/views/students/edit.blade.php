@extends('layouts.layout1')
@section('title', 'កែសម្រួលព័ត៌មាននិស្សិត')
@section('content')
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" id="full_name"
               class="form-control @error('full_name') is-invalid @enderror"
               value="{{ old('full_name', $student->full_name) }}">
        @error('full_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
