<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Employees</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Create New Employee</a>
        @if(session('success'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <ul class="list-group">
            @foreach($employees as $employee)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <p>Name: {{ $employee->name }}</p>
                    <p>Email: {{ $employee->email }}</p>
                    @if($employee->photo)
                    <img src="{{ Storage::disk('employee_photos')->url($employee->photo) }}" alt="{{ $employee->name }}" width="50" class="rounded-circle">
                    @endif
                </div>
                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-sm btn-info">View Details</a>
            </li>
            @endforeach
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>