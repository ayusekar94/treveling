

<?php $__env->startSection('admin'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">    
<div class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">About</h1>
</div>
<?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
<div class="col-lg-8">
  <form method="post" action="/about/<?php echo e($sejarah->id); ?>">
    <?php echo method_field('patch'); ?>
    <?php echo csrf_field(); ?>
    
    <div class="mb-3">
      <h4>title</h4>
      <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" required autofocus
          value="<?php echo e(old('name',$sejarah->title)); ?>">
      <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback">
            <?php echo e($message); ?>

        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
    </div>
    <div class="mb-3">
      <h4>description</h4>
      <input type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description" name="description" required autofocus
          value="<?php echo e(old('name',$sejarah->description)); ?>">
      <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback">
            <?php echo e($message); ?>

        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashbord.layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/dashbord/about/index.blade.php ENDPATH**/ ?>