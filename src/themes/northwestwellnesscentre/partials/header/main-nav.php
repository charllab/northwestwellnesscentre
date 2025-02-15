<header id="header" class="hero-nav-overlay">

    <div class="header-box">
        <div class="container py-1 py-xxl-0">
            <div class="row justify-content-between align-items-center h-100">
                <div class="col-10 col-sm-6">
                    <div class="nav-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                                 alt="<?php bloginfo('name'); ?> - Logo"
                                 class="img-fluid">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-5 col-md-6 col-lg-3 d-none d-sm-block text-right">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                        Book An Appointment
                    </a>
                </div>
                <div class="col-2 col-sm-1 px-0 d-md-none text-right text-sm-center">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".mainnav-m" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="sproing-navbar-nav header-bar bg-quaternary d-none d-md-block">
        <nav class="navbar navbar-expand-md navbar-dark py-0">
            <div class="container px-0">
                <div class="row d-none d-md-block w-100 no-gutters">
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'mainnav',
                        'menu_class' => 'navbar-nav w-100 d-flex justify-content-center',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="sproing-navbar-navmob mainnav-m collapse navbar-collapse bg-quaternary">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container',
            'container_id' => 'mainnav',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => '',
            'menu_id' => 'main-menu-mobile',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>
    </div>

</header>