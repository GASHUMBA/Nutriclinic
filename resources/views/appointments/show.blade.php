@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Appointment Details</h2>
    <p><strong>ID:</strong> {{ $appointment->id }}</p>
    <p><strong>User:</strong> {{ $appointment->user->name ?? 'N/A' }}</p>
    <p><strong>Time:</strong> {{ $appointment->appointment_time }}</p>
    <p><strong>Status:</strong> {{ $appointment->status }}</p>
    <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
@extends('layouts.app')
@section('content')
    <!-- your page content here -->
@endsection
