<!-- Sidebar Menu -->
<aside class="w-64 bg-white shadow-md min-h-screen">
    <div class="p-4 text-center border-b">
        <h2 class="text-lg font-bold text-gray-800">NutriClinic</h2>
    </div>

    <nav class="p-4 space-y-2">
        <a href="<?php echo e(route('dashboard')); ?>" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            🏠 Dashboard
        </a>
        <a href="<?php echo e(route('appointments.index')); ?>" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            📅 Appointments
        </a>
        <a href="<?php echo e(route('mealplans.index')); ?>" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            🥗 Meal Plans
        </a>
        <a href="<?php echo e(route('users.index')); ?>" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
            👥 Users
        </a>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-red-200 rounded">
                🚪 Logout
            </button>
        </form>
    </nav>
</aside>
<?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>