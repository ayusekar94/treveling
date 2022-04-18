

<?php $__env->startSection('tampilan'); ?>
    <!-- Login Start -->
    <section class="containerLogin">
        <div class="container">

            <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="login">
                <h2>Login</h2>

                <form action="/login" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="username">Username <span>*</span> </label>

                        <div class="form-control">
                            <input type="username" id="username" name="username" autofocus required>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="password">Password <span>*</span> </label>

                        <div class="form-control">
                            <input type="password" id="password" name="password" required>
                        </div>

                    </div>


                    <div class="form-info">
                        <a href="register.html">Lupa Password?</a>
                    </div>

                    <button type="submit" class="masuk">Login</button>

                </form>

                <p class="BelumPunyaAkun">Belum punya akun? <a href="/register">Register</a></p>


            </div>
        </div>
    </section>
    <!-- Login End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/login.blade.php ENDPATH**/ ?>