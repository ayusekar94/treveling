

<?php $__env->startSection('tampilan'); ?>
    <!-- hero start -->
    <div class="hero" id="one">
        <section id="home" class="bg-patern">
            <div class="container">
                <div class="caption">
                    <h1><?php echo e($nama); ?></h1>
                    <p><?php echo e($p1); ?></p>
                    <button>Explore</button>
                </div>
                <div class="hero-bg">
                    <img class="hero-guy-1" src="<?php echo e(asset('img/paperpilar/hero-guy-1.png')); ?>" alt="IMg">
                    <img class="hero-guy-1-lg" src="<?php echo e(asset('img/paperpilar/hero-guy-1-lg.png')); ?>" alt="IMg">
                </div>
            </div>
        </section>
    </div>
    <!-- hero end -->

    <!-- home partner start -->
    <section id="tentang" class="containerTitleHome">
        <div class="container">
            <h1 class="titleHome">Sejarah Jatim Park Group</h1>
        </div>
    </section>
    <section class="uploadEvent" id="uploadEvent">
        <div class="container">
            <div class="caption">
                <p><?php echo e($sejarah); ?></p>
            </div>
            <img src="<?php echo e(asset('img/jtp.jpeg')); ?>" alt="Upload Event Img">
        </div>
    </section>
    <!-- home partner end -->

    <!-- tiket start-->
    <section class="containerTitleHome" id="jadwal">
        <div class="container">
            <h1 class="titleHome">Jadwal JaPar Group</h1>
        </div>
    </section>
    <section class="testimoni" id="jadwal">
        <div class="container">
            <div class="perTestimoni">
                <img src="<?php echo e(asset('img/jp1.jpeg')); ?>" alt="Gambar">
                <h2>Jatim Park 1</h2>
                <span>Jatim Park 1 berlokasi di Jalan Kartika No 2, Desa Sisir, Kota Batu.</span>
                <p>Tiket Masuk :</p>
                <p>Buka setiap hari pukul 08:30–16:30</p>
                <P>Weekdays     : Rp75.000/orang</P>
                <P>Weekend      : Rp120.000/orang</P>
                <p>Museum Tubuh : Rp50.000/orang</p>
            </div>
            <div class="perTestimoni">
                <img src="<?php echo e(asset('img/jp2.jpg')); ?>" alt="Orang">
                <h2>Jatim Park 2</h2>
                <span>Jatim Park 2 berlokasi di Jalan Oro-oro No 9, Kota Batu</span>
                <p>Tiket Masuk :</p>
                <p>Buka setiap hari pukul 10:30–17:00</p>
                <P>Weekdays     : Rp90.000/orang</P>
                <P>Weekend      : Rp120.000/orang</P>
            </div>
            <div class="perTestimoni">
                <img src="<?php echo e(asset('img/jp3.jpg')); ?>" alt="Orang">
                <h2>Jatim Park 3</h2>
                <span>Jatim Park 3 berlokasi di Jalan Ir Soekarno, Desa Beji, Kota Batu</span>
                <p>Tiket Masuk :</p>
                <p>Buka setiap hari pukul 11:00–19:00</p>
                <P>Dino Park       : Rp100.000/orang</P>
                <P>Galeri Musik    : Rp50.000/orang</P>
                <P>infinite World  : Rp30.000/orang</P>
                <P>Ice Cream World : Rp35.000/orang</P>
                <P>Jurassic Action : Rp25.000/orang</P>
            </div>
        </div>
    </section>
    <!-- tiket end-->

    <!--Picture-->
    <div id="picture" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Picture JaPar Group</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>Show All</span></a>
                        <a class="button" data-filter=".jatimpark1"><span>Jatim Park 1</span></a>
                        <a class="button" data-filter=".jatimpark2"><span>Jatim Park 2</span></a>
                        <a class="button" data-filter=".jatimpark3"><span>Jatim Park 3</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item jatimpark2">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp1a.jpeg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark2">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp1b.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp1c.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp2a.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3a.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3b.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3b.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3b.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3b.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3b.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3b.jpg')); ?>" alt="alternative"></a>
                        </div>
                        <div class="element-item jatimpark1 jatimpark2 jatimpark3">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"></div><img src="<?php echo e(asset('img/jp3b.jpg')); ?>" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!--Picture end-->

    <!-- join start -->
    <section class="join" id="join">
        <div class="container">
            <img src="img/Join.webp" alt="join img">
            <h1>Liburan Kuy New Normal Protocol</h1>
        </div>
    </section>
    <!-- join end -->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/home.blade.php ENDPATH**/ ?>