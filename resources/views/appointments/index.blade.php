@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Appointments</h1>
    <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Add Appointment</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->user->name ?? 'N/A' }}</td>
                <td>{{ $appointment->appointment_time }}</td>
                <td>{{ $appointment->status }}</td>
                <td>
                    <a href="{{ route('appointments.show', $appointment) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('content')
    <!-- your page content here -->
@endsection 
