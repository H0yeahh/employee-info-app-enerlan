<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Employee Details</h1>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Name:</strong> {{ $employee->name }}</p>
                <p><strong>Email:</strong> {{ $employee->email }}</p>
                @if($employee->photo)
                <img src="{{ Storage::disk('employee_photos')->url($employee->photo) }}" alt="{{ $employee->name }}" class="img-fluid mt-3" style="max-width: 200px;">
                @endif
            </div>
        </div>
        <a href="{{ route('employees.index') }}" class="btn btn-primary mt-4">Back to Employees</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>