<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Student List</h1>
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
                        <a href="{{ route('students.edit', $s->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('students.destroy', $s->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $students->links('pagination::bootstrap-5') }}
    </div>

            <!-- sweetalert2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(e) {
                let form = this.closest('form');
                Swal.fire({
                title: "តើពិតជាចង់លុបទិន្នន័យមួយនេះមែនទេ?"
                , text: "ពេលលុបចេញហើយ មិនអាចសង្រ្គោះទិន្នន័យមកវិញបានទេ"
                , icon: "warning"
                , showCancelButton: true
                , confirmButtonColor: "#d33"
                , cancelButtonColor: "#3085d6"
                , confirmButtonText: "បញ្ជាក់ការលុប"
                , cancelButtonText: "កុំលុប"
                , }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
                });
            });
            });

            @if(session('success'))
            Swal.fire({
                title: "ជោគជ័យ!",
                text: "{{ session('success') }}",
                icon: "success"
            });
            @endif
        </script>
        <!-- end of sweetalert2-->


    <!-- Bootstrap & jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
