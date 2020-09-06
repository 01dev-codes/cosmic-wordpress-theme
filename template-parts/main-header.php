<header id="masthead" class="site-header main-header">
    <div class="container">

    <div class="row align-items-center">
        <div class="col-8 col-md-4">
            <div class="site-branding">
                <?php the_custom_logo(); ?>
            </div><!-- .site-branding -->
        </div>
        <div class="col-4 col-md-8">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
                <a href="#" class="primaryaction"><i class="fa fa-user"></i></a>
                <a href="#" class="primaryaction"><span class="counter">0</span><i class="fa fa-shopping-cart"></i></a>
            </nav><!-- #site-navigation -->
        </div>
        <div class="col-12">
        </div>
    </div>
    </div> <!-- .container -->
</header><!-- #masthead -->