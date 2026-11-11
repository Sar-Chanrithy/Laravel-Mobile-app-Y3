<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    @include('mylayout.mylayout1')
</head>

<body>
    <div class="container mt-3">
        <h1>Create Student</h1>

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
    </div>

</body>
</html>
