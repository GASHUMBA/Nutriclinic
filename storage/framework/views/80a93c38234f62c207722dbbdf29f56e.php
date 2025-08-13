

<?php $__env->startSection('title', 'Add New Patient'); ?>

<?php $__env->startSection('header'); ?>
    Add New Patient
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
    
    <!-- Back Button -->
    <div class="mb-6">
        <a href="<?php echo e(route('patients.index')); ?>" 
           class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md hover:bg-gray-300 dark:hover:bg-gray-600 transition">
            ← Back to Patients
        </a>
    </div>

    <!-- Form -->
    <form action="<?php echo e(route('patients.store')); ?>" method="POST" class="space-y-6">
        <?php echo csrf_field(); ?>

        <!-- Full Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
            <input type="text" name="phone" id="phone" value="<?php echo e(old('phone')); ?>"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Date of Birth -->
        <div>
            <label for="dob" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date of Birth</label>
            <input type="date" name="dob" id="dob" value="<?php echo e(old('dob')); ?>"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Gender -->
        <div>
            <label for="gender" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gender</label>
            <select name="gender" id="gender"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                <option value="">Select Gender</option>
                <option value="Male" <?php echo e(old('gender') == 'Male' ? 'selected' : ''); ?>>Male</option>
                <option value="Female" <?php echo e(old('gender') == 'Female' ? 'selected' : ''); ?>>Female</option>
                <option value="Other" <?php echo e(old('gender') == 'Other' ? 'selected' : ''); ?>>Other</option>
            </select>
            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Address -->
        <div>
            <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
            <textarea name="address" id="address" rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm 
                       focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"><?php echo e(old('address')); ?></textarea>
            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/patients/create.blade.php ENDPATH**/ ?>