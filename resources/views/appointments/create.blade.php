@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Appointment</h2>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Date & Time</label>
            <input type="datetime-local" name="appointment_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
            </select>
        </div>
        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection
@section('content')
    <!-- your page content here -->
@endsection