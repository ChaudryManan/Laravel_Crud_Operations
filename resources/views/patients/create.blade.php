<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($patient) ? 'Edit Patient' : 'Add Patient' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .btn-primary {
            border-radius: 10px;
            padding: 10px;
            font-weight: 500;
        }

        .btn-secondary {
            border-radius: 10px;
        }

        .header {
            font-weight: 600;
            color: #333;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card p-4">

                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="header">
                        {{ isset($patient) ? '✏️ Edit Patient' : '➕ Add New Patient' }}
                    </h4>
                    <a href="{{ route('patients.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </div>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <!-- Form -->
                <form 
                    action="{{ isset($patient) ? route('patients.update', $patient->id) : route('patients.store') }}" 
                    method="POST"
                >
                    @csrf

                    @if(isset($patient))
                        @method('PUT')
                    @endif

                    <!-- Name -->
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control"
                               value="{{ old('name', $patient->name ?? '') }}"
                               placeholder="Enter patient name" required>
                    </div>

                    <!-- Age -->
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control"
                               value="{{ old('age', $patient->age ?? '') }}"
                               placeholder="Enter age" required>
                    </div>

                    <!-- Condition -->
                    <div class="mb-4">
                        <label>Condition</label>
                        <input type="text" name="condition" class="form-control"
                               value="{{ old('condition', $patient->condition ?? '') }}"
                               placeholder="Enter medical condition" required>
                    </div>

                    <!-- Button -->
                    <button type="submit" class="btn btn-primary w-100">
                        {{ isset($patient) ? '🔄 Update Patient' : '💾 Save Patient' }}
                    </button>

                </form>

            </div>

        </div>
    </div>

</div>

</body>
</html>