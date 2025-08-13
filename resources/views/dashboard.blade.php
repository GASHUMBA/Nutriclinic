
@extends('layouts.app')
@section('title', 'NUTRICLINIC')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-blue-200 leading-tight">
    {{ __('DASHBOARD') }}
</h2>
@endsection
@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">

    <!-- Welcome Card -->
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-green-100">
            Welcome back, {{ Auth::user()->name }}!
        </h2>
        <p class="text-gray-600 dark:text-gray-300 mt-2">Here’s a summary of your clinic activities.</p>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-green-50 dark:bg-green-900 rounded-lg p-6 shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-green-800 dark:text-green-300 mb-2">Appointments</h3>
            <p class="text-green-700 dark:text-green-400">You have <span class="font-bold">5</span> upcoming appointments.</p>
        </div>

        <div class="bg-blue-50 dark:bg-blue-900 rounded-lg p-6 shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-300 mb-2">Patients</h3>
            <p class="text-blue-700 dark:text-blue-400">
                Managing <span class="font-bold">{{ $patients->count() }}</span> active patients.
            </p>
        </div>

        <div class="bg-yellow-50 dark:bg-yellow-900 rounded-lg p-6 shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-yellow-800 dark:text-yellow-300 mb-2">Messages</h3>
            <p class="text-yellow-700 dark:text-yellow-400">You have <span class="font-bold">2</span> new messages.</p>
        </div>
    </div>

    <!-- Navigation Links -->
    <nav class="bg-gray-100 dark:bg-gray-700 rounded-lg p-4 mb-8 shadow">
        <ul class="flex flex-wrap gap-4">
            <li><a href="{{ route('dashboard') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Dashboard</a></li>
            <li><a href="{{ route('patients.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Manage Patients</a></li>
            <li><a href="{{ route('patients.create') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Add Patient</a></li>
            <!-- Add more links here -->
        </ul>
    </nav>

    <!-- Patients Table -->
    <section class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Patients List</h3>
            <a href="{{ route('patients.create') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow transition">
               + Add Patient
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto bg-white dark:bg-gray-700 rounded-lg shadow">
                <thead class="bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Phone</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                    @forelse ($patients as $patient)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <td class="py-4 px-6">{{ $patient->name }}</td>
                        <td class="py-4 px-6">{{ $patient->email }}</td>
                        <td class="py-4 px-6">{{ $patient->phone }}</td>
                        <td class="py-4 px-6 text-center space-x-2">
                            <a href="{{ route('patients.show', $patient) }}" class="text-blue-600 hover:text-blue-800 font-semibold">View</a>
                            <a href="{{ route('patients.edit', $patient) }}" class="text-yellow-600 hover:text-yellow-800 font-semibold">Edit</a>
                            <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-500 dark:text-gray-400">No patients found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

</div>
@endsection

@section('footer')
<footer class="bg-white dark:bg-gray-800 text-center py-4 mt-8 shadow-inner">
    <p class="text-sm text-gray-600 dark:text-gray-400">&copy; {{ date('Y') }} NutriClinic. All rights reserved.</p>
</footer>
@endsection
