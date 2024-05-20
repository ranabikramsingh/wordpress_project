<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Rana Website</h1><span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.html#hero" class="">Home</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="index.html#services">Services</a></li>
                <li><a href="index.html#portfolio">Portfolio</a></li>
                <li><a href="index.html#pricing">Pricing</a></li>
                <li><a href="index.html#team">Team</a></li>
                <li><a href="<?php echo esc_url(home_url('/blog.php')); ?>">Blog</a></li>
                <!-- also can use -->
                <!-- <li><a href="<?php //echo get_template_directory_uri(); ?>/blog.php">Blog</a></li> -->
                <li><a href="index.html#contact">Contact</a></li>
                <!-- Call dynamically menu bar -->
                <i>
                    <?php
                    wp_nav_menu(array('theme_location' => 'navigation-menu', 'menu_class' => 'nav_2'))
                    ?>
                </i>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
</header>