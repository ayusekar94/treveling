<nav>
    <ul>
        <li class="navbar-item">
            <a class="nav-link <?php echo e(($title === "Home") ? 'active' : ''); ?>" href="/">Home</a>
        </li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#jadwal">Jadwal</a></li>
        <li><a href="#picture">Picture</a></li>

        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, <?php echo e(auth()->user()->name); ?>

            </a>
            <li><a class="dropdown-item" href="/admin">Dashboard</a></li>
            <li><form action="/logout" method="post">
                <?php echo csrf_field(); ?>
                <button type='submit' class="dropdown-item">Logout</button></form>
            </li>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "Login") ? 'active' : ''); ?>" href="/login">Login</a>
        </li>
        <?php endif; ?>
    </ul>
</nav><?php /**PATH C:\xampp2\htdocs\Travelling\resources\views/partials/navbar.blade.php ENDPATH**/ ?>