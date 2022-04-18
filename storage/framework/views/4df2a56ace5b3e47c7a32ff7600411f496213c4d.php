

<?php $__env->startSection('admin'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Post</h1>
        </div>
        <div class="table-responsive">
            <a href="/posts/create" class="btn btn-primary mb-3">Tambah Menu Baru</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Title</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                  <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->description); ?></td>
                    <td>
                        <a href="" class="badge bg-info"><span data-feather="edit"></span></a>
                        <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/indexPost.blade.php ENDPATH**/ ?>