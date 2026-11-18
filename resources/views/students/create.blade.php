@extends('layouts.layout1')
@section('title', 'បង្កើតនិស្សិតថ្មី')
@section('content')
<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" id="full_name"
               class="form-control @error('full_name') is-invalid @enderror"
               value="{{ old('full_name') }}" placeholder="Enter Full Name">
        @error('full_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">SAVE</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
