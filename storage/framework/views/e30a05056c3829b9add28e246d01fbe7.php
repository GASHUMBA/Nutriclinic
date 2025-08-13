<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - NutriClinic</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">

        <!-- Logo -->
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="NutriClinic Logo" class="mx-auto w-32 h-auto mb-6">

        <h1 class="text-2xl font-bold mb-4">Welcome to NutriClinic</h1>
        <p class="mb-6 text-gray-600">Your trusted Clinic Management System</p>

        <!-- Action Buttons -->
        <div class="space-y-4">
            <a href="<?php echo e(route('login')); ?>"
               class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
               Login
            </a>

            <a href="<?php echo e(route('register')); ?>"
               class="block w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
               Create New User
            </a>

            <a href="<?php echo e(route('password.request')); ?>"
               class="block text-blue-500 hover:underline mt-2">
               Forgot Password?
            </a>
        </div>

    </div>

</body>
</html>
<?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/home.blade.php ENDPATH**/ ?>