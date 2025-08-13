<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title', config('app.name', 'Nutrition Clinic'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|nunito:400,600,700&display=swap" rel="stylesheet" />
@vite(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js'])
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6', // blue-500
                        secondary: '#f59e0b', // yellow-500
                        accent: '#10b981', // green-500
                    },
                },
            },
        };
    </script>   
</head>
<body class="font-sans bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

        <!-- Top Navigation -->
        @include('layouts.navigation')

        <!-- Page Header -->
        @hasSection('header')
            <header class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-semibold leading-tight text-gray-900 dark:text-gray-100">
                        @yield('header')
                    </h1>
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="flex-grow max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>

</body>
</html>
