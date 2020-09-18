<header id="masthead" class="site-header main-header">
    <div class="container">

    <div class="row align-items-center">
        <div class="col-12 col-md-4">
            <div class="site-branding">
                <?php the_custom_logo(); ?>
            </div><!-- .site-branding -->
        </div>
        <div class="col-12 col-md-8">
            <div class="menuwrapper">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="primaryaction"><i class="fa fa-user"></i></a>
                <a href="<?php echo wc_get_cart_url(); ?>" class="primaryaction"><span class="counter"><?php echo WC()->cart->get_cart_contents_count() ?></span><i class="fa fa-shopping-cart"></i></a>
                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </div>
    </div>
    </div> <!-- .container -->
</header><!-- #masthead -->