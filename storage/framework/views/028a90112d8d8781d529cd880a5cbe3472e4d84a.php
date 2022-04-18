<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="JaPar Group">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JaPar Group | <?php echo e($title); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>">
    <script src="<?php echo e(asset('fontawesome/js/all.min.js')); ?>"></script>
</head>

<body>
    <!-- header start -->
    <header>
        <div class="container">

            <a href=" "><p style="color: beige">JaPar</p><p style="color: rgb(221, 132, 29)">Group</p></a> 

            <?php echo $__env->make('frontend.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

        </div>
    </header>
    <!-- header end -->

    <?php echo $__env->yieldContent('tampilan'); ?>

    <!-- footer start -->
    <section class="footer" id="footer">
    <div class="container">
        <div class="box">
            <h2>About Us</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum nisi dolorem reprehenderit? Eos quas
                perferendis velit porro nemo tempora ab!
            </p>
            <div class="sosmed">
                <div class="perSosmed">
                    <i class="fab fa-instagram"></i>
                </div>


                <div class="perSosmed">
                    <i class="fab fa-youtube"></i>
                </div>

                <div class="perSosmed">
                    <i class="fab fa-linkedin-in"></i>
                </div>

                <div class="perSosmed">
                    <i class="fab fa-github"></i>
                </div>

            </div>
        </div>
        <div class="box">
            <h2>Discound</h2>
            <a href="">Paket Spacial</a>
            <a href="">Paket Keluarga</a>
            <a href="">Paket Terusan</a>
            <a href="">Paket Pelajar</a>
        </div>
        <div class="box">
            <h2>Quick Link</h2>
            <a href="#home">Home</a>
            <a href="">Login</a>
            <a href="">Tentang</a>
            <a href="">Jadwal</a>
            <a href="">Picture</a>
        </div>

    </div>
</section>
<!-- footer end -->
    <footer>
        <div class="container">
            JaPar Group &copy; 2022 | Website Travelling.
        </div>
    </footer>

    <a href="#one" id="scroll-top">
        <img src="img/scroll-img.png" alt="scroll">
    </a>

    <script src="js/script.js"></script>
</body>
</html><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/frontend/layouts/main.blade.php ENDPATH**/ ?>