<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Nutrition Clinic')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- If you use CSS -->
</head>
<body>
    <header>
        <h1>Nutrition Clinic</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('patients.index') }}">Patients</a>
            <!-- add more links here -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Nutrition Clinic</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- If you use JS -->
</body>
</html>
