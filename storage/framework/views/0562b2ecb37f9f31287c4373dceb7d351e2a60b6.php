

<?php $__env->startSection('tampilan'); ?>
    <!-- Login Start -->
    <section class="containerLogin">
        <div class="container">

            <div class="login">
                <h2>Form Register</h2>

                <form action="/register" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama<span>*</span> </label>

                        <div class="form-control">
                            <input type="nama" id="nama" name="name" autofocus>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="username">Username<span>*</span> </label>

                        <div class="form-control">
                            <input type="username" id="username" name="username">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="email">Email <span>*</span> </label>

                        <div class="form-control">
                            <input type="email" id="email" name="email">
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="password">Password <span>*</span> </label>

                        <div class="form-control">
                            <input type="password" id="password" name="password">
                        </div>

                    </div>


                    <div class="form-info">
                        <a href="register.html">Lupa Password?</a>
                    </div>

                    <button type="submit" class="masuk">Register</button>

                </form>

                <p class="BelumPunyaAkun">Sudah punya akun? <a href="/login">Login</a></p>


            </div>
        </div>
    </section>
    <!-- Login End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/register.blade.php ENDPATH**/ ?>