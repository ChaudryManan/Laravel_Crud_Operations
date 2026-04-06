<!DOCTYPE html>
<html>
<head>
    <title>Patients List</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .btn {
            border-radius: 8px;
        }

        .patient-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        .patient-item:last-child {
            border-bottom: none;
        }

        .patient-info {
            font-size: 16px;
        }

        .actions button {
            margin-left: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="card p-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Patients List</h3>
           <a href="{{ route('patients.create') }}" class="btn btn-primary">
    + Add Patient
</a>
        </div>

        <!-- Patient List -->

        <!-- Dummy Data (replace later with dynamic data) -->
        
        @foreach($patients as $patient)
<div class="patient-item">
    <div>
        <strong>{{ $patient->name }}</strong> ({{ $patient->age }}) - {{ $patient->condition }}
    </div>

    <div>
        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>
</div>
@endforeach

        <div class="patient-item">
            <div class="patient-info">
                <strong>Ahmed</strong> (30) - Cough
            </div>

            <div class="actions">
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>

    </div>

</div>

</body>
</html>