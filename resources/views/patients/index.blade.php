@extends('layouts.app')

@section('title', 'Patients')
@section('header', 'Patients')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <form method="GET" action="{{ route('patients.index') }}" class="w-full max-w-sm">
            <input
                type="text"
                name="q"
                value="{{ request('q') }}"
                placeholder="Search patients…"
                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-blue-500 focus:ring-blue-500"
            />
        </form>

        <a href="{{ route('patients.create') }}"
           class="ml-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            + New Patient
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-md bg-green-50 p-3 text-green-700 dark:bg-green-900/30 dark:text-green-300">
            {{ session('success') }}
        </div>
    @endif

    @if($patients->count())
        <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700/50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">#</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">Phone</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">DOB</th>
                        <th class="px-4 py-3 text-right text-xs font-medium uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($patients as $patient)
                        <tr>
                            <td class="px-4 py-3">{{ $loop->iteration + ($patients->currentPage()-1)*$patients->perPage() }}</td>
                            <td class="px-4 py-3 font-medium">{{ $patient->name }}</td>
                            <td class="px-4 py-3">{{ $patient->email }}</td>
                            <td class="px-4 py-3">{{ $patient->phone }}</td>
                            <td class="px-4 py-3">{{ optional($patient->dob)->format('Y-m-d') }}</td>
                            <td class="px-4 py-3 text-right space-x-2">
                                <a href="{{ route('patients.show', $patient) }}" class="text-blue-600 hover:underline">View</a>
                                <a href="{{ route('patients.edit', $patient) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline"
                                            onclick="return confirm('Delete this patient?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $patients->links() }}
        </div>
    @else
        <p class="text-gray-600 dark:text-gray-300">No patients found.</p>
    @endif
</div>
@endsection
