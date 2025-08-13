<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Appointments</h1>
    <a href="<?php echo e(route('appointments.create')); ?>" class="btn btn-primary mb-3">Add Appointment</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($appointment->id); ?></td>
                <td><?php echo e($appointment->user->name ?? 'N/A'); ?></td>
                <td><?php echo e($appointment->appointment_time); ?></td>
                <td><?php echo e($appointment->status); ?></td>
                <td>
                    <a href="<?php echo e(route('appointments.show', $appointment)); ?>" class="btn btn-sm btn-info">View</a>
                    <a href="<?php echo e(route('appointments.edit', $appointment)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('appointments.destroy', $appointment)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onclick="return confirm('Delete this?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- your page content here -->
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/appointments/index.blade.php ENDPATH**/ ?>