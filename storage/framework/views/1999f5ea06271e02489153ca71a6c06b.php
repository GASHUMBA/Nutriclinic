<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
</head>
<body>
    <h1>Edit Patient</h1>
    <form action="<?php echo e(route('patients.update', $patient)); ?>" method="POST">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        

<?php $__env->startSection('content'); ?>
    <h1>Patients</h1>

    <?php if(count($patients) > 0): ?>
        <ul>
        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($patient->name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No patients found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

        Name: <input type="text" name="name" value="<?php echo e($patient->name); ?>"><br>
        Email: <input type="email" name="email" value="<?php echo e($patient->email); ?>"><br>
        Age: <input type="number" name="age" value="<?php echo e($patient->age); ?>"><br>
        Weight: <input type="text" name="weight" value="<?php echo e($patient->weight); ?>"><br>
        Height: <input type="text" name="height" value="<?php echo e($patient->height); ?>"><br>
        Diet Plan: <textarea name="diet_plan"><?php echo e($patient->diet_plan); ?></textarea><br>
        Next Appointment: <input type="date" name="next_appointment" value="<?php echo e($patient->next_appointment); ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/patients/edit.blade.php ENDPATH**/ ?>