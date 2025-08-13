@extends('layouts.app')

@section('content')

    <div class="text-center mb-4">
        <h1>Welcome to NutriClinic</h1>
        <p>Your health, our priority.</p>
    </div>

    <div class="text-center mb-4">
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
    </div>

    <div class="text-center">
        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        <p>New to NutriClinic? <a href="{{ route('register') }}">Create an account</a></p>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
