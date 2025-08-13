<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
</head>
<body>
    <h1>Edit Patient</h1>
    <form action="{{ route('patients.update', $patient) }}" method="POST">
        @csrf @method('PUT')
        @extends('layouts.app')

@section('content')
    <h1>Patients</h1>

    @if(count($patients) > 0)
        <ul>
        @foreach($patients as $patient)
            <li>{{ $patient->name }}</li>
        @endforeach
        </ul>
    @else
        <p>No patients found.</p>
    @endif
@endsection

        Name: <input type="text" name="name" value="{{ $patient->name }}"><br>
        Email: <input type="email" name="email" value="{{ $patient->email }}"><br>
        Age: <input type="number" name="age" value="{{ $patient->age }}"><br>
        Weight: <input type="text" name="weight" value="{{ $patient->weight }}"><br>
        Height: <input type="text" name="height" value="{{ $patient->height }}"><br>
        Diet Plan: <textarea name="diet_plan">{{ $patient->diet_plan }}</textarea><br>
        Next Appointment: <input type="date" name="next_appointment" value="{{ $patient->next_appointment }}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
