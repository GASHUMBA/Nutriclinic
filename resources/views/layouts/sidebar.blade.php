<!-- Sidebar Menu -->
<aside class="w-64 bg-white shadow-md min-h-screen">
    <div class="p-4 text-center border-b">
        <h2 class="text-lg font-bold text-gray-800">NutriClinic</h2>
    </div>

    <nav class="p-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            🏠 Dashboard
        </a>
        <a href="{{ route('appointments.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            📅 Appointments
        </a>
        <a href="{{ route('mealplans.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            🥗 Meal Plans
        </a>
        <a href="{{ route('users.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            👥 Users
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-red-200 rounded">
                🚪 Logout
            </button>
        </form>
    </nav>
</aside>
