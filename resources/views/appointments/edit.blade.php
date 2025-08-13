@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Appointment</h2>
    <form action="{{ route('appointments.update', $appointment) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Date & Time</label>
            <input type="datetime-local" name="appointment_time" class="form-control" value="{{ $appointment->appointment_time }}" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $appointment->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $appointment->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            </select>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
@section('content')
    <!-- your page content here -->
@endsection
