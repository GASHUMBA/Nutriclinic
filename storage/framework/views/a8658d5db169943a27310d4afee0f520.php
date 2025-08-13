<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Create Appointment</h2>
    <form action="<?php echo e(route('appointments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Date & Time</label>
            <input type="datetime-local" name="appointment_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
            </select>
        </div>
        <button class="btn btn-success">Create</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- your page content here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/appointments/create.blade.php ENDPATH**/ ?>