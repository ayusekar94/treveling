

<?php $__env->startSection('admin'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Picture</h1>
        </div>
        <div class="table-responsive">
            <a href="/photo/create" class="btn btn-primary mb-3">Tambah Picture Baru</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                  <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($photo->nama); ?></td>
                    <td>
                        <a href="<?php echo e(route('photo.edit',$photo->id)); ?>" class="badge bg-info"><span data-feather="edit"></span></a>
                        
                        <form action="<?php echo e(route('photo.destroy',$photo->id)); ?>" method="POST" class="d-inline">
                          <?php echo method_field('DELETE'); ?>
                          <?php echo csrf_field(); ?>
                          <button class="badge bg-danger border-0" onclick="return confirm('apakah anda yakin ?')"><span data-feather="x"></span></button>
                        </form>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashbord.layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/dashbord/gambar/indexPost.blade.php ENDPATH**/ ?>