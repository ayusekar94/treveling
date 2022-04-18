

<?php $__env->startSection('admin'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Hallo, <?php echo e(auth()->user()->name); ?></h1>
        </div>

        
        
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/admin.blade.php ENDPATH**/ ?>