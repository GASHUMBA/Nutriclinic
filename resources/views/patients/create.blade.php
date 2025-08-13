@extends('layouts.app')

@section('title', 'Add New Patient')

@section('header')
    Add New Patient
@endsection

@section('content')
<div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
    
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('patients.index') }}" 
           class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md hover:bg-gray-300 dark:hover:bg-gray-600 transition">
            ← Back to Patients
        </a>
    </div>

    <!-- Form -->
    <form action="{{ route('patients.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Full Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                required>
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Date of Birth -->
        <div>
            <label for="dob" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date of Birth</label>
            <input type="date" name="dob" id="dob" value="{{ old('dob') }}"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            @error('dob') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Gender -->
        <div>
            <label for="gender" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gender</label>
            <select name="gender" id="gender"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                <option value="">Select Gender</option>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('gender') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Address -->
        <div>
            <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
            <textarea name="address" id="address" rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">{{ old('address') }}</textarea>
            @error('address') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none 
                       focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                Save Patient
            </button>
        </div>
    </form>
</div>
@endsection
