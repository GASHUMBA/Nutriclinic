<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <title><?php echo $__env->yieldContent('title', config('app.name', 'Nutrition Clinic')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|nunito:400,600,700&display=swap" rel="stylesheet" />
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/custom.css', 'resources/js/app.js']); ?>
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
    <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

        <!-- Top Navigation -->
        <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Page Header -->
        <?php if (! empty(trim($__env->yieldContent('header')))): ?>
            <header class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-semibold leading-tight text-gray-900 dark:text-gray-100">
                        <?php echo $__env->yieldContent('header'); ?>
                    </h1>
                </div>
            </header>
        <?php endif; ?>

        <!-- Page Content -->
        <main class="flex-grow max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

</body>
</html>
<?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/layouts/app.blade.php ENDPATH**/ ?>