<?php $__env->startSection('content'); ?>
    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">

    <div class="text-center mb-4">
        <h1>Welcome to NutriClinic</h1>
        <p>Your health, our priority.</p>
    </div>

    <div class="text-center mb-4">
        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Login</a>
        <a href="<?php echo e(route('register')); ?>" class="btn btn-secondary">Register</a>
    </div>

    <div class="text-center">
        <p>Already have an account? <a href="<?php echo e(route('login')); ?>">Login here</a></p>
        <p>New to NutriClinic? <a href="<?php echo e(route('register')); ?>">Create an account</a></p>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e(__('You are logged in!')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\GYM\Desktop\NutriClinic\resources\views/welcome.blade.php ENDPATH**/ ?>